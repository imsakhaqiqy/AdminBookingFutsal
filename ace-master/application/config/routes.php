<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['dashboard'] = 'Dashboard';

//logout
$route['logout'] = 'Logout';

// profil lapangan
$route['profil_lapangan'] = 'Profil_Lapangan';
$route['profil_lapangan/add'] = 'Profil_Lapangan/add';
$route['profil_lapangan/add_aksi'] = 'Profil_Lapangan/add_aksi';
$route['profil_lapangan/edit'] = 'Profil_Lapangan/edit';
$route['profil_lapangan/edit_aksi'] = 'Profil_Lapangan/edit_aksi';
$route['profil_lapangan/hapus'] = 'Profil_Lapangan/hapus';

// deskripsi lapangan
$route['deskripsi_lapangan'] = 'Deskripsi_Lapangan';
$route['deskripsi_lapangan/adde'] = 'Deskripsi_Lapangan/adde';
$route['deskripsi_lapangan/add_aksi'] = 'Deskripsi_Lapangan/add_aksi';
$route['deskripsi_lapangan/edit'] = 'Deskripsi_Lapangan/edit';
$route['deskripsi_lapangan/edit_aksi'] = 'Deskripsi_Lapangan/edit_aksi';
$route['deskripsi_lapangan/hapus'] = 'Deskripsi_Lapangan/hapus';

// deskripsi venue
$route['deskripsi_venue'] = 'Deskripsi_Venue';
$route['deskripsi_venue/add'] = 'Deskripsi_Venue/add';
$route['deskripsi_venue/add_aksi'] = 'Deskripsi_Venue/add_aksi';
$route['deskripsi_venue/edit'] = 'Deskripsi_Venue/edit';
$route['deskripsi_venue/edit_aksi'] = 'Deskripsi_Venue/edit_aksi';
$route['deskripsi_venue/hapus'] = 'Deskripsi_Venue/hapus';

// jenis lapangan
$route['jenis_lapangan'] = 'Jenis_Lapangan';
$route['jenis_lapangan/add'] = 'Jenis_Lapangan/add';
$route['jenis_lapangan/add_aksi'] = 'Jenis_Lapangan/add_aksi';
$route['jenis_lapangan/edit'] = 'Jenis_Lapangan/edit';
$route['jenis_lapangan/edit_aksi'] = 'Jenis_Lapangan/edit_aksi';
$route['jenis_lapangan/hapus'] = 'Jenis_Lapangan/hapus';

// tipe lapangan
$route['tipe_lapangan'] = 'Tipe_Lapangan';
$route['tipe_lapangan/add'] = 'Tipe_Lapangan/add';
$route['tipe_lapangan/add_aksi'] = 'Tipe_Lapangan/add_aksi';
$route['tipe_lapangan/edit'] = 'Tipe_Lapangan/edit';
$route['tipe_lapangan/edit_aksi'] = 'Tipe_Lapangan/edit_aksi';
$route['tipe_lapangan/hapus'] = 'Tipe_Lapangan/hapus';

// stok lapangan
$route['stok_lapangan'] = 'Stok_Lapangan';
$route['stok_lapangan/add'] = 'Stok_Lapangan/add';
$route['stok_lapangan/add_aksi'] = 'Stok_Lapangan/add_aksi';
$route['stok_lapangan/edit'] = 'Stok_Lapangan/edit';
$route['stok_lapangan/edit_aksi'] = 'Stok_Lapangan/edit_aksi';
$route['stok_lapangan/hapus'] = 'Stok_Lapangan/hapus';

// harga reguler
$route['harga_reguler'] = 'Harga_Reguler';
$route['harga_reguler/add'] = 'Harga_Reguler/add';
$route['harga_reguler/add_aksi'] = 'Harga_Reguler/add_aksi';
$route['harga_reguler/edit'] = 'Harga_Reguler/edit';
$route['harga_reguler/edit_aksi'] = 'Harga_Reguler/edit_aksi';
$route['harga_reguler/hapus'] = 'Harga_Reguler/hapus';

// harga weekend
$route['harga_weekend'] = 'Harga_Weekend';
$route['harga_weekend/add'] = 'Harga_Weekend/add';
$route['harga_weekend/add_aksi'] = 'Harga_Weekend/add_aksi';
$route['harga_weekend/edit'] = 'Harga_Weekend/edit';
$route['harga_weekend/edit_aksi'] = 'Harga_Weekend/edit_aksi';
$route['harga_weekend/hapus'] = 'Harga_Weekend/hapus';

// profil order
$route['profil_order'] = 'Profil_Order';
$route['profil_order/add'] = 'Profil_Order/add';
$route['profil_order/add_aksi'] = 'Profil_Order/add_aksi';
$route['profil_order/edit'] = 'Profil_Order/edit';
$route['profil_order/edit_aksi'] = 'Profil_Order/edit_aksi';
$route['profil_order/hapus'] = 'Profil_Order/hapus';

// order lapangan
$route['order_lapangan'] = 'Order_Lapangan';
$route['order_lapangan/add'] = 'Order_Lapangan/add';
$route['order_lapangan/add_aksi'] = 'Order_Lapangan/add_aksi';
$route['order_lapangan/edit'] = 'Order_Lapangan/edit';
$route['order_lapangan/edit_aksi'] = 'Order_Lapangan/edit_aksi';
$route['order_lapangan/hapus'] = 'Order_Lapangan/hapus';

// order validasi
$route['order_validasi'] = 'Order_Validasi';
$route['order_validasi/add'] = 'Order_Validasi/add';
$route['order_validasi/add_aksi'] = 'Order_Validasi/add_aksi';
$route['order_validasi/edit'] = 'Order_Validasi/edit';
$route['order_validasi/edit_aksi'] = 'Order_Validasi/edit_aksi';
$route['order_validasi/hapus'] = 'Order_Validasi/hapus';

// status order
$route['status_order'] = 'Status_Order';
$route['status_order/add'] = 'Status_Order/add';
$route['status_order/add_aksi'] = 'Status_Order/add_aksi';
$route['status_order/edit'] = 'Status_Order/edit';
$route['status_order/edit_aksi'] = 'Status_Order/edit_aksi';
$route['status_order/hapus'] = 'Status_Order/hapus';

// profil users
$route['profil_users'] = 'Profil_Users';
$route['profil_users/add'] = 'Profil_Users/add';
$route['profil_users/add_aksi'] = 'Profil_Users/add_aksi';
$route['profil_users/edit'] = 'Profil_Users/edit';
$route['profil_users/edit_aksi'] = 'Profil_Users/edit_aksi';
$route['profil_users/hapus'] = 'Profil_Users/hapus';