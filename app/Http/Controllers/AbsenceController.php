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
        return $this->service->getDescription();
    }
}
