<?php

    $connect = mysqli_connect("localhost", "root", "", "eas_pweb");

    if (mysqli_connect_errno()) {
        echo "Error".mysqli_connect_error();
    }