<?php

class manajer_stok
{
    function __construct()
    {
    }

    public function stock()
    {
        $data = model_stok::bacaStok();
        require_once 'konten/tampilan/stok.php';
    }

    public function tambah_stok()
    {
        model_stok::tambahStok(
            $_POST['tanggal'],
            $_POST['jumlah_stock']
        );
    }
    public function update_stok()
    {
        model_stok::perbaruiStok(
            $_POST['id'],
            $_POST['tanggal'],
            $_POST['jumlah_stock']
        );
    }
    public function hapus_stok()
    {
        model_stok::hapusStok(
        $_POST['id']
        );
    }
}