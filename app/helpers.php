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

function convertToHoursMins($time)
{
    if ($time < 1) {
        return;
    }
    $hours = (int)floor($time / 60). 'h';
    $minutes = ($time % 60). 'min';
    return" $hours : $minutes";
}

function convertToSecondesMins($time)
{
    if ($time < 1) {
        return;
    }
    $minutes = ($time % 60);

    if ($minutes < 60) {
        return $minutes.'min';
    }elseif (condition) {
        # code...
    }

    return sprintf( $hours, $minutes);
}

