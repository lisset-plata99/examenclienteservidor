<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function Inicio()
    {
        return view('index');
    }

    public function ViewConclusion()
    {
        return view('Conclusion');
    }
    public function ViewReferencias()
    {
        return view('Referencias');
    }
    public function ViewTema1()
    {
        return view('Tema1');
    } 
    public function ViewTema2()
    {
        return view('Tema2');
    } 
    public function ViewTema3()
    {
        return view('Tema3');
    } 
    public function ViewTema4()
    {
        return view('Tema4');
    } 
    public function ViewTema5()
    {
        return view('Tema5');
    } 
    public function ViewTema6()
    {
        return view('Tema6');
    } 
    public function ViewTema7()
    {
        return view('Tema7');
    } 
    public function ViewTema8()
    {
        return view('Tema8');
    } 
    public function ViewTema9()
    {
        return view('Tema9');
    } 
}
