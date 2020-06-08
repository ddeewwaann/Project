<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    </head>
    <body>
        <section>
            <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
                <img class="navbar-brand" height="50px" width="150px" src="<?php echo base_url('assets/img/velastologo.png')?>">
                <img class="navbar-brand" height="50px" width="150px" src="<?php echo base_url('assets/img/astralogo.png')?>">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/webController/admin_dashboard')?>">ADD DATA(SHIFT1)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/webController/admin_dashboard2')?>">ADD DATA(SHIFT2)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/webController/admin_delete_edit')?>">DELETE AND EDIT(SHIFT1)</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">DELETE AND EDIT(SHIFT2)</a>
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
            <center><a class="btn btn-primary" href="<?php echo base_url('index.php/webController/delete2') ?>">DELETE ALL TABLE</a></center>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-11">
                        <table border="1" class="table table-bordered" id="dataTable">
                            <thead class="thead-light">
                                <tr><th scope="col" colspan="7" class="text-center">SANBLAST</th></tr>
                                <tr>
                                    <th scope="col" class="text-center">WAKTU</th>
                                    <th scope="col" class="text-center">PLANNING</th>
                                    <th scope="col" class="text-center">ACTUAL</th>
                                    <th scope="col" class="text-center">%AR</th>
                                    <th scope="col" class="text-center">REJECT</th>
                                    <th scope="col" class="text-center">%RR</th>
                                    <th scope="col" class="text-center">PROBLEM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><?php foreach ($sanblast as $sbt) : ?>
                                    <td class="text-center"><?= $sbt['waktu']; ?></td>
                                    <td class="text-center"><?= $sbt['planning']; ?></td>
                                    <td class="text-center"><?= $sbt['actual']; ?></td>
                                    <td class="text-center"><?= $sbt['ar']; ?>%</td>
                                    <td class="text-center"><?= $sbt['reject']; ?></td>
                                    <td class="text-center"><?= $sbt['rr']; ?>%</td>
                                    <td class="text-center"><?= $sbt['problem']; ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url(); ?>index.php/webController/delete_data2/<?= $sbt['waktu'] ?>/sanblast2 " class="badge badge-danger float-center" onclick="return confirm('Are you sure want to delete the data ? ');" ?>DELETE</a>
                                        <a href="<?= base_url(); ?>index.php/webController/edit_getdata2/<?= $sbt['waktu'] ?>/sanblast2" class="badge badge-success float-center" ?>EDIT</a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-11">
                        <table border="1" class="table table-bordered">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="7" class="text-center">PHOSPATING</th></tr>
                    <tr>
                        <th scope="col" class="text-center">WAKTU</th>
                        <th scope="col" class="text-center">PLANNING</th>
                        <th scope="col" class="text-center">ACTUAL</th>
                        <th scope="col" class="text-center">%AR</th>
                        <th scope="col" class="text-center">REJECT</th>
                        <th scope="col" class="text-center">%RR</th>
                        <th scope="col" class="text-center">PROBLEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($phospating as $pst) : ?>
                            <td class="text-center"><?= $pst['waktu']; ?></td>
                            <td class="text-center"><?= $pst['planning']; ?></td>
                            <td class="text-center"><?= $pst['actual']; ?></td>
                            <td class="text-center"><?= $pst['ar']; ?>%</td>
                            <td class="text-center"><?= $pst['reject']; ?></td>
                            <td class="text-center"><?= $pst['reject']; ?>%</td>
                            <td class="text-center"><?= $pst['problem']; ?></td>
                            <td class="text-center">
                                        <a href="<?= base_url(); ?>index.php/webController/delete_data2/<?= $pst['waktu'] ?>/phospating2 " class="badge badge-danger float-center" onclick="return confirm('Are you sure want to delete the data ? ');" ?>DELETE</a>
                                        <a href="<?= base_url(); ?>index.php/webController/edit_getdata2/<?= $pst['waktu'] ?>/phospating2" class="badge badge-success float-center" ?>EDIT</a>
                                    </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-11">
                        <table border="1" class="table table-bordered">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="7" class="text-center">BONDING</th></tr>
                    <tr>
                        <th scope="col" class="text-center">WAKTU</th>
                        <th scope="col" class="text-center">PLANNING</th>
                        <th scope="col" class="text-center">ACTUAL</th>
                        <th scope="col" class="text-center">%AR</th>
                        <th scope="col" class="text-center">REJECT</th>
                        <th scope="col" class="text-center">%RR</th>
                        <th scope="col" class="text-center">PROBLEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($bonding as $bdg) : ?>
                            <td class="text-center"><?= $bdg['waktu']; ?></td>
                            <td class="text-center"><?= $bdg['planning']; ?></td>
                            <td class="text-center"><?= $bdg['actual']; ?></td>
                            <td class="text-center"><?= $bdg['ar']; ?>%</td>
                            <td class="text-center"><?= $bdg['reject']; ?></td>
                            <td class="text-center"><?= $bdg['rr']; ?></td>
                            <td class="text-center"><?= $bdg['problem']; ?></td>
                            <td class="text-center">
                                        <a href="<?= base_url(); ?>index.php/webController/delete_data2/<?= $bdg['waktu'] ?>/bonding2 " class="badge badge-danger float-center" onclick="return confirm('Are you sure want to delete the data ? ');" ?>DELETE</a>
                                        <a href="<?= base_url(); ?>index.php/webController/edit_getdata2/<?= $bdg['waktu'] ?>/bonding2" class="badge badge-success float-center" ?>EDIT</a>
                                    </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-11">
                        <table border="1" class="table table-bordered">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="7" class="text-center">PRESSING</th></tr>
                    <tr>
                        <th scope="col" class="text-center">WAKTU</th>
                        <th scope="col" class="text-center">PLANNING</th>
                        <th scope="col" class="text-center">ACTUAL</th>
                        <th scope="col" class="text-center">%AR</th>
                        <th scope="col" class="text-center">REJECT</th>
                        <th scope="col" class="text-center">%RR</th>
                        <th scope="col" class="text-center">PROBLEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($pressing as $prs) : ?>
                            <td class="text-center"><?= $prs['waktu']; ?></td>
                            <td class="text-center"><?= $prs['planning']; ?></td>
                            <td class="text-center"><?= $prs['actual']; ?></td>
                            <td class="text-center"><?= $prs['ar']; ?>%</td>
                            <td class="text-center"><?= $prs['reject']; ?></td>
                            <td class="text-center"><?= $prs['rr']; ?></td>
                            <td class="text-center"><?= $prs['problem']; ?></td>
                            <td class="text-center">
                                        <a href="<?= base_url(); ?>index.php/webController/delete_data2/<?= $prs['waktu'] ?>/pressing2 " class="badge badge-danger float-center" onclick="return confirm('Are you sure want to delete the data ? ');" ?>DELETE</a>
                                        <a href="<?= base_url(); ?>index.php/webController/edit_getdata2/<?= $prs['waktu'] ?>/pressing2" class="badge badge-success float-center" ?>EDIT</a>
                                    </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-11">
                        <table border="1" class="table table-bordered">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="7" class="text-center">ASSEMBLY 1</th></tr>
                    <tr>
                        <th scope="col" class="text-center">WAKTU</th>
                        <th scope="col" class="text-center">PLANNING</th>
                        <th scope="col" class="text-center">ACTUAL</th>
                        <th scope="col" class="text-center">%AR</th>
                        <th scope="col" class="text-center">REJECT</th>
                        <th scope="col" class="text-center">%RR</th>
                        <th scope="col" class="text-center">PROBLEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($assembly1 as $asb1) : ?>
                            <td class="text-center"><?= $asb1['waktu']; ?></td>
                            <td class="text-center"><?= $asb1['planning']; ?></td>
                            <td class="text-center"><?= $asb1['actual']; ?></td>
                            <td class="text-center"><?= $asb1['ar']; ?>%</td>
                            <td class="text-center"><?= $asb1['reject']; ?></td>
                            <td class="text-center"><?= $asb1['rr']; ?>%</td>
                            <td class="text-center"><?= $asb1['problem']; ?></td>
                            <td class="text-center">
                                        <a href="<?= base_url(); ?>index.php/webController/delete_data2/<?= $asb1['waktu'] ?>/assembly1_2 " class="badge badge-danger float-center" onclick="return confirm('Are you sure want to delete the data ? ');" ?>DELETE</a>
                                        <a href="<?= base_url(); ?>index.php/webController/edit_getdata2/<?= $asb1['waktu'] ?>/assembly1_2" class="badge badge-success float-center" ?>EDIT</a>
                                    </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-11">
                        <table border="1" class="table table-bordered">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="7" class="text-center">MACHINING</th></tr>
                    <tr>
                        <th scope="col" class="text-center">WAKTU</th>
                        <th scope="col" class="text-center">PLANNING</th>
                        <th scope="col" class="text-center">ACTUAL</th>
                        <th scope="col" class="text-center">%AR</th>
                        <th scope="col" class="text-center">REJECT</th>
                        <th scope="col" class="text-center">%RR</th>
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
                            <td class="text-center"><?= $mcg['rr']; ?></td>
                            <td class="text-center"><?= $mcg['problem']; ?></td>
                            <td class="text-center">
                                        <a href="<?= base_url(); ?>index.php/webController/delete_data2/<?= $mcg['waktu'] ?>/machining2 " class="badge badge-danger float-center" onclick="return confirm('Are you sure want to delete the data ? ');" ?>DELETE</a>
                                        <a href="<?= base_url(); ?>index.php/webController/edit_getdata2/<?= $mcg['waktu'] ?>/machining2" class="badge badge-success float-center" ?>EDIT</a>
                                    </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-11">
                        <table border="1" class="table table-bordered">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="7" class="text-center">FRICTION WELDING</th></tr>
                    <tr>
                        <th scope="col" class="text-center">WAKTU</th>
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
                            <td class="text-center"><?= $fwg['waktu']; ?></td>
                            <td class="text-center"><?= $fwg['planning']; ?></td>
                            <td class="text-center"><?= $fwg['actual']; ?></td>
                            <td class="text-center"><?= $fwg['ar']; ?>%</td>
                            <td class="text-center"><?= $fwg['reject']; ?></td>
                            <td class="text-center"><?= $fwg['rr']; ?>%</td>
                            <td class="text-center"><?= $fwg['problem']; ?></td>
                            <td class="text-center">
                                        <a href="<?= base_url(); ?>index.php/webController/delete_data2/<?= $fwg['waktu'] ?>/frictionwelding2 " class="badge badge-danger float-center" onclick="return confirm('Are you sure want to delete the data ? ');" ?>DELETE</a>
                                        <a href="<?= base_url(); ?>index.php/webController/edit_getdata2/<?= $fwg['waktu'] ?>/frictionwelding2" class="badge badge-success float-center" ?>EDIT</a>
                                    </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-11">
                        <table border="1" class="table table-bordered">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="7" class="text-center">PAINTING</th></tr>
                    <tr>
                        <th scope="col" class="text-center">WAKTU</th>
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
                            <td class="text-center"><?= $ptg['waktu']; ?></td>
                            <td class="text-center"><?= $ptg['planning']; ?></td>
                            <td class="text-center"><?= $ptg['actual']; ?></td>
                            <td class="text-center"><?= $ptg['ar']; ?>%</td>
                            <td class="text-center"><?= $ptg['reject']; ?></td>
                            <td class="text-center"><?= $ptg['rr']; ?>%</td>
                            <td class="text-center"><?= $ptg['problem']; ?></td>
                            <td class="text-center">
                                        <a href="<?= base_url(); ?>index.php/webController/delete_data2/<?= $ptg['waktu'] ?>/painting2 " class="badge badge-danger float-center" onclick="return confirm('Are you sure want to delete the data ? ');" ?>DELETE</a>
                                        <a href="<?= base_url(); ?>index.php/webController/edit_getdata2/<?= $ptg['waktu'] ?>/painting2" class="badge badge-success float-center" ?>EDIT</a>
                                    </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-11">
                        <table border="1" class="table table-bordered">
                <thead class="thead-light">
                    <tr><th scope="col" colspan="7" class="text-center">ASSEMBLY 2</th></tr>
                    <tr>
                        <th scope="col" class="text-center">WAKTU</th>
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
                            <td class="text-center"><?= $asb2['waktu']; ?></td>
                            <td class="text-center"><?= $asb2['planning']; ?></td>
                            <td class="text-center"><?= $asb2['actual']; ?></td>
                            <td class="text-center"><?= $asb2['ar']; ?>%</td>
                            <td class="text-center"><?= $asb2['reject']; ?></td>
                            <td class="text-center"><?= $asb2['rr']; ?>%</td>
                            <td class="text-center"><?= $asb2['problem']; ?></td>
                            <td class="text-center">
                                        <a href="<?= base_url(); ?>index.php/webController/delete_data2/<?= $asb2['waktu'] ?>/assembly2_2 " class="badge badge-danger float-center" onclick="return confirm('Are you sure want to delete the data ? ');" ?>DELETE</a>
                                        <a href="<?= base_url(); ?>index.php/webController/edit_getdata2/<?= $asb2['waktu'] ?>/assembly2_2" class="badge badge-success float-center" ?>EDIT</a>
                                    </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>