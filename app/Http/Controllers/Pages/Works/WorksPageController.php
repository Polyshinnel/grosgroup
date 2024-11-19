<?php

namespace App\Http\Controllers\Pages\Works;

use App\Http\Controllers\BasePageController;
use App\Http\Controllers\Controller;
use App\Service\WorkService;
use Illuminate\Http\Request;

class WorksPageController extends BasePageController
{
    private WorkService $service;

    public function __construct(WorkService $service)
    {
        $this->service = $service;
    }

    public function __invoke(Request $request)
    {
        $pageInfo = $this->getPageInfo($request);
        $works = $this->service->getWorks();
        return view('commonPages.Works.Works', ['pageInfo' => $pageInfo, 'works' => $works]);
    }
}
