<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Composer;

class WebtoolsController extends Controller
{
    public function composer() {
        $composers = Composer::all();
        return view('webtools/composer/home', ['composers' => $composers]);
    }

    public function show($id) {
        $composer = Composer::find($id);
        return view('webtools/composer/single', ['composer' => $composer]);
    }
}
