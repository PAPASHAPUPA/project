<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\theatrs;
use App\Models\news;
use App\Models\User;
use App\Models\orders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Vendor\Autoload;
use Illuminate\Support\Str;

class BbsController extends Controller
{
    public function index() {
        return view("index");
}

public function news() {
    $news = news::paginate(3);
    return view("news",  ["all_news"=> $news, compact($news)]);
}
public function afisha() {
    $afisha = theatrs::paginate(3);
    return view("afisha", ["all_theatrs"=> $afisha, compact($afisha)]);
}
public function teatr() {
    return view("teatr");
}

public function staff() {
    return view('staff');
}

public function otziv() {
    return view("otziv");
}

public function oplata() {
    return view("oplata");
}

public function reg() {
    return view("reg");
}

public function users_valid(Request $request) {
    $request->validate([
        "email"=>'required', 
        'name'=>'required', 
        'password'=>'required'
       
    
    ]);

    $user = $request -> all();
    User::create([
        "email"=>$user["email"],
        "name"=>$user["name"],
        "password"=>Hash::make($user["password"]),
    ]);
    
    return redirect("auth")->with("success","");
}



public function auth() {
    return view("auth");
}


public function users_auth(Request $request) {
    $request->validate([
        "email"=>'required', 
        "password"=>'required'

]);

$formValue = [
    "email"=>$request->email,
    "password"=>$request->password,
];


if(Auth::attempt($formValue)){
    return redirect('/');
}
}

public function make_application(Request $request){
    orders::create([
        'id_user'=>$request->id_user,
    ]);
    try {
        $mail = new PHPMailer(true);
$mail -> SMTPDebug = 0;
$mail -> Host ='karimm08@mail.ru';
$mail -> SMTPAuth = true;
$mail -> Username = 'karimm08@mail.ru';
$mail -> Password = 'jtwiMVrRrMQ6NsgvNfye';
$mail -> SMTPSecure = 'tls';
$mail -> Port = '587';

$mail -> setFrom('karimm08@mail.ru', 'Danil Rechkunov');
$mail -> addAddress('karimm08@mail.ru', 'Danil Rechkunov');

$mail -> isHTML(true);
$mail -> Subject = 'Your ticket';
$mail -> Body = Str::random(16,'alpha');
$mail -> AltBody = 'Thanks for buying!';

$mail ->send();
echo '';
}catch(Exception $e){
echo "Message could not be sent. Mailer Error:{$mail->ErrorInfo}";
}
return redirect ('/');
    }
}






