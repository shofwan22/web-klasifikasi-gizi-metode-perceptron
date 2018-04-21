<?php
include ('proses_status_gizi.php');
include ("proses_normalisasi.php");

$jml_data = $_POST['jmldata'];
//Main
	if (cek_data($jml_data)){
		//Penentuan Target
		for ($i=1; $i <= $jml_data ; $i++) {
			$tinggiBadan[$i] = $_POST['tb'.$i];
			$beratBadan[$i] = $_POST['bb'.$i];
			$aktivitas[$i] = $_POST['akt'.$i];
			$target[$i] = htarget($beratBadan[$i],$tinggiBadan[$i]);
		}
		//Ubah Data ke Angka
		for ($i=1; $i <= $jml_data; $i++) { 
			$aktivitasAngka[$i] = aktivitasKeAngka($aktivitas[$i]);
			$targetAngka[$i] = targetKeAngka($target[$i]);
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

	}else{
		echo "<script>window.location.href='index.php';</script>";
	}

?>