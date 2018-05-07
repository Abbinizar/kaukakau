<?php

class manajer_stok
{
    function __construct()
    {
    }

    public function home()
    {
        $data = model_stok::bacaStok();
        require_once 'konten/tampilan/stok.php';
    }

    public function tambah_stok()
    {

    }

    public function update_stok()
    {

    }

}