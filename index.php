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
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3>Menentukan Jumlah Data Training</h3>
					</div>
					<div class="panel-body">
						<form action="#" method="POST">
							<div class="form-group">
								<label for="sel1">Tambahkan Jumlah</label>
									<select class="form-control" id="sel1" name="jmldata">
									<?php 
										for ($i=1; $i <= 100 ; $i++) { 
											echo "<option>".$i."</option>";
										}
									 ?>								
									</select>						
							</div>
								<input type="hidden" name="style" value="show">
								<input type="submit" class="btn btn-primary" value="Submit" id="submit">
						</form>	
					</div>
				</div>
				<?php
					if(isset($_POST['style'])){
						$style=$_POST['style'];
						if(isset($_POST['jmldata'])){
							$x = $_POST['jmldata'];
						}else{
							$x=0;
						}
						
					}else{
						$style='none';
					}
				?>
				<div class="panel panel-primary" id="data" style="display: <?php echo $style; ?>">
					<div class="panel-heading">
						<h3>Data Sampel</h3>
					</div>
					<div class="panel-body" id="konten">
						<form method="post" action="data.php">
							<table class="table table-hover">
								<thead>
								<tr>
									<th>Data ke</th>
									<th>Tinggi Badan</th>
									<th>Berat Badan</th>
									<th>Aktivitas</th>
								</tr>
								</thead>
								<tbody>
									<?php
									for ($i=1; $i <= $x ; $i++) { 
										echo "<tr>
											  	<td>$i</td>
											  	<td><input name='tb$i' required></td>
											  	<td><input name='bb$i' required></td>
											  	<td><select name='akt$i'>
											  		<option>Ringan</option>
											  		<option>Normal</option>
											  		<option>Padat</option>
											  		</select></td>
											  </tr>";
									}
									?>
								</tbody>
							</table>
							<input type="hidden" name="jmldata" value="<?php echo $x; ?>">
							<button type="submit "class="btn btn-primary btn-block">Submit</button>
						</form>
					</div>
				</div>
	</div>
</body>
</html>