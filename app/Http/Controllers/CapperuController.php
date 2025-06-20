<?php

namespace App\Http\Controllers;

use App\Mail\StudentRegistrationMailable;
use Illuminate\Http\Request;
use Modules\Onlineshop\Entities\OnliItem;
use Illuminate\Support\Facades\Mail;
use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;
use Modules\Onlineshop\Entities\OnliSale;
use Modules\Onlineshop\Entities\OnliSaleDetail;
use App\Models\Person;
use Carbon\Carbon;
use Modules\Academic\Entities\AcaCapRegistration;
use Modules\Academic\Entities\AcaCourse;
use Modules\Academic\Entities\AcaStudent;
use Modules\Academic\Entities\AcaBrochure;
use Modules\Blog\Entities\BlogArticle;
use Modules\Blog\Entities\BlogCategory;
use Illuminate\Support\Facades\DB;
use Modules\CMS\Entities\CmsSection;
use App\Mail\ComplaintsBookMail;


class CapperuController extends Controller
{
    public function nosotros()
    {
        return view('capperu/nosotros');
    }

    public function politicascalidad()
    {
        return view('capperu/politicas-de-calidad');
    }

    public function politicasprivacidad()
    {
        return view('capperu/politicas-de-privacidad');
    }

    public function gestioncalidad()
    {
        return view('capperu/gestion-de-calidad');
    }

