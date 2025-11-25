<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\KenthaController;
use App\Http\Controllers\CapperuController;
use App\Http\Controllers\KardexController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LocalSaleController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\ParametersController;
use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\WebPageController;
use App\Mail\StudentRegistrationMailable;
use App\Models\District;
use App\Models\Person;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Modules\Blog\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;



// NUEVO SITIO WEB 2025

Route::get('/home', [WebPageController::class, 'home'])->name('web_home');
Route::get('/nosotros2', [WebPageController::class, 'about_us'])->name('web_about_us');
Route::get('/politicas-de-calidad2', [WebPageController::class, 'quality_policies'])->name('web_quality_policies');
Route::get('/gestion-de-calidad2', [WebPageController::class, 'quality_management'])->name('web_quality_management');
Route::get('/contacto2', [WebPageController::class, 'contact'])->name('web_contact');
Route::get('/descripcion-programa2/{id}', [WebPageController::class, 'programDescription'])->name('web_program_description');

// NUEVO SITIO WEB 2025





Route::get('cookies_policy', function () {
    return view('cookies_policy');
})->name('cookies_policy');



Route::get('/cvinnova', function () {
    return redirect()->away('http://campus.capperu.com'); //ruta del campus https de ser necesario cambiar
});

Route::get('/test-image/{student_id}/{certificate_id}/{fecha?}', [WebController::class, 'testimage'])->name('test-image');

// SITE WEB //
Route::post('/send-claim',                  [CapperuController::class, 'send_claim'])->name('send_claim');
Route::get('/',                             [WebController::class, 'capperu'])->name('cms_principal');
Route::get('/nosotros',                     [CapperuController::class, 'nosotros'])->name('web_nosotros');
Route::get('/politicas-de-calidad',         [CapperuController::class, 'politicascalidad'])->name('web_politicas_calidad');
Route::get('/politicas-de-privacidad',      [CapperuController::class, 'politicasprivacidad'])->name('web_politicas_privacidad');
Route::get('/gestion-de-calidad',           [CapperuController::class, 'gestioncalidad'])->name('web_gestion_calidad');
Route::get('/libro-de-reclamaciones',       [CapperuController::class, 'claims'])->name('web_claims');
Route::get('/categoria-sector/{sector}',    [CapperuController::class, 'categoriasector'])->name('web_categoria_sector');
Route::get('/categoria-modalidad',          [CapperuController::class, 'categoriamodalidad'])->name('web_categoria_modalidad');
Route::get('/categoria-modalidad-en-vivo',  [CapperuController::class, 'categoriamodalidadenvivo'])->name('web_categoria_modalidad_en_vivo');
Route::get('/categoria-modalidad-e-learning', [CapperuController::class, 'categoriamodalidadelearning'])->name('web_categoria_modalidad_e_learning');
Route::get('/categoria-programa-cursos',    [CapperuController::class, 'categoriaprogramacursos'])->name('web_categoria_programa_cursos');
Route::get('/categoria-programa-diplomados', [CapperuController::class, 'categoriaprogramadiplomados'])->name('web_categoria_programa_diplomados');
Route::get('/modalidad-presencial',         [CapperuController::class, 'modalidadpresencial'])->name('web_modalidad_presencial');
Route::get('/sectors/{sector}/{tipo}',      [CapperuController::class, 'sector_programs'])->name('web_sectors');
Route::get('/descripcion-programa/{id}',    [CapperuController::class, 'descripcionPrograma'])->name('web_descripcion_programa'); //describe cursos, diplomados, e-learning o en vivo
Route::get('/descripcion-e-learning',       [CapperuController::class, 'descripcionelearning'])->name('web_descripcion_e_learning');
Route::get('/perfil-docente/{teacher_id}',  [CapperuController::class, 'perfildocente'])->name('web_perfil_docente');
Route::match(['get', 'post'], '/alumnos',   [CapperuController::class, 'alumnos'])->name('web_alumnos');
Route::get('/perfil-alumno/{id}',           [CapperuController::class, 'perfilalumno'])->name('web_perfil_alumno');
// Route::get('/articles',                     [CapperuController::class, 'blog'])->name('web_blog');
// Route::get('/article/{url}/article',        [CapperuController::class, 'blogdescripcion'])->name('web_blog_descripcion');
Route::get('/carrito',                      [CapperuController::class, 'carrito'])->name('web_carrito');
Route::get('/pagar',                        [CapperuController::class, 'pagar'])->name('web_pagar');
Route::get('/gracias/{sale_id}',            [CapperuController::class, 'gracias'])->name('web_gracias');

Route::get('/convenios',                    [CapperuController::class, 'convenios'])->name('web_convenios');
Route::get('/contacto',                     [CapperuController::class, 'contacto'])->name('web_contacto');

Route::get('/main/vue', [LandingController::class, 'index'])->name('index_main');
Route::get('/facturador', [LandingController::class, 'biller'])->name('biller_main');
Route::get('/news', [LandingController::class, 'blog'])->name('blog_main');
Route::get('/terms', [LandingController::class, 'terms'])->name('terms_main');
Route::get('/computer/store', [LandingController::class, 'computerStore'])->name('index_computer_store');
Route::get('/prices/academic', [LandingController::class, 'academicPrices'])->name('academic_prices');
Route::get('/create/payment/{id}/academic', [LandingController::class, 'academiCreatePayment'])->name('academic_form_mercadopago');
Route::get('/curso-descripcion/{id}', [WebPageController::class, 'cursodescripcion'])->name('web_curso_descripcion');
Route::get('/categorias', [CapperuController::class, 'categorias'])->name('web_categorias');

