<?php

namespace App\Http\Controllers;

use App\Mail\kirimEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class kirimEmailController extends Controller
{
    public function index(){
        Mail::to("ilham.teguh55@gmail.com")->send(new kirimEmail());
        return '<h1>Sukses mengirimkan email<h1>';
    }
}