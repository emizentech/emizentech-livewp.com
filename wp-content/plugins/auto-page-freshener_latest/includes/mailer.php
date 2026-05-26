<?php
add_action('phpmailer_init', function($phpmailer) {
    $host = get_option('apf_smtp_host');
    $port = get_option('apf_smtp_port');
    $username = get_option('apf_smtp_user');
    $password = get_option('apf_smtp_pass');
    $secure = get_option('apf_smtp_secure');
    $from_email = get_option('apf_smtp_from_email');
    $from_name = get_option('apf_smtp_from_name');

    if (!$host || !$username || !$password || !$from_email) {
        return; // Don't override if not configured
    }

    $phpmailer->isSMTP();
    $phpmailer->Host = $host;
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = $port ?: 587;
    $phpmailer->Username = $username;
    $phpmailer->Password = $password;
    $phpmailer->SMTPSecure = $secure ?: 'tls';

    $phpmailer->From = $from_email;
    $phpmailer->FromName = $from_name ?: 'Auto Page Freshener';
});
