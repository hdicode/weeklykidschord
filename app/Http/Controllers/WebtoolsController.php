<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Composer;

class WebtoolsController extends Controller
{
    public function index() {
        return view('webtools/home');
    }

    public function composer() {
        $composers = Composer::all();
        return view('webtools/composer/home', ['composers' => $composers]);
    }

    public function show($id) {
        $composer = Composer::find($id);
        if(!$composer) abort(404);
        return view('webtools/composer/single', ['composer' => $composer]);
    }

    public function create() {
        return view('webtools/composer/create');
    }

    public function store(Request $request) {
        $composer = new Composer;
        $composer->composername = $request->composername;
        $composer->description = $request->description;
        $composer->save();

        return redirect('webtools/composer');
    }

    public function update(Request $request, $id) {
        $composer = Composer::find($id)->first();
        $composer->composername = $request->composername;
        $composer->description = $request->description;
        $composer->save();

        return redirect('webtools/composer/' . $id);

    }

    public function edit($id) {
        $composer = Composer::find($id);
        if(!$composer) abort(404);
        return view('webtools/composer/edit', ['composer' => $composer]);
    }
}
