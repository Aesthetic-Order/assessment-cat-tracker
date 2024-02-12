<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;

class CatController extends Controller
{
    public function index() {
        $cats = Cat::all();
        return view('collection.index',['cats' => $cats]);
    }

    public function create() {
        return view('collection.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'description' => 'required',
            'updated_' => 'nullable',

        ]);

        $newCat = Cat::create($data);

        return redirect(route('collection.index'));
    }

    public function edit(Cat $cat) {
        return view('collection.edit', ['cat' => $cat]);
    }

    public function update(Cat $cat, Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'description' => 'required',
            'updated_' => 'nullable',

        ]);

        $cat->update($data);

        return redirect(route('collection.index'))->with('success','Your Entry was Updated Successfully');

    }

    public function destroy(Cat $cat) {
        $cat->delete();
        return redirect(route('collection.index'))->with('success','Your Entry was Deleted Successfully');
    }
}

