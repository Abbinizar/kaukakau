<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

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

<div>
    <h1 class="text-center">Masuk</h1>
</div>
<div class="container">
    <div class="col-sm-4 col-sm-offset-4">
        <form class="form-horizontal" action="http://localhost/kaukakau/?c=kontrol_halaman&f=login" method="post">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    <div class="input-group">
                        <label for="emailAdress" class="col-sm-2 control-label">Username</label>
                        <input type="text" class="form-control" id="emailAdress" name="username"
                               placeholder="Email or Username">
                    </div>
                    <div class="input-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <input type="Password" class="form-control" id="password" name="password"
                               placeholder="Password">
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="aset/js/jquery.min.js"></script>
<script src="aset/js/bootstrap.js"></script>
<script src="aset/js/custom.js"></script>
</body>
</html>