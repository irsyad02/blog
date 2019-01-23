<?php

namespace  App\Http\Controllers;

class testeController extends Controller
{
    public function Executar (){

    	
    	$max = 20;

    	//view
    	return view('teste', compact('max'));
    }
}
?>