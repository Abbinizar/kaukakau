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
    public static function hapusDataPenjualan($id)
    {
        $db = DB::getInstance();
        $db->query("DELETE FROM penjualan WHERE id = $id");
    } 

    public static function bacaDataToko()
    {
        $db = DB::getInstance();
        $hasil = $db->query("SELECT * FROM toko;");
        if ($hasil->rowCount() > 0) {
            foreach ($hasil as $item) {
                $output[] = array(
                    'id' => $item['id'],
                    'namatoko' => $item['namatoko'],
                    'alamat' => $item['alamat'],
                    'pemilik' => $item['pemilik']
                );
            }
            return $output;
        } else {
            return 'kosong';
        }
    }

    public static function tambahDataToko($namatoko, $alamat, $pemilik)
    {
        $db = DB::getInstance();
        $status = $db->exec("INSERT INTO toko (namatoko, alamat, pemilik) VALUES ('$namatoko', '$alamat', '$pemilik');");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public static function perbaruiDataToko($id, $namatoko, $alamat, $pemilik)
    {
        $db = DB::getInstance();
        $status = $db->exec("UPDATE toko set namatoko='$namatoko', alamat='$alamat', pemilik='$pemilik' WHERE id=$id;");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }
    public static function hapusDataToko($id)
    {
        $db = DB::getInstance();
        $db->query("DELETE FROM toko WHERE id = $id");
    } 

}