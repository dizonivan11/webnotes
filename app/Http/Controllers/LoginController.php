<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class LoginController extends Controller {
    function Index(Request $r) {
        $r->session()->forget("user");
        return view("index");
    }

    function Register(Request $r) {
        $userId = $r->input("user-id");
        $userPass = $r->input("user-pass");
        if (Account::where("user-id", $userId)->count() < 1) {
            $account = new Account;
            $account->setAttribute("user-id", $userId);
            $account->setAttribute("user-pass", $userPass);
            $account->setAttribute("user-online", false);
            $account->save();
            return back()->with(["msg" => "Account created"])->with(["msg-mood" => "good"]);
        } else {
            return back()->with(["msg" => "Account already exists"]);
        }
    }

    function Login(Request $r) {
        $userId = $r->input("user-id");
        $userPass = $r->input("user-pass");
        if (Account::where("user-id", $userId)->count() > 0) {
            $account = Account::where("user-id", $userId)->first();
            $user = $account->getAttribute("user-id");
            if ($account->getAttribute("user-pass") != $userPass) {
                return back()->with(["msg" => "Incorrect username or password"]);
            }
            $r->session()->put("user", $user);
            return redirect()->route("home");
        } else {
            return back()->with(["msg" => "Incorrect username or password"]);
        }
    }
}