<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
     public function index()
    {
        $contacts = Contact::latest()->paginate(10); // Fetch all contacts with pagination
        return view('contact.index', compact('contacts'));

    }
    public function store(Request $request)
    {
          $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

      if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

         if($request->input('captcha') != 12){
              return redirect()->back()
                ->withErrors(['captcha' => 'The captcha is incorrect'])
                    ->withInput();
         }

        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Terima kasih! Pesan Anda telah dikirim.');
    }

    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')->with('success', 'Contact Berhasil dihapus');
    }
    public function create()
    {
        return view('contact.create');
    }
}
