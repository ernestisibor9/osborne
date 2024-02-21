<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AdminUserController;
// use App\Http\Controllers\TeamController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MaketNewsController;
use App\Http\Controllers\LoserController;
use App\Http\Controllers\GainerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\OsbornServiceController;

//research
use App\Http\Controllers\AccountOpeningController;
use App\Http\Controllers\CorporateAccountOpeningController;
use App\Http\Controllers\CompanyReportController;
use App\Http\Controllers\CorporateActionController;
use App\Http\Controllers\Company;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PDFDownloadController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Upload\UploadController;

use Illuminate\Support\Facades\Mail;


// Route::get('/', function () {

//     return view('index');
// });

//Route for mail
Route::post('/subscribe', function () {
    $email = request()->email;
    Mail::send([], [], function ($message)use($email) {
          $message->to("info@ocmlng.com")
            ->subject("NEWS LETTER SUBSCRIPTION")
            ->setBody("<h4>A new user has requeseted to be added to your mailing list. Find details below:</h4><h5>Email: $email</h5>", 'text/html'); 
    });

    return back()->with('success', "Your subscription to our mailing list was successful");
})->name('subscribe');




//auth route for
require __DIR__ . '/auth.php';


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    
    Route::get('dashboard', [AdminUserController::class, 'dashboard'])->name('admin-dashboard.dashboard');
    Route::get('admin-users', [AdminUserController::class, 'index'])->name('admin-dashboard.index');
    Route::get('create-admin', [AdminUserController::class, 'create'])->name('admin-dashboard.register');
    Route::post('registration', [AdminUserController::class, 'store'])->name('admin-dashboard.store');
    Route::get('add-admins/{adminUser}/edit', [AdminUserController::class, 'edit'])->name('admin-dashboard.edit');
    Route::post('ugrade-adminRecord/{adminUser}/', [AdminUserController::class, 'update'])->name('admin-dashboard.update');
    Route::delete('delete-admin/{adminUser}', [AdminUserController::class, 'destroy'])->name('admin-dashboard.destroy');
    
    //DashBord Team
    Route::get('team-page', [TeamController::class, 'index'])->name('team.index');
    Route::get('add-team', [TeamController::class, 'create'])->name('team.create');
    Route::post('registerTeam-page', [TeamController::class, 'store'])->name('team.store');
    Route::get('team-edite/{team}/edit', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('team-update/{team}', [TeamController::class, 'update'])->name('team.update');
    Route::delete('team-delete/{team}', [TeamController::class, 'destroy'])->name('team.destroy');
    
    Route::get('news-catory', [CategoryController::class, 'index'])->name('category.index');
    Route::get('add-category', [CategoryController::class, 'create'])->name('category.create');
    Route::post('createCategory', [CategoryController::class, 'store'])->name('category.store');
    Route::get('cat-edite/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category-update/{category}/cat-updated', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('category-delete/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
    
        
    //PDF DOWNLOAD ADMIN DASHBOARD
    Route::get('pdf-AdminHome', [PDFDownloadController::class, 'index'])->name('pdf-download.index');
    Route::get('pdf-download-page', [PDFDownloadController::class, 'create'])->name('pdf-download.create');
    Route::post('pdf-download', [PDFDownloadController::class, 'store'])->name('pdf-download.store');
    Route::get('pdf-download/{pDFDownload}/edit', [PDFDownloadController::class, 'edit'])->name('pdf-download.edit');
    Route::delete('pdf-download/{pDFDownload}/delete', [PDFDownloadController::class, 'destroy'])->name('pdf-download.destroy');
    
    Route::post('register-user/{user}', [RegisteredUserController::class, 'update'])->name('auth.update');
    Route::get('register-user/{user}/edit', [RegisteredUserController::class, 'edit'])->name('auth.edit');
    
    
    Route::get('news-market', [MaketNewsController::class, 'index'])->name('market-news.index');
    Route::get('add-market', [MaketNewsController::class, 'create'])->name('market-news.create');
    Route::post('createMaketNews', [MaketNewsController::class, 'store'])->name('market-news.store');
    Route::get('news-edite/{maketNews}/edit', [MaketNewsController::class, 'edit'])->name('market-news.edit');
    Route::put('news-update{maketNews}', [MaketNewsController::class, 'update'])->name('market-news.update');
    Route::delete('delete-news/{maketNews}', [MaketNewsController::class, 'destroy'])->name('market-news.destroy');
    Route::get('news-in-full-page', [MaketNewsController::class, 'allMarketNews'])->name('market-news.all-news');
    
    
    
    Route::post('upload/daily', [UploadController::class, 'upload'])->name('dailymarket.upload');
    
    
    //HOME PAGE ROUTES
    Route::get('about-us-page', [AboutController::class, 'index'])->name('about.home-page');
    Route::get('about-detail/{team}', [AboutController::class, 'teamdetail'])->name('about.teamdetail');
    Route::get('management-detail/', [AboutController::class, 'managementTeamDetail'])->name('about.managementDetail');
    Route::get('About-us-admin', [AboutController::class, 'aboutHistory'])->name('about.admin-page');
    Route::get('add-about', [AboutController::class, 'create'])->name('about.create');
    Route::post('create-About', [AboutController::class, 'store'])->name('about.store');
    Route::get('About-edite/{about}/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('About-update/{about}', [AboutController::class, 'update'])->name('about.update');
    Route::delete('delete-about/{about}', [AboutController::class, 'destroy'])->name('about.destroy');
    
    // Route::get('board-of-directors-page', [AboutController::class, 'boardOfDirector'])->name('about.director-page');
    // Route::get('management-board-page', [AboutController::class, 'managentBoard'])->name('about.management-page');
    Route::get('board-of-directors-detail-page/{team}', [AboutController::class, 'DirectorDetail'])->name('about.director-detail');
    Route::get('management-board-detail-page/{team}', [AboutController::class, 'managentBoardDetail'])->name('about.management-detail');

    
    Route::get('form-registrations', [AccountOpeningController::class, 'index'])->name('form.index');
    Route::get('create-form', [AccountOpeningController::class, 'create'])->name('form.create');
    Route::post('add-form-report', [AccountOpeningController::class, 'store'])->name('form.store');
    Route::get('edite-form-action/{accountOpening}/edit', [AccountOpeningController::class, 'edit'])->name('form.edit');
    Route::get('form-show-details/{accountOpening}/show', [AccountOpeningController::class, 'show'])->name('form.show');
    Route::delete('delete-form/{accountOpening}', [AccountOpeningController::class, 'destroy'])->name('form.destroy');
    
    
    
    // Route::get('homepage', [GainerController::class, 'LoserReport'])->name('index');
    Route::get('gainers-file-import', [GainerController::class, 'index'])->name('upload-files.top-gain');
    Route::post('gainer-file-import', [GainerController::class, 'importGainners'])->name('gainer-import');
    Route::get('gainer-excel-export', [GainerController::class, 'exportGainnersExcel'])->name('gainer-excel-export');
    Route::get('gainer-csv-export', [GainerController::class, 'exportGainnersToCSV'])->name('gainer-csv-export');
});



Route::get('add', [RegisteredUserController::class, 'index'])->name('auth.index');
Route::get('users-registeration', [RegisteredUserController::class, 'create'])->name('auth.register');
Route::post('register-user', [RegisteredUserController::class, 'store'])->name('auth.register');


Route::get('board-of-directors-page', [AboutController::class, 'boardOfDirector'])->name('about.director-page');
Route::get('management-board-page', [AboutController::class, 'managentBoard'])->name('about.management-page');








// Route::get('display-team', [TeamController::class, 'index'])->name('team.index');
// Route::view('reg', 'admin-dashboard.register');





// Route::delete('teamdetail-page/{$team}', [TeamController::class, 'teamdetail'])->name('team.teamdetail');








Route::get('/', [MaketNewsController::class, 'home'])->name('index');
Route::get('/daily-market-report', [MaketNewsController::class, 'dailyMarketReport'])->name('daily.report');
Route::get('marketNews-detailsss/{maketNews}', [MaketNewsController::class, 'newsDetail'])->name('market-news.news-detail');

Route::get('services-detailss/{osbornService}', [MaketNewsController::class, 'serviceDetail'])->name('osborn-service.service-detail');
// Route::get('/osborn-details/{osbornService}', [MaketNewsController::class, 'serviceDetail'])->name('osborn-service.service-detail');
Route::get('/osborn/services', [MaketNewsController::class, 'servicePage'])->name('osborn-service.service-page');
Route::get('services-chain/{serviceCategory}', [ServiceCategoryController::class, 'show'])->name('osborn-service.services');
// Route::get('single-service-detail/{osbornService}/info', [MaketNewsController::class, 'allServiceDetail'])->name('osborn-service.single-service');


Route::get('/osborn/all-servicessss', [MaketNewsController::class, 'allService'])->name('osborn-service.all-service');
Route::get('osbornService-single-detailssssss/{osbornService}', [MaketNewsController::class, 'osbornServiceDetail'])->name('osborn-service.single-detail-page');





Route::get('contact-us-page', [MaketNewsController::class, 'contact'])->name('contact-us');
Route::POST('contact-mAIL', [MaketNewsController::class, 'sendMail'])->name('email.ContactMail');





//NEWS LETTER

// Route::get('letter', [MaketNewsController::class, 'letter'])->name('index');
Route::post('send-newsLetter', [MaketNewsController::class, 'newsLetter'])->name('send-newsLetter');




//PDF DOWNLOAD HOME PAGE
Route::get('news-pdf', [MaketNewsController::class, 'pageUpload'])->name('pdf-download.downloads');
Route::get('pdfDownload/{file}', [MaketNewsController::class, 'pdfDownload'])->name('pdfDownload');
Route::get('view/{id}', [MaketNewsController::class, 'view'])->name('view');
// Route::get('/download-pages/pdf', [MaketNewsController::class, 'createPDF']);
// Route::post('createMaketNews', [MaketNewsController::class, 'store'])->name('market-news.store');





      






Route::get('All-service-catory', [ServiceCategoryController::class, 'index'])->name('osborn-service-category.index');
Route::get('add-service-cat', [ServiceCategoryController::class, 'create'])->name('osborn-service-category.create');
Route::post('create-serviceCategory', [ServiceCategoryController::class, 'store'])->name('osborn-service-category.store');
Route::get('service-cat-edite/{serviceCategory}/edit', [ServiceCategoryController::class, 'edit'])->name('osborn-service-category.edit');
Route::post('service-category-update/{serviceCategory}', [ServiceCategoryController::class, 'update'])->name('osborn-service-category.update');
Route::delete('service-category-delete/{serviceCategory}', [ServiceCategoryController::class, 'destroy'])->name('osborn-service-category.destroy');



Route::get('service-home', [OsbornServiceController::class, 'index'])->name('osborn-service.index');
Route::get('add-services', [OsbornServiceController::class, 'create'])->name('osborn-service.create');
Route::post('create-services', [OsbornServiceController::class, 'store'])->name('osborn-service.store');
Route::get('services-edite/{osbornService}/edit', [OsbornServiceController::class, 'edit'])->name('osborn-service.edit');
Route::post('services-update/{osbornService}', [OsbornServiceController::class, 'update'])->name('osborn-service.update');
Route::delete('services-delete/{osbornService}', [OsbornServiceController::class, 'destroy'])->name('osborn-service.destroy');










// Route::get('homepage', [LoserController::class, 'LoserReport'])->name('index');
Route::get('loser-file-import', [LoserController::class, 'index'])->name('upload-files.top-loser');
Route::post('loser-file-import', [LoserController::class, 'importLoser'])->name('loser-file-import');
Route::get('loser-csv-export', [LoserController::class, 'exportLoserToCSV'])->name('loser-csv-export');
Route::get('loser-excel-export', [LoserController::class, 'exportLoserToExcel'])->name('loser-excel-export');








//NEWS LETTER
// Route::get('newsletters', [NewsletterController::class, 'index']);
// Route::post('newsletters/store',[NewsletterController::class, 'store']);


// Route::get('export', 'MyController@export')->name('export');
// Route::get('importExportView', 'MyController@importExportView'); 
// Route::post('import', 'MyController@import')->name('import');

// route::view('loser', 'upload-files.top-loser');
// route::view('about', 'site.about');
// route::view('services', 'site.service');
// route::view('contact-us', 'site.contact');
// route::view('single-mk-pg', 'site.singlemarket');
// route::view('teamdetail', 'about.teamdetail');
// route::view('contact', 'email.ContactMail');
route::view('pdf', 'pdf-download.DownloadTable');


Route::view('board-of-director','about.board-of-director');
Route::view('management-board','about.management-board');



// Route::get('loser-file-import-export', [LoserReport::class, 'index'])->name('upload-files.top-loser');
// Route::get('loser-report', [LoserReport::class, 'create'])->name('loser-import.create');
// Route::post('file-export', [LoserReport::class, 'store'])->name('loser-import.create.store');






//Research







Route::get('companies-report', [CompanyReportController::class, 'index'])->name('company_report.index');
Route::get('/preview-pdf/{file}', [CompanyReportController::class, 'getFile']);
Route::get('create-company', [CompanyReportController::class, 'create'])->name('company_report.create');
Route::post('register-company', [CompanyReportController::class, 'store'])->name('register_report.store');
Route::get('edit-company-report/companyReport/{companyReport}/edit', [CompanyReportController::class, 'edit'])->name('company_report.edit');
Route::post('update-company-report-record/{companyReport}', [CompanyReportController::class, 'update'])->name('company_report.update');
Route::get('company-show-details/{companyReport}', [CompanyReportController::class, 'show'])->name('company_report.show');
Route::delete('company-delete/{companyReport}', [CompanyReportController::class, 'destroy'])->name('company_report.destroy');





Route::get('corporate-action-report', [CorporateActionController::class, 'index'])->name('corporate_action.index');
Route::get('create-corporate', [CorporateActionController::class, 'create'])->name('corporate_action.create');
Route::post('add-corporate-report', [CorporateActionController::class, 'store'])->name('corporate_action.store');
Route::get('edite-corp-action/{corporateAction}/edit', [CorporateActionController::class, 'edit'])->name('corporate_action.edit');
Route::post('corp-report-update/{corporateAction}', [CorporateActionController::class, 'update'])->name('corporate_action.update');
Route::get('corporate-show-details/{corporateAction}', [CorporateActionController::class, 'show'])->name('corporate_action.show');
Route::delete('delete-corporate-action/{corporateAction}', [CorporateActionController::class, 'destroy'])->name('corporate_action.destroy');










Route::post('approval-client-form/{accountOpening}/approval', [AccountOpeningController::class, 'approval'])->name('form.approval');






Route::get('registered-accounts-admin', [CorporateAccountOpeningController::class, 'index'])->name('registeration-acctForm.index');
// Route::get('create-acct-form', [CorporateAccountOpeningController::class, 'create'])->name('corporate-acctForm.create');
// Route::post('corporate-form-registeration', [CorporateAccountOpeningController::class, 'store'])->name('corporate-acctForm.store');
Route::get('edite-corporate-acctform-acct/{corporateAccountOpening}/edit', [CorporateAccountOpeningController::class, 'edit'])->name('corporate-acctForm.edit');
Route::get('show-corporate-acct-details/{corporateAccountOpening}/show', [CorporateAccountOpeningController::class, 'show'])->name('corporate-acctForm.show');
Route::delete('delete-corporate-account/{corporateAccountOpening}', [CorporateAccountOpeningController::class, 'destroy'])->name('account.destroy');


Route::post('approval-corporate-account-opened/{corporateAccountOpening}/approval', [CorporateAccountOpeningController::class, 'approval'])->name('corporate-acctForm.approval');


Route::get('accountopening-individual-form', [AccountOpeningController::class, 'individualAccount']);
Route::post('/accountopening-individual', [AccountOpeningController::class, 'storeIndividualAccount']);

Route::get('accountopening-corporate-form', [CorporateAccountOpeningController::class, 'create']);
Route::post('/accountopening-corporate', [CorporateAccountOpeningController::class, 'store']);


//display
Route::any('corporate-action-display', [CorporateActionController::class, 'corporateActionsInfo'])->name('action.id');
Route::any('company-financial-report-display', [CorporateActionController::class, 'companyFinancialReport'])->name('financial.report');
Route::any('ngx-daily-price-list', [CorporateActionController::class, 'ngxDailyPriceList'])->name('price');

Route::get('directors/', [AboutController::class, 'showAllDirectors']);

Route::get('core-values/', function(){
    return view('about.core-values');
})->name('about.core-values');

Route::get('company-profile/', function(){
    return view('about.company-profile');
})->name('about.company-profile');

Route::get('company-policy/', function(){
    return view('about.company-policy');
});



