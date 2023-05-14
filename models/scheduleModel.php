<?php

require_once 'models/schedules.php';

function displaySchedulesLayout ($schedules) {
    foreach ($schedules as $day => $hours) {
        echo '<li><h6>' . $day . '</h6>';

        if ($hours === NULL) {
            echo 'FERME';
        } else {

            foreach ($hours as $hour) {
                echo  $hour[0] . 'h à ' . $hour[1] . 'h </br>';
                }
            } echo '</h4>';
        }
    }
    $i = -1;
    function displaySchedulesOffice ($schedules, $i) {
        foreach ($schedules as $day => $hours) {
            $i++;
            echo '<li><h6>' . $day . '</h6>';
    
            if ($hours === NULL) {
                echo 'FERME';
            } else {
    
                foreach ($hours as $hour) {
                    echo  $hour[0] . 'h à ' . $hour[1] . 'h </br>';
                    }
                }

            }
        } ?>