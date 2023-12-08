<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\Advert;
use App\Models\Listing;
use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ResizeImage;
use Intervention\Image\Image;

class ListingController extends Controller
{
    // show all adverts and listings
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::with('products')->latest()->filter(request(['tag', 'search']))->simplePaginate(10),
            'adverts' => Advert::inRandomOrder()->filter()->get()
        ]);
    }

    // show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // show create listing form
    public function create()
    {
        return view('listings.create');
    }

    // store listing data
    public function store(Request $request)
    {
        // validate the listings input fields
        $formFields = $request->validate([
            'company' => 'required',
            'category' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'mobile' => 'required',
            'location' => 'required',
            'website' => 'url',
            'logo' => 'required',
            'description' => 'required',
        ]);

        // validate the array products fields, if many
        $request->validate(
            [
                'inputs.*.loan_type' => 'required',
                'inputs.*.loan_name' => 'required|max:255',
                'inputs.*.interest_rate' => 'required',
                'inputs.*.amount_range' => 'required',

            ],
            [
                'inputs.*.loan_type' => 'The loan type is required',
                'inputs.*.loan_name' => 'The loan name is required',
                'inputs.*.interest_rate' => 'The interest rate is required',
                'inputs.*.amount_range' => 'The loan range is required',
            ]
        );

        // move the logo file to the 'logos' directory, if file upload exists
        if ($request->hasFile('logo')) {
            // ResizeImage::make($request->file('logo'))->resize(100, 100)->store('logos', 'public');
            // $formFields['logo'] = new Image();
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // grab the user id, only if the user is logged in
        $formFields['user_id'] = auth()->id();

        // insert the record into the database 'listings' table
        $listing = Listing::create($formFields);

        // insert corresponding products/services into products table, with listing 'id'
        foreach ($request->inputs as $key => $value) {
            $value['listing_id'] = $listing['id'];
            Product::create($value);
        }

        // notify the user of successful addition
        return redirect('/')->with('message', 'Listing created successfully');
    }

    // edit listing data
    public function edit(Listing $listing)
    {
        // allow only listing owner to edit a listing
        if ($listing->user_id != auth()->id()) {
            // abort(403, 'You are not allowed to edit this listing');
            return back()->with('message', 'Only the owner can update this listing!');
        }

        // show edit form
        return view('listings.edit', [
            'listing' => $listing
        ]);
    }

    // store updated listing data
    public function update(Request $request, Listing $listing, Product $product)
    {
        // validate the listings input fields
        $formFields = $request->validate([
            'company' => 'required',
            'category' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'mobile' => 'required',
            'location' => 'required',
            'website' => 'url',
            'logo' => 'required',
            'description' => 'required',
        ]);

        // validate the array products fields, if many
        $request->validate(
            [
                'inputs.*.loan_type' => 'required',
                'inputs.*.loan_name' => 'required|max:255',
                'inputs.*.interest_rate' => 'required',
            ],
            [
                'inputs.*.loan_type' => 'The loan type is required',
                'inputs.*.loan_name' => 'The loan name is required',
                'inputs.*.interest_rate' => 'The interest rate is required',
            ]
        );

        // move the logo file to the 'logos' directory, if file upload exists
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // update the record into the database 'listings' table
        $listing->update($formFields);

        // update corresponding products/services into products table, with listing 'id'
        foreach ($request->inputs as $key => $value) {
            $value['listing_id'] = $listing['id'];
            $product->update($value);
        }

        // notify the user of successful update
        return back()->with('message', 'Listing updated successfully');
    }

    // delete a listing
    public function destroy(Listing $listing)
    {
        // allow only listing owner to delete a listing
        if ($listing->user_id != auth()->id()) {
            abort(403, 'You are not allowed to delete this listing');
        }

        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted succesfully');
    }

    // manage listings
    public function manage()
    {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
