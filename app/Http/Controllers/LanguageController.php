<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class LanguageController extends Controller
{
    /**
     * return view
     *
     * @return view
     */
    public function view()
    {
        return view('language');
    }

    /**
     * Change language
     *
     * @param  \Illuminate\Http\Request $request
     * @return void
     */
    public function changeLanguage(Request $request)
    {
        $validated = $request->validate([
            'language' => 'required',
        ]);

        Session::put('language', $request->language);

        return redirect()->back();
    }
}