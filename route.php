<?php
function call($controller, $action)
{
    require_once('konten/kontrol/' . $controller . '.php');

    require_once 'konten/model/model_stok.php';

    switch ($controller) {
        case 'kontrol_halaman':
            require_once 'konten/model/pengguna.php';
            $controller = new kontrol_halaman();
            break;
        case 'manajer':
            require_once 'konten/model/model_manajer.php';
            $controller = new manajer();
            break;
        case 'manajer_pemasaran':
            require_once 'konten/model/model_pemasaran.php';
            $controller = new manajer_pemasaran();
            break;
        case 'manajer_penjadwalan':
            require_once 'konten/model/model_penjadwalan.php';
            $controller = new manajer_penjadwalan();
            break;
        case 'manajer_stok':
            $controller = new manajer_stok();
            break;
        default:
            //TODO: buat aksi bila jalur yang dituju tidak tersedia
            break;
    }
    $controller->{$action}();
}

call($controller, $action);

?>