    public function claims()
    {
        $banner = CmsSection::where('component_id', 'banner_nosotros_6')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages/complaints-book', [
            'banner' => $banner
        ]);
    }

    public function eclaims()
    {

        return view('capperu/email/e_complaints_book');
    }

    public function categorias()
    {
        return view('capperu/categorias');
    }

    public function categoriasector($sector)
    {

        return view('capperu/categoria-sector', [
            'sector' => $sector
        ]);
    }

    public function categoriamodalidad()
    {
        return view('capperu/categoria-modalidad');
    }

    public function categoriamodalidadenvivo()
    {
        return view('capperu/categoria-modalidad-en-vivo');
    }

    public function categoriamodalidadelearning()
    {
        return view('capperu/categoria-modalidad-e-learning');
    }

    public function categoriaprogramacursos()
    {
        return view('capperu/categoria-programa-cursos');
    }

    public function categoriaprogramadiplomados()
    {
        return view('capperu/categoria-programa-diplomados');
    }

    public function modalidadpresencial()
    {
        return view('capperu/modalidad-presencial');
    }

    public function sector_programs($sector, $tipo) //cursos o diplomados
    {
        $programs = OnliItem::join('aca_courses', 'onli_items.item_id', '=', 'aca_courses.id')
            ->join('aca_teachers', 'aca_teachers.id', '=', 'aca_courses.teacher_id')
            ->join('people', 'people.id', '=', 'aca_teachers.person_id')
            ->join('users', 'users.person_id', '=', 'people.id')
            ->join('aca_category_courses', 'aca_category_courses.id', 'aca_courses.category_id')
            ->select(
                'onli_items.id as id',
                'onli_items.name as name',
                'onli_items.image as image',
                'onli_items.price as price',
                'onli_items.additional as additional',
                'onli_items.additional1 as additional1',
                'onli_items.additional2 as additional2',
                'people.names as teacher',
                'aca_teachers.id as teacher_id',
                'users.avatar as avatar',
                'onli_items.description as description',
                'aca_courses.id as course_id',
                'onli_items.category_description as category_description'
            )
            ->where('onli_items.status', true)->orderBy('onli_items.id', 'DESC')
            ->where('onli_items.additional', $tipo)     //Curso o Diplomado
            ->where('onli_items.additional2', $sector)->get();  //Sector publico , derecho ,etc

        return view('capperu/sector-cursos', [
            'programs' => $programs,
            'sector' => $sector,
        ]);
    }

    public function descripcionPrograma($id)
    {
        $item = OnliItem::find($id);

        $course = AcaCourse::with('category')
            ->with('modality')
            ->with('modules')
            ->with('teachers.teacher.person.resumes')
            ->with('brochure')
            ->with('agreements')
            ->where('id', $item->item_id)
            ->first();

        $whatsappAsesor = CmsSection::where('component_id', 'peru_whatsapp_asesora_area_13')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('capperu/descripcion-programa', [
            'course' => $course,
            'item' => $item,
            'whatsappAsesor' => $whatsappAsesor
        ]);
    }

    public function descripcionelearning()
    {
        return view('capperu/descripcion-e-learning');
    }


    public function perfildocente($teacher_id)
    {
        $teacher = Person::join('users', 'people.id', 'users.person_id')
            ->join('aca_teachers', 'aca_teachers.person_id', 'people.id')
            ->where('aca_teachers.id', $teacher_id)
            ->select('people.names as names', 'people.father_lastname as ApellidoP', 'people.presentacion as presentacion', 'users.avatar as avatar')
            ->first();

        $programs = OnliItem::join('aca_courses', 'onli_items.item_id', '=', 'aca_courses.id')
            ->join('aca_teachers', 'aca_teachers.id', '=', 'aca_courses.teacher_id')
            ->join('people', 'people.id', '=', 'aca_teachers.person_id')
            ->join('users', 'users.person_id', '=', 'people.id')
            ->join('aca_category_courses', 'aca_category_courses.id', 'aca_courses.category_id')
            ->select(
                'onli_items.id as id',
                'onli_items.name as name',
                'onli_items.image as image',
                'onli_items.price as price',
                'onli_items.additional as additional',
                'onli_items.additional1 as additional1',
                'onli_items.additional2 as additional2',
                'people.names as teacher',
                'aca_teachers.id as teacher_id',
                'users.avatar as avatar',
                'onli_items.description as description',
                'aca_category_courses.description as category_description'
            )
            ->where('onli_items.status', true)
            ->where('aca_teachers.id', $teacher_id)
            ->orderBy('onli_items.id', 'DESC')->get();

        return view('capperu/perfil-docente', [
            'programs'  => $programs,
            'teacher'   => $teacher
        ]);
    }


    public function alumnos(Request $request)
    {
        $search = trim($request->input('search'));
        if ($search != null) {
            $results = DB::table('people')
                        ->join('aca_students', 'aca_students.person_id', 'people.id')
                        ->select(DB::raw("CONCAT(people.names, ' ', people.father_lastname, ' ', people.mother_lastname) AS full_name"), 'aca_students.id')
                        ->where(DB::raw("CONCAT(people.names, ' ', people.father_lastname, ' ', people.mother_lastname)"), 'LIKE', '%' . $search . '%')
                        ->orWhere(DB::raw("CONCAT(people.father_lastname, ' ', people.mother_lastname, ' ', people.names)"), 'LIKE', '%' . $search . '%')
                        ->take(22) // Limitar a los 20 primeros resultados
                        ->get();
        } else {
            $results = [];
        }

        return view('capperu/alumnos', [
            'results' => $results
        ]);
    }


    public function perfilalumno($id)
    {

        $student = DB::table('aca_students')
                            ->join('people', 'people.id', 'aca_students.person_id')
                            ->leftJoin('aca_certificates', 'aca_certificates.student_id', 'aca_students.id')
                            ->leftJoin('aca_courses', 'aca_courses.id', 'aca_certificates.course_id')
                            ->where('aca_students.id', $id)
                            ->select('aca_students.id', 'people.full_name', 'aca_certificates.id as certificate_id', 'aca_courses.description as course',
                            DB::raw("CONCAT(people.names, ' ', people.father_lastname, ' ', people.mother_lastname) AS full_name2"),
                            // 'people.image as student_image', 'aca_certificates.course_id as course_id', 'aca_certificates.image as certificate_image')
                            'people.image as student_image', 'aca_certificates.course_id as course_id', 'aca_courses.image as course_image', 'aca_certificates.image as certificate_image',
                            'aca_certificates.content as link_pdf') //cambie el aca_certificates.image por aca_courses.image
                            ->get();

        return view('capperu/perfil-alumno', [
            'student' => $student
        ]);
    }

    public function carrito(Request $request)
    {
        return view('capperu/carrito');
    }

    public function pagar(Request $request)
    {
        $sale_id = $request->get('sale');
        $sale = OnliSale::find($sale_id);

        if (!$sale->response_payer) {
            MercadoPagoConfig::setAccessToken(env('MERCADOPAGO_TOKEN'));
            $client = new PreferenceClient();

            $mp_items = [];
            $preference_id = null;

            $cart_items = [];

            $sale_details = OnliSaleDetail::where('sale_id', $sale_id)->get();
            $total = 0;

            foreach ($sale_details as $k => $sale_detail) {
                $item = OnliItem::join('aca_courses', 'onli_items.item_id', '=', 'aca_courses.id')
                    ->leftJoin('aca_teachers', 'aca_teachers.id', '=', 'aca_courses.teacher_id')
                    ->join('people', 'people.id', '=', 'aca_teachers.person_id')
                    ->join('users', 'users.person_id', '=', 'people.id')
                    ->where('onli_items.id', $sale_detail->onli_item_id)
                    ->select(
                        'onli_items.*',
                        'people.names as teacher',
                        'aca_teachers.id as teacher_id',
                        'users.avatar as avatar',
                        'onli_items.description as description'
                    )
                    ->first();

                $mp_items[$k] = [
                    'id' => $item->id,
                    'title' => $item->name,
                    'description'   => $item->category_description . ' ' . $item->additional . ' ' . $item->additional1,
                    'picture_url'   => $item->image,
                    'category_id'   => $item->category_description,
                    'quantity'      => 1,
                    'currency_id'   => 'PEN',
                    'unit_price'    => floatval($item->price)
                ];

                $cart_items[$k] = [
                    'id'                        => $item->id,
                    'name'                      => $item->name,
                    'image'                     => $item->image,
                    'price'                     => $item->price,
                    'category_description'      => $item->category_description,
                    'additional'                => $item->additional,
                    'additional1'               => $item->additional1,
                    'teacher'                   => $item->teacher,
                    'teacher_id'                => $item->teacher_id,
                    'avatar'                    => $item->avatar,
                    'description'               => $item->description
                ];

                $total = $total + floatval($item->price);
            }

            $preference = $client->create([
                "items" => $mp_items,
                "back_urls" =>  array(
                    'success' => route('web_gracias', $sale_id),
                    // 'failure' => route('onlineshop_response_mercadopago'),
                    // 'pending' => route('onlineshop_response_mercadopago')
                )
            ]);

            $preference_id =  $preference->id;
            $sale->total = $total;

            $sale->save();

            return view('capperu/pagar', [
                'person_full_name'  => $sale->clie_full_name,
                'preference_id'     => $preference_id,
                'cart_items'        => $cart_items
            ]);
        } else {
            return view('capperu/pagar', [
                'person_full_name'  => $sale->clie_full_name,
                'preference_id'     => null,
                'cart_items'        => []
            ]);
        }
    }

    public function contacto()
    {
        $contacto = CmsSection::where('component_id', 'peru_contacto_area_12')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('capperu/contacto', [
            'contacto' => $contacto
        ]);
    }

    public function convenios()
    {
        return view('capperu/convenios');
    }

    public function blog()
    {
        $articles = BlogArticle::with('author')->where('status', true)->paginate(12);

        return view('capperu/blog', [
            'articles' => $articles
        ]);
    }

    public function blogdescripcion($url)
    {
        $article = BlogArticle::with('category')
            ->with('author')
            ->where('url', $url)
            ->first();

        return view('capperu/blog-descripcion', [
            'article' => $article
        ]);
    }

    public function gracias(Request $request, $sale_id)
    {
        $sale = OnliSale::find($sale_id);
        $saleDetails = OnliSaleDetail::where('sale_id', $sale_id)->get();
        //dd($request->all());
        $sale->response_status = $request->get('collection_status');
        $sale->response_id = $request->get('collection_id');
        $sale->response_date_approved = Carbon::now()->format('Y-m-d');
        $sale->response_payer = json_encode($request->all());
        $sale->response_payment_method_id = $request->get('payment_type');

        $sale->save();

        $person = Person::where('id', $sale->person_id)->first();
        $student = AcaStudent::where('person_id', $sale->person_id)->first();

        // al hacer el pago se realiza activa la patricula
        $courses = [];
        foreach ($saleDetails as $k => $detail) {
            AcaCapRegistration::where('student_id', $student->id)
                ->where('course_id', $detail->item_id)
                ->update([
                    'status' => true
                ]);
            $item = OnliItem::find($detail->onli_item_id);
            $courses[$k] = [
                'image'       => $item->image,
                'name'        => $item->name,
                'description' => $item->description,
                'type'        => $item->additional,
                'modality'    => $item->additional1,
                'sector'      => $item->category_description
            ];
        }

        //////////codigo enviar correo /////
        Mail::to($person->email)
            ->send(new StudentRegistrationMailable([
                'courses'   => $courses,
                'user'      => $person->email,
                'password'  => $person->number
            ]));

        return view('capperu/gracias', [
            'person' => $person
        ]);
    }

    public function download_brochure($id)
    {
        $brochure = AcaBrochure::find($id); //AcaBrochure::where('aca_brochures.id', $id)->join('aca_courses', 'aca_courses.id', 'aca_brochures.course_id')
        //->select('*.aca_brochures', 'aca_courses.description as description')->first();
        $filePath = $brochure->path_file;

        // Verificar si el archivo existe
        if (Storage::exists($filePath)) {
            // Obtener el nombre del archivo
            $fileName = pathinfo($filePath, PATHINFO_FILENAME);
            // Obtener la extensión del archivo
            $extension = pathinfo($filePath, PATHINFO_EXTENSION);

            // Definir el nombre del archivo para descarga
            $downloadFileName = $brochure->description . '.' . $extension;

            // Generar la respuesta de descarga
            return response()->download(storage_path('app/' . $filePath), $downloadFileName);
        }

        // Si el archivo no existe, puedes retornar una respuesta de error o redireccionar a otra página
        abort(404, 'El archivo no existe');
    }

    public function send_claim(Request $request)
    {
        $data = $request->all();

        $recipient = $data['email'];
        Mail::to($recipient)->send(new ComplaintsBookMail($data));

        $recipient = env('MAIL_FROM_ADDRESS');
        $data['ours'] = true;
        Mail::to($recipient)->send(new ComplaintsBookMail($data));

        return view('capperu.email.e_complaints_book')->with('complaints', $data);
    }
}
