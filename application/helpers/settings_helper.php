<?php

function is_logged()
{
    $log = &get_instance();
    if (empty($log->session->userdata('loggedin'))) {
        redirect('backend/login');
    }
}
