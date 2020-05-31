<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	// ! User Login
	public function getUserLogin($username)
	{
		return $this->db->get_where('t_user', ['username' => $username])->row_array();
	}

	public function loginsession($session_user)
	{
		return $this->db->get_where('t_user', ['id' => $session_user])->row_array();
	}
	// ! End UserLogin

	// !Chek Member
	public function getChekMember($iduser)
	{
		$this->db->select('*');
		$this->db->from('t_user');
		$this->db->join('t_member', 't_member.id_user = t_user.id', 'left');
		$this->db->where('t_user.id', $iduser);
		return $this->db->get()->row();
	}
	// !End Chek Member

	// !User Paket
	public function getAllTransPaketById($id)
	{
		return $this->db->get_where('t_transpaket', ['kode_pembelian' => $id])->row();
	}
	public function getDetMyPaket($id)
	{
		return $this->db->get_where('t_transpaket', ['id_member' => $id])->result();
	}

	// ! User Fasilitas
	public function getDetMyFasilitas($id)
	{
		return $this->db->get_where('t_transfasilitas', ['id_member' => $id])->result();
	}
	public function getAllFasilitasByKet()
	{
		return $this->db->get_where('t_fasilitas', ['ket' => 1])->result();
	}




	// public function chekTanggalbooking($tglbk, $tgltr, $jamtr)
	// {
	// 	// $this->db->query("SELECT tgl_transfasilitas, tgl_booking, jam_mulai, jam_selesai, nama_fasilitas FROM t_transfasilitas WHERE tgl_transfasilitas='$tgltr' AND tgl_booking = '$tglbk' AND jam_mulai  ")->row_array();
	// 	$this->db->select('tgl_transfasilitas, tgl_booking, jam_mulai, jam_selesai, nama_fasilitas');
	// 	$this->db->from('t_transfasilitas');
	// 	$this->db->where('tgl_transfasilitas = ', $tgltr);
	// 	$this->db->where('tgl_booking =', $tglbk);
	// 	$this->db->where('jam_mulai >=', $jamtr);
	// 	$this->db->where('jam_selesai <=', $jamtr);
	// 	return $this->db->get()->row_array();
	// }

	// public function countFasilitas($namafas)
	// {
	// 	$this->db->select('fasilitas');
	// 	$this->db->from('t_fasilitas');
	// 	$this->db->where('fasilitas', $namafas);
	// 	return $this->db->get()->num_rows();
	// }
	// public function countTrFasilitas($namafas, $tglbk)
	// {
	// 	// $det = date('Y-m-d');
	// 	$this->db->select('nama_fasilitas, tgl_booking');
	// 	$this->db->from('t_transfasilitas');
	// 	$this->db->where('tgl_booking', $tglbk);
	// 	$this->db->where('nama_fasilitas', $namafas);
	// 	return $this->db->get()->num_rows();
	// }

	// public function getAllMyPaket($idmember)
	// {
	// 	$this->db->order_by('kode_pembelian', 'ASC');
	// 	return $this->db->get_where('t_transpaket', ['id_member' => $idmember])->result_array();
	// }

	// public function getAllMemberById($iduser)
	// {
	// 	return $this->db->get_where('t_member', ['id_user' => $iduser])->row_array();
	// }

	// public function daftarMember($transfer, $tunai, $edc)
	// {
	// 	$idus = $this->fungsi->user_login()['id'];
	// 	if ($transfer) {
	// 		# code...
	// 	} elseif ($tunai) {
	// 		$data = [
	// 			'id_member' => $this->input->post('idmem'),
	// 			'id_user' => $idus,

	// 			'notelp' => $this->input->post('notelp'),
	// 			'alamat' => $this->input->post('alamat')
	// 		];
	// 		$dupdat = [
	// 			'nama' => htmlspecialchars($this->input->post('nama', true)),
	// 			'level' => 2
	// 		];
	// 	} elseif ($edc) {
	// 		# code...
	// 	}
	// 	$this->db->update('t_user', $dupdat, ['id' => $idus]);
	// 	return $this->db->insert('t_member', $data);
	// }
	// public function simpanTransPaket($chektransfer, $chektunai, $chekedc)
	// {
	// 	$this->db->select_max('id_transp');
	// 	$queryTrPaket = $this->db->get('t_transpaket')->row_array();
	// 	$getIdTrPaket = $queryTrPaket['id_transp'] + 1;
	// 	$tglb = date('Y-m-d', strtotime($this->input->post('tgl_beli', true)));

	// 	// Direktory FileUpload
	// 	$config['upload_path']          = './public/assets/buktitransfer/';
	// 	$config['allowed_types']        = 'jpg|jpeg|png';
	// 	$config['max_size']             = 2048;
	// 	$this->load->library('upload', $config);
	// 	$this->upload->initialize($config);
	// 	if ($chektransfer == 1) {
	// 		if ($this->upload->do_upload('file_upload')) {
	// 			$config['overwrite'] = TRUE;
	// 			$upload_data = array('upload_data' => $this->upload->data());
	// 			$img = $upload_data['upload_data']['file_name'];
	// 			$dataPaket = [
	// 				'id_transp'			=> $getIdTrPaket,
	// 				'tgl_trans' 		=> $tglb,
	// 				'kode_pembelian' 	=> $this->input->post('kode-trans', true),
	// 				'id_member' 		=> htmlspecialchars($this->input->post('id_member', true)),
	// 				'nama_paket' 		=> htmlspecialchars($this->input->post('nama-pk')),
	// 				'harga_paket' 		=> htmlspecialchars($this->input->post('harga-pk')),
	// 				'ket_bayar' 		=> 2,
	// 				'bukti_pembayaran' 	=> $img
	// 			];
	// 			return $this->db->insert('t_transpaket', $dataPaket);
	// 		} else {
	// 			$error = $this->upload->display_errors('Gambar Tidak Dapat Diupload');
	// 			$this->session->set_flashdata('error', $error);
	// 			redirect('dashboard');
	// 		}
	// 	} elseif ($chektunai == 2) {
	// 		$dataPaket = [
	// 			'id_transp' => $getIdTrPaket,
	// 			'tgl_trans' => $tglb,
	// 			'kode_pembelian' => $this->input->post('kode-trans', true),
	// 			'id_member' => htmlspecialchars($this->input->post('id_member', true)),
	// 			'nama_paket' => htmlspecialchars($this->input->post('nama-pk')),
	// 			'harga_paket' => htmlspecialchars($this->input->post('harga-pk')),
	// 			'ket_bayar' => 2,
	// 			'bukti_pembayaran' => 'Tunai'
	// 		];
	// 		return $this->db->insert('t_transpaket', $dataPaket);
	// 	} elseif ($chekedc == 3) {
	// 		$dataPaket = [
	// 			'id_transp' => $getIdTrPaket,
	// 			'tgl_trans' => $tglb,
	// 			'kode_pembelian' => $this->input->post('kode-trans', true),
	// 			'id_member' => htmlspecialchars($this->input->post('id_member', true)),
	// 			'nama_paket' => htmlspecialchars($this->input->post('nama-pk')),
	// 			'harga_paket' => htmlspecialchars($this->input->post('harga-pk')),
	// 			'ket_bayar' => 2,
	// 			'bukti_pembayaran' => 'EDC'
	// 		];
	// 		return $this->db->insert('t_transpaket', $dataPaket);
	// 	}
	// }
	// public function simpanTransIsiPaket()
	// {
	// 	//* Data Array IsiPaket/Produk
	// 	$kode = $this->input->post('kode-trans', true);
	// 	$id_senam = $this->input->post('id_senam', true);
	// 	$jenis = $this->input->post('jenis_senam');
	// 	$kuota = $this->input->post('kuota');
	// 	$count = count($jenis);
	// 	for ($i = 0; $i < $count; $i++) {
	// 		$dataIsiPaket = [
	// 			'kode_pembelian' => $kode,
	// 			'id_senam' => $id_senam[$i],
	// 			'jenis_senam' => $jenis[$i],
	// 			'kuota' => $kuota[$i]
	// 		];
	// 		$this->db->insert('t_transisipaket', $dataIsiPaket);
	// 	}
	// }
	// public function simpanTglTransisiPaket()
	// {
	// 	//! 0823-6098-7023
	// 	$kdtrs = $this->input->post('kode-trans');
	// 	$id_senam = $this->input->post('id_senam');
	// 	$tgl = $this->input->post('tgl');
	// 	$jam_mulai = $this->input->post('jam_mulai');
	// 	$jam_selesai = $this->input->post('jam_selesai');
	// 	if (count($tgl) > count($id_senam)) {
	// 		print_r("Ya");
	// 	} else {
	// 		print_r("Tidak");
	// 	}
	// 	die;
	// 	// $cn = count($tgl);
	// 	for ($i = 0; $i < count($tgl); $i++) {
	// 		$this->db->query("INSERT INTO t_transisipaket_det (id_senam,kode_pembelian,tgl_mulai,jam_mulai,jam_selesai)VALUES('$kdtrs','$tgl[$i]','$jam_mulai[$i]','$jam_selesai[$i]' )");
	// 	}
	// }

	// public function simpanFasilitas($chektransfer, $chektunai, $chekedc)
	// {
	// 	$jmPakai = $this->input->post('jmpakai', true);
	// 	$time = date("H:i", strtotime($jmPakai));
	// 	$dateJmPki = date_create($time);
	// 	date_add($dateJmPki, date_interval_create_from_date_string('+2 hours'));
	// 	$jmSelesai = date_format($dateJmPki, 'H:i');

	// 	$config['upload_path']          = './public/assets/buktitransfer/';
	// 	$config['allowed_types']        = 'jpg|jpeg|png';
	// 	$config['max_size']             = 2048;
	// 	$this->load->library('upload', $config);
	// 	$this->upload->initialize($config);

	// 	if ($chektransfer) {
	// 		if ($this->upload->do_upload('file_upload')) {
	// 			$config['overwrite'] = TRUE;
	// 			$upload_data = array('upload_data' => $this->upload->data());
	// 			$img = $upload_data['upload_data']['file_name'];
	// 			$dataFas = [
	// 				'tgl_transfasilitas'	=> date('Y-m-d'),
	// 				'id_member' 			=> $this->input->post('id_member'),
	// 				'tgl_booking' 			=> $this->input->post('tgl_booking'),
	// 				'jam_mulai' 			=> $this->input->post('jmpakai'),
	// 				'jam_selesai' 			=> $jmSelesai,
	// 				'nama_fasilitas' 		=> $this->input->post('nama-fas'),
	// 				'kode_pembelian' 		=> $this->input->post('kode-trans'),
	// 				'total_bayar' 			=> $this->input->post('harga-fas'),
	// 				'bukti_pembayaran' 		=> $img,
	// 				'ket_bayar' 			=> 2
	// 			];
	// 			return $this->db->insert('t_transfasilitas', $dataFas);
	// 		} else {
	// 			redirect('transaksi-fasilitas');
	// 		}
	// 	} elseif ($chektunai) {
	// 		$dataFas = [
	// 			'tgl_transfasilitas' 	=> date('Y-m-d'),
	// 			'id_member' 			=> $this->input->post('id_member'),
	// 			'tgl_booking' 			=> $this->input->post('tgl_booking'),
	// 			'jam_mulai' 			=> $this->input->post('jmpakai'),
	// 			'jam_selesai' 			=> $jmSelesai,
	// 			'nama_fasilitas' 		=> $this->input->post('nama-fas'),
	// 			'kode_pembelian' 		=> $this->input->post('kode-trans'),
	// 			'total_bayar' 			=> $this->input->post('harga-fas'),
	// 			'bukti_pembayaran' 		=> 'Tunai',
	// 			'ket_bayar' 			=> 2
	// 		];
	// 		return $this->db->insert('t_transfasilitas', $dataFas);
	// 	} elseif ($chekedc) {
	// 		$dataFas = [
	// 			'tgl_transfasilitas'	=> date('Y-m-d'),
	// 			'id_member' 			=> $this->input->post('id_member'),
	// 			'tgl_booking' 			=> $this->input->post('tgl_booking'),
	// 			'jam_mulai' 			=> $this->input->post('jmpakai'),
	// 			'jam_selesai' 			=> $jmSelesai,
	// 			'nama_fasilitas' 		=> $this->input->post('nama-fas'),
	// 			'kode_pembelian' 		=> $this->input->post('kode-trans'),
	// 			'total_bayar' 			=> $this->input->post('harga-fas'),
	// 			'bukti_pembayaran' 		=> 'EDC',
	// 			'ket_bayar' 			=> 2
	// 		];
	// 		return $this->db->insert('t_transfasilitas', $dataFas);
	// 	}
	// }
}
