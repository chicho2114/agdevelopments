<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use View;
use Mail;
use Exception;
use Log;

class HomeController extends Controller
{
    public function index(Request $request){
    	Log::info('Han ingresado a la web desde la ip: '. $request->ip() .' y la url: '. $request->url());
    	return view('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contacto(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:200|min:3',
            'correo' => 'required|email|max:200',
            'mensaje' => 'required|min:10',
            'g-recaptcha-response' => 'required|recaptcha'
        ]);
        
        if($validator->fails()){
            $vista = View::make('correo.respuestaContacto')->with(['type' => 'error'])->withErrors($validator);
        }
        else{
            $vista = View::make('correo.respuestaContacto')->with(['type' => 'success'])->withErrors($validator);
            
            try {
 
                Mail::send('correo.contacto', $request->all(), function ($m) use ($request) {
	                $nombre = $request->nombre;
	                $m->to($request->correo, $nombre)->subject('Gracias por Contactarnos');
	            });
            
            } catch (Exception $e) {
             
                return $vista = View::make('correo.respuestaContacto')->with(['type' => 'error'])->with(['exception' => 'Ha ocurrido un error en el sistema. Por favor, intente nuevamente.']);
            
            }

         
        }
        
        return $vista;
    }
}
