<?php
require_once '../koneksi.php';
require_once '../models/Pegawai.php';


$nip = $_POST['nip'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$agama = $_POST['agama'];
$iddivisi = $_POST['divisi'];
$foto = $_POST['foto'];
$tombol = $_POST['proses'];

$listData = [$nip,$nama,$email,$agama,$iddivisi,$foto];

$pegawai = new Pegawai();
switch($tombol) {
    case 'simpan':
        $pegawai->simpan($listData);
        break;
    case 'ubah':
        $listData[] = $_POST['idx'];
        $pegawai->ubah($listData);
        break;
    case 'hapus':
        $id[] = $_POST['idx'];
        $pegawai->hapus($id);
        break;
    default:
        header('Location: http://localhost/UTSPWL/index.php?page=dataPegawai');
        break;
}
header('Location: http://localhost/UTSPWL/index.php?page=dataPegawai');

