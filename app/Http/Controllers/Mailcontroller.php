<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Mailcontroller extends Controller
{
    
 public function SendMailcontact(Request $request)
{
	$request->validate([
            'g-recaptcha-response' => 'recaptcha',
        ],[
            'g-recaptcha-response.required' => __('S\'il vous plaît assurez-vous que vous êtes un humain.')
        ]);
	
	$mail='hanajenhaani@gmail.com';
	Mail::send('mails.SendMailcontact', ['name' => $request->input('name'), 'email' => $request->input('email'), 'tel' => $request->input('tel'),'comments' => $request->input('comments')], function ($m) use ($mail) {

$m->to($mail);
$m->subject('Contact');
});
	$request->session()->flash('notification', array('msg' => 'Votre message a été envoyé avec succès', 'type' => 'succes'));
	return redirect()->back();
}

 public function SendMaildevis(Request $request)
{
	$request->validate([
            'g-recaptcha-response' => 'recaptcha',
        ],[
            'g-recaptcha-response.required' => __('S\'il vous plaît assurez-vous que vous êtes un humain.')
        ]);

	
	$mail='hanajenhaani@gmail.com';
	Mail::send('mails.SendMaildevis', ['name' => $request->input('name'), 'email' => $request->input('email'), 'tel' => $request->input('tel'), 'dated' => $request->input('dated'), 'datef' => $request->input('datef'), 'comments' => $request->input('comments')], function ($m) use ($mail) {

$m->to($mail);
$m->subject('Contact');
});
	$request->session()->flash('notification', array('msg' => 'Votre message a été envoyé avec succès', 'type' => 'succes'));
	return redirect()->back();
}


 public function SendMailreservation(Request $request)
{
	$request->validate([
            'g-recaptcha-response' => 'recaptcha',
        ],[
            'g-recaptcha-response.required' => __('S\'il vous plaît assurez-vous que vous êtes un humain.')
        ]);
	
	$mail='hanajenhaani@gmail.com';
	Mail::send('mails.SendMailreservation', ['name' => $request->input('name'), 'email' => $request->input('email'), 'tel' => $request->input('tel'), 'dater' => $request->input('dater'), 'comments' => $request->input('comments')], function ($m) use ($mail) {

$m->to($mail);
$m->subject('Contact');
});
	$request->session()->flash('notification', array('msg' => 'Votre message a été envoyé avec succès', 'type' => 'succes'));
	return redirect()->back();
}









}

