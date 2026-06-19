<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{

public $users = [
['name'=>'Francesco', 'surname'=>'Viccica', 'role'=>'Junior Manager'],
['name'=> 'Napoleone', 'surname'=>'Bonaparte', 'role'=>'Stratega'],
['name'=>'Margherita', 'surname'=>'Hack', 'role'=>'Astrofisica'],

];

public function homepage () {
return view('welcome');
}


public function aboutUs(){

return view('about-us', ['users'=>$this->users]);
}

public function aboutUsDetail($name){

foreach($this->users as $user){
if($name == $user['name']){
return view('about-us-detail', ['user'=>$user]);
}
}
}

public  function contacts(){
return view('contacts');
}

public function send_email(Request $request){
    // dd($request->all());

    $contactMail = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'description' => $request->input('description'),
    ];

    try{
        Mail::to('noreplay@mail.com')->send(new ContactMail($contactMail));
     }catch(Exception $e){
        return redirect()->route('contacts')->with('emailError', "c'è stato un problema con l'invio della mail, riprova più tardi");
     }

    return redirect()->back()->with('message', 'Il messaggio è stato inviato correttamente');




}
}