<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[ 
	'uses' =>'HomeController@index',
	'as' => 'home' ]);
// Vista de login
Route::get('login',[

	'uses' => 'AuthController@index',

	'as' =>'auth_show_path',
 	]);

//Autenticacion de Login
Route::post('login',[

	'uses' => 'AuthController@store',

	'as' =>'auth_store_path',
 	]);

// Cierre de seccion;
	Route::get('logout',[

		'uses' => 'AuthController@getLogout',

		'as' =>'close_session',
 	]);



// Para mostrar todos los casos en base al servicio
Route::get('servicio/{id_service}',[
	'uses' => 'ServiceController@index',
	'as' => 'service_show_path',
	]);
// Para mostrar todos los casos en base al servicio
Route::get('tramites/avances',[
	'uses' => 'ServiceController@AllCaseByProgres',
	'as' => 'show_all_case_by_progres',
	]);

// Para mostrar todos los casos en base al servicio
Route::get('tramites/avisos',[
	'uses' => 'ServiceController@AllCaseByNotice',
	'as' => 'show_all_case_by_notice',
	]);

Route::post('servicio',[
	'uses' => 'ServiceController@addCustumer',
	'as' => 'service_post_path',
	]);


//Para generar un nuevo tramite del servicio seleccionado
Route::get('clientes/{id_service}',[
	'uses' => 'ServiceController@SelectCustomers',
	'middleware' => ['moderatoradmin'],
	'as' => 'Select_Customers_toCase'
	]);
//Para ver los detalles de un tramite 
Route::get('tramite/{id_caseService}',[
	'uses' =>'ServiceController@show',
	'as' => 'Show_Case_path',
	]);
//El formulario para editar el tramite
Route::get('tramite/{id_caseService}/edit',[
	'uses' =>'ServiceController@edit',
	'middleware' => ['canedit'],
	'as' => 'Edit_Case_path',
	]);
//Actualizamos los datos que nos manden 
Route::post('caso/{id_caseService}/edit',[
	'uses' =>'ServiceController@update',
	'as' => 'Update_Case_path',
	]);

//Una ves asinado un cliente se puede crear un caso completo.
Route::post('nuevo/{id_service}/caso/',[
	'uses' =>'ServiceController@store',
	'as' => 'crearCaso',
	]);

//Mostrar el listado de los clientes 
Route::get('clientes/',[
	'uses' => 'CustomerController@index',
	'as' => 'Customer_List']);

//Mostrar el datos especificos del cliente
Route::get('cliente/{id_customer}',[
	'uses' => 'CustomerController@show',
	'as' => 'Customer_Show_path']);

//Mostrar el formulario para registrar un Nuevo cliente a un Nuevo Caso
Route::get('cliente/nuevo/{id_service?}',[
	'uses' => 'CustomerController@createNewInNewCase',
	'as' => 'New_Customer_path']);

//Mostrar el formulario para registrar un Nuevo cliente;
Route::get('registro/cliente/',[
	'uses' => 'CustomerController@createNew',
	'as' => 'Create_Customer']);

//registrar un Nuevo cliente tomado del formulario;
Route::post('registro/cliente/',[
	'uses' => 'CustomerController@store',
	'as' => 'Create_Customer_Store']);


//Mostrar el formulario para registrar un Nuevo cliente en un tramite exitente,;
Route::get('cliente/nuevo/tramite/{id_caseService}',[
	'uses' => 'CustomerController@createNewToCase',
	'middleware' => ['canedit'],
	'as' => 'New_Customer_inCase']);

//Registrar un Nuevo cliente en un tramite exitente,;
Route::post('cliente/nuevo/tramite/{id_caseService}',[
	'uses' => 'CustomerController@storeNewToCase',
	'as' => 'New_Customer_inCase']);


//Registra al cliente
Route::post('cliente/nuevo',[
	'uses' => 'CustomerController@addCustumer',
	'as' => 'customer_new_path',
	]);
