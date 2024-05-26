<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::latest()->get();

        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validação da entrada de dados
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);

        //Cadastro de novo produto na base de dados
        Produto::create($request->all());

        //Retorna uma mensagem de sucesso ao cliente
        return redirect()->route('produtos.index')->with('success', 'Produto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
         //Validação da entrada de dados
         $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);

        //Cadastro de novo produto na base de dados
        $produto->update($request->all());

        //Retorna uma mensagem de sucesso ao cliente
        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        //Deletar um produto
        $produto->delete();

        //Mensagem de sucesso
        return redirect()->route('produtos.index')->with('success', 'Produto deletado com sucesso!');
    }
}
