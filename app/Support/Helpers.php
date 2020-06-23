<?php

use Illuminate\Support\Facades\Session;

if (!function_exists("displayAlert")) {
    function flashMessage()
    {
        if (Session::has('message')) {
            list($type, $message) = explode('|', Session::get('message'));
            return '<div class="alert alert-'.$type.'">'.$message.'</div>';
        }
        return '';
    }
}
