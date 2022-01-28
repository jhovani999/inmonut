<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Session;
//ENVIAR CORREOS
use Mail;
use App\Mail\EnviarCorreosInfo;

class HomeController extends Controller
{
    //Para inciar la pagina del index al ser llamado
    public function viewHome(){
        $slider_ = DB::table('home_slider')->get();
        $clases_ = DB::table('home_clases')->get();
        $fitness_ = DB::table('home_fitness')->get();
        $entrenador_ = DB::table('home_entrenador')->get();

    	return view('web.layouts.pages.index')->with(compact('clases_'))->with(compact('slider_'))->with(compact('fitness_'))->with(compact('entrenador_'));
    }
    public function viewContacto(){
    	return view('web.layouts.pages.contacto');
    }
    public function viewServicioTenis(){
        $rowData_ = DB::table('servicio_training')->get();
    	return view('web.layouts.pages.servicioTenis')->with(compact('rowData_'));
    }
    public function viewServicioPadel(){
        $rowData_ = DB::table('servicio_training')->get();
    	return view('web.layouts.pages.servicioPadel')->with(compact('rowData_'));
    }
    public function viewServicioFisio(){
        $rowData_ = DB::table('servicio_training')->get();
    	return view('web.layouts.pages.servicioFisio')->with(compact('rowData_'));
    }
    public function viewServicioFitness(){
        $rowData_ = DB::table('servicio_training')->get();
    	return view('web.layouts.pages.servicioFitness')->with(compact('rowData_'));
    }


    public function viewLogin(){
    	return view('web.layouts.pages.login');
    }

    //ENVIAR CORREO DE INFORMACION
    public function enviar_email_informacion(Request $request)
    {

        // Mail::to('ghiovani999@gmail.com')
        // ->send(new EnviarCorreosInfo([
        //     'txt_nombre' => $request->txt_nombre,
        //     'txt_email' => $request->txt_email,
        //     'txt_telefono' => $request->txt_telefono,
        //     'txt_asunto' => $request->txt_asunto,
        //     'txt_descripcion' => $request->txt_descripcion,
        // ])); 

        var_dump('dddddddd');
        return response()->json(['success' => 'El formulario de contacto se envio correctamente']);
        // return redirect()->back()->with('status', 'Profile updated!');
        // return redirect('dashboard')->with('status', 'Profile updated!');
    }
    
}
