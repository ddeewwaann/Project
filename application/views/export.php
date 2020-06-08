<html>
    <head>
    <?php
    $file = "DataBarang-".date("d-m-Y").".xls";
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=$file");
	?>
    </head>
    <body>
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
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        <br>
        <br>
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
                            <td class="text-center"><?= $pst['rr']; ?>%</td>
                            <td class="text-center"><?= $pst['problem']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        <br>
        <br>
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
                            <td class="text-center"><?= $bdg['rr']; ?>%</td>
                            <td class="text-center"><?= $bdg['problem']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        <br>
        <br>
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
                            <td class="text-center"><?= $prs['rr']; ?>%</td>
                            <td class="text-center"><?= $prs['problem']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <br>
            <br>
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
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <br>
            <br>
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
                            <td class="text-center"><?= $mcg['rr']; ?>%</td>
                            <td class="text-center"><?= $mcg['problem']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <br>
            <br>
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
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <br>
            <br>
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
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        <br>
        <br>
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
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        
        
    </body>
</html>