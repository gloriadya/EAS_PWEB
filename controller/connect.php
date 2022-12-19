<?php

    $connect = mysqli_connect("localhost", "root", "", "eas_pweb");

    if (mysqli_connect_errno()) {
        echo "ora konek cuk".mysqli_connect_error();
    }