Route::get('/download/brochure/{id}', [CapperuController::class, 'download_brochure'])->name('download_brochure');

// BLOG //
Route::get('/blog/home', [BlogController::class, 'index'])->name('blog_principal');
Route::get('/article/{url}', [BlogController::class, 'article'])->name('blog_article_by_url');
Route::get('/category/{id}', [BlogController::class, 'category'])->name('blog_category');
Route::get('/policies', [BlogController::class, 'policies'])->name('blog_policies');
Route::get('/contact-us', [BlogController::class, 'contactUs'])->name('blog_contact_us');
Route::get('/stories/article/{url}', [BlogController::class, 'storiesArticle'])->name('blog_stories_article_by_url');
Route::get('/stories/policies', [BlogController::class, 'storiesPolicies'])->name('blog_stories_policies');
Route::get('/stories/contact-us', [BlogController::class, 'storiesContactUs'])->name('blog_stories_contact_us');

// E-MAIL //
Route::get('/e-libro-de-reclamaciones', [CapperuController::class, 'eclaims'])->name('web_e_claims');
Route::get('/email', function () {
    Mail::to('elrodriguez2423@gmail.com')
        ->send(new StudentRegistrationMailable('data'));
    return 'mensaje enviado';
});

Route::get('/mipais', function () {
    $ip = $_SERVER['REMOTE_ADDR']; // Esto contendrá la ip de la solicitud.

    // Puedes usar un método más sofisticado para recuperar el contenido de una página web con PHP usando una biblioteca o algo así
    // Vamos a recuperar los datos rápidamente con file_get_contents
    $dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

    //var_dump($dataArray);

    dd($dataArray);
});


Route::get('/capperu', function () {  /////////////////////////////////////////////////////////// login erp
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('/dashboard', function () {
    // return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('clients', ClientController::class);
    Route::resource('users', UserController::class);
    Route::resource('establishments', LocalSaleController::class);

    Route::delete('establishments/destroies/{id}', [LocalSaleController::class, 'destroy'])->name('establishment_destroies');
    Route::post('establishments/updated', [LocalSaleController::class, 'update'])->name('establishment_updated');

    Route::get(
        'inventory/product/establishment',
        [KardexController::class, 'index']
    )->name('kardex_index');

    Route::post(
        'inventory/product/sizes',
        [KardexController::class, 'kardexDeailsSises']
    )->name('kardex_sizes');

    Route::post(
        'search/person/number',
        [PersonController::class, 'searchByNumberType']
    )->name('search_person_number');

    Route::post(
        'save/person/update/create',
        [PersonController::class, 'saveUpdateOrCreate']
    )->name('save_person_update_create');

    Route::post(
        'search/person/full_name/number',
        [PersonController::class, 'searchByNameOrNumber']
    )->name('search_person_fullname_number');

    Route::get(
        'general/stock',
        [KardexController::class, 'generalStock']
    )->name('generalstock');



    Route::get(
        'company/show',
        [CompanyController::class, 'show']
    )->name('company_show');

    Route::post(
        'company/update_create',
        [CompanyController::class, 'updateCreate']
    )->name('company_update_create');

    Route::get(
        'company/getdata',
        [CompanyController::class, 'getdata']
    )->middleware(['auth', 'verified'])->name('datosempresa');

    Route::get('parameters/list', [ParametersController::class, 'index'])->name('parameters');
    Route::get('parameters/create', [ParametersController::class, 'create'])->name('parameters_create');
    Route::post('parameters/store', [ParametersController::class, 'store'])->name('parameters_store');

    ////////////////actualizar informacion de personas
    Route::get('person/update_information', function () {
        $person = Person::find(Auth::user()->person_id);
        $identityDocumentTypes = DB::table('identity_document_type')->get();

        $ubigeo = District::join('provinces', 'province_id', 'provinces.id')
            ->join('departments', 'provinces.department_id', 'departments.id')
            ->select(
                'districts.id AS district_id',
                'districts.name AS district_name',
                'provinces.name AS province_name',
                'departments.name AS department_name'
            )
            ->get();

        if (Auth::user()->hasRole('Alumno')) {
            return Inertia::render('Person/UpdateInformation', [
                'person' => $person,
                'identityDocumentTypes' => $identityDocumentTypes,
                'ubigeo' => $ubigeo
            ]);
        } else {
            return back();
        }
    })->name('user-update-profile');

    Route::post(
        'person/update_information/store',
        [PersonController::class, 'updateInformationPerson']
    )->name('user-update-profile-store');

    Route::post('/mostrar-svg', function (Request $request) {
        $svgData = $request->svg;

        // Asegúrate de que el archivo es un SVG
        $isSvg = Str::startsWith($svgData, '<svg');

        if ($isSvg) {
            // Devolver una respuesta para mostrar el SVG
            return response($svgData)->header('Content-Type', 'image/svg+xml');
        } else {
            // En caso de que no sea un SVG válido, devolver un error o una respuesta alternativa
            return response('No es un archivo SVG válido.', 400);
        }
    })->name('ruta-svg');


    Route::resource('modulos', ModuloController::class);
    Route::get('modulos/permissions/{id}/add', [ModuloController::class, 'permissions'])->name('modulos_permissions');
    Route::post('modulos/permissions/store', [ModuloController::class, 'storePermissions'])->name('modulos_permissions_store');

    Route::get('calendar/index', [CalendarController::class, 'index'])->name('calendar');
	
	Route::post(
        'person/birthdays',
        [PersonController::class, 'getBirthdays']
    )->name('person-birthdays');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/system.php';
