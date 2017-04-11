<?

$numb = str_split(implode("", file("numb.txt")));

$counter = 0;

for ($i=0; $i < count($numb) ; $i++) { 
	
	if ($numb[$i] == 1) {
		$counter ++;
	}else{
		$numb_counter[] = $counter;
		$counter = 0;
	}
}

echo max($numb_counter);


?>