//la vista en la cual se peude seleccionar uno o varios participantes al tramite seleccionado
Route::get('clientes/tramite/{id_caseService}',[
	'uses' => 'CustomerController@AddCustomersToCase',
	'middleware' => ['canedit'],
	'as' => 'Select_customer_InExisting_Case'
	]);
//Para guardar uno o varios participantes al caso seleccionado
Route::post('clientes/caso/{id_caseService}',[
	'uses' => 'CustomerController@UpdateCustomersInCase',
	'as' => 'Update_customer_InExisting_Case'
	]);

Route::get('cliente/edit/{id_customer}',[
	'uses' => 'CustomerController@edit',
	'as' => 'Edit_customer'
	]);
Route::post('cliente/edit/{id_customer}',[
	'uses' => 'CustomerController@update',
	'as' => 'Update_customer'
	]);


//Mostrar el formulario para registrar los documentos y tipo de participante a un cliente
Route::get('caso/{id_caseService}/cliente/{id_customer}',[
	'uses' => 'ServiceController@editPariticipantData',
	'middleware' => ['canedit'],
	'as' => 'Edit_CustomerinCase']);

//manda el request del formulario para registrar los documentos y tipo de participante a un cliente
Route::post('caso/{id_caseService}/cliente/{id_customer}',[
	'uses' => 'ServiceController@updatePariticipantData',
	'as' => 'Update_CustomerinCase']);


//Muestra el formularo  para editar un presupesto
Route::get('presupuesto/{id_caseService}',[
	'uses' =>'BudgetController@edit',
	'middleware' => ['canedit'],
	'as' => 'EditBudget',
	]);

Route::post('presupuesto/{id_presupuesto}',[
	'uses' =>'BudgetController@update',
	'as' => 'UpdateBudget',
	]);

Route::get('Presupuestopdf/{id_presupuesto}', [
		'uses' =>'BudgetController@show',
		'as' => 'PdfBuget',]);

//Mostrar la Pagina de Pagos de un caso 
Route::get('PagosdeCaso/{id_caseService}', [
		'uses' =>'PaymentController@index',
		'as' => 'Case_Payments',]);

//Mostrar la Pagina de todos casos con Pagos Pendientes 
Route::get('PagosPendientes/', [
		'uses' =>'PaymentController@OutStandingPayments',
		'as' => 'Out_Standing_Payments',]);

//Muestra el Formulario para crar un pago nuevo 
Route::get('Pago/{id_caseService}', [
		'uses' =>'PaymentController@create',
		'middleware' => ['canedit'],
		'as' => 'Payment_Create',]);

Route::post('Pago/{id_caseService}', [
		'uses' =>'PaymentController@store',
		'as' => 'Payment_Store',]);

// Muestra en formato PDF los datos de un pago.
Route::get('Pago/PDF/{id_presupuesto}', [
		'uses' =>'PaymentController@show',
		'as' => 'PdfPayment',]);



//Rutas de Error 

Route::get('Error/AccesoDenegado',function()
{
    return View::make('errors.AccesDeniedUser');
});


// Agenda
// Muestra en formato PDF los datos de un pago.
Route::get('Agenda/', [
		'uses' =>'EventController@index',
		'as' => 'calendar',]);

Route::get('Agenda/listado', [
		'uses' =>'EventController@events',
		'as' => 'events_list',]);

Route::get('Agenda/Evento/nuevo', [
		'uses' =>'EventController@create',
		'as' => 'new_event',]);

Route::post('Agenda/Evento/nuevo', [
		'uses' =>'EventController@store',
		'as' => 'store_event',]);

Route::get('Agenda/Evento/edit/{id_evento}', [
		'uses' =>'EventController@edit',
		'as' => 'edit_event',]);

Route::post('Agenda/Evento/edit/{id_evento}', [
		'uses' =>'EventController@update',
		'as' => 'update_event',]);

Route::get('Agenda/Evento/delete/{id_evento}', [
		'uses' =>'EventController@destroy',
		'as' => 'destroy_event',]);







