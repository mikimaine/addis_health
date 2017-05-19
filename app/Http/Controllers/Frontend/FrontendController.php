<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Newsletter\Newsletter;
use Illuminate\Support\Facades\Mail;

/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function email(Request $request)
    {
//        dd($request->all());
        $news = new Newsletter();
        $news->email = $request->email;
        $news->save();

        return redirect()->route('frontend.index')->withFlashSuccess("You have successfully subscribed to our News letter,Thank You!");
    }
    public function contact(Request $request)
    {

        Mail::send('email.contact', ['from' => $request->email,'name'=>$request->name, 'messages' => $request->message], function ($message)
        {
            $message->from('contact@sew.gebeya.com', 'sew.gebeya.com');
            $message->to('sew.gebeya@gmail.com')->subject('Contact Form on Sew');
        });

        return redirect()->route('frontend.index')->withFlashSuccess("You have successfully sent contact and notices,Thank You!");
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
