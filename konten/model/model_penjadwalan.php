<?php

include 'koneksi.php';
include 'route.php';

class model_penjadwalan
{
    function __construct()
    {
    }

    public static function bacaJadwal()
    {
        $db = DB::getInstance();
        $hasil = $db->query("SELECT * FROM penjadwalan;");
        if ($hasil->rowCount() > 0) {
            foreach ($hasil as $item) {
                $output[] = array(
                    'id' => $item['id'],
                    'mulai' => $item['mulai'],
                    'akhir' => $item['akhir'],
                    'jumlah' => $item['jumlah']
                );
            }
            return $output;
        } else {
            return 'kosong';
        }
    }

    public static function tambahJadwal($mulai, $akhir, $jumlah)
    {
        $db = DB::getInstance();
        $status = $db->exec("INSERT INTO penjadwalan(mulai, akhir, jumlah) VALUES ('$mulai', '$akhir', $jumlah);");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public static function perbaruiJadwal($id, $mulai, $akhir, $jumlah)
    {
        $db = DB::getInstance();
        $status = $db->exec("UPDATE penjadwalan set mulai='$mulai', akhir='$akhir', jumlah='$jumlah' WHERE id=$id;");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }
    public static function hapusJadwal($id)
    {
        $db = DB::getInstance();
        $db->query("DELETE FROM penjadwalan WHERE id =$id");
    }


    public static function bacaProduk()
    {
        $db = DB::getInstance();
        $hasil = $db->query("SELECT * FROM produk;");
        if ($hasil->rowCount() > 0) {
            foreach ($hasil as $item) {
                $output[] = array(
                    'id' => $item['id'],
                    'tipeproduk' => $item['tipeproduk'],
                    'namaproduk' => $item['namaproduk'],
                );
            }
            return $output;
        } else {
            return 'kosong';
        }
    }

    public static function tambahProduk($tipeproduk, $namaproduk)
    {
        $db = DB::getInstance();
        $status = $db->exec("INSERT INTO produk(tipeproduk, namaproduk) VALUES ('$tipeproduk', '$namaproduk);");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public static function perbaruiProduk($tipeproduk, $namaproduk)
    {
        $db = DB::getInstance();
        $status = $db->exec("UPDATE produk set tipeproduk='$tipeproduk', namaproduk='$namaproduk' WHERE id=$id;");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }
    public static function hapusProduk($id)
    {
        $db = DB::getInstance();
        $db->query("DELETE FROM produk WHERE id =$id");
    }
}