<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Report;

class ReportController extends Controller
{
    public function index()
    {
        $items = Report::paginate(10);
        return view('pages.admin.adminreport', compact('items'));
    }
}
