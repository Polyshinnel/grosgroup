<?php

namespace App\Http\Controllers\Pages\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlumberPageController extends Controller
{
    public function __invoke()
    {
        return view('commonPages.Services.Plumber');
    }
}
