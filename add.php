<?php
    include 'koneksi.php';

    //Merubah Dari String JSON ke Obyek PHP
    $data = json_decode(file_get_contents('php://input'));

    if (isset($data->nama) && isset($data->catatan) && isset($data->hobi) ) {
        $nama = $data->nama;
        $catatan = $data->catatan;
        $hobi = $data->hobi;

        $sql = "INSERT INTO catatan (Nama, Catatanku, Hobi) VALUES ('$nama', '$catatan', '$hobi')";

        if ($koneksi->query($sql) === TRUE ) {
            echo json_encode('Data Berhasil Disimpan');
        } else {
            echo json_encode('Data TIdak Tersimpan');
        }
    } else {
        echo json_encode('Data Tidak Lengkap');
    }

?>