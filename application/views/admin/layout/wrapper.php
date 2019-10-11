<?php 

// Proteksi halaman admin dengan fungsi cek login pada simple_login
$this->simple_login->cek_login();

// Gabungkan semua bagian layout menjadi satu

require_once('head.php');
require_once('header.php');
require_once('nav.php');
require_once('content.php');
require_once('footer.php');