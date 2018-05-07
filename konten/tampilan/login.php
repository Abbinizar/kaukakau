<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <link href="aset/css/bootstrap.css" rel="stylesheet"/>
    <link href="aset/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="aset/css/font-awesome-animation.css" rel="stylesheet"/>
    <link href="aset/css/style.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div>
    <h1 class="text-center">Masuk</h1>
</div>
<div class="container">
    <form class="form-horizontal" action="http://localhost/kaukakau/?c=kontrol_halaman&f=login" method="post">
        <div class="form-group">
            <label for="emailAdress" class="col-sm-2 control-label">Username</label>
            <?php if (isset($_GET['error'])) { ?>
                <label for="emailAdress" class="col-sm-2 control-label">Username Salah</label>
            <?php } ?>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="emailAdress" name="username" placeholder="Email or Username">
            </div>
        </div>
        <div class="form-group">
            <label for="emailAdress" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-9">
                <input type="Password" class="form-control" id="emailAdress" name="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
</div>
<script src="aset/js/jquery.min.js"></script>
<script src="aset/js/bootstrap.js"></script>
<script src="aset/js/custom.js"></script>
</body>
</html>