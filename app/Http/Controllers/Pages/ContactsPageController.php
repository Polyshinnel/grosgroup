<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class ContactsPageController extends Controller
{
    public function __invoke()
    {
        return view('commonPages.Contacts');
    }
}
