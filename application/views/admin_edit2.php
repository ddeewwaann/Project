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
            <div class="container-fluid">
                <div class="shadow-lg p-4 mb-4 bg-white">
                            <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                            <form action="<?php echo base_url('index.php/webController/edit_data2')?>" method="post">         
                                <div class="form-group">
                                    <div class="row">
                                    <div class="col-3">
                                        <h5>WAKTU</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="table" value="<?php echo $table?>" hidden>
                                        <select type="text" class="form-control" name="waktu">
                                            <option selected><?php echo $edit[0]['waktu']?></option>
                                            
                                            <option>16:30-17:30</option>
                                            <option>17:30-18:30</option>
                                            <option>18:30-19:30</option>
                                            <option>19:30-20:30</option>
                                            <option>20:30-21:30</option>
                                            <option>21:30-22:30</option>
                                            <option>22:30-23:30</option>
                                            <option>23:30-01:30</option>
                                            <option>01:30-02:30</option>
                                            <option>02:30-03:30</option>
                                            <option>03:30-04:30</option>
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
                                        <input type="text" value="<?php echo $edit[0]['planning']?>" name="planning"  class="form-control" required>
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
                                        <input type="text" value="<?php echo $edit[0]['actual']?>" name="actual"  class="form-control" required>
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
                                        <input type="text"  name="reject" value="<?php echo $edit[0]['reject']?>" class="form-control" required>
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
                                        <input type="text"  name="problem" value="<?php echo $edit[0]['problem']?>" class="form-control" required>
                                        <span id='message'></span>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5"></div>
                                    <div class="col-3 text-center"><button type="submit" class="btn btn-primary">EDIT</button></div>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
            </div>
        </section>
    </body>
</html>