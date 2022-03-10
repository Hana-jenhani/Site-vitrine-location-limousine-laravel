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

Route::get('/', function () {  return view('index');})->name('index');
Route::get('limousine-brussels-apropos', function () {  return view('a-propos');})->name('a-propos');
Route::get('limousine-brussels-service', function () {  return view('service');})->name('service');
Route::get('limousine-brussels-visite', function () {  return view('visite');})->name('visite');
Route::get('limousine-brussels-vehicule', function () {  return view('vehicule');})->name('vehicule');
Route::get('limousine-brussels-chauffeur', function () {  return view('chauffeur');})->name('chauffeur');
Route::get('limousine-brussels-devis', function () {  return view('devis');})->name('devis');
Route::post('limousine-SendMaildevis', 'MailController@SendMaildevis')->name('contact.SendMaildevis');

Route::get('limousine-brussels-reservation', function () {  return view('reservation');})->name('reservation');
Route::post('limousine-SendMailreservation', 'MailController@SendMailreservation')->name('contact.SendMailreservation');

Route::get('limousine-brussels-contact', function () {  return view('contact');})->name('contact');
Route::post('limousine-SendMail', 'MailController@SendMailcontact')->name('contact.SendMailcontact');