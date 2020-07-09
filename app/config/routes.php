<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller']        = 'pagehome';
$route['logout']                    = 'auth/logout';
$route['block']                     = 'auth/blocked';
$route['dashboard']                 = 'home';
//!===================== Calon Member =====================//
$route['registrasi']              = 'auth/daftar';
$route['daftar']                  = 'user/daftar';

//?===================== User =====================//
$route['user']                                  = 'user';
$route['user.paket']                            = 'user/paket';
$route['beli.paket/(:any)']                     = 'user/belipaket/$1';
$route['user.detai_paket/(:any)']               = 'user/detailpaket/$1';
$route['user.transaksi.paket']                  = 'user/usertranspaket';
$route['user.konfirmasi.pembelian/(:any)']      = 'user/userconfirmtranspaket/$1';
$route['user.addkonfirm.pembelian/(:any)']      = 'user/useraddconfirmtranspaket/$1';


$route['user.fasilitas']                                = 'user/fasilitas';
$route['sewa.fasilitas/(:any)']                         = 'user/sewafasilitas/$1';
$route['user.konfirmasi.fasilitas/(:any)']              = 'user/userconfirmfasilitas/$1';
$route['user.savekonfirmasi.fasilitas/(:any)']          = 'user/usersaveconfirmfasilitas/$1';
//!===================== End User =====================//


//?===================== Member =====================//
$route['admin/member']                                  = 'member/member';
$route['admin/add.member']                              = 'member/addmember';
$route['admin/pilih_produk/(:any)']                     = 'member/pilihproduk/$1';
$route['admin/cheout_paket/(:num)/(:any)']              = 'member/chekoutpaket/$1/$2';
$route['admin/detail_pembelian_paket/(:num)/(:any)']    = 'member/detailbeli/$1/$2';
$route['admin/add_beli_paket']                          = 'member/add_detailbeli';
$route['admin/konfirmasi_pembelian/(:any)']             = 'member/konfirmbeli/$1';

$route['admin/chek_fasilitas/(:any)/(:any)']      = 'member/chekfasilitas/$1/$2';
$route['admin/chekout_fasilitas']                 = 'member/chekoutfasilitas';
$route['admin/konfirmasi_fasilitas/(:any)']       = 'member/confirmfasil/$1';


$route['hapus-member/(:num)']       = 'member/hapusmember/$1';
$route['aktif-ya']                  = 'member/aktifya';
$route['aktif-tidak']               = 'member/aktiftidak';

//?===================== PesertaPaket =====================//
$route['admin/peserta_paket']              = 'pesertapaket';

//TODO===================== Paket =====================//
$route['admin/paket']                      = 'paket';
$route['admin/add.paket']                  = 'paket/addpaket';
$route['admin/detail_paket/(:num)']        = 'paket/detpaket/$1';
$route['admin/edit_paket/(:num)']          = 'paket/editpaket/$1';
$route['admin/hapus_paket/(:num)']         = 'paket/hapuspaket/$1';
$route['admin/add_detail_paket/(:num)']    = 'paket/adddetpaket/$1';
$route['admin/hapus_detail/(:num)']        = 'paket/hapusdetpaket/$1';

$route['edit.detail/(:num)']         = 'paket/editdetpaket/$1';

// !Kusam
$route['getpaket']                  = 'paket/getpaketbyid';

//*===================== Fasilitas =====================//
$route['admin/fasilitas']                 = 'fasilitas';
$route['admin/add_fasilitas']             = 'fasilitas/addfasilitas';
$route['admin/edit_fasilitas/(:any)']     = 'fasilitas/editfasilitas/$1';
$route['admin/hapus_fasilitas/(:any)']    = 'fasilitas/hapusfasilitas/$1';

$route['detfas']                    = 'fasilitas/detfas';

//!===================== Senam =====================//
$route['admin/senam']                     = 'senam';
$route['admin/add_senam']                 = 'senam/addsenam';
$route['admin/edit_senam/(:any)']         = 'senam/editsenam/$1';
$route['admin/hapus_senam/(:any)']        = 'senam/hapussenam/$1';

//TODO===================== Transaksi Paket =====================//
$route['admin/pembelian/member']    = 'pembelian';
$route['cari.member']               = 'transaksi/carimember';

// !Konfirmasi
$route['admin/konfirmasi']                        = 'konfirmasi';
// ? paket
$route['admin/verifikasi.paket/(:any)']           = 'konfirmasi/veripaket/$1';
$route['admin/save_confirm_paket/(:any)']         = 'konfirmasi/saveconfirmpaket/$1';
$route['detconfirm.peket/(:any)']           = 'konfirmasi/detconfirmpaket/$1';
$route['info.peket.success/(:any)']         = 'konfirmasi/infopaketsukses/$1';
$route['info.peket.notsuccess/(:any)']      = 'konfirmasi/infopaketnotsukses/$1';

// ? fasilitas
$route['verifikasi.fasilitas/(:any)']       = 'konfirmasi/verifasilitas/$1';
$route['admin/save_confirm_fasilitas']            = 'konfirmasi/saveconfirmfasilitas';
$route['detconfirm.fasilitas/(:any)']       = 'konfirmasi/detconfirmfasilitas/$1';
$route['save.cofirmfasil/(:any)']           = 'konfirmasi/savefericonfirm/$1';

// * Galeri
$route['admin/galeri']                  = 'galeri';
$route['admin/galeri/create']           = 'galeri/create';

//*===================== Cetak Transaksi Paket =====================//
$route['cetak-trans-detpaket/(:num)'] = 'cetak/cetaktrpaket/$1';
$route['download-trans-detpaket/(:num)'] = 'cetak/downloadtrpaket/$1';

$route['admin/cetak_filterPaket']             = 'cetak/cetakfilterpaket';
$route['admin/cetak_laporan_paket']     = 'cetak/cetaklappaket';

$route['cetak-filterFasilitas']         = 'cetak/cetakfilterfasilitas';
$route['cetak-laporanFasilitas']        = 'cetak/cetaklapfasilitas';

//!===================== Transaksi My Paket =====================//

$route['user.transaksi']                = 'user/riwayattransaksi';
$route['user.detail.fas/(:any)']        = 'user/userdatailfas/$1';
$route['user.detail.paket/(:any)']      = 'user/userdatailpaket/$1';



//!===================== Instruktur =====================//
$route['admin/instruktur']                  = 'instruktur';
$route['admin/instruktur/create']           = 'instruktur/create';
$route['admin/instruktur/detail/(:num)']    = 'instruktur/detail/$1';
$route['admin/instruktur/detail/create/(:num)']    = 'instruktur/detailt_create/$1';
$route['admin/instruktur/detail/edit/(:num)']    = 'instruktur/detailt_edit/$1';
$route['admin/instruktur/detail/delete/(:num)']    = 'instruktur/detailt_delete/$1';
$route['admin/hapus_instruktur/(:num)']     = 'instruktur/delete/$1';

//?===================== Laporan =====================//
$route['admin/laporan_paket']         = 'laporan/paket';
$route['admin/laporan_fasilitas']     = 'laporan/fasilitas';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
