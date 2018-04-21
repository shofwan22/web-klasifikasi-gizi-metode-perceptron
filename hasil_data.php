<!DOCTYPE html>
<html>
<head>
  <title>PROJECT JST</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script> 
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Klasifikasi Gizi Mahasiswa</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
          </ul>
        </div>
      </div>
  </nav>

  <div class="container" style="margin-top: 50px;">
    <div class="page-header">
      <h1>Klasifikasi Gizi Mahasiswa Dengan Metode Perceptron</h1>
    </div>
            
        <div class="panel panel-primary" id="hasil">
          <div class="panel-heading">
            <h1>Hasil Status Gizi</h1>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-hover">
              <thead>
                <th>Data Ke</th>
                <th>Status Gizi</th>
              </thead>
              <tbody>
            <?php
              include ('process/proses_data_testing.php');
                if (isset($_POST['jmldata']) and isset($normalisasiTB[1])) {
                for ($i=1; $i <= $_POST['jmldata']; $i++) {
                echo "<tr>";
                echo "<td>".$i."</td>"; 
                echo "<td>".akhir($normalisasiTB[$i],$normalisasiBB[$i],$normalisasiAk[$i])."</td>";
                echo "</tr>";
                }
              }
            ?>
              </tbody>
            </table>
          </div>          
        </div>
  </div>
</body>
</html>