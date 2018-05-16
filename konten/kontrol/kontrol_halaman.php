<?php

class kontrol_halaman
{

    function __construct()
    {
    }

    public function home()
    {
        require_once 'konten/tampilan/home.php';
    }

    public function login_page()
    {
        require_once 'konten/tampilan/login.php';
    }

    public function login()
    {
        $hasil = pengguna::masuk($_POST['username'], $_POST['password']);
        if ($hasil !== null) {
            if ($hasil == 'admin') {
                //TODO level admin
            } else if ($hasil == 'manajer') {
                $_SESSION['level'] = $hasil;
                header("location: http://localhost/kaukakau/?c=manajer&f=home");

            } else if ($hasil == 'pemasaran') {
                $_SESSION['level'] = $hasil;
                header("location: http://localhost/kaukakau/?c=manajer_pemasaran&f=home");

            } else if ($hasil == 'gudang') {
                $_SESSION['level'] = $hasil;
                header("location: http://localhost/kaukakau/?c=manajer_stok&f=home");

            } else if ($hasil == 'produksi') {
                $_SESSION['level'] = $hasil;
                header("location: http://localhost/kaukakau/?c=manajer_penjadwalan&f=home");

            }
        } else {
            header("location: http://localhost/kaukakau/?c=ControlHalaman&f=login_page&error");
        }
    }

    public function logout()
    {
        session_start();
        if (session_destroy()) header("location: http://localhost/kaukakau/");
    }
}
?>