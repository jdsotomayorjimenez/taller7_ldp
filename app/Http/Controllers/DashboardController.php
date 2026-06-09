<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Interes;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPersonas = Persona::count();
        $totalIntereses = Interes::count();
        $totalUsuarios = User::count();

        return view('dashboard', compact(
            'totalPersonas',
            'totalIntereses',
            'totalUsuarios'
        ));
    }
}