<?php

namespace App\Http\Controllers;

use App\Mail\SupportMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact-ltr');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_ltr()
    {
        return view('contact-ltr');
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create_rtl()
    {
        return view('contact-rtl');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
           'name' => 'required|string',
           'email' => 'required|email',
           'body' => 'required|string',
           'phone' => 'required|string',
           'job' => 'required|string',
           'program' => 'required|string',
        ]);


        $subject = "Help Me Customer Support";

        $body = $data['body'];
        $params =[
            "name" => $data['name'],
            "phone" => $data['phone'],
            "email" => $data['email'],
            "job" => $data['job'],
            "program" => $data['program'],
        ];
    
        Mail::to('kareemhussen500@gmail.com')->send(new SupportMail($subject , $body , $params));

        return redirect()->back()->with('success', 'Email sent successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
