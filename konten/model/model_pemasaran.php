<?php


class model_pemasaran
{
    function __construct()
    {
    }

    public static function bacaPenjualanSebelumnya($tanggal)
    {
        $db = DB::getInstance();
        $hasil = $db->query("SELECT jumlahpenjualan, peramalan FROM penjualan WHERE MONTH(tanggal) = MONTH('$tanggal')-1;");
        if ($hasil->rowCount() > 0) {
            foreach ($hasil as $item) {
                $output = array(
                    'jumlahpenjualan' => $item['jumlahpenjualan'],
                    'peramalan' => $item['peramalan']
                );
            }
            return $output;
        } else {
            return 'kosong';
        }
    }

    public static function bacaDataPenjualan()
    {
        $db = DB::getInstance();
        $hasil = $db->query("SELECT p.id, pr.namaproduk, p.tanggal, p.jumlahpenjualan, p.peramalan FROM penjualan p JOIN produk pr ON p.id_produk = pr.id;");
        if ($hasil->rowCount() > 0) {
            foreach ($hasil as $item) {
                $output[] = array(
                    'id' => $item['id'],
                    'namaproduk' => $item['namaproduk'],
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

    public static function tambahDataPenjualan($id_produk, $tanggal, $jumlah, $peramalan)
    {
        $db = DB::getInstance();
        $status = $db->exec("INSERT INTO penjualan(id_produk, tanggal, jumlahpenjualan, peramalan) VALUES ($id_produk, '$tanggal', $jumlah, $peramalan);");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public static function perbaruiDataPenjualan($id, $id_produk, $tanggal, $nama, $jumlah)
    {
        $db = DB::getInstance();
        $status = $db->exec("UPDATE penjualan set id_produk=$id_produk, tanggal='$tanggal', nama='$nama', jumlah='$jumlah' WHERE id=$id;");
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
?>