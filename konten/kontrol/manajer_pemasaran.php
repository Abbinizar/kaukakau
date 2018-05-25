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
        $peramalan_stock = $forecast * 5;
        $safety_stock = $peramalan_stock * 0.05;    

        $status = model_pemasaran::tambahDataPenjualan(
            $_POST['nama_produk'],
            $_POST['tanggal'],
            $_POST['jumlah'],
            $forecast
        );
        $status2 = model_pemasaran::tambahStock(
          $_POST['nama_produk'],
          $_POST['tanggal'],
          round($peramalan_stock),
          round($safety_stock)
      );

        if ($status == 'sukses') {
            header("location:http://localhost/kaukakau/?c=manajer_pemasaran&f=forecast");
        } else {
            echo 'error';
        }
    }

    public function bacaStock()
    {

    }

    public function update_penjualan()
    {
        model_pemasaran::perbaruiDataPenjualan(
            $_GET['id'],
            $_GET['tanggal'],
            $_GET['namaproduk'],
            $_GET['jumlah']
        );
    }

    public function editdata()
    {
        model_pemasaran::editdata(
            $_GET['id']
        );
    }

    public function hapus_penjualan()
    {
        model_pemasaran::hapusDataPenjualan(
            $_GET['id']
        );
        header("location:http://localhost/kaukakau/?c=manajer_pemasaran&f=forecast");
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
            $_GET['id']
        );
        header("location:http://localhost/kaukakau/?c=manajer_pemasaran&f=toko");

    }

    public function detail(){
        require_once 'konten/tampilan/detailperamalan.php';
    }
}
?>