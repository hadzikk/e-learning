<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Module;
use App\Models\Quiz;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
        // Mengambil semua data course sebagai contoh
        $courses = Course::all();
        $user = auth()->user();
        
        return view('user.home', compact('user' ,'courses'));
    }
}
