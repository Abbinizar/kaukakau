<?php

class manajer_penjadwalan
{
    function __construct()
    {
    }
    public function home(){
        $produk = model_stok::bacaProduk();
        $data = model_penjadwalan::bacaJadwal();
        require_once 'konten/tampilan/penjadwalan.php';
    }

    public function tambah_jadwal()
    {
        $status = model_penjadwalan::tambahJadwal(
            $_POST['nama_produk'],
            $_POST['tanggal_mulai'],
            $_POST['tanggal_selesai'],
            $_POST['jumlah']
        );
        if ($status == 'sukses') {
            header("location:http://localhost/kaukakau/?c=manajer_penjadwalan&f=home");
        } else {
            echo 'error';
        }
    }

    public function update_jadwal()
    {
        model_penjadwalan::perbaruiJadwal(
            $_POST['id'],
            $_POST['nama_produk'],
            $_POST['tanggal_mulai'],
            $_POST['tanggal_selesai'],
            $_POST['jumlah']
        );
    }

    public function hapus_jadwal()
    {
        model_penjadwalan::hapusJadwal(
            $_GET['id']
        );
        header("location:http://localhost/kaukakau/?c=manajer_penjadwalan&f=home");
    }

}
?>