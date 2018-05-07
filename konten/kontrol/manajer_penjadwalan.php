<?php

class manajer_penjadwalan
{
    function __construct()
    {
    }

    public function home()
    {
        $data = model_penjadwalan::bacaJadwal();
        require_once 'konten/tampilan/penjadwalan.php';
    }

    public function tambah_jadwal()
    {

    }

    public function update_jadwal()
    {

    }

}