<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    function index(Request $r) {
        if (session("user") != null) {
            return view("home");
        } else {
            return redirect()->route("index")->with("msg", "Please login again to continue");
        }
    }
}
