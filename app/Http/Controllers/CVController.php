<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Support\Facades\Auth;

class CVController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cv = CV::where('user_id', $user->id)->get();
        return view('cv.index', compact('cv'));
    }
}
