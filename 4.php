<?php
	
	$string = ["P","R","O","G","R","A","M","M","E","R"];

	$jml = count($string);

	for ($i=0; $i < $jml/2; $i++) {
		
		// membuat sama dengan pertama, selalu bertambah satu
		for ($y=0; $y < $i; $y++) { 
			echo "=  ";
		}

		echo $string[$i] . "  ";

		// membuat sama dengan kedua, jumlah - i * 2
		$kur = $i * 2;
		for ($y=($jml-$kur)-2; $y > 0; $y--) { 
			echo "=  ";
		}
		
		echo $string[$i] . "  ";

		// sama dengan sama dengan pertama
		for ($y=0; $y < $i; $y++) { 
			echo "=  ";
		}

		echo "<br>";
	}
	// echo "<br>";
	krsort($string);
	
	$kur = 1;
	$kur2 = $jml/2;

	for ($i=$jml/2; $i < $jml; $i++) {
		
	
		// membuat = pertama, set jml - 1, pengurang selalu naik 2 
		for ($a=$i-$kur; $a > 0; $a--){
			echo "=  ";
		}
		
		echo $string[$i] .  "  ";

		// membuat = kedua, i - set jml, pengurang selalu berkurang 1
		for ($c=$i-$kur2; $c > 0; $c--){
			echo "=  ";
		}
		
		echo $string[$i] . "  ";

		// sama dengan = pertama
		for ($a=$i-$kur; $a > 0; $a--){
			echo "=  ";
		}

		echo "<br>";

		$kur += 2;
		$kur2--;
	}



	