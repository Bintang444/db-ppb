<?php
include 'koneksi.php';

$data = json_decode(file_get_contents('php://input'));

if (isset($data->id) && isset($data->Nama) && isset($data->Catatanku) && isset($data->Hobi)) {
    $id = $data->id;
    $nama = $data->Nama;
    $catatan = $data->Catatanku;
    $hobi = $data->Hobi;

    $sql = "UPDATE catatan SET Nama='$nama', Catatanku='$catatan', Hobi='$hobi' WHERE id=$id";

    if ($koneksi->query($sql) === TRUE) {
        echo json_encode(['Data Berhasil Diperbaharui']);
    } else {
        echo json_encode(['Data Gagal Diperbaharui']);
    }
} else {
    echo json_encode(['Data Tidak Lengkap']);
}
?>
