<?php 

SESSION_start();
// error_reporting(0);

include("../vendors/koneksi.php");
if($_SESSION['id_dosen']==NULL){
    echo "Redirecting to login...";
    header("location:../../index.php");
} else {

include 'header.php';

$page = $_GET['page'];

	if ($page == 0) {
		include 'home.php';
	} elseif ($page == 1) {
		include 'kmdos.php';
	} elseif ($page == 11) {
		include 'kategori_dos.php';
	} elseif ($page == 2) {
		include 'tabel_jadwal_dos_up.php';
	} elseif ($page == 21) {
		include 'tabel_jadwal_dos_semhas.php';
	} elseif ($page == 22) {
		include 'tabel_jadwal_dos_akhir.php';
	} elseif ($page == 3) {
		include 'penelitian.php';
	} elseif ($page == 41) {
		include 'plot_dos.php';
	} elseif ($page == 5) {
		include 'plot_up.php';
	} elseif ($page == 51) {
		include 'plot_semhas.php';
	} elseif ($page == 52) {
		include 'plot_akhir.php';
	} elseif ($page == 6) {
		include 'ruangan.php';
	} elseif ($page == 7) {
		include 'kelas.php';
	} elseif ($page == 8) {
		include 'jadwal.php';
	} elseif ($page == 80) {
		include 'jadwal_semhas.php';
	} elseif ($page == 800) {
		include 'jadwal_akhir.php';
	} elseif ($page == 9) {
		include 'user.php';
	} elseif ($page == 42) {
		include 'plot_dos.php';
	} elseif ($page == 43) {
		include 'plot_dos.php';
	} elseif ($page == 81) {
		include 'buat_jadwal_up.php';
	} elseif ($page == 82) {
		include 'buat_jadwal_semhas.php';
	} elseif ($page == 83) {
		include 'buat_jadwal_akhir.php';
	} elseif ($page == 99) {
		include 'form_acc.php';
	} elseif ($page == 101) {
		include 'profile.php';
	} elseif ($page == 102) {
		include 'profile_edit.php';
	} elseif ($page == 103) {
		include 'update_dos.php';
	}

include 'footer.php';
}
?>