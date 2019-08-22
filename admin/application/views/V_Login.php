<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Page - PT Alam Hijau Selaras</title>

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

</head>

<body class="black-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6" align="center">
                <img style="width: 350px; height: 100px;" src="<?php echo base_url();?>assets/img/longwayslogowhite.png">
                <h2 class="font-bold">Admin Page</h2>
                <h3 class="font-bold">PT Alam Hijau Selaras</h3>
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                <form action="<?php echo base_url();?>prosesLogin" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6" align="center">
                Copyright © 2019-2020 Everett tech.
            </div>
        </div>
    </div>

</body>

</html>
