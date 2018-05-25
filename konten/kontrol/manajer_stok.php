<?php

class manajer_stok
{
    function __construct()
    {
    }
    public function home(){
        $produk = model_stok::bacaProduk();
        $data = model_stok::bacaStok();
        require_once 'konten/tampilan/stock.php';
    }
    public function forecaststock(){

    }

    public function tambah_stok()
    {
//        $status = model_pemasaran::tambahDataPenjualan($_POST['peramalan']);
//        $peramalanstock = ($forecast * 300)
//        $safetystock = ($peramalanstock*5%)


        $status = model_stok::tambahStok(
            $_POST['nama_produk'],
            $_POST['tanggal'],
            $_POST['jumlah']
//            $forecast
//            $safetystock
        );
        if ($status == 'sukses') {
            header("location:http://localhost/kaukakau/?c=manajer_stok&f=home");
        } else {
            echo 'error';
        }
    }
    public function update_stok()
    {
        model_stok::perbaruiStok(
            $_POST['tipe_produk'],
            $_POST['id'],
            $_POST['tanggal'],
            $_POST['jumlah_stock']
        );
    }
    public function hapus_stok()
    {
        model_stok::hapusStok(
            $_GET['id']
        );
        header("location:http://localhost/kaukakau/?c=manajer_stok&f=home");
    }

    public function tambah_produk()
    {
        $status = model_stok::tambahProduk(
            $_POST['tipe_produk'],
            $_POST['nama_produk']
        );
        if ($status == "sukses") {
            header("location: http://localhost/kaukakau/?c=manajer&f=home");
        } else {

        }
    }

    public function ubah_produk()
    {

    }

    public function hapus_produk()
    {
        model_stok::hapusProduk(
            $_GET['id']
        );
        header("location: http://localhost/kaukakau/?c=manajer&f=home");


    }
}
?>