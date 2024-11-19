<?php

namespace App\Http\Controllers\Pages\Installation;

use App\Http\Controllers\BasePageController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VentilationInstallationController extends BasePageController
{
    public function __invoke(Request $request)
    {
        $pageInfo = $this->getPageInfo($request);
        return view('commonPages.Installation.Ventilation', ['pageInfo' => $pageInfo]);
    }
}
