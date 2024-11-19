<?php

namespace App\Http\Controllers\Pages\Service;

use App\Http\Controllers\BasePageController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ElectricalPageController extends BasePageController
{
    public function __invoke(Request $request)
    {
        $pageInfo = $this->getPageInfo($request);
        return view('commonPages.Services.Electrical', ['pageInfo' => $pageInfo]);
    }
}
