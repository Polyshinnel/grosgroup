<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\BasePageController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutPageController extends BasePageController
{
    public function __invoke(Request $request)
    {
        $pageInfo = $this->getPageInfo($request);
        return view('commonPages.About', ['pageInfo' => $pageInfo]);
    }
}
