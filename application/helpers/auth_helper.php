<?php

function has_login()
{
	$ci = get_instance();
	if ($ci->session->userdata('logged_in')) {
		redirect('tables');
	}
}
function has_logout()
{
	$ci = get_instance();
	if (!$ci->session->userdata('logged_in')) {
		redirect('user/login');
	}
}

?>


