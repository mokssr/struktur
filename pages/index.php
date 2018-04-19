<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home - Data Struktural</title>
    <link rel="icon" href="../public/img/icon.ico">

    <!-- Bootstrap -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/home.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/struktur/"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class=header>
        </div>

        <div class="row">
            <h1>Data Diri</h1>
            <div class="col-md-3 col-md-offset-1">
                <img src="../public/img/profile.jpg" alt="profile" style="width:100%; height:auto; margin-bottom:10px;">
                <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#updatebio">Update biodata</button>
            </div>
            <div class="col-md-7">
            <ul class="list-group">
                <li class="list-group-item"><label class="lbl-info">Nama</label>Made Nyoman</li>
                <li class="list-group-item"><label class="lbl-info">Jabatan</label>Jabatan</li>
                <li class="list-group-item"><label class="lbl-info">Alamat</label>Jl.alamat no. xx</li>
                <li class="list-group-item"><label class="lbl-info">Kabupaten/Kota</label>Kabupaten</li>
                <li class="list-group-item"><label class="lbl-info">Kecamatan</label>Kecamatan</li>
                <li class="list-group-item"><label class="lbl-info">Desa</label>Desa</li>
                <li class="list-group-item"><label class="lbl-info">Telepon</label>822939</li>
                <li class="list-group-item"><label class="lbl-info">Username</label>username</li>
            </ul>
            </div>
        </div>

        <!-- Modal -->
        <div id="updatebio" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Data Diri</h4>
                </div>
                <div class="modal-body">
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
                            <button class="btn btn-default register" type="submit" value="submit"> Update </button>
                            <button class="btn btn-default register" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>

            </div>
        </div>


        <div class="row">
            <h2>Data Bawahan</h2>
            <h3>Jumlah : <strong>2</strong></h3>
            <button class="btn btn-success">Tambahkan Staff</button>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>mary@example.com</td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>july@example.com</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../public/js/bootstrap.min.js"></script>
  </body>
</html>
