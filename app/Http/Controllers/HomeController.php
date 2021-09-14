<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Mail\MessageMail;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function welcome()
    {
        $products = Product::all();
        return view('welcome',compact('products'));
    }
    
    public function contact(MessageRequest $request)
    {
        $contact = Contact::create($request->all());

        $contact->save();

        Mail::to('info@surfers.co')->send(new MessageMail($contact));
        return redirect()->back()->with('message','Messaggio inviato con successo');
    }
}
