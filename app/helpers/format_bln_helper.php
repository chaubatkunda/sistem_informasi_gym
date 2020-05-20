<?php
function bln_indo()
{
	$bln = date('M');
	$nama_bln = "";
	if ($bln == "January") {
		$nama_bln = "Januari";
	} elseif ($bln == "February") {
		$nama_bln = "Februari";
	} elseif ($bln == "March") {
		$nama_bln = "Maret";
	} elseif ($bln == "April") {
		$nama_bln = "April";
	} elseif ($bln == "May") {
		$nama_bln = "Mei";
	} elseif ($bln == "June") {
		$nama_bln = "Juni";
	} elseif ($bln == "July") {
		$nama_bln = "Juli";
	} elseif ($bln == "August") {
		$nama_bln = "Agustus";
	} elseif ($bln == "September") {
		$nama_bln = "September";
	} elseif ($bln == "October") {
		$nama_bln = "Oktober";
	} elseif ($bln == "November") {
		$nama_bln = "November";
	} elseif ($bln == "December") {
		$nama_bln = "Desember";
	}
	return $nama_bln;
}
// "1" => "January", "2" => "February", "3" => "March", "4" => "April",
//                     "5" => "May", "6" => "June", "7" => "July", "8" => "August",
//                     "9" => "September", "10" => "October", "11" => "November", "12" => "December",
