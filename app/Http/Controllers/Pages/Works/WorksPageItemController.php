<?php

namespace App\Http\Controllers\Pages\Works;

use App\Http\Controllers\Controller;

class WorksPageItemController extends Controller
{
    public function __invoke()
    {
        return view('commonPages.Works.WorksItem');
    }
}
