<?php

class model_penjadwalan
{
    function __construct()
    {
    }

    public static function bacaJadwal()
    {
        $db = DB::getInstance();
        $hasil = $db->query("SELECT * FROM penjadwalan;");
        if ($hasil->rowCount() > 0) {
            foreach ($hasil as $item) {
                $output[] = array(
                    'id' => $item['id'],
                    'mulai' => $item['mulai'],
                    'akhir' => $item['akhir'],
                    'jumlah' => $item['jumlah']
                );
            }
            return $output;
        } else {
            return 'kosong';
        }
    }

    public static function tambahJadwal($mulai, $akhir, $jumlah)
    {
        $db = DB::getInstance();
        $status = $db->exec("INSERT INTO penjadwalan(mulai, akhir, jumlah) VALUES ('$mulai', '$akhir', $jumlah);");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public static function perbaruiJadwal($id, $mulai, $akhir, $jumlah)
    {
        $db = DB::getInstance();
        $status = $db->exec("UPDATE penjadwalan set mulai='$mulai', akhir='$akhir', jumlah='$jumlah' WHERE id=$id;");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }
}