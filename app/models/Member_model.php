<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Model Member_model
 * This model for ...
 * @package     Codeigniter
 * @category    Molde
 * @author      Esau Batkunda <Maniklusi31@gmail.com>
 * @link        https://github.com/chaubatkunda
 * @param       ...
 * @return      ...
 */
class Member_model extends CI_Model
{
	//!=========================== Member ===========================//
	public function setTidakAktif($id, $tidak)
	{
		$this->db->set('aktif', $tidak);
		$this->db->where('id', $id);
		$this->db->update('t_user');
	}
	public function setAktif($id, $tidak)
	{
		$this->db->set('aktif', $tidak);
		$this->db->where('id', $id);
		$this->db->update('t_user');
	}
	public function getAllMember()
	{
		$this->db->select('*');
		$this->db->from('t_user');
		$this->db->join('t_member', 't_member.id_user = t_user.id', 'right');
		return $this->db->get()->result();
	}
	public function getAllMemberById($id)
	{
		$this->db->select('*');
		$this->db->from('t_user');
		$this->db->join('t_member', 't_member.id_user = t_user.id', 'right');
		$this->db->where('id_member', $id);
		return $this->db->get()->row();
	}

	public function update_member($id, $data)
	{
		return $this->db->update('t_member', $data, ['idm' => $id]);
	}
	public function update_user($idus, $datau)
	{
		return $this->db->update('t_user', $datau, ['id' => $idus]);
	}


	public function getAllTransFasilitas($id)
	{
		return $this->db->get_where('t_transfasilitas', ['kode_pembelian' => $id])->row();
	}
	public function getAllTransPaket($id)
	{
		return $this->db->get_where('t_transpaket', ['kode_pembelian' => $id])->row();
	}
	public function insert_member($datamember)
	{
		return $this->db->insert('t_member', $datamember);
	}
	public function insert_user($datauser)
	{
		return $this->db->insert('t_user', $datauser);
	}

	public function insert_isipaket($isipaket)
	{
		return $this->db->insert('t_transisipaket', $isipaket);
	}
	public function insert_tglisipaket($tgllatih)
	{
		$this->db->insert('t_transisipaket_det', $tgllatih);
	}
	public function insert_detailbeli($datapaket)
	{
		return $this->db->insert('t_transpaket', $datapaket);
	}
	public function insert_chekout_fasilitas($data)
	{
		return $this->db->insert('t_transfasilitas', $data);
	}

	public function insert_conform_fasilitas($id)
	{
	}

	public function simpanTrPaket($chektransfer, $chektunai, $chekedc)
	{
		$this->db->select_max('id_transp');
		$queryTrPaket = $this->db->get('t_transpaket')->row_array();
		$getIdTrPaket = $queryTrPaket['id_transp'] + 1;
		// Direktory FileUpload
		$config['upload_path']          = './public/assets/buktitransfer/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['max_size']             = 2048;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($chektransfer) {
			if ($this->upload->do_upload('file_upload')) {
				$config['overwrite'] = TRUE;
				$upload_data = array('upload_data' => $this->upload->data());
				$img = $upload_data['upload_data']['file_name'];
				$dataPaket = [
					'id_transp' 		=> $getIdTrPaket,
					'tgl_trans'			=> date('Y-m-d'),
					'kode_pembelian' 	=> $this->input->post('tr_paket', true),
					'id_member' 		=> htmlspecialchars($this->input->post('idmember', true)),
					'nama_paket' 		=> htmlspecialchars($this->input->post('nama-pk')),
					'harga_paket' 		=> htmlspecialchars($this->input->post('harga-pk')),
					'ket_bayar' 		=> 1,
					'bukti_pembayaran' 	=> $img
				];
				return $this->db->insert('t_transpaket', $dataPaket);
			} else {
				$error = $this->upload->display_errors('Gambar Tidak Dapat Diupload');
				$this->session->set_flashdata('error', $error);
				redirect('dashboard');
			}
		} elseif ($chektunai) {
			$dataPaket = [
				'id_transp' => $getIdTrPaket,
				'tgl_trans' => date('Y-m-d'),
				'kode_pembelian' => $this->input->post('tr_paket', true),
				'id_member' => htmlspecialchars($this->input->post('idmember', true)),
				'nama_paket' => htmlspecialchars($this->input->post('nama-pk')),
				'harga_paket' => htmlspecialchars($this->input->post('harga-pk')),
				'ket_bayar' => 1,
				'bukti_pembayaran' => 'Tunai'
			];
			return $this->db->insert('t_transpaket', $dataPaket);
		} elseif ($chekedc) {
			$dataPaket = [
				'id_transp' => $getIdTrPaket,
				'tgl_trans' => date('Y-m-d'),
				'kode_pembelian' => $this->input->post('tr_paket', true),
				'id_member' => htmlspecialchars($this->input->post('idmember', true)),
				'nama_paket' => htmlspecialchars($this->input->post('nama-pk')),
				'harga_paket' => htmlspecialchars($this->input->post('harga-pk')),
				'ket_bayar' => 1,
				'bukti_pembayaran' => 'EDC'
			];
			return $this->db->insert('t_transpaket', $dataPaket);
		}
	}
	public function simpanTrIsiPaket()
	{
		//* Data Array IsiPaket/Produk
		$kode = $this->input->post('tr_paket', true);
		$jenis = $this->input->post('jenis');
		$kuota = $this->input->post('kuota');
		$count = count($jenis);
		for ($i = 0; $i < $count; $i++) {
			$dataIsiPaket = [
				'kode_pembelian' => $kode,
				'jenis_senam' => $jenis[$i],
				'kuota' => $kuota[$i]
			];
			$this->db->insert('t_transisipaket', $dataIsiPaket);
		}
	}

	public function simpanTglTransIsiPaket()
	{
		$kuota = $this->input->post('kuota');
		$kode = $this->input->post('tr_paket');
		$tgl = $this->input->post('tgl_masuk');
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$cn = count($kuota);
		print_r($cn);
		die;
		for ($i = 0; $i < $cn; $i++) {
			$data = [
				'kode_pembelian' => $kode,
				'tgl_mulai' => $tgl[$i],
				'jam_mulai' => $jam_mulai[$i],
				'jam_selesai' => $jam_selesai[$i]
			];
			$this->db->insert('t_transisipaket_det', $data);
		}
	}
	public function simpanTrFasilitas($chektransfer, $chektunai, $chekedc)
	{
		// Fasilitas
		$tglPakai = $this->input->post('tglpakai', true);
		$jmPakai = $this->input->post('jmpakai', true);
		//! $namaFas = $this->input->post('nama-fas', true);
		$trfasilitas = $this->input->post('tr_fasilitas', true);
		$time = date("H:i", strtotime($jmPakai));
		$dateJmPki = date_create($time);
		date_add($dateJmPki, date_interval_create_from_date_string('+2 hours'));
		$jmSelesai = date_format($dateJmPki, 'H:i');

		//? Query Chek
		//? $querySelekFas = $this->db->query("SELECT tgl_booking, nama_fasilitas, jam_mulai FROM t_transfasilitas WHERE tgl_booking = '$tglPakai' AND jam_mulai <= '$jmPakai' AND jam_selesai >= '$jmPakai' AND nama_fasilitas = '$namaFas'")->row_array(); */

		// Direktory FileUpload
		$config['upload_path']          = './public/assets/buktitransfer/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['max_size']             = 2048;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($chektransfer) {
			if ($this->upload->do_upload('file_upload')) {
				$config['overwrite'] = TRUE;
				$upload_data = array('upload_data' => $this->upload->data());
				$img = $upload_data['upload_data']['file_name'];
				// Data Fasilitas
				$dataFasilitas = [
					'tgl_transfasilitas' => date('Y-m-d'),
					'id_member' => htmlspecialchars($this->input->post('idmember', true)),
					'tgl_booking' => $tglPakai,
					'jam_mulai' => $jmPakai,
					'jam_selesai' => $jmSelesai,
					'nama_fasilitas' => $this->input->post('nama-fas', true),
					'kode_pembelian' =>  $trfasilitas,
					'total_bayar' => $this->input->post('harga-fas', true),
					'bukti_pembayaran' => $img,
					'ket_bayar' => 1
				];
				return $this->db->insert('t_transfasilitas', $dataFasilitas);
			} else {
				$error = $this->upload->display_errors('Gambar Tidak Dapat Diupload');
				$this->session->set_flashdata('error', $error);
				redirect('dashboard');
			}
		} elseif ($chektunai) {
			$dataFasilitas = [
				'tgl_transfasilitas' => date('Y-m-d'),
				'id_member' => htmlspecialchars($this->input->post('idmember', true)),
				'tgl_booking' => $tglPakai,
				'jam_mulai' => $jmPakai,
				'jam_selesai' => $jmSelesai,
				'nama_fasilitas' => $this->input->post('nama-fas', true),
				'kode_pembelian' =>  $trfasilitas,
				'total_bayar' => $this->input->post('harga-fas', true),
				'bukti_pembayaran' => 'Tunai',
				'ket_bayar' => 1
			];
			return $this->db->insert('t_transfasilitas', $dataFasilitas);
		} elseif ($chekedc) {
			$dataFasilitas = [
				'tgl_transfasilitas' => date('Y-m-d'),
				'id_member' => htmlspecialchars($this->input->post('idmember', true)),
				'tgl_booking' => $tglPakai,
				'jam_mulai' => $jmPakai,
				'jam_selesai' => $jmSelesai,
				'nama_fasilitas' => $this->input->post('nama-fas', true),
				'kode_pembelian' =>  $trfasilitas,
				'total_bayar' => $this->input->post('harga-fas', true),
				'bukti_pembayaran' => 'EDC',
				'ket_bayar' => 1
			];
			return $this->db->insert('t_transfasilitas', $dataFasilitas);
		}
	}

	public function deleteMember($id)
	{
		$queryUser = $this->db->get_where('t_member', ['idm' => $id])->row_array();
		$iduser = $queryUser['id_user'];
		if ($iduser == true) {
			$query = $this->db->delete('t_member', ['idm' => $id]);
			$query = $this->db->delete('t_user', ['id' => $iduser]);
			return $query;
		} else {
			exit();
		}
	}
	//!=========================== Endmember ===========================//

}
