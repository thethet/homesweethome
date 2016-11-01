<?php

/* Checking the site authentication */
if (!function_exists('isLogin')) {

    function isLogin() {
        $CI = &get_instance();
        if ($CI->session->userdata('username') && $CI->session->userdata('id')) {
            return true;
        }
        return false;
    }

}


function get_current_url()
{
    $CI =& get_instance();

    $url = $CI->config->site_url($CI->uri->uri_string());
    return $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url;
}





?>