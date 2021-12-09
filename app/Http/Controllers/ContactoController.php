<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Mail\mailContacto;
class ContactoController extends Controller
{
    public function Contacto(Request $request)
    {
         $mensaje = request()->validate([
            'nombre_completo' => 'required',
            'telefono' => 'required',
            'Correo' => 'required',
            'servicio' => 'required',
            'Mensaje' => 'required'
        ]);

        Mail::to('correo@dominio.com')->send(new mailContacto($mensaje));
        
       // return redirect('contacto');
    
    }
}