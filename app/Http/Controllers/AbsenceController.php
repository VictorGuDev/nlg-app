<?php

namespace App\Http\Controllers;

use App\Services\AbsenceService;

class AbsenceController extends Controller
{
    public function __construct(AbsenceService $absenceService)
    {
        $this->absenceService = $absenceService;
    }

    public function getAbsenceDescription(): string
    {
        $data = [
            2016 => 1,
            2017 => 34,
            2018 => 20,
            2019 => 41,
            2020 => 20,
            2021 => 33,
            2022 => 22,
        ];
        return $this->absenceService->getAbsenseDescription($data);
    }
}
