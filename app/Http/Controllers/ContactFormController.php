<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Listing;
use Illuminate\Http\Request;
use App\Mail\contact as MailContact;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    // show the contact form
    public function createForm(Request $request, Listing $listing)
    {
        return view('listings.contact', [
            'listing' => $listing
        ]);
    }

    // store form data
    public function ContactForm(Request $request, Listing $listing)
    {
        //validate the inputs
        $this->validate($request, [
            'product' => 'required',
            'loan_amount' => 'required',
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'national_id' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:13',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'email' => 'required|email',
            'address' => 'required|max:255',
            'employer' => 'required|max:255',
            'employer_contact' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'designation' => 'required|max:255',
            'income_amount' => 'required',
            'notes' => 'max:1000',
        ]);

        //insert into database
        $request['listing_id'] = $listing['id'];    
        Contact::create($request->all());

        $data = [
            'product' => $request->get('product'),
            'loan_amount' => $request->get('loan_amount'),
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'national_id' => $request->get('national_id'),
            'phone_number' => $request->get('phone_number'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'employer' => $request->get('employer'),
            'employer_contact' => $request->get('employer_contact'),
            'designation' => $request->get('designation'),
            'income_amount' => $request->get('income_amount'),
            'notes' => $request->get('notes'),
        ];

        Mail::to($listing->email, 'Website User')->bcc('digimage@salvtec.co.sz')->send(new MailContact($data));

        // redirect to homepage and return success message
        return redirect('/')->with('message', 'We have receieved your application, and we will contact you shortly');
    }
}
