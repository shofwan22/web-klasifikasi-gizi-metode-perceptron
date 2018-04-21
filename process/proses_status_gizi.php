<?php

	function cek_data($x){
		$result = false;
		$y = 0;
		if($x==1){
			$result = false;
		}else{
			for ($i=1; $i <= $x; $i++) { 
				$_POST['tb'.$i] = trim($_POST['tb'.$i]);
				$_POST['bb'.$i] = trim($_POST['bb'.$i]);
				if ($_POST['tb'.$i]!=null and $_POST['bb'.$i]!=null) {
					$y=$y+1;
					if ($y==$x) {
						$result = true;
					}
				} 
			}
		}
		return $result;
	}
	function htarget($berat,$tinggi){
		$bmi = $berat/(($tinggi/100)*($tinggi/100));
		if($bmi<17){
			$hasil = 'Kurang';
		}elseif ($bmi>=17 and $bmi<=23) {
			$hasil = 'Normal';
		}elseif ($bmi>23) {
			$hasil = 'Lebih';
		}
		return $hasil;
	}

	function aktivitasKeAngka($aktivitas){
		if ($aktivitas == 'Ringan') {
			return 1;	
		}elseif($aktivitas == 'Normal'){
			return 2;
		}elseif($aktivitas == 'Padat'){
			return 3;
		}
	}

	function targetKeAngka($target){
		if ($target == 'Kurang') {
			return -1;
		}elseif($target == 'Normal'){
			return 0;
		}elseif($target == 'Lebih'){
			return 1;
		}
	}
?>