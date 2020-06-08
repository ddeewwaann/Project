<?php
    $page = $_SERVER['PHP_SELF'];
    $sec = "1800";
    ?>
<html>
    <head>
        <style>
            .table-a {
                font-size: 8px;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">  
    </head>
    
    
    <?php 
        if ($this->session->flashdata('login_alert')=='login_berhasil'){
            echo "<script>alert('Login Berhasil');</script>";
        }else if($this->session->flashdata('login_alert')=='login_gagal'){
            echo "<script>alert('Login Gagal, username atau password salah');</script>";
        }
    ?>
    <body>
        <section>
            <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
                <img class="navbar-brand" height="50px" width="150px" src="<?php echo base_url('assets/img/velastologo.png')?>">
                <img class="navbar-brand" height="50px" width="150px" src="<?php echo base_url('assets/img/astralogo.png')?>">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/webController/user_dashboard')?>">SHIFT 1 <?php echo date('Y-m-d')?></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">SHIFT 2 <?php echo date('Y-m-d')?></a>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item dropdown ">
                            
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $this->session->userdata('username')?></a>
                            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="<?php echo base_url('index.php/webController/export2')?>" class="dropdown-item" role="button" aria-pressed="true">CONVERT TO EXCEL</a>
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
                <div class="row no-gutters">
                    <div class="col-3">
                        <div class="table-responsive">
                        <table border="1" class="table table-bordered table-sm table-a">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" colspan="7" class="text-center">SANBLAST</th>
                    </tr>
                    <tr>
                        <th scope="col"  class="text-center">WAKTU</th>
                        <th scope="col"  class="text-center">PLANNING</th>
                        <th scope="col"  class="text-center">ACTUAL</th>
                        <th scope="col"  class="text-center">%AR</th>
                        <th scope="col"  class="text-center">REJECT</th>
                        <th scope="col"  class="text-center">%RR</th>
                        <th scope="col"  class="text-center">PROBLEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($sanblast as $sbt) : ?>
                            <td class="text-center"><?= $sbt['waktu']; ?></td>
                            <td class="text-center"><?= $sbt['planning']; ?></td>
                            <td class="text-center"><?= $sbt['actual']; ?></td>
                            <td class="text-center"><?= $sbt['ar']; ?>%</td>
                            <td class="text-center"><?= $sbt['reject']; ?></td>
                            <td class="text-center"><?= $sbt['rr']; ?>%</td>
                            <td class="text-center"><?= $sbt['problem']; ?></td>
                        </tr>
                        <?php endforeach;?>
                </tbody>
            </table>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="table-responsive">
                        <table border="1" class="table table-bordered table-sm table-a">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="6" class="text-center">PHOSPATING</th></tr>
                    <tr>
                        <th scope="col" class="text-center">PLANNING</th>
                        <th scope="col" class="text-center">ACTUAL</th>
                        <th scope="col" class="text-center">%AR</th>
                        <th scope="col" class="text-center">REJECT</th>
                        <th scope="col"  class="text-center">%RR</th>
                        <th scope="col" class="text-center">PROBLEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($phospating as $pst) : ?>
                            <td class="text-center"><?= $pst['planning']; ?></td>
                            <td class="text-center"><?= $pst['actual']; ?></td>
                            <td class="text-center"><?= $pst['ar']; ?>%</td>
                            <td class="text-center"><?= $pst['reject']; ?></td>
                            <td class="text-center"><?= $pst['rr']; ?>%</td>
                            <td class="text-center"><?= $pst['problem']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
                </div>
                    </div>
                    <div class="col-2">
                        <div class="table-responsive">
                        <table border="1" class="table table-bordered table-sm table-a">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="6" class="text-center">BONDING</th></tr>
                    <tr>
                        <th scope="col" class="text-center">PLANNING</th>
                        <th scope="col" class="text-center">ACTUAL</th>
                        <th scope="col" class="text-center">%AR</th>
                        <th scope="col" class="text-center">REJECT</th>
                        <th scope="col"  class="text-center">%RR</th>
                        <th scope="col" class="text-center">PROBLEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($bonding as $bdg) : ?>
                            <td class="text-center"><?= $bdg['planning']; ?></td>
                            <td class="text-center"><?= $bdg['actual']; ?></td>
                            <td class="text-center"><?= $bdg['ar']; ?>%</td>
                            <td class="text-center"><?= $bdg['reject']; ?></td>
                            <td class="text-center"><?= $bdg['rr']; ?>%</td>
                            <td class="text-center"><?= $bdg['problem']; ?></td>
                        </tr>
                        <?php endforeach;?>
                    
                </tbody>
            </table>
                </div>
                    </div>
                    <div class="col-2">
                        <div class="table-responsive">
                        <table border="1" class="table table-bordered table-sm table-a">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="6" class="text-center">PRESSING</th></tr>
                    <tr>
                        <th scope="col" class="text-center">PLANNING</th>
                        <th scope="col" class="text-center">ACTUAL</th>
                        <th scope="col" class="text-center">%AR</th>
                        <th scope="col" class="text-center">REJECT</th>
                        <th scope="col"  class="text-center">%RR</th>
                        <th scope="col" class="text-center">PROBLEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($pressing as $prs) : ?>
                            <td class="text-center"><?= $prs['planning']; ?></td>
                            <td class="text-center"><?= $prs['actual']; ?></td>
                            <td class="text-center"><?= $prs['ar']; ?>%</td>
                            <td class="text-center"><?= $prs['reject']; ?></td>
                            <td class="text-center"><?= $prs['rr']; ?>%</td>
                            <td class="text-center"><?= $prs['problem']; ?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
                </div>
                    </div>
                    <div class="col-2">
                        <div class="table-responsive">
                        <table border="1" class="table table-bordered table-sm table-a">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="6" class="text-center">ASSEMBLY 1</th></tr>
                    <tr>
                       <th scope="col" class="text-center">PLANNING</th>
                        <th scope="col" class="text-center">ACTUAL</th>
                        <th scope="col" class="text-center">%AR</th>
                        <th scope="col" class="text-center">REJECT</th>
                        <th scope="col"  class="text-center">%RR</th>
                        <th scope="col" class="text-center">PROBLEM</th> 
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($assembly1 as $asb1) : ?>
                            <td class="text-center"><?= $asb1['planning']; ?></td>
                            <td class="text-center"><?= $asb1['actual']; ?></td>
                            <td class="text-center"><?= $asb1['ar']; ?>%</td>
                            <td class="text-center"><?= $asb1['reject']; ?></td>
                            <td class="text-center"><?= $asb1['rr']; ?>%</td>
                            <td class="text-center"><?= $asb1['problem']; ?></td>
                   </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            </div>
                    </div>
                </div>
            
            <div class="row no-gutters">
                <div class="col-3">
                    <div class="table-responsive">
                    <table border="1" class="table table-bordered table-sm table-a">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="7" class="text-center">MACHINING</th></tr>
                    <tr>
                        <th scope="col" class="text-center">WAKTU</th>
                        <th scope="col" class="text-center">PLANNING</th>
                        <th scope="col" class="text-center">ACTUAL</th>
                        <th scope="col" class="text-center">%AR</th>
                        <th scope="col" class="text-center">REJECT</th>
                        <th scope="col"  class="text-center">%RR</th>
                        <th scope="col" class="text-center">PROBLEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($machining as $mcg) : ?>
                            <td class="text-center"><?= $mcg['waktu']; ?></td>
                            <td class="text-center"><?= $mcg['planning']; ?></td>
                            <td class="text-center"><?= $mcg['actual']; ?></td>
                            <td class="text-center"><?= $mcg['ar']; ?>%</td>
                            <td class="text-center"><?= $mcg['reject']; ?></td>
                            <td class="text-center"><?= $mcg['rr']; ?>%</td>
                            <td class="text-center"><?= $mcg['problem']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
                </div>
                </div>
                <div class="col-2">
                    <div class="table-responsive">
                    <table border="1" class="table table-bordered table-sm table-a">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="6" class="text-center">FRICTION WELDING</th></tr>
                    <tr>
                        <th scope="col" class="text-center">PLANNING</th>
                        <th scope="col" class="text-center">ACTUAL</th>
                        <th scope="col" class="text-center">%AR</th>
                        <th scope="col" class="text-center">REJECT</th>
                        <th scope="col" class="text-center">%RR</th>
                        <th scope="col" class="text-center">PROBLEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($frictionwelding as $fwg) : ?>
                            <td class="text-center"><?= $fwg['planning']; ?></td>
                            <td class="text-center"><?= $fwg['actual']; ?></td>
                            <td class="text-center"><?= $fwg['ar']; ?>%</td>
                            <td class="text-center"><?= $fwg['reject']; ?></td>
                            <td class="text-center"><?= $fwg['rr']; ?>%</td>
                            <td class="text-center"><?= $fwg['problem']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
                    </div>
                </div>
                <div class="col-2">
                    <div class="table-responsive">
                    <table border="1" class="table table-bordered table-sm table-a">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="6" class="text-center">PAINTING</th></tr>
                    <tr>
                        <th scope="col" class="text-center">PLANNING</th>
                        <th scope="col" class="text-center">ACTUAL</th>
                        <th scope="col" class="text-center">%AR</th>
                        <th scope="col" class="text-center">REJECT</th>
                        <th scope="col" class="text-center">%RR</th>
                        <th scope="col" class="text-center">PROBLEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($painting as $ptg) : ?>
                            <td class="text-center"><?= $ptg['planning']; ?></td>
                            <td class="text-center"><?= $ptg['actual']; ?></td>
                            <td class="text-center"><?= $ptg['ar']; ?>%</td>
                            <td class="text-center"><?= $ptg['reject']; ?></td>
                            <td class="text-center"><?= $ptg['rr']; ?>%</td>
                            <td class="text-center"><?= $ptg['problem']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
                </div>
                </div>
                <div class="col-2">
                    <div class="table-responsive">
                     <table border="1" class="table table-bordered table-sm table-a">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="6" class="text-center">ASSEMBLY 2</th></tr>
                    <tr>
                        <th scope="col" class="text-center">PLANNING</th>
                        <th scope="col" class="text-center">ACTUAL</th>
                        <th scope="col" class="text-center">%AR</th>
                        <th scope="col" class="text-center">REJECT</th>
                        <th scope="col" class="text-center">%RR</th>
                        <th scope="col" class="text-center">PROBLEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($assembly2 as $asb2) : ?>
                            <td class="text-center"><?= $asb2['planning']; ?></td>
                            <td class="text-center"><?= $asb2['actual']; ?></td>
                            <td class="text-center"><?= $asb2['ar']; ?>%</td>
                            <td class="text-center"><?= $asb2['reject']; ?></td>
                            <td class="text-center"><?= $asb2['rr']; ?>%</td>
                            <td class="text-center"><?= $asb2['problem']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    
                </div>
            </div>
        </div>
        
        </section>
    </body>
   
</html>