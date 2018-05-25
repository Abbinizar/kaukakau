<?php

class manajer_pemasaran
{
    function __construct()
    {
    }
    public function home(){
        require_once 'konten/tampilan/forecast.php';
    }

    //halaman home manajer pemasaran
    public function forecast()
    {
        $produk = model_stok::bacaProduk();
        $data = model_pemasaran::bacaDataPenjualan();
        require_once 'konten/tampilan/forecast.php';
    }

    //halaman data toko
    public function toko()
    {
        $data = model_pemasaran::bacaDataToko();
        require_once 'konten/tampilan/toko.php';
    }

    public function tambah_penjualan()
    {
        $dataSebelumnya = model_pemasaran::bacaPenjualanSebelumnya($_POST['tanggal']);
        $jumlahTerjual = $dataSebelumnya['jumlahpenjualan'];
        $ramalan = $dataSebelumnya['peramalan'];

        $alpha = 0.3;
        $beta = 0.2;
        $adaptive = 0.2;
        $forecast = ($alpha * $jumlahTerjual) + ((1-$alpha)*$ramalan);


        $status = model_pemasaran::tambahDataPenjualan(
            $_POST['nama_produk'],
            $_POST['tanggal'],
            $_POST['jumlah'],
            $forecast
        );
        if ($status == 'sukses') {
            header("location:http://localhost/kaukakau/?c=manajer_pemasaran&f=forecast");
        } else {
            echo 'error';
        }


    }

    public function update_penjualan()
    {
//        model_pemasaran::perbaruiDataPenjualan(
//            $_POST['id'],
//            $_POST['tanggal'],
//            $_POST['nama_produk'],
//            $_POST['jumlah']
//        );
    }

    public function hapus_penjualan()
    {
        model_pemasaran::hapusDataPenjualan(
            $_POST['id']
        );
    }
    
    public function tambah_toko()
    {
        $status = model_pemasaran::tambahDataToko(
            $_POST['nama_toko'],
            $_POST['alamat_toko'],
            $_POST['pemilik']
        );
        if ($status == 'sukses') {
            header("location:http://localhost/kaukakau/?c=manajer_pemasaran&f=toko");
        }
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

    public function detail(){
        require_once 'konten/tampilan/detailperamalan.php';
    }
}
?>