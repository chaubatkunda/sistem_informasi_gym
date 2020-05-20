<?php
function is_login()
{
	$log = &get_instance();
	$user_session = $log->session->userdata('id');
	$user_sessionl = $log->session->userdata('level');
	if ($user_session) {
		if ($user_sessionl == 1) {
			redirect('dashboard');
		} elseif ($user_sessionl == 2) {
			redirect('user');
		}
	}
}

function not_login()
{
	$log = &get_instance();
	$user_session = $log->session->userdata('id');
	if (!$user_session) {
		redirect('auth');
	}
}
function chek_admin()
{
	$log = &get_instance();
	if ($log->fungsi->user_login()['level'] != 1) {
		redirect('user');
	}
}
function chek_user()
{
	$log = &get_instance();
	if ($log->fungsi->user_login()['aktif'] != 1) {
		$log->session->unset_userdata('id');
		$log->session->unset_userdata('username');
		$log->session->unset_userdata('level');
		redirect('auth');
	}
}
function Rp($value)
{
	return "Rp" . number_format($value, 0, ",", ".");
}
function indoDate($date)
{
	$d = substr($date, 8, 2);
	$m = substr($date, 5, 2);
	$y = substr($date, 0, 4);
	return $d . "-" . $m . "-" . $y;
}
function indoTime($value)
{
	return date('H:i', strtotime($value));
}
function indoDateTime($value)
{
	return date('d-m-Y, H:i', strtotime($value));
}

function gettimeplus($val)
{
	$time = date("H:i", strtotime($val));
	$dateJmPki = date_create($time);
	date_add($dateJmPki, date_interval_create_from_date_string('+2 hours'));
	return date_format($dateJmPki, 'H:i');
}
