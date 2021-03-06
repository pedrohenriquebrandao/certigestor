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

    public function update(Request $request, $id)
    {
        $request->validate([
            'ticket' => 'required',
            'cpf',
            'cnpj',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'type',
            'validity',
            'price' => 'required'
        ]);

        //$validation->update($request->all());
        $validation = Validation::find($id);    
        $validation->fill($request->input())->save();

        return redirect()->route('validations')
            ->with('success', 'Validação atualizada com sucesso!');
    }

    public function destroy(Validation $id)
    {
        $validations = Validation::find($id);

        $id->delete();

        return redirect()->route('validations')
            ->with('success', 'Validação removida com sucesso!');
    }

    public function search(Request $request)
    {   
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $validations = Validation::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('ticket', 'LIKE', "%{$search}%")
            ->orWhere('cnpj', 'LIKE', "%{$search}%")
            ->orWhere('cpf', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('validations.search', ['validations'=>$validations]);
    }

}
