<?php

namespace App\Http\Controllers;

use App\Services\AvgTimeToHireService;

class AvgTimeToHireController
{
    public function __construct(AvgTimeToHireService $service)
    {
        $this->service = $service;
    }

    public function getDescription(): string
    {
        $data = [];
        return $this->service->getDescription($data);
    }

}
