<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Toko</title>

    <link href="aset/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="aset/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="aset/css/font-awesome-animation.css" rel="stylesheet"/>
    <link href="aset/css/style-custom.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Kaukakau</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Profil</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <div class=" ">
                    <img src="img/logo.png" class="img-circle center-block" width="100" height="100">
                    <h4 class="text-center">Manager</h4>
                </div>
                <li><a href="http://localhost/kaukakau/?c=manajer&f=home">Beranda</a></li>
                <li><a href="http://localhost/kaukakau/?c=manajer_pemasaran&f=forecast">Demand Forecast <span
                    class="sr-only">(current)</span></a></li>
                    <li><a href="http://localhost/kaukakau/?c=manajer_stok&f=home">Stock</a></li>
                    <li><a href="http://localhost/kaukakau/?c=manajer_penjadwalan&f=home">Penjadwalan</a></li>
                    <li class="active"><a href="http://localhost/kaukakau/?c=manajer_pemasaran&f=toko">Daftar toko</a></li>
                </ul>
            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Daftar Toko</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#input_data_toko">
                    Tambah
                </button>
                <hr>
                <?php if ($data != 'kosong') { ?>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nama Toko</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Pemilik</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $item) { ?>
                        <tr>
                            <td><?php echo $item['id'] ?></td>
                            <td><?php echo $item['namatoko'] ?></td>
                            <td><?php echo $item['alamat'] ?></td>
                            <td><?php echo $item['pemilik'] ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php } else { ?>
                <div class="alert alert-info">Tidak Ada Data Toko</div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include 'konten/elemen/modal.php'; ?>

    <script src="aset/js/jquery.min.js"></script>
    <script src="aset/js/bootstrap.js"></script>
    <script src="aset/js/custom.js"></script>
</body>
</html>
