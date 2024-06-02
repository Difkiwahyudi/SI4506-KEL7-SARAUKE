<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class ReportUserController extends Controller
{
    public function index()
    {
        return view('pages.report');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'issue' => 'required',
            
        ]);

        Report::create($validatedData);

        return redirect()->route('report');
    }
}
