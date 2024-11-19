<?php

namespace App\Service;

use App\Repository\WorkRepository;
use App\Utils\UtilsClass;

class WorkService
{
    private WorkRepository $workRepository;
    private UtilsClass $utilsClass;

    public function __construct(WorkRepository $workRepository, UtilsClass $utilsClass){
        $this->workRepository = $workRepository;
        $this->utilsClass = $utilsClass;
    }

    public function getWorks(): array
    {
        $works = $this->workRepository->getWorks();
        $formattedWorks = [];

        if(!$works->isEmpty()){
            foreach($works as $work){
                $formattedWorks[] = [
                    'id' => $work->id,
                    'title' => $work->title,
                    'type_work' => $work->type_work,
                    'thumbnail' => $work->thumbnail,
                ];
            }
        }

        return $formattedWorks;
    }

    public function getWorkById(int $id): array
    {
        $work = $this->workRepository->getWorkById($id);
        $workImg = $work->worksImages;
        $clearImg = [];
        if(!$workImg->isEmpty()) {
            foreach ($workImg as $item) {
                $clearImg[] = $item->img;
            }
        }
        return [
            'page_info' => [
                'title' => $work->title,
                'description' => $work->description_tag,
                'canonical' => ''
            ],
            'page_data' => [
                'title' => $work->title,
                'description' => $work->description,
            ],
            'images' => $clearImg
        ];
    }

}
