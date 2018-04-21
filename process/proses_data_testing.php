<?php
	include ('proses_status_gizi.php');
	include ("proses_normalisasi.php"); 

if(isset($_POST['jmldata'])){
	$jml_data = $_POST['jmldata'];
	if (isset($_POST['tb1'])) {
		for ($i=1; $i <= $jml_data; $i++) { 
			$tinggiBadan[$i] = $_POST['tb'.$i];
			$beratBadan[$i] = $_POST['bb'.$i];
			$aktivitas[$i] = $_POST['akt'.$i];
			$aktivitasAngka[$i] = aktivitasKeAngka($aktivitas[$i]);			
		}
		//Normalisasi Data
		$minTB = min($tinggiBadan);
		$maxTB = max($tinggiBadan);
		$minBB = min($beratBadan);
		$maxBB = max($beratBadan);
		$minAk = min($aktivitasAngka);
		$maxAk = max($aktivitasAngka);
		for ($i=1; $i <= $jml_data; $i++) { 
			$normalisasiTB[$i] = round(normalisasi($tinggiBadan[$i],$maxTB,$minTB),2);
			$normalisasiBB[$i] = round(normalisasi($beratBadan[$i],$maxBB,$minBB),2);
			$normalisasiAk[$i] = round(normalisasi($aktivitasAngka[$i],$maxAk,$minAk),2);
		}
	}
}

		function akhir ($x1,$x2,$x3) {
			$w1 = $_POST['w1'];
			$w2 = $_POST['w2'];
			$w3 = $_POST['w3'];
			$b = $_POST['b'];
			$treshold = 0.5;
			$rumus=($w1*$x1)+($w2*$x2)+($w3*$x3)+$b;
			// echo "rumus = ",$rumus,"--##";
			// echo "##w1 = ",$w1," w2 = ",$w2," w3 = ",$w3," B = ",$b;
			// echo "##x1 = ",$x1," x2 = ",$x2," x3 = ",$x3;
			if ($rumus>$treshold) {
				return "Lebih";
			}elseif ($rumus<=$treshold && $rumus>=(-$treshold)) {
				return "Normal";
			}elseif ($rumus<(-$treshold)) {
				return "Kurang";
			}	
		}

 ?>