<?php

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

Route::get('/', function () {
    return view('Project');
});

Route::get('makecv', function () {
    return view('cv');
})->name('makecv');

Route::get('makeExtraProject', function () {
    return view('extraProject');
})->name('makecv');

Route::get('makeQualification', function () {
    return view('qualification');
})->name('makecv');

Route::get('makeAssignment', function () {
    return view('assignment');
})->name('makeAssignment');

Route::get('makeSkills', function () {
    return view('skills');
})->name('makeSkills');

Route::get('makeLanguage', function () {
    return view('language');
})->name('makeLanguage');

Route::get('makePosition', function () {
    return view('position');
})->name('makePosition');



Route::post('save_cv','PersonalController@store')->name('save_area');
Route::post('save_extra_project','ExtraProjectController@store')->name('save_area');
Route::post('save_qualification','QualificationController@store')->name('save_area');
Route::post('save_assignment','AssignmentController@store')->name('save_area');
Route::post('save_skill','SkillsController@store')->name('save_area');
Route::post('save_language','LanguageController@store')->name('save_area');
Route::post('save_positon','Controller@store')->name('save_area');
