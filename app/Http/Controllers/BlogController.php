<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        /*
        # Populando o post com array
        $posts = [
        	0 => [
        		'titulo' => 'Quarto Post',
        		'subtitulo' => 'Subtítulo do quarto post.',
        		'postado' => 'Thyago',
        		'data' => '21/06/2015'
        	],

        	1 => [
        		'titulo' => 'Terceiro Post',
        		'subtitulo' => 'Subtítulo do terceiro post.',
        		'postado' => 'Pedro',
        		'data' => '05/05/2015'
        	],

        	2 => [
        		'titulo' => 'Segundo Post',
        		'subtitulo' => 'Subtítulo do segundo post.',
        		'postado' => 'Paulo',
        		'data' => '20/04/2015'
        	],
        	
        	3 => [
        		'titulo' => 'Primeiro Post',
        		'subtitulo' => 'Subtítulo do primeiro post.',
        		'postado' => 'Marco',
        		'data' => '12/04/2015'
        	]
        ];*/
        
        $posts = \App\Post::all();
        return view('home', compact('posts'));
    }

    public function sobre()
    {
        $texto = 'Página SOBRE';
        return view('sobre', ['texto'=>$texto]);
    }

    public function contato()
    {
        $texto = 'Página CONTATO';
        return view('contato', ['texto'=>$texto]);
    }
}
