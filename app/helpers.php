<?php

function getEstimateReadingTime($content, $wpm = 200) {
    $wordCount = str_word_count(strip_tags($content));

    $minutes = (int) floor($wordCount / $wpm);
    $seconds = (int) floor($wordCount % $wpm / ($wpm / 60));


    if ($minutes === 0) {
        return "{$seconds} s";
    }
    else {
        return "{$minutes} min";
    }
}