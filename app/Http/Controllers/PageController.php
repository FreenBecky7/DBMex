<?php

namespace App\Http\Controllers;

use App\Mail\ContacMailable;
use App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'description' => 'required',
        ]);

       
        Mail::to('jkimkj76@gmail.com')
            ->send(new ContactMailable($request->all()));

        //session()->flash('swal', '¡Tu mensaje se envió con éxito!');
         session()->flash('swal', [
           'icon' => 'success',
         'title' => '¡Bien hecho!',
           'text' => 'Correo enviado correctamente.',
          'custom_js' => "
                 Swal.fire({
                  title: 'Custom width, padding, color, background.',
                   width: 600,
                 padding: '3em',
                   color: '#716add',
                    background: '#fff url(/images/trees.png)',
                    backdrop: `
                        rgba(0,0,123,0.4)
                         url('/images/nyan-cat.gif')
                        left top
                        no-repeat
                     `
                 });
             "
         ]);
        return redirect('/');
    }
}
