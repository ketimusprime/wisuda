<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <title> WISUDA </title>
</head>

<body>
     
    <!-- start form  -->
    <div class="container">
        <br>  
        <h2>Data Wisuda <i class="fa fa-angle-double-right"></i> Input Data</h2>
        <hr>
        <br>

        <form class="form-horizontal" method="post" action="print.php">
            <h2>Cari Wisuda</h2>
            <form method="GET" action="">
                <input type="text" name="search" placeholder="Nama Wisuda...">
                <input type="submit" value="Cari">
            </form>
            
            <div class="form-group">
                <label for="emailt">Nama</label>
                <div>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
            <div class="form-group">
                <label for="emailt">Email</label>
                <div>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
            </div>
            
            <div class="form-group">
                <label for="no_hp">Nomor HP</label>
                <div>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" onkeypress="return hanyaAngka(event, false)"  maxlength="13">
                </div>
            </div>
            <div class="form-group">
                <label for="jenis_paket">Pilih Paket</label>
                <div>
                    <input type="text" onkeypress="return hanyaAngka(event, false)"  maxlength="9" class="form-control" id="nim" name="nim">
                </div>
            </div>
            <div class="form-group">
                <div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-print"></i> Payment</button>
                    <a href="index.php" class="btn btn-danger"><i class="fa fa-ban"></i> Batal</a>
                </div>
            </div>    
                            
        </form>
    </div>
    <!-- end form  -->
 
     </script>

</body>
</html>