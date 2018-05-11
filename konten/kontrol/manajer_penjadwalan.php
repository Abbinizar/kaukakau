<?php

class manajer_penjadwalan
{
    function __construct()
    {
    }

    public function penjadwalan()
    {
        $data = model_penjadwalan::bacaJadwal();
        require_once 'konten/tampilan/penjadwalan.php';
    }

    public function tambah_jadwal()
    {
        model_penjadwalan::tambahJadwal(
            $_POST['mulai'],
            $_POST['akhir'],
            $_POST['jumlah']
        );
    }

    public function update_jadwal()
    {
        model_penjadwalan::perbaruiJadwal(
            $_POST['id'],
            $_POST['mulai'],
            $_POST['akhir'],
            $_POST['jumlah']
        );
    }

    public function hapus_jadwal()
    {
        model_penjadwalan::hapusJadwal(
            $_GET['id']
        );
    }

    public function produk()
    {
        $data = model_penjadwalan::bacaProduk();
        require_once 'konten/tampilan/awal.php';
    }

    public function tambah_produk()
    {
        model_penjadwalan::tambahProduk(
            $_POST['tipeproduk'],
            $_POST['namaproduk']
        );
    }
    public function update_produk()
    {
        model_penjadwalan::perbaruiProduk(
            $_POST['id'],
            $_POST['tipeproduk'],
            $_POST['namaproduk']
        );
    }
    public function hapus_Produk()
        model_penjadwalan::hapusProduk(
            $_POST['id']
        );

}