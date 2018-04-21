<?php 
	
	function normalisasi($value,$max,$min){
		$newmin = 0;
		$newmax = 1;
		$hasil = (($value - $min)/($max-$min))*($newmax-$newmin)+$newmin;
		return $hasil;
	}


 ?>