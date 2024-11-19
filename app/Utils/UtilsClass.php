<?php

namespace App\Utils;

class UtilsClass
{
    public function reformatDate(string $date, string $lang = 'en', bool $withTime = false): string
    {
        $dateArr = explode(" ", $date);
        $date = $dateArr[0];

        $time = '00:00:00';
        $returnedDate = '';
        if (isset($dateArr[1])) {
            $time = $dateArr[1];
        }

        if($lang == 'en'){
            $date = explode('.', $date);
            $returnedDate = sprintf("%s-%s-%s", $date[2], $date[1], $date[0]);
        }else{
            $date = explode('-', $date);
            $returnedDate = sprintf("%s.%s.%s", $date[2], $date[1], $date[0]);
        }

        if($withTime){
            $returnedDate .= ' ' . $time;
        }

        return $returnedDate;
    }
}
