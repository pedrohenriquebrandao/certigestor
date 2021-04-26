<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Validation;


class ValidController extends Controller
{
    public function index() {
        $validations=Validation::all();
        return view('validations.index',['validations'=>$validations]);
    }

    public function create() {
        return view('validations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ticket' => 'required',
            'cpf',
            'cnpj',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'type' => 'required',
            'price' => 'required'
        ]);

        Validation::create($request->all());

        return redirect()->route('validations')
            ->with('success', 'Validação cadastrada com sucesso!');
    }

    public function edit(Validation $id) {
        $validations = Validation::find($id);
        return view('validations.edit', ['validations'=>$validations]);
    }

    public function show(Validation $id)
    {
        $validations = Validation::find($id);
        return view('validations.show', ['validations'=>$validations]);
    }

    public function update(Request $request, Validation $validation)
    {
        $request->validate([
            'ticket' => 'required',
            'cpf',
            'cnpj',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'type' => 'required',
            'price' => 'required'
        ]);

        $validation->update($request->all());

        return redirect()->route('validations')
            ->with('success', 'Project deleted successfully');
    }

    public function destroy(Validation $id)
    {
        $validations = Validation::find($id);

        $id->delete();

        return redirect()->route('validations')
            ->with('success', 'Validação removida com sucesso!');
    }

}
