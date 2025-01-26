<?php
use Carbon\Carbon;


if (! function_exists('dateFormate')) {
    function dateFormate($date)
    {
        return Carbon::parse($date)->format('M d g:i A');
    }
}

?>