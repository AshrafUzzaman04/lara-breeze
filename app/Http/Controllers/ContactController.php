<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validate =    $request->validate([
            "name" => "required|alpha:ascii|min:2|max:100",
            "message" => "required",
        ]);

        $ip = $request->ip();


        log::channel("contact")->info("IP Address:$ip; Name:$request->name; Message:$request->message");

        return redirect()->back()->with("msg", "successfull");
    }
}
