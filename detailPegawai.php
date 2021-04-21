<?php
require_once 'models/Pegawai.php';
$pegawai = new Pegawai();
$data = $_REQUEST['id'];
$detail = $pegawai->detailPegawai($data);
?>

<div class="row">
    <div class="col-4">
        <div class="card bg-light m-5 p-5 mt-3" style="width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-center p-5">[image : <?= $detail['foto']; ?>]</div>    
            </div>
        </div>
    </div>
    <div class="col-8">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NIP</th>
                    <td><?= $detail['nip']; ?></td>
                </tr>
                <tr>
                    <th scope="col">Nama Pegawai</th>
                    <td><?= $detail['nama']; ?></td>
                </tr>
                <tr>
                    <th scope="col">Email</th>
                    <td><?= $detail['email']; ?></td>
                </tr>
                <tr>
                    <th scope="col">Agama</th>
                    <td><?= $detail['agama']; ?></td>
                </tr>
                <tr>
                    <th scope="col">Divisi</th>
                    <td><?= $detail['divisi']; ?></td>
                </tr>
            </thead>
        </table>
        <br>
        <br>
        <a href="index.php?page=dataPegawai" class="btn btn-danger mt-5 mb-5">Kembali</a>
    </div>
</div>