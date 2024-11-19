<?php

namespace App\Http\Controllers\Pages\Works;

use App\Http\Controllers\Controller;
use App\Service\WorkService;

class WorksPageItemController extends Controller
{
    private WorkService $service;

    public function __construct(WorkService $service)
    {
        $this->service = $service;
    }

    public function __invoke(int $work)
    {
        $workInfo = $this->service->getWorkById($work);
        $currentUrl = url()->current();
        $workInfo['page_info']['canonical'] = $currentUrl;
        return view('commonPages.Works.WorksItem', ['work' => $workInfo, 'pageInfo' => $workInfo['page_info']]);
    }
}
