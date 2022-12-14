<?php

namespace App\Http\Controllers;

use App\Services\PositionCostService;

class PositionCostController
{
    public function __construct(PositionCostService $service)
    {
        $this->service = $service;
    }

    public function getDescription(): string
    {
        $data = [];
        return $this->service->getDescription($data);
    }

}
