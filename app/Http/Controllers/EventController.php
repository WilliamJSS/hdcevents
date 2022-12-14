<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('events.create');
    }

    public function list_products()
    {
        // Exemplo de busca: http://hdcevents.local/products?search=camisa

        $busca = request('search');

        return view('products', ['busca' => $busca]);
    }

    public function show_product($id = null){
        return view('product', ['id' => $id]);
    }

    public function contact(){
        return view('contact');
    }
}
