<?php

namespace App\Http\Controllers\Pages\Installation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ElectricalShieldInstallationController extends Controller
{
    public function __invoke()
    {
        return view('commonPages.Installation.Electrical-shield');
    }
}
