<?php

class manajer
{
    function __construct()
    {
    }

    public function home()
    {
        $produk = model_stok::bacaProduk();
        require_once 'konten/tampilan/awal.php';
    }

    /*
    public function manajer(){
        $data = model_stok::bacaStok();
        require_once 'konten/tampilan/stok.php';
        $data = model_pemasaran::bacaDataPenjualan();
        require_once 'konten/tampilan/forecast.php';
        $data = model_penjadwalan::bacaJadwal();
        require_once 'konten/tampilan/penjadwalan.php';
        $data = model_pemasaran::bacaDataToko();
        require_once 'konten/tampilan/toko.php';
        $data = model_penjadwalan::bacaProduk();
        require_once 'konten/tampilan/awal.php';
    }
    */

    /**
     * TODO buat method yang berhubungan dengan manajer
     * method untuk lihat lihat
     */
}
?>