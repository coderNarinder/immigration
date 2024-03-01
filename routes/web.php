<?php
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

Route::get('/play-&-win', [App\Http\Controllers\HomeController::class, 'playAndWin'])->name('home.playAndWin');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('home.aboutUs'); 
Route::get('/how-to-play', [App\Http\Controllers\HomeController::class, 'howToPlay'])->name('home.howToPlay'); 
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('home.contactUs');  

Route::get('/godpanel/login', [App\Http\Controllers\Admin\AdminController::class, 'login'])->name('admin.login'); 
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('home.login');

Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('home.register');
Route::get('/{token}/register', [App\Http\Controllers\HomeController::class, 'register'])->name('home.refer.register');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('home.logout');
Route::middleware(['middleware' => 'userAuth'])->group(function () {
    Route::get('/{id}/pool', [App\Http\Controllers\HomeController::class, 'pollDetails'])->name('home.poll.detail'); 
    Route::get('/{id}/pool/slots', [App\Http\Controllers\HomeController::class, 'pollSlots'])->name('home.poll.pollSlots');
    Route::post('/{id}/pool/slots', [App\Http\Controllers\HomeController::class, 'pollSlot'])->name('home.poll.pollSlots'); 
    Route::get('/my-refferals', [App\Http\Controllers\HomeController::class, 'getRefferal'])->name('home.getRefferal');
    Route::get('/{id}/join', [App\Http\Controllers\HomeController::class, 'pollJoin'])->name('home.poll.join');
    Route::get('/my-wallet', [App\Http\Controllers\PaymentController::class, 'wallet'])->name('home.mywallet');
    Route::post('/handle-payment', [App\Http\Controllers\PaymentController::class, 'handlePayment'])->name('home.make.payment');
    Route::get('/mygames', [App\Http\Controllers\HomeController::class, 'mygames'])->name('user.mygames');
    Route::get('/settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('user.settings');
    Route::get('/support', [App\Http\Controllers\HomeController::class, 'support'])->name('user.support');  
});


Route::group(['prefix' => '/godpanel'], function () { 
    Route::middleware(['middleware' => 'adminAuth'])->group(function () {
			Route::get('/logout', [App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('admin.logout');
			Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');
            
            Route::get('/EnquirySource/listing', [App\Http\Controllers\Admin\EnquirySourceController::class, 'index'])->name('admin.EnquirySource.index'); 
            Route::get('/EnquirySource/create', [App\Http\Controllers\Admin\EnquirySourceController::class, 'create'])->name('admin.EnquirySource.create'); 
			Route::post('/EnquirySource/create', [App\Http\Controllers\Admin\EnquirySourceController::class, 'store'])->name('admin.EnquirySource.create'); 
			Route::get('/EnquirySource/{id}/edit', [App\Http\Controllers\Admin\EnquirySourceController::class, 'edit'])->name('admin.EnquirySource.edit');
            Route::post('/EnquirySource/{id}/edit', [App\Http\Controllers\Admin\EnquirySourceController::class, 'update'])->name('admin.EnquirySource.edit');
            Route::any('/EnquirySource/{id}/status/{status}', [App\Http\Controllers\Admin\EnquirySourceController::class, 'changeStatus'])->name('admin.EnquirySource.status');
            Route::delete('/EnquirySource/{id}/delete', [App\Http\Controllers\Admin\EnquirySourceController::class, 'delete'])->name('admin.EnquirySource.delete');
            

            // DEpartment

            Route::get('/Country/listing', [App\Http\Controllers\Admin\CountryController::class, 'index'])->name('admin.Country.index'); 
            Route::get('/Country/create', [App\Http\Controllers\Admin\CountryController::class, 'create'])->name('admin.Country.create'); 
			Route::post('/Country/create', [App\Http\Controllers\Admin\CountryController::class, 'store'])->name('admin.Country.create'); 
			Route::get('/Country/{id}/edit', [App\Http\Controllers\Admin\CountryController::class, 'edit'])->name('admin.Country.edit');
            Route::post('/Country/{id}/edit', [App\Http\Controllers\Admin\CountryController::class, 'update'])->name('admin.Country.edit');
            Route::any('/Country/{id}/status/{status}', [App\Http\Controllers\Admin\CountryController::class, 'changeStatus'])->name('admin.Country.status');
            Route::delete('/Country/{id}/delete', [App\Http\Controllers\Admin\CountryController::class, 'delete'])->name('admin.Country.delete');
    

            // DEpartment

            Route::get('/VisaDetail/listing', [App\Http\Controllers\Admin\VisaDetailController::class, 'index'])->name('admin.VisaDetail.index'); 
            Route::get('/VisaDetail/create', [App\Http\Controllers\Admin\VisaDetailController::class, 'create'])->name('admin.VisaDetail.create'); 
			Route::post('/VisaDetail/create', [App\Http\Controllers\Admin\VisaDetailController::class, 'store'])->name('admin.VisaDetail.create'); 
			Route::get('/VisaDetail/{id}/edit', [App\Http\Controllers\Admin\VisaDetailController::class, 'edit'])->name('admin.VisaDetail.edit');
            Route::post('/VisaDetail/{id}/edit', [App\Http\Controllers\Admin\VisaDetailController::class, 'update'])->name('admin.VisaDetail.edit');
            Route::any('/VisaDetail/{id}/status/{status}', [App\Http\Controllers\Admin\VisaDetailController::class, 'changeStatus'])->name('admin.VisaDetail.status');
            Route::delete('/VisaDetail/{id}/delete', [App\Http\Controllers\Admin\VisaDetailController::class, 'delete'])->name('admin.VisaDetail.delete');
    

            // DEpartment

            Route::get('/course/listing', [App\Http\Controllers\Admin\CourseController::class, 'index'])->name('admin.Course.index'); 
            Route::get('/course/create', [App\Http\Controllers\Admin\CourseController::class, 'create'])->name('admin.Course.create'); 
			Route::post('/course/create', [App\Http\Controllers\Admin\CourseController::class, 'store'])->name('admin.Course.create'); 
			Route::get('/course/{id}/edit', [App\Http\Controllers\Admin\CourseController::class, 'edit'])->name('admin.Course.edit');
            Route::post('/course/{id}/edit', [App\Http\Controllers\Admin\CourseController::class, 'update'])->name('admin.Course.edit');
            Route::any('/course/{id}/status/{status}', [App\Http\Controllers\Admin\CourseController::class, 'changeStatus'])->name('admin.Course.status');
            Route::delete('/course/{id}/delete', [App\Http\Controllers\Admin\CourseController::class, 'delete'])->name('admin.Course.delete');
    

             // DEpartment

             Route::get('/College/listing', [App\Http\Controllers\Admin\CollegeController::class, 'index'])->name('admin.College.index'); 
             Route::get('/College/create', [App\Http\Controllers\Admin\CollegeController::class, 'create'])->name('admin.College.create'); 
             Route::post('/College/create', [App\Http\Controllers\Admin\CollegeController::class, 'store'])->name('admin.College.create'); 
             Route::get('/College/{id}/edit', [App\Http\Controllers\Admin\CollegeController::class, 'edit'])->name('admin.College.edit');
             Route::post('/College/{id}/edit', [App\Http\Controllers\Admin\CollegeController::class, 'update'])->name('admin.College.edit');
             Route::any('/College/{id}/status/{status}', [App\Http\Controllers\Admin\CollegeController::class, 'changeStatus'])->name('admin.College.status');
             Route::delete('/College/{id}/delete', [App\Http\Controllers\Admin\CollegeController::class, 'delete'])->name('admin.College.delete');
     
             // DEpartment

             Route::get('/FAQs/listing', [App\Http\Controllers\Admin\FAQsController::class, 'index'])->name('admin.FAQs.index'); 
             Route::get('/FAQs/create', [App\Http\Controllers\Admin\FAQsController::class, 'create'])->name('admin.FAQs.create'); 
             Route::post('/FAQs/create', [App\Http\Controllers\Admin\FAQsController::class, 'store'])->name('admin.FAQs.create'); 
             Route::get('/FAQs/{id}/edit', [App\Http\Controllers\Admin\FAQsController::class, 'edit'])->name('admin.FAQs.edit');
             Route::post('/FAQs/{id}/edit', [App\Http\Controllers\Admin\FAQsController::class, 'update'])->name('admin.FAQs.edit');
             Route::any('/FAQs/{id}/status/{status}', [App\Http\Controllers\Admin\FAQsController::class, 'changeStatus'])->name('admin.FAQs.status');
             Route::delete('/FAQs/{id}/delete', [App\Http\Controllers\Admin\FAQsController::class, 'delete'])->name('admin.FAQs.delete');
     

               // DEpartment

               Route::get('/Location/listing', [App\Http\Controllers\Admin\LocationController::class, 'index'])->name('admin.Location.index'); 
               Route::get('/Location/create', [App\Http\Controllers\Admin\LocationController::class, 'create'])->name('admin.Location.create'); 
               Route::post('/Location/create', [App\Http\Controllers\Admin\LocationController::class, 'store'])->name('admin.Location.create'); 
               Route::get('/Location/{id}/edit', [App\Http\Controllers\Admin\LocationController::class, 'edit'])->name('admin.Location.edit');
               Route::post('/Location/{id}/edit', [App\Http\Controllers\Admin\LocationController::class, 'update'])->name('admin.Location.edit');
               Route::any('/Location/{id}/status/{status}', [App\Http\Controllers\Admin\LocationController::class, 'changeStatus'])->name('admin.Location.status');
               Route::delete('/Location/{id}/delete', [App\Http\Controllers\Admin\LocationController::class, 'delete'])->name('admin.Location.delete');
       
            // DEpartment

            Route::get('/Department/listing', [App\Http\Controllers\Admin\DepartmentController::class, 'index'])->name('admin.Department.index'); 
            Route::get('/Department/create', [App\Http\Controllers\Admin\DepartmentController::class, 'create'])->name('admin.Department.create'); 
			Route::post('/Department/create', [App\Http\Controllers\Admin\DepartmentController::class, 'store'])->name('admin.Department.create'); 
			Route::get('/Department/{id}/edit', [App\Http\Controllers\Admin\DepartmentController::class, 'edit'])->name('admin.Department.edit');
            Route::post('/Department/{id}/edit', [App\Http\Controllers\Admin\DepartmentController::class, 'update'])->name('admin.Department.edit');
            Route::any('/Department/{id}/status/{status}', [App\Http\Controllers\Admin\DepartmentController::class, 'changeStatus'])->name('admin.Department.status');
            Route::delete('/Department/{id}/delete', [App\Http\Controllers\Admin\DepartmentController::class, 'delete'])->name('admin.Department.delete');
           
             // DEpartment

             Route::get('/Designation/listing', [App\Http\Controllers\Admin\DesignationController::class, 'index'])->name('admin.Designation.index'); 
             Route::get('/Designation/create', [App\Http\Controllers\Admin\DesignationController::class, 'create'])->name('admin.Designation.create'); 
             Route::post('/Designation/create', [App\Http\Controllers\Admin\DesignationController::class, 'store'])->name('admin.Designation.create'); 
             Route::get('/Designation/{id}/edit', [App\Http\Controllers\Admin\DesignationController::class, 'edit'])->name('admin.Designation.edit');
             Route::post('/Designation/{id}/edit', [App\Http\Controllers\Admin\DesignationController::class, 'update'])->name('admin.Designation.edit');
             Route::any('/Designation/{id}/status/{status}', [App\Http\Controllers\Admin\DesignationController::class, 'changeStatus'])->name('admin.Designation.status');
             Route::delete('/Designation/{id}/delete', [App\Http\Controllers\Admin\DesignationController::class, 'delete'])->name('admin.Designation.delete');
            
              // DEpartment

            Route::get('/ServiceType/listing', [App\Http\Controllers\Admin\ServiceTypeController::class, 'index'])->name('admin.ServiceType.index'); 
            Route::get('/ServiceType/create', [App\Http\Controllers\Admin\ServiceTypeController::class, 'create'])->name('admin.ServiceType.create'); 
            Route::post('/ServiceType/create', [App\Http\Controllers\Admin\ServiceTypeController::class, 'store'])->name('admin.ServiceType.create'); 
            Route::get('/ServiceType/{id}/edit', [App\Http\Controllers\Admin\ServiceTypeController::class, 'edit'])->name('admin.ServiceType.edit');
            Route::post('/ServiceType/{id}/edit', [App\Http\Controllers\Admin\ServiceTypeController::class, 'update'])->name('admin.ServiceType.edit');
            Route::any('/ServiceType/{id}/status/{status}', [App\Http\Controllers\Admin\ServiceTypeController::class, 'changeStatus'])->name('admin.ServiceType.status');
            Route::delete('/ServiceType/{id}/delete', [App\Http\Controllers\Admin\ServiceTypeController::class, 'delete'])->name('admin.ServiceType.delete');
          
           // DEpartment

           Route::get('/DocumentType/listing', [App\Http\Controllers\Admin\DocumentTypeController::class, 'index'])->name('admin.DocumentType.index'); 
           Route::get('/DocumentType/create', [App\Http\Controllers\Admin\DocumentTypeController::class, 'create'])->name('admin.DocumentType.create'); 
           Route::post('/DocumentType/create', [App\Http\Controllers\Admin\DocumentTypeController::class, 'store'])->name('admin.DocumentType.create'); 
           Route::get('/DocumentType/{id}/edit', [App\Http\Controllers\Admin\DocumentTypeController::class, 'edit'])->name('admin.DocumentType.edit');
           Route::post('/DocumentType/{id}/edit', [App\Http\Controllers\Admin\DocumentTypeController::class, 'update'])->name('admin.DocumentType.edit');
           Route::any('/DocumentType/{id}/status/{status}', [App\Http\Controllers\Admin\DocumentTypeController::class, 'changeStatus'])->name('admin.DocumentType.status');
           Route::delete('/DocumentType/{id}/delete', [App\Http\Controllers\Admin\DocumentTypeController::class, 'delete'])->name('admin.DocumentType.delete');
           
           // DEpartment

           Route::get('/EmploymentType/listing', [App\Http\Controllers\Admin\EmploymentTypeController::class, 'index'])->name('admin.EmploymentType.index'); 
           Route::get('/EmploymentType/create', [App\Http\Controllers\Admin\EmploymentTypeController::class, 'create'])->name('admin.EmploymentType.create'); 
           Route::post('/EmploymentType/create', [App\Http\Controllers\Admin\EmploymentTypeController::class, 'store'])->name('admin.EmploymentType.create'); 
           Route::get('/EmploymentType/{id}/edit', [App\Http\Controllers\Admin\EmploymentTypeController::class, 'edit'])->name('admin.EmploymentType.edit');
           Route::post('/EmploymentType/{id}/edit', [App\Http\Controllers\Admin\EmploymentTypeController::class, 'update'])->name('admin.EmploymentType.edit');
           Route::any('/EmploymentType/{id}/status/{status}', [App\Http\Controllers\Admin\EmploymentTypeController::class, 'changeStatus'])->name('admin.EmploymentType.status');
           Route::delete('/EmploymentType/{id}/delete', [App\Http\Controllers\Admin\EmploymentTypeController::class, 'delete'])->name('admin.EmploymentType.delete');
           
           // DEpartment

           Route::get('/type/{type}/listing', [App\Http\Controllers\Admin\TypeController::class, 'index'])->name('admin.Type.index'); 
           Route::get('/type/{type}/create', [App\Http\Controllers\Admin\TypeController::class, 'create'])->name('admin.Type.create'); 
           Route::post('/type/{type}/create', [App\Http\Controllers\Admin\TypeController::class, 'store'])->name('admin.Type.create'); 
           Route::get('/type/{type}/{id}/edit', [App\Http\Controllers\Admin\TypeController::class, 'edit'])->name('admin.Type.edit');
           Route::post('/type/{type}/{id}/edit', [App\Http\Controllers\Admin\TypeController::class, 'update'])->name('admin.Type.edit');
           Route::any('/type/{type}/{id}/status/{status}', [App\Http\Controllers\Admin\TypeController::class, 'changeStatus'])->name('admin.Type.status');
           Route::delete('/type/{type}/{id}/delete', [App\Http\Controllers\Admin\TypeController::class, 'delete'])->name('admin.Type.delete');
           

           
           
            Route::get('/users/listing', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.user.list'); 
            Route::any('/users/ajax', [App\Http\Controllers\Admin\UserController::class, 'ajax'])->name('admin.user.ajax'); 

            Route::get('/settings', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin.settings'); 
            Route::post('/settings', [App\Http\Controllers\Admin\SettingController::class, 'store'])->name('admin.settings');
            
            Route::get('/user/{id}/details', [App\Http\Controllers\Admin\UserController::class, 'detail'])->name('admin.agent.detail'); 
            Route::get('/agents/listing', [App\Http\Controllers\Admin\UserController::class, 'agentIndex'])->name('admin.agent.list'); 
            Route::any('/agents/ajax', [App\Http\Controllers\Admin\UserController::class, 'agentAjax'])->name('admin.agent.ajax');
            
            Route::get('/user/{id}/wallet', [App\Http\Controllers\Admin\UserController::class, 'wallet'])->name('admin.user.wallet'); 
            Route::get('/user/{id}/pools', [App\Http\Controllers\Admin\UserController::class, 'pools'])->name('admin.user.pools'); 
            Route::get('/user/{id}/referrals', [App\Http\Controllers\Admin\UserController::class, 'referrals'])->name('admin.user.referrals'); 
    });
});



