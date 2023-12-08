<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;

class AdvertController extends Controller
{

    // show create form
    public function advert()
    {
        return view('adverts.create');
    }

    // show all adverts
    public function showAll()
    {
        return view('adverts.all', [
            'adverts' => Advert::latest()->get()
        ]);
    }

    // store the advert
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'advert_name' => 'required',
            'web_url' => 'required|url',
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('adverts', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Advert::create($formFields);

        return redirect('/')->with('message', 'Advert created, please wait for confirmation');
    }

    // approve and advert
    public function approve($id)
    {
        $advert = Advert::find($id);
        if ($advert) {
            $advert->approved = true;
            $advert->save();

            return back()->with('message', 'Advert has been approved');
        }
    }

    // delete an advert
    public function destroy(Advert $advert)
    {
        // allow only listing owner to delete a advert
        if ($advert->user_id != auth()->id()) {
            abort(403, 'You are not allowed to delete this advert');
        }

        $advert->delete();
        return redirect('/')->with('message', 'Advert deleted succesfully');
    }

    // manage a adverts
    public function manage()
    {
        return view('adverts.manage', ['adverts' => auth()->user()->adverts()->get()]);
    }
}
