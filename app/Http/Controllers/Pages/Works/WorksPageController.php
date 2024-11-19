<?php

namespace App\Http\Controllers\Pages\Works;

use App\Http\Controllers\BasePageController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorksPageController extends BasePageController
{
    public function __invoke(Request $request)
    {
        $pageInfo = $this->getPageInfo($request);
        return view('commonPages.Works.Works', ['pageInfo' => $pageInfo]);
    }
}
