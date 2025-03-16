<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // Main 
    public function home() {
        return view('main.home');
    }

    public function signin() {
        return view('main.signin');
    }

    public function signup() {
        return view('main.signup');
    }

    // Driver
    public function driverHome() {
        return view('driver.driver');
    }

    public function driverJobs() {
        return view('driver.1driver');
    }

    public function driverCurrent() {
        return view('driver.2driver');
    }

    public function driverUpdate() {
        return view('driver.3driver');
    }

    public function driverProfile() {
        return view('driver.4driver');
    }

    public function driverCompleted() {
        return view('driver.5driver');
    }
    
}
