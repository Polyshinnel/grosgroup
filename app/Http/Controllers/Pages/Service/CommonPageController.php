<?php

namespace App\Http\Controllers\Pages\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommonPageController extends Controller
{
    public function __invoke()
    {
        return view('commonPages.Services.Common');
    }
}
