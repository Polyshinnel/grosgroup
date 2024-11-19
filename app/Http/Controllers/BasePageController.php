<?php

namespace App\Http\Controllers;

use App\Models\PageInfo;
use Illuminate\Http\Request;

class BasePageController extends Controller
{
    public function getPageInfo(Request $request): array
    {
        $pageName = $request->path();
        $pageInfo = PageInfo::where(['address' => $pageName])->first();
        if($pageInfo){
            return [
                'title' => $pageInfo->title,
                'description' => $pageInfo->description,
                'canonical' => $request->url()
            ];
        }

        return [];
    }
}
