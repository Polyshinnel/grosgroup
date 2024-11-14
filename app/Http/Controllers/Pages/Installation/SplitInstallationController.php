<?php

namespace App\Http\Controllers\Pages\Installation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SplitInstallationController extends Controller
{
    public function __invoke()
    {
        return view('commonPages.Installation.Split');
    }
}
