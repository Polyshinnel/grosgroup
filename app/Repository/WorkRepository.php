<?php

namespace App\Repository;

use App\Models\Works;
use Illuminate\Database\Eloquent\Collection;

class WorkRepository
{
    public function getWorks(): ?Collection
    {
        return Works::all();
    }

    public function getWorkById(int $id): ?Works
    {
        return Works::find($id);
    }
}
