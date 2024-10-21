<?php 
    namespace App;
    // app/helpers.php
    if (!function_exists('format_phone_number')) {
        function format_phone_number($phone_number) {
            // Remove non-numeric characters
            $phone_number = preg_replace('/[^0-9]/', '', $phone_number);

            // Ensure the phone number is exactly 10 digits long
            if (strlen($phone_number) == 10) {
                return substr($phone_number, 0, 3) . '-' . substr($phone_number, 3, 3) . '-' . substr($phone_number, 6);
            } else {
                return $phone_number;
            }
        }
    }


    if (!function_exists('clean_phone_number')) {
        function clean_phone_number($phone_number) {
            // Remove all non-numeric characters (dashes, spaces, parentheses, etc.)
            return preg_replace('/[^0-9]/', '', $phone_number);
        }
    }