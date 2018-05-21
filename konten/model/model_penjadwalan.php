<?php


class model_penjadwalan
{
    function __construct()
    {
    }

    public static function bacaJadwal()
    {
        $db = DB::getInstance();
        $hasil = $db->query("SELECT p.id, pr.namaproduk, p.mulai, p.akhir, p.jumlah FROM penjadwalan p JOIN produk pr ON p.id_produk = pr.id;");
        if ($hasil->rowCount() > 0) {
            foreach ($hasil as $item) {
                $output[] = array(
                    'id' => $item['id'],
                    'namaproduk' => $item['namaproduk'],
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

    public static function tambahJadwal($id_produk, $mulai, $akhir, $jumlah)
    {
        $db = DB::getInstance();
        $status = $db->exec("INSERT INTO penjadwalan(id_produk, mulai, akhir, jumlah) VALUES ($id_produk, '$mulai', '$akhir', $jumlah);");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public static function perbaruiJadwal($id, $id_produk, $mulai, $akhir, $jumlah)
    {
        $db = DB::getInstance();
        $status = $db->exec("UPDATE penjadwalan set id_produk=$id_produk, mulai='$mulai', akhir='$akhir', jumlah='$jumlah' WHERE id=$id;");
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
                    'namaproduk' => $item['namaproduk']
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
?>