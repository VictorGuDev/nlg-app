<?php

namespace App\Http\Controllers;

use App\Services\AbsenceService;

class AbsenceController extends Controller
{
    public function __construct(AbsenceService $service)
    {
        $this->service = $service;
    }

    public function getDescription(): string
    {
        $data = [
            2016 => 1,
            2017 => 34,
            2018 => 20,
            2019 => 41,
            2020 => 20,
        ];
        return $this->service->getDescription($data);
    }
}
