<?php

class model_pemasaran
{
    function __construct()
    {
    }

    public static function bacaDataPenjualan()
    {
        $db = DB::getInstance();
        $hasil = $db->query("SELECT * FROM penjualan;");
        if ($hasil->rowCount() > 0) {
            foreach ($hasil as $item) {
                $output[] = array(
                    'id' => $item['id'],
                    'tanggal' => $item['tanggal'],
                    'jumlahpenjualan' => $item['jumlahpenjualan'],
                    'peramalan' => $item['peramalan']
                );
            }
            return $output;
        } else {
            return 'kosong';
        }
    }

    public static function tambahDataPenjualan($tanggal, $nama, $jumlah)
    {
        $db = DB::getInstance();
        $status = $db->exec("INSERT INTO penjualan(tanggal, nama, jumlah) VALUES ('$tanggal', '$nama', $jumlah);");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public static function perbaruiDataPenjualan($id, $tanggal, $nama, $jumlah)
    {
        $db = DB::getInstance();
        $status = $db->exec("UPDATE penjualan set tanggal='$tanggal', nama='$nama', jumlah='$jumlah' WHERE id=$id;");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public static function tambahDataToko()
    {
        $db = DB::getInstance();
        $status = $db->exec("UPDATE penjualan set tanggal='$tanggal', nama='$nama', jumlah='$jumlah' WHERE id=$id;");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }
}