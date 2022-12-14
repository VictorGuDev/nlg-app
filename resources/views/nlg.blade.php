<?php

    $keyName = 'year';
    $valueName = 'number of leavers';
    $absenceAnalysis = [
        2016 => 1,
        2017 => 34,
        2018 => 20,
        2019 => 41,
        2020 => 30,
    ];
    var_dump(max($absenceAnalysis));
    var_dump(array_search(max($absenceAnalysis), $absenceAnalysis));
    var_dump(array_search(min($absenceAnalysis), $absenceAnalysis));
    var_dump(array_key_first($absenceAnalysis));
    var_dump(array_key_last($absenceAnalysis));
