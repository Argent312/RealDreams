<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CorreoContacto;
use App\Mail\CorreoC;
use Illuminate\Support\Facades\Mail;

class GeneralController extends Controller
{
    public function correo(Request $request)
    {

        $datos =new CorreoContacto();
        $datos->name = $request->name;
        $datos->email = $request->email;
        $datos->wa = $request->wa;
        $datos->mensaje = $request->mensaje;

        $datos2 = array(

            'Name' => $datos->name,
            'Email' => $datos->email,
            'Mensaje' => $datos->mensaje,
            'WA' => $datos->wa,


        );

        Mail::send('RealDreams', $datos2 , function($message){
            $message->from('cliente@realdreams.mx', 'Datos de Interesado');
            $message->to('contacto@realdreams.mx')->subject('Datos de interesado en Real Dreams');
            $message->to('vcm1231@gmail.com')->subject('Datos de interesado en Real Dreams');
         });
         return view('gracias');
         //Alert::message('Tus datos se han enviado a Real Capital, en breve nos comunicaremos contigo para darte toda la informacion', 'success');
    }
}
