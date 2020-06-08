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
                            <form action="<?php echo base_url('index.php/webController/edit_data')?>" method="post">         
                                <div class="form-group">
                                    <div class="row">
                                    <div class="col-3">
                                        <h5>WAKTU</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="table" value="<?php echo $table?>" hidden>
                                        <select type="text" class="form-control" name="waktu">
                                            <option selected><?php echo $edit[0]['waktu']?></option>
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