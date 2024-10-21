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
    //TODO: add cv.show blade view
    //TODO: add cv.edit blade view
    public function show($id)
    {

    }

    public function create()
    {
        return view('cv.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|max:255',
            'phoneNumber' => 'required|max:255',
            'dateOfBirth' => 'required|date',
            'address' => 'max:255',
            'experience' => 'string',
            'education' => 'required|string',
            'languages' => 'required|string',
            'skills' => 'string',
        ]);

        $user = Auth::user();
        $cv = $user->cv()->create($validated);
        return redirect('cv.index',compact('cv'));
    }

    public function edit(CV $cv)
    {
        return view('cv.edit', compact('cv'));
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'firstName' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|max:255',
            'phoneNumber' => 'required|max:255',
            'dateOfBirth' => 'required|date',
            'address' => 'max:255',
            'experience' => 'string',
            'education' => 'required|string',
            'languages' => 'required|string',
            'skills' => 'string',
        ]);
        $cv = CV::where('id', $id);

        $cv->update($validated);
        return redirect('cv.show', compact('cv'));
    }

    public function destroy($id)
    {
        $cv = CV::where('id', $id)->first();
        $cv->delete();
    }


}
