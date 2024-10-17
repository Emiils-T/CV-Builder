<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CVController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cv = CV::where('user_id', $user->id)->get();
        return view('cv.index', compact('cv'));
    }
    public function create()
    {
        return view('cv.create');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }


}
