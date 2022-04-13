<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.contact ');
        //->with('contact', Contact::orderBy('updated_at', 'DESC')->get());
    }

    public function store(Request $request)
    {
       
        Post::create([
            'commentsName' => $request->input('commentsName'),
            'slug' => SlugService::createSlug(Contact::class, 'slug', $request->commentsName),
            'commentsEmail' => $request->input('commentsEmail'),
            'commentsPhone' => $request->input('commentsPhone'),
            'commentsMessage' => $request->input('commentsMessage'),
           
        ]);

        return redirect('/confirmSubmit')
            ->with('message', 'Your Comment has been sent to an admin');
    }
}
