<?php
use Illuminate\Http\Request;
use App\Info;

Route::get('/', function () {
    
    $estado= 'local';
    $directorio = ($estado == 'local') ?  'temp/' :  'public/temp/';
    
    
    return view('index')->with('directorio',$directorio);
        
})->name('inicio');


///guardo Email
Route::post('/envio_mail', function (Request $datos) {
    
    $infos = new Info;
    $infos -> nombre = $datos -> name;
    $infos -> email = $datos -> email;
    $infos -> mensage = $datos -> message;
    $infos ->save();

  return redirect()->route('inicio')->with('message','Tu mensaje fue enviado');
})->name('envio_mail');



Route::middleware('auth')->group(function () {
    ///Entro a ver el Email
Route::get('/veremail', function(){
 // el estado 'local'
    $estado= 'Local';
    $directorio = ($estado == 'local') ?  'temp/' :  'public/temp/';
   
    
    $emails = Info::all();
    return view('ver_mails.vermail', compact('emails'))->with('directorio',$directorio);
    

})->name('inicio_mail');

///Elimino Email

Route::delete('elimino/{id}', function($id){
$mail = Info::FindorFail($id);
$mail-> delete();
return redirect() -> Route('inicio_mail')->with('info','Email eliminado de manera correcta');
})->name('elimino');

///Modifico estado de Email a leido
Route::put('modifico/{id}', function($id){
 $mail = Info::FindorFail($id);
if( ($mail -> estado) == 'Leido' )
{ $mail -> estado = 'No leido'; $estado = 0;}
else{ $mail -> estado = 'Leido';$estado = 1;};

 $mail->save();

 return redirect() -> Route('inicio_mail')->with('info','Estado modificado')->with('estado',$estado);
})->name('modifico');

    
});


Auth::routes();


//Route::get('/home', 'HomeController@index')->name('home');
