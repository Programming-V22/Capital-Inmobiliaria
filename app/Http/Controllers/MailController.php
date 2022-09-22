<?php

namespace App\Http\Controllers;
use App\Mail\EnviaMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MailController extends Controller
{
    public function getMail(Request $request){


        Mail::to('jclaros6321@gmail.com')->send(new EnviaMail($request->all()));

        return redirect('/mailenviado');

    }
}
