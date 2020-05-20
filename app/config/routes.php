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
$route['calon-member']              = 'auth/daftar';
$route['daftar']                    = 'user/daftar';

//?===================== User =====================//
$route['user']                      = 'user';
$route['myprofile']                 = 'user/profile';
$route['userPaket']                 = 'user/paket';
$route['detail-userPaket/(:num)']   = 'user/detailpaket/$1';

$route['userFasilitas']             = 'user/fasilitas';
$route['beli-paket/(:num)']         = 'user/belipaket/$1';
$route['sewaFasilitas/(:any)']      = 'user/sewafas/$1';
$route['sewafasilitas/(:any)']      = 'user/sewafasnonmember/$1';
//!===================== End User =====================//


//?===================== Member =====================//
$route['member']                            = 'member/member';
$route['add.member']                        = 'member/addmember';
$route['pilih.produk/(:any)']               = 'member/pilihproduk/$1';
$route['cheout.paket/(:num)/(:any)']        = 'member/chekoutpaket/$1/$2';
$route['detail.pembelian/(:num)/(:any)']    = 'member/detailbeli/$1/$2';
$route['add.pembelian']                     = 'member/add_detailbeli';
$route['konfirmasi.pembelian/(:any)']       = 'member/konfirmbeli/$1';

$route['chek.fasilitas/(:any)/(:any)']      = 'member/chekfasilitas/$1/$2';
$route['chekout.fasilitas']                 = 'member/chekoutfasilitas';
$route['konfirmasi.fasilitas/(:any)']       = 'member/confirmfasil/$1';


$route['hapus-member/(:num)']       = 'member/hapusmember/$1';
$route['aktif-ya']                  = 'member/aktifya';
$route['aktif-tidak']               = 'member/aktiftidak';

//?===================== PesertaPaket =====================//
$route['pesertaPaket']              = 'pesertapaket';

//TODO===================== Paket =====================//
$route['paket']                     = 'paket';
$route['add.paket']                  = 'paket/addpaket';
$route['detail.paket/(:num)']        = 'paket/detpaket/$1';
$route['edit.paket/(:num)']          = 'paket/editpaket/$1';
$route['hapus.paket/(:num)']         = 'paket/hapuspaket/$1';
$route['addDetailPaket/(:num)']     = 'paket/adddetpaket/$1';
$route['hapusDetail/(:num)']        = 'paket/hapusdetpaket/$1';
$route['editDetail/(:num)']         = 'paket/editdetpaket/$1';

// !Kusam
// $route['tgldetpaket']               = 'paket/tgldetpaket';
// $route['shtglpkt']                  = 'paket/showtgldetpaket';
$route['getpaket']                  = 'paket/getpaketbyid';
// $route['getdetpaket']               = 'paket/getdetpaketid';

//*===================== Fasilitas =====================//
$route['fasilitas']                 = 'fasilitas';
$route['detfas']                    = 'fasilitas/detfas';
$route['add.fasilitas']              = 'fasilitas/addfasilitas';
$route['edit.fasilitas/(:any)']      = 'fasilitas/editfasilitas/$1';
$route['hapus.fasilitas/(:any)']     = 'fasilitas/hapusfasilitas/$1';

//!===================== Senam =====================//
$route['senam']                     = 'senam';
$route['add.senam']                  = 'senam/addsenam';
$route['edit.senam/(:any)']          = 'senam/editsenam/$1';
$route['hapus.senam/(:any)']         = 'senam/hapussenam/$1';

//?===================== Transaksi Fasilitas =====================//
// $route['transaksiFasilitas']        = 'transaksi_fasilitas';
// $route['transaksiPeriodeFasilitas'] = 'transaksi_fasilitas/periode';
// $route['add.transaksi.fasilitas']         = 'transaksi_fasilitas/aadtransfasilitas';
// $route['chekValbelumya']            = 'transaksi_fasilitas/validfasilya';
// $route['chekValtidak']              = 'transaksi_fasilitas/validfasiltidak';
// $route['validasiFasilitas/(:num)']  = 'transaksi_fasilitas/validfasi/$1';
// $route['cetakFasilitas/(:any)']     = 'transaksi_fasilitas/cetakfasilitasbyid/$1';

//TODO===================== Transaksi Paket =====================//
$route['transaksi']                 = 'transaksi';
$route['cari.member']               = 'transaksi/carimember';
$route['transaksiPaket']            = 'transaksi/transpaket';

$route['detmember']                 = 'transaksi_fasilitas/detmember';
$route['periodeTransPaket']         = 'transaksi/periodetranspaket';
$route['detailTransPaket/(:any)']   = 'transaksi/dettranspaket/$1';
$route['validasiPaket/(:any)']      = 'transaksi/validasipaket/$1';
$route['chek-validasi']             = 'transaksi/chekvalidasi';
$route['chek-valbelum']             = 'transaksi/chekvalidasibelum';

// !Konfirmasi
$route['konfirmasi']                     = 'konfirmasi';
$route['verifikasi.paket/(:any)']        = 'konfirmasi/veripaket/$1';
$route['verifikasi.fasilitas/(:any)']    = 'konfirmasi/verifasilitas/$1';
$route['save.confirm.fasilitas']         = 'konfirmasi/saveconfirmfasilitas';

//*===================== Cetak Transaksi Paket =====================//
$route['cetak-trans-detpaket/(:num)'] = 'cetak/cetaktrpaket/$1';
$route['download-trans-detpaket/(:num)'] = 'cetak/downloadtrpaket/$1';

$route['cetak-filterPaket'] = 'cetak/cetakfilterpaket';
$route['cetak-laporanPaket'] = 'cetak/cetaklappaket';
$route['cetak-filterFasilitas'] = 'cetak/cetakfilterfasilitas';
$route['cetak-laporanFasilitas'] = 'cetak/cetaklapfasilitas';

//!===================== Transaksi My Paket =====================//
$route['transaksi-mypaket']     = 'user/mypaket';
$route['transaksipaket']        = 'user/traspaket';
$route['transaksi-myfasilitas'] = 'user/myfasilitas';


//!===================== Instruktur =====================//
$route['instruktur'] = 'master/instruktur';

//?===================== Laporan =====================//
$route['laporan.paket']         = 'laporan/paket';
$route['laporan.fasilitas']     = 'laporan/fasilitas';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
