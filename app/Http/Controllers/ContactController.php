<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\CompanyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return view('admin.contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //if fail then return back with errors ajax response
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'postal_code' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route('contact')->with('message',  $validator->errors()->first());
        }
       
        $details = [
            'title' => ($request->name),
            'subject' => ($request->subject),
            'body' => ($request->message),
            'postal_code' => ($request->postal_code),
            'phone_number' => ($request->phone_number),
            'garage_door_repair' => ($request->garage_door_repair),
            'garage_opener_installation' => ($request->garage_opener_installation),
            'door_out_of_tracks' => ($request->door_out_of_tracks),
            'garage_door_installation' => ($request->garage_door_installation),
            'other' => ($request->other),
            'email' => ($request->email),
        ];

        $data = Contact::create($request->all());
        try{

            Mail::to($request->email)->send(new CompanyMail($details));
        }
        catch(\Exception $e){
            return redirect()->route('contact')->with('message', 'Your message has been received. We will contact you soon.');
        }
        return redirect()->route('contact')->with('message', 'Your message has been received. We will contact you soon.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')->with('success', 'Contact has been deleted');
    }
}
