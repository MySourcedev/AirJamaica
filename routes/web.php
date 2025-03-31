<?php


use App\Http\Controllers\HubTransferController;
use App\Http\Controllers\LeaveOfAbsenceController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PirepController;
use App\Http\Controllers\AircraftController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\AwardsController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;


Route::view('/','public.home')->name('home');
Route::view('/home','public.home')->name("home2");
Route::view('/about','public.about')->name("about");
Route::view('/news', 'public.news')->name("news");
Route::view('/contact', 'public.contact')->name('contact');
Route::view('/patners', 'public.patners')->name('patners');
Route::view('/live-map','public.live-map')->name('live-map');
Route::view('/pilot-center','public.pilot-center')->name('pilot-center');
Route::view('/recruitment', 'public.recruitment')->name('recruitment');
Route::view('/hubs','public.hubs')->name('hubs');



Route::view('/mail','mail')->name('mail');
Route::view('/bids','profile.bids')->name('bids');
Route::view('/schedules','profile.schedules')->name('schedules');
Route::view('/stats','profile.stats')->name('stats');
Route::view('/badge','profile.badge')->name('badge');
Route::view('/routemap','routemap')->name('routemap');
Route::view('/mine','mine')->name('mine');
Route::view('/joiningprocedure','public.joiningprocedure')->name('joiningprocedure');


Route::controller(PirepController::class)->group(function (){
    Route::get('/pireps', 'index')->name('pireps');
    Route::get('/filepireps','create')->name('create.filepireps');
    Route::post('/filepireps', 'store')->name('store.filepireps');
});

Route::controller(LeaveOfAbsenceController::class)->group(function (){
    Route::get('/leaveofabsence', [LeaveOfAbsenceController::class, 'create'])->name('create.leaveofabsence');
    Route::post('/leaveofasence',[LeaveOfAbsenceController::class,'store'])->name('store.leaveofabsence');
});

Route::controller(HubTransferController::class)->group(function (){
    Route::get('/hubtransfer', 'create')->name('create.hubtransfer');
    Route::post('/hubtransfer', 'store')->name('store.hubtransfer');
});


Route::controller(SessionController::class)->group(function(){
    Route::get('/login','reqlogin')->name('reqlogin');

    Route::post('/login', 'login')->name('login');
    Route::post('/logout','logout')->name('logout');
});


Route::controller(UserController::class)->group(function(){
    Route::get('/registration','create')->name('registration');
    Route::get('/profile/{user}', 'show')->name('profile');
    Route::get('/edit/{user}', 'edit')->name('user.edit');
    Route::get('/changepassword','changepassword')->name('changepassword');
    Route::get('/forgotpassword', 'forgortpassword')->name('forgortpassword');

    Route::post('/store','store')->name('user.store');
    Route::post('/changepassword', 'change')->name('user.change');
    

    Route::patch('/update/{user}','update')->name('user.update');
});


Route::controller(AircraftController::class)->group(function (){
    Route::get('/aircrafts','index')->name('aircraft.index');
    Route::get('/aircraft/create','create')->name('aircraft.create');
    Route::get('/aircraft/edit/{aircraft}', 'edit')->name('aircraft.edit');

    Route::post('/aircraft/create', 'store')->name('aircraft.store');
    Route::put('/aircraft/update/{aircraft}','update')->name('aircraft.update');
});

Route::controller(AirportController::class)->group(function (){
    Route::get('/airports','index')->name('airports.index');
    Route::get('/airport/create','create')->name('airports.create');
    Route::get('/airport/edit/{airport}', 'edit')->name('airports.edit');

    Route::post('/airport/create', 'store')->name('airports.store');
    Route::put('/airport/update/{airport}','update')->name('airports.update');
});

Route::controller(AirlineController::class)->group(function (){
    Route::get('/airlines','index')->name('airlines.index');
    Route::get('/airline/create','create')->name('airlines.create');
    Route::get('/airline/edit/{airline}', 'edit')->name('airlines.edit');

    Route::post('/airline/create', 'store')->name('airlines.store');
    Route::put('/airline/update/{airline}','update')->name('airlines.update');
});

Route::controller(ForgotPasswordController::class)->group(function (){
    Route::get('/forgotpassword', 'index')->name('forgotpassword.index');
    Route::post('/forgotpassword','emailresetlink')->name('forgotpassword.emailresetlink');
});

Route::controller(ResetPasswordController::class)->group(function (){
    Route::get('/resetpassword', 'index')->name('password.reset');
    Route::post('/resetpassword','resetpassword')->name('password.update');
});

Route::controller(NewsController::class)->group(function () {
    Route::get('/news', 'index')->name('news.index');
    Route::get('/news/{slug}', 'show')->name('news.show');
    
    Route::view('/news/create','home');
    Route::post('/news', 'store')->name('news.store');
    
    Route::get('/news/{news}/edit', 'edit')->name('news.edit');
    Route::put('/news/{news}', 'update')->name('news.update');
    Route::delete('/news/{news}', 'destroy')->name('news.destroy');
    
    Route::post('/news/trix-attachments', 'uploadTrixAttachment')->name('news.trix.upload');
    Route::delete('/news/trix-attachments/{attachment}', 'deleteTrixAttachment')->name('news.trix.delete');
});

Route::controller(MessagesController::class)->group(function (){
    Route::get('/messages','index')->name('messages.index');
    Route::get('/messages/create','create')->name('messages.create');
    Route::get('/messages/edit/{message}', 'edit')->name('messages.edit');

    Route::post('/messages/create', 'store')->name('messages.store');
    Route::put('/messages/update/{message}','update')->name('messages.update');
});

Route::controller(AwardsController::class)->group(function (){
    Route::get('/awards','index')->name('awards.index');
    Route::get('/awards/create','create')->name('awards.create');
    Route::get('/awards/edit/{award}', 'edit')->name('awards.edit');

    Route::post('/awards/create', 'store')->name('awards.store');
    Route::put('/awards/update/{award}','update')->name('awards.update');
});

Route::controller(GalleryController::class)->group(function (){
    Route::get('/Screenshot','index')->name('screenshot.index');
    Route::get('/Screenshot/create','create')->name('screenshot.create');
    Route::get('/Screenshot/edit/{new}', 'edit')->name('screenshot.edit');

    Route::post('/Screenshot/create', 'store')->name('screenshot.store');
    Route::put('/Screenshot/update/{new}','update')->name('screenshot.update');
});
