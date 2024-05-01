<!DOCTYPE html>
<html>
    <head>
        <title>Smart Laundry</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
        <script type="text/javascript" src="./assets/js/Jquery.js"></script>
        <script type="text/javascript" src="./assets/js/bootstrap.js"></script>
    </head>

    <body style="background: white;">
        <div class="container">
            <div class="col-md-4 col-md-offset-4">
                <form method="post">
                    <div class="panel">
                        <div class="panel-body">    
                            <div class="form-group">
                                <label>Login sebagai?</label><br/>
                                <a href="./Admin/loginAdmin.php" type="button" class="btn btn-primary" name="lgnCust">Customer</a>
                                <a href="./Admin/loginAdmin.php" type="button" class="btn btn-primary" name="lgnCust">Admin</a>
                                <a href="./Admin/loginAdmin.php" type="button" class="btn btn-primary" name="lgnCust">Owner</a><br/><br/>
                                <a href="./index.php">Kembali</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>