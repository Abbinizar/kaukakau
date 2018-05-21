<?php



class model_stok
{
    function __construct()
    {
    }

    public static function bacaStok()
    {
        $db = DB::getInstance();
        $hasil = $db->query("SELECT s.id, p.namaproduk, s.tanggal, s.jumlah_stock, s.peramalan, s.safety_stock FROM stock s JOIN produk p ON s.id_produk = p.id;");
        if ($hasil->rowCount() > 0) {
            foreach ($hasil as $item) {
                $output[] = array(
                    'id' => $item['id'],
                    'namaproduk' => $item['namaproduk'],
                    'tanggal' => $item['tanggal'],
                    'jumlah_stock' => $item['jumlah_stock'],
                    'peramalan' => $item['peramalan'],
                    'safety_stock' => $item['safety_stock']
                );
            }
            return $output;
        } else {
            return 'kosong';
        }
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

    public static function tambahStok($id_produk, $tanggal, $jumlah_stock)
    {
        $db = DB::getInstance();
        $status = $db->exec("INSERT INTO stock(id_produk, tanggal, jumlah_stock) VALUES ($id_produk,'$tanggal', $jumlah_stock);");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public static function tambahProduk($tipeproduk, $namaproduk)
    {
        $db = DB::getInstance();
        $status = $db->exec("INSERT INTO produk(tipeproduk, namaproduk) values('$tipeproduk', '$namaproduk');");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public static function perbaruiStok($id_produk, $id, $tanggal, $jumlah_stock)
    {
        $db = DB::getInstance();
        $status = $db->exec("UPDATE stok set id_produk=$id_produk, tanggal='$tanggal', jumlah_stock='$jumlah_stock' WHERE id=$id;");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }
    public static function hapusStok ($id)
    {
        $db = DB::getInstance();
        $db->query("DELETE FROM stock WHERE id=$id");
    }
}
?>