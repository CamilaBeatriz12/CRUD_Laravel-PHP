<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdRequest;
use App\Models\ModelProd;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private $objProd;

    public function __construct()
    {
        $this -> objProd = new ModelProd();
    }

    public function index()
    {
        $prod = $this -> objProd -> all();
        return view('index', compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdRequest $request)
    {
        $cad=$this->objProd->create([
            'name'=>$request->name,
            'preco'=>$request->preco,
            'descricao'=>$request->descricao
        ]);

        if($cad){
            return redirect('prods');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prod=$this->objProd->find($id);
        return view('show', compact('prod'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prod=$this->objProd->find($id);
        return view('create', compact('prod'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProdRequest $request, string $id)
    {
        $this->objProd->where(['id'=>$id])->update([
            'name'=>$request->name,
            'preco'=>$request->preco,
            'descricao'=>$request->descricao
        ]);

        return redirect('prods');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $del=$this->objProd->destroy($id);
        return($del)?"sim":"não";
    }
}
