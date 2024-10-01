<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user()->load('viewState', 'viewCity');
        return view('dashboard', compact('user'));
    }

    // public function sendEmail(Request $request)
    // {
    //     $user = User::find($request->email);
    //     $user->sendEmailNotification($request->subject, $request->message);
    //     return back()->with('success', 'Email sent successfully!');
    // }
}
