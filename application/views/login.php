<html>
    <head>
        <style>
            .a{
                background-color: aquamarine;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        
    </head>
    <?php 
        if ($this->session->flashdata('login_alert')=='login_berhasil'){
            echo "<script>alert('Login Berhasil');</script>";
        }else if($this->session->flashdata('login_alert')=='login_gagal'){
            echo "<script>alert('Login Gagal, id atau password salah');</script>";
        }
    ?>
    <body>
        <section class="a">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-2"></div>
                    <div class="col-3">
                        <img class="rounded mx-auto" src="<?php echo base_url('assets/img/velastologo.png')?>" width="100%" height="200px">
                    
                    </div>
                    <div class="col-2">
                        <img class="rounded mx-auto" src="<?php echo base_url('assets/img/vektor_akun.png')?>" width="100%">
                    
                    </div>
                    
                    <div class="col-3">
                        <img class="rounded mx-auto" src="<?php echo base_url('assets/img/astralogo.png')?>" width="100%" height="200px">
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-5"></div>
                    <div class="col-2">
                        <div class="text-center">
                            <form action="<?php echo base_url('index.php/webController/login')?>" method="post">
                                <div class="form-group">
                                    <label class="font-weight-bold">USERNAME</label>
                                    <input type="text" class="form-control" placeholder="Enter Username" name="username">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">PASSWORD</label>
                                    <input type="password" class="form-control" placeholder="Enter Password" name="password">
                                </div>
                                <button type="submit" class="btn btn-primary">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </body>
</html>