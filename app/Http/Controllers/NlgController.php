<?php

namespace App\Http\Controllers;

use App\Services\PositionCostService;
use App\Services\AbsenceService;
use App\Services\AvgTimeToHireService;

class NlgController
{
    public function __construct(
        PositionCostService $positionCostService,
        AbsenceService $absenceService,
        AvgTimeToHireService $avgTimeToHireService
    ) {
        $this->positionCostService = $positionCostService;
        $this->absenceService = $absenceService;
        $this->avgTimeToHireService = $avgTimeToHireService;
    }

    public function getNlg(): string
    {
        return view('nlg', [
            'avgTimeToHireMsg' => $this->avgTimeToHireService->getDescription(),
            'absenceMsg' => $this->absenceService->getDescription(),
            'positionCostMsg' => $this->positionCostService->getDescription(),
        ]);
    }

}
