<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class PersonController extends Controller
{
    public function searchByNumberType(Request $request)
    {
        $document_type = $request->input('document_type');
        $number = $request->input('number');

        $msg1 = '';
        $msg2 = '';
        $status = true;
        $person = [];
        $alert = 'No existen datos para la busqueda';

        if ($document_type == '') {
            $msg1 = 'Elija Tipo docuemnto';
        }
        if (!$number) {
            $msg2 = 'Ingrese numero de documento';
        }

        $person = Person::leftJoin('districts', 'ubigeo', 'districts.id')
            ->leftJoin('provinces', 'districts.province_id', 'provinces.id')
            ->leftJoin('departments', 'provinces.department_id', 'departments.id')
            ->select(
                'people.*',
                DB::raw('CONCAT(departments.name,"-",provinces.name,"-",districts.name) AS city')
            )
            ->where('people.document_type_id', $document_type)
            ->where('people.number', $number)
            ->first();

        if ($person) {
            $status = true;
            $alert = null;
        } else {
            $status = false;
            $alert = 'No existen datos para la busqueda';
        }

        return response()->json([
            'status'        => $status,
            'person'        => $person,
            'document_type' => $msg1,
            'number'        => $msg2,
            'alert'         => $alert
        ]);
    }

    public function saveUpdateOrCreate(Request $request)
    {
        $this->validate($request, [
            'document_type' => 'required',
            'number' => 'required',
            'full_name' => 'required|max:255',
            'address'   => 'required|max:255',
            'ubigeo'   => 'required'
        ]);

        $person = Person::updateOrCreate(
            [
                'document_type_id' => $request->input('document_type'),
                'number' => $request->input('number')
            ], // Buscamos a la persona 
            [
                'full_name' => $request->input('full_name'),
                'telephone' => $request->input('telephone'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'is_client' => $request->input('is_client') ? true : false,
                'is_provider' => $request->input('is_provider') ? true : false,
                'ubigeo' => $request->input('ubigeo')
                // otros campos que quieras actualizar o crear
            ]
        );

        $person->load('district.province.department');
        // Obtener el nombre de la ciudad usando los datos relacionados
        $city = $person->district->province->department->name . "-" . $person->district->province->name . "-" . $person->district->name;
        $person->city = $city;

        return response()->json($person);
    }

    public function searchByNameOrNumber(Request $request)
    {
        $search = $request->input('search');
        $status = true;
        $persons = [];
        $alert = 'No existen datos para la busqueda';

        $persons = Person::where('number', $search)
            ->orWhere('full_name', 'like', '%' . $search . '%')
            ->orWhere('short_name', 'like', '%Clientes Varios%')
            ->orderBy('id')
            ->get();
        if (count($persons) > 0) {
            $status = true;
            $alert = null;
        } else {
            $status = false;
            $alert = 'No existen datos para la busqueda';
        }

        return response()->json([
            'status'        => $status,
            'persons'        => $persons,
            'alert'         => $alert
        ]);
    }

    public function updateInformationPerson(Request $request)
    {
        //dd($request->get('birthdate'));
        $person_id = $request->get('id');
        $student_id = $request->get('student_id');
        $user = User::where('person_id', $person_id)->first();

        $this->validate(

            $request,
            [
                'document_type_id'  => 'required',
                'number'            => 'required|max:12',
                'number'            => 'unique:people,number,' . $person_id . ',id,document_type_id,' . $request->get('document_type_id'),
                'telephone'         => 'required|max:12',
                'email'             => 'required|max:255',
                'email'             => 'unique:people,email,' . $person_id . ',id',
                'email'             => 'unique:users,email,' . $user->id . ',id',
                'address'           => 'required|max:255',
                'ubigeo'            => 'required|max:255',
                'birthdate'         => 'required|',
                'names'             => 'required|max:255',
                'father_lastname'   => 'required|max:255',
                'mother_lastname'   => 'required|max:255',
            ]
        );

        $path = null;
        $destination = 'uploads/students';
        $base64Image = $request->get('image');
        if ($base64Image) {
            $fileData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64Image));
            if (PHP_OS == 'WINNT') {
                $tempFile = tempnam(sys_get_temp_dir(), 'img');
            } else {
                $tempFile = tempnam('/var/www/html/img_temp', 'img');
            }
            file_put_contents($tempFile, $fileData);
            $mime = mime_content_type($tempFile);

            $name = uniqid('', true) . '.' . str_replace('image/', '', $mime);
            $file = new UploadedFile(realpath($tempFile), $name, $mime, null, true);

            $path = null;
            if ($file) {
                // $original_name = strtolower(trim($file->getClientOriginalName()));
                // $file_name = time() . rand(100, 999) . $original_name;
                $original_name = strtolower(trim($file->getClientOriginalName()));
                $original_name = str_replace(" ", "_", $original_name);
                $extension = $file->getClientOriginalExtension();
                $file_name = trim($request->get('number')) . '.' . $extension;
                $path = Storage::disk('public')->putFileAs($destination, $file, $file_name);
            }
        }

        Person::find($person_id)->update([
            'document_type_id'      => $request->get('document_type_id'),
            'short_name'            => $request->get('names'),
            'full_name'             => $request->get('father_lastname') . ' ' .  $request->get('mother_lastname') . ' ' . $request->get('names'),
            'description'           => $request->get('description'),
            'number'                => $request->get('number'),
            'telephone'             => $request->get('telephone'),
            'email'                 => $request->get('email'),
            'image'                 => $path,
            'address'               => $request->get('address'),
            'is_provider'           => false,
            'is_client'             => true,
            'ubigeo'                => $request->get('ubigeo'),
            'birthdate'             => $request->get('birthdate'),
            'names'                 => $request->get('names'),
            'father_lastname'       => $request->get('father_lastname'),
            'mother_lastname'       => $request->get('mother_lastname')
        ]);

        $user->update([
            'name'          => $request->get('names'),
            'email'         => $request->get('email'),
            'password'      => Hash::make($request->get('password')),
            'information'   => $request->get('description'),
            'avatar'        => $path,
            'updated_information' => true
        ]);

        DB::table('aca_students')->where('id', $student_id)->update([
            'student_code'  => $request->get('number'),
        ]);

        return redirect()->route('aca_mycourses')
            ->with('updateMessageStudent', __('Informacion del estudiante actualizado con éxito'));
    }
}
