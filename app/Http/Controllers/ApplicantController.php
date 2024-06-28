<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicants = Applicant::all();
        return view('applicants.index', compact('applicants'));
    }

    public function create()
    {
        return view('applicants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:applicants',
            'status' => 'required'
        ]);

        Applicant::create($request->all());
        return redirect()->route('applicants.index');
    }

    public function show(Applicant $applicant)
    {
        return view('applicants.show', compact('applicant'));
    }

    public function edit(Applicant $applicant)
    {
        return view('applicants.edit', compact('applicant'));
    }

    public function update(Request $request, Applicant $applicant)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:applicants,email,'.$applicant->id,
            'status' => 'required'
        ]);

        $applicant->update($request->all());
        return redirect()->route('applicants.index');
    }

    public function destroy(Applicant $applicant)
    {
        $applicant->delete();
        return redirect()->route('applicants.index');
    }
}
