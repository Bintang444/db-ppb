<?php
    include 'koneksi.php';

    //Merubah Dari String JSON ke Obyek PHP
    $data = json_decode(file_get_contents('php://input'));

    if (isset($data->id)) {
        $id = $data->id;

        $sql = "DELETE FROM catatan WHERE id = $id";

        if ($koneksi->query($sql) === TRUE ) {
            echo json_encode('Data Berhasil Dihapus');
        } else {
            echo json_encode('Data Gagal Dihapus');
        }
    }

?>