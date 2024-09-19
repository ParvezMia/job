<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Validator;

class QuoteController extends Controller
{
    //

    public function index()
    {
        $quotes = Quote::paginate(10);
        return view('backend.quote.quote-request', compact('quotes'));
    }


    public function store(ContactFormRequest $request) {
        $request = $request->validated();
        $request['status'] = 'pending';
        Quote::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'zip' => $request['zip'],
            'message' => $request['message'],
            'status' => $request['status'],
        ]);

        notyf()
        ->position('x', 'right')
        ->position('y', 'top')
        ->addSuccess('Your quote request has been submitted successfully.');

        return redirect()->route('contact-us');
    }

}
