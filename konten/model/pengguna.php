<?php

class pengguna
{
    function __construct()
    {
    }

    public static function masuk($nama_pengguna, $kata_sandi)
    {
        $db = DB::getInstance();
        $result = $db->query("SELECT level FROM user WHERE username = '$nama_pengguna' AND password = '$kata_sandi';");
        if ($result->rowCount() > 0) {
            foreach ($result as $item) {
                return $item['level'];
            }
        } else if ($result == false) {
            return 'gagal';
        } else {
            return 'salah';
        }
    }
}
?>