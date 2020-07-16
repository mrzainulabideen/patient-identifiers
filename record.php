<?php

function solution($id): string
{
    if (stripos($id, "record") === false) {
        return $id;
    }

    $exploded = [];

    if (stripos($id, "-") !== false) {
        $exploded = explode("-", $id);
    } else if (stripos($id, "_") !== false) {
        $exploded = explode("_", $id);
    } else {
        array_push($exploded, substr($id, stripos($id, "record"), stripos($id, "record") + 6));
        array_push($exploded, substr($id, stripos($id, "record") + 6, strlen($id) - 1));
    }

    $recordIndex = 0;
    foreach ($exploded as $key => $value) {
        if (stripos($value, "record") !== false)
            $recordIndex = $key;
    }

    $pad = strlen($exploded[$recordIndex + 1]);

    $exploded[$recordIndex + 1] = str_pad(++$exploded[$recordIndex + 1], $pad, "0", STR_PAD_LEFT);

    if (stripos($id, "-") !== false) {
        return implode("-", $exploded);
    } else if (stripos($id, "_") !== false) {
        return implode("_", $exploded);
    } else {
        return implode("", $exploded);
    }
}

echo solution("Record1") . PHP_EOL;
echo solution("Record_15") . PHP_EOL;
echo solution("Site_5_Record_7") . PHP_EOL;
echo solution("Site_5_Record_002") . PHP_EOL;
echo solution("Record_002_Site_2") . PHP_EOL;
