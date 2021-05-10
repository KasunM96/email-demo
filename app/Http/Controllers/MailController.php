<?php

namespace App\Http\Controllers;

use App\Mail\emailbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendMail()
   {    
        Mail::to('ksmrox123@gmail.com')->send(new emailbox());
   }
}
