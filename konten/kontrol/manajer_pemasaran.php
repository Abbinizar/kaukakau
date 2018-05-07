<?php

class manajer_pemasaran
{
    function __construct()
    {
    }

    //halaman home manajer pemasaran
    public function home()
    {
        $data = model_pemasaran::bacaDataPenjualan();
        require_once 'konten/tampilan/forecast.php';
    }

    //halaman data toko
    public function toko()
    {
//        require_once 'konten/tampilan/';
        echo 'belum diimplementasi';
    }

    public function tambah_penjualan()
    {
        model_pemasaran::tambahDataPenjualan(
            $_POST['tanggal'],
            $_POST['nama_barang'],
            $_POST['jumlah']
        );

    }

    public function update_penjualan()
    {
        model_pemasaran::perbaruiDataPenjualan(
            $_POST['id'],
            $_POST['tanggal'],
            $_POST['nama_barang'],
            $_POST['jumlah']
        );
    }

    public function tambah_toko()
    {

    }

    public function update_toko()
    {

    }

    public function hapus_toko()
    {

    }
}