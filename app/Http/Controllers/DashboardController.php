<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('dashboard', [
            'users' => User::all()
        ]);
    } 
}
