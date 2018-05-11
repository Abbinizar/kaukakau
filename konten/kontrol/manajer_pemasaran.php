<?php

class manajer_pemasaran
{
    function __construct()
    {
    }

    //halaman home manajer pemasaran
    public function forecast()
    {
        $data = model_pemasaran::bacaDataPenjualan();
        require_once 'konten/tampilan/forecast.php';
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

    public function hapus_penjualan()
    {
        model_pemasaran::hapusDataPenjualan(
            $_POST['id']
        );
    }

    //halaman data toko
    public function toko()
    {
        $data = model_pemasaran::bacaDataToko();
        require_once 'konten/tampilan/toko.php';
    }

    
    public function tambah_toko()
    {
        model_pemasaran::tambahDataToko(
            $_POST['namatoko'],
            $_POST['alamat'],
            $_POST['pemilik']
        );
    }

    public function update_toko()
    {
        model_pemasaran::perbaruiDataToko(
            $_POST['id'],
            $_POST['namatoko'],
            $_POST['alamat'],
            $_POST['pemilik']
        );
    }

    public function hapus_toko()
    {
        model_pemasaran::hapusDataToko(
            $_POST['id']
        );

    }
}