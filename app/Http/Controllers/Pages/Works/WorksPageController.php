<?php

namespace App\Http\Controllers\Pages\Works;

use App\Http\Controllers\Controller;

class WorksPageController extends Controller
{
    public function __invoke()
    {
        return view('commonPages.Works.Works');
    }
}
