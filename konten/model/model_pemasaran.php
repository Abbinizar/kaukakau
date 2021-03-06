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
    public static function tambahStock($id_produk, $tanggal, $peramalan_stock, $safety_stock)
    {
        $db = DB::getInstance();
        $status = $db->exec("INSERT INTO stock(id_produk, tanggal, peramalan_stock, safety_stock) VALUES ($id_produk, '$tanggal', $peramalan_stock, $safety_stock);");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
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

    public static function perbaruiDataPenjualan($id, $tanggal, $namaproduk, $jumlah)
    {
        $db = DB::getInstance();
        $status = $db->exec("UPDATE penjualan set id=$id,  tanggal='$tanggal',namaproduk='$namaproduk', jumlah='$jumlah' WHERE id=$id;");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public static function editdata()
    {
     $db = DB::getInstance();
     $hasil = $db->query("SELECT p.id, pr.namaproduk, p.tanggal, p.jumlahpenjualan, p.peramalan FROM penjualan p JOIN produk pr ON p.id_produk = pr.id WHERE p.id=$id;");
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

public static function tambahdetails($id, $peramalan, $error, $e, $m, $alpha, $mape)
{
    $db = DB::getInstance();
    $status = $db->exec("INSERT INTO details(id, peramalan, error, e, m, alpha, mape) VALUES ($id, $peramalan, $error, $e, $m, $alpha, $mape);");
    if ($status > 0) {
        return 'sukses';
    } else {
        return 'gagal';
    }
}
/*public static function bacaDetails()
    {
        $db = DB::getInstance();
        $hasil = $db->query("SELECT id, peramalan, error, e, m, alpha, mape FROM details;");
        if ($hasil->rowCount() > 0) {
            foreach ($hasil as $item) {
                $output[] = array(
                    'id' => $item['id'],
                    'peramalan' => $item['peramalan'],
                    'error' => $item['error'],
                    'e' => $item['e'],
                    'm' => $item['m'],
                    'alpha' => $item['alpha'],
                    'mape' => $item['mape']
                );
            }
            return $output;
        } else {
            return 'kosong';
        }
    }

*/

}
?>