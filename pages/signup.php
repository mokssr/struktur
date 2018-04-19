<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register - Data Struktural</title>
    <link rel="icon" href="../public/img/icon.ico">

    <!-- Bootstrap -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/master.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row jumbotron-container-register">
        <div class="col-md-5 col-md-offset-3">
          <div class="jumbotron center">
            <div class="logo-container">
              <img src="../public/img/dps.png" class="logo" alt="logo" style="width:100px; height:100px;"> 
            </div>
            <div  class="input-group">
              <form action="#" method="POST">
                <!-- nama jabatan kabupaten/kota kecamatan desa alamat tlp -->
                <input type="text" name="nama" class="form-control" placeholder="Nama lengkap"/>
                <input type="text" name="jabatan" class="form-control" placeholder="Jabatan"/>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat"/>
                <select class="form-control" name="kabupaten">
                    <option value="" disabled selected>Kabupaten/Kota</option>
                    <option>Denpasar</option>
                    <option>Badung</option>
                    <option>Tabanan</option>
                    <option>Klungkung</option>
                    <option>Bangli</option>
                    <option>Gianyar</option>
                    <option>Jembrana</option>
                    <option>Buleleng</option>
                </select>
                <select class="form-control" name="kecamatan">
                    <option value="" disabled selected>Kecamatan</option>
                    <option>Denpasar Utara</option>
                    <option>Denpasar Timur</option>
                    <option>Denpasar Barat</option>
                    <option>Denpasar Selatan</option>
                </select>
                <select class="form-control" name="desa">
                    <option value="" disabled selected>Desa</option>
                    <option>Desa Utara</option>
                    <option>Desa Timur</option>
                    <option>Desa Barat</option>
                    <option>Desa Selatan</option>
                </select>
                <input type="tel" name="telp" class="form-control" placeholder="Telepon"/>
                <input type="text" name="username" class="form-control" placeholder="Username"/>
                <input type="password" name="pass" class="form-control" placeholder="Password"/>
                <div class="submit-control">
                  <button class="btn btn-default register" type="submit" value="submit"> Register </button>
                  <a class="btn btn-default register" href="/struktur/"> Batal </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../public/js/bootstrap.min.js"></script>
  </body>
</html>
