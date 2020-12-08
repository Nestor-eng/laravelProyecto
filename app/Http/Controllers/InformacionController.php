<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers;
/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class InformacionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('Informacion.index');
    }
    public function create()
    {
        
        return view('Informacion.create');
        
    }
    public function store(Request $request)
    {
       

        return redirect()->route('Informacion.index')->with('success','Cliente Agregado');
    }
}
