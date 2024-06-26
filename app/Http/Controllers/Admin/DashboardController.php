<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TravelPackage;
use App\Transaction;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $TravelPackage = TravelPackage::count();
        $Transaction = Transaction::count();
        $TransactionPending = Transaction::where('transaction_status', 'PENDING')->count();
        $TransactionSuccess = Transaction::where('transaction_status', 'SUCCESS')->count();
        return view('pages.admin.dashboard',[
            'TravelPackage' => $TravelPackage,
            'Transaction' => $Transaction,
            'TransactionPending' => $TransactionPending,
            'TransactionSuccess' => $TransactionSuccess
        ]);
    }
}
