<html>
    <head>
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
    <?php 
        if($this->session->flashdata('daftar_alert')=='registrasi_berhasil'){
            echo "<script>alert('Data has been added');</script>";
        }
        else if($this->session->flashdata('daftar_alert')=='registrasi_gagal'){
            echo "<script>alert('Duplicate time, try another');</script>";
        }
    ?>
    <body>
        <section>
            <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
                <img class="navbar-brand" height="50px" width="150px" src="<?php echo base_url('assets/img/velastologo.png')?>">
                <img class="navbar-brand" height="50px" width="150px" src="<?php echo base_url('assets/img/astralogo.png')?>">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">ADD DATA(SHIFT1)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/webController/admin_dashboard2')?>">ADD DATA(SHIFT2)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/webController/admin_delete_edit')?>">DELETE AND EDIT(SHIFT1)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/webController/admin_delete_edit2')?>">DELETE AND EDIT(SHIFT2)</a>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item dropdown ">
                            
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $this->session->userdata('username')?></a>
                            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo base_url('index.php/webController/logout')?>">LOGOUT</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <br>
        <br>
        <br>
        <section>
           <div class="container-fluid">
                <div class="shadow-lg p-4 mb-4 bg-white">
                            <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                            <form action="<?php echo base_url('index.php/webController/add_data')?>" method="post">
                                <div class="form-group">
                                    <div class="row">
                                    <div class="col-3">
                                        <h5>LINE</h5>
                                    </div>
                                    <div class="col-8">
                                        <select type="text" class="form-control" name="line">
                                            <option>sanblast</option>
                                            <option>phospating</option>
                                            <option>bonding</option>
                                            <option>pressing</option>
                                            <option>assembly1</option>
                                            <option>machining</option>
                                            <option>FrictionWelding</option>
                                            <option>painting</option>
                                            <option>assembly2</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                    <div class="col-3">
                                        <h5>WAKTU</h5>
                                    </div>
                                    <div class="col-8">
                                        <select type="text" class="form-control" name="waktu">
                                            <option>04:15-05:15</option>
                                            <option>05:15-06:15</option>
                                            <option>06:15-07:15</option>
                                            <option>07:15-08:15</option>
                                            <option>08:15-09:15</option>
                                            <option>09:15-10:15</option>
                                            <option>10:15-11:15</option>
                                            <option>11:15-12:00</option>
                                            <option>12:00-13:00</option>
                                            <option>13:00-14:00</option>
                                            <option>14:00-15:00</option>
                                            <option>15:00-16:00</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                    <div class="col-3">
                                        <h5>PLANNING</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text"  name="planning"  class="form-control" required>
                                        <span id='message'></span>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                    <div class="col-3">
                                        <h5>ACTUAL</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text"  name="actual"  class="form-control" required>
                                        <span id='message'></span>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                    <div class="col-3">
                                        <h5>REJECT</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text"  name="reject"  class="form-control" required>
                                        <span id='message'></span>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                    <div class="col-3">
                                        <h5>PROBLEM</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text"  name="problem"  class="form-control" required>
                                        <span id='message'></span>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5"></div>
                                    <div class="col-3 text-center"><button type="submit" class="btn btn-primary">ADD</button></div>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
            </div>
        </section>
    </body>
</html>