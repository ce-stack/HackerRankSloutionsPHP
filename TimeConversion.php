<?php
function timeConversion($s)
{

    if (strpos($s, 'PM')) {
        $trimmed = trim($s, "PM");
        $newTime = explode(":", $trimmed);
        $newS = (int)$newTime[0];
        $convertedTime =  ((int)$newTime[0] == 12) ?  ($newS) . ":" . $newTime[1] . ":" . $newTime[2]  : ($newS + 12) . ":" . $newTime[1] . ":" . $newTime[2];
        return  $convertedTime;
    } elseif (strpos($s, 'AM')) {
        $trimmeded = trim($s, "AM");
        $newTimed = explode(":", $trimmeded);
        if ($newTimed[0] == 12) {
            $newTimedBeforeFinal = implode("", $newTimed);
            $str_to_replace = "00";
            $newStr = $str_to_replace . substr($newTimedBeforeFinal, 2);
            $str = $newStr;
            $pos = 2;
            $val = ":";
            $posNew = 5;
            $valNew = ":";
            $newTimedFinal = str_split($newStr);
            $result = array_merge(array_slice($newTimedFinal, 0, $pos), array($val), array_slice($newTimedFinal, $pos));
            $resultNew = array_merge(array_slice($result, 0, $posNew), array($valNew), array_slice($result, $posNew));
            $newTime = implode($resultNew);
            return $newTime;
        } else if ($newTimed[0] < 12) {
            $newTimedBeforeFinal = implode("", $newTimed);
            $str_to_replace = $newTimed[0];
            $newStr = $str_to_replace . substr($newTimedBeforeFinal, 2);
            $str = $newStr;
            $pos = 2;
            $val = ":";
            $posNew = 5;
            $valNew = ":";
            $newTimedFinal = str_split($newStr);
            $result = array_merge(array_slice($newTimedFinal, 0, $pos), array($val), array_slice($newTimedFinal, $pos));
            $resultNew = array_merge(array_slice($result, 0, $posNew), array($valNew), array_slice($result, $posNew));
            $newTime = implode($resultNew);
        }
        return $newTime;
    }
}

timeConversion("12:40:22AM");
