<?php

namespace App\Contracts;

interface AbsenceInterface
{
    public function getMax(array $absence): int;
    public function getMin(array $absence): int;
    public function getMaxAbsenceYear(array $absence): int;
    public function getMinAbsenceYear(array $absence): int;
    public function getFirstYear(array $absence): int;
    public function getLastYear(array $absence): int;
}
