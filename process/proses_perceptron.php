<?php 
	class Perceptron{

		private $learning_rate;
		private $treshold;
		private $bobot= array();
		private $bias;
		private $tmp = array();
		private $batas;

		function __construct(){
			$this->bobot[0] = 0;
			$this->bobot[1] = 0;
			$this->bobot[2] = 0;
			$this->bias = 0;
			$this->treshold = 0.5;
			$this->learning_rate = 0.4;	
			$this->tmp[0] = $this->bobot[0];
			$this->tmp[1] = $this->bobot[1];
			$this->tmp[2] = $this->bobot[2];
			$this->tmp[3] = $this->bias;
			$this->batas = 0;
		}
		function cek_target($target,$akt,$x1,$x2,$x3){
			if($target!=$akt){
				$this->bobot[0] = $this->bobot[0]+($this->learning_rate*$target*$x1);
				$this->bobot[1] = $this->bobot[1]+($this->learning_rate*$target*$x2);
				$this->bobot[2] = $this->bobot[2]+($this->learning_rate*$target*$x3);
				$this->bias = $this->bias+($this->learning_rate*$target);
				$this->tmp[0] = $this->bobot[0];
				$this->tmp[1] = $this->bobot[1];
				$this->tmp[2] = $this->bobot[2];
				$this->tmp[3] = $this->bias;
			}else{
				$this->batas = $this->batas + 1;
			}
		}

		function hitung_yin($x1,$x2,$x3){
			return $hasil = $this->bias+($x1*$this->bobot[0])+($x2*$this->bobot[1])+($x3*$this->bobot[2]);
		}
		function set_batas(){
			$this->batas = 0;
		}
		function get_batas(){
			return $this->batas;
		}
		function set_aktivasi($y_in){
			if ($y_in > $this->treshold) {
				return 1;
			}elseif ($y_in<= $this->treshold && $y_in >=(-$this->treshold)) {
				return 0;
			}elseif ($y_in < (-$this->treshold)) {
				return -1;
			}
		}
		function get_bobot1(){
			return round($this->tmp[0],2);
		}
		function get_bobot2(){
			return round($this->tmp[1],2);
		}
		function get_bobot3(){
			return round($this->tmp[2],2);
		}
		function get_bias(){
			return round($this->tmp[3],2);
		}
		
		
	}
 ?>