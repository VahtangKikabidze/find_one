<?
// преобразуем в массив данные полученые из файла. способ, конечно, извращенный... но это первое, что пришло на ум((
$numb = str_split(implode("", file("input.txt"))); 

//устанавливаем счетчик подряд идущих едниц в ноль 
$counter = 0;

for ($i=0; $i < count($numb) ; $i++) { 
	
	// если элемент массива равен еденице, то инкрементируем счетчик подряд идущих едниц
	// в ротивном случае записываем данные счетчика в массив и обнуляем счетчик
	if ($numb[$i] == 1) {
		$counter ++;
	}else{
		$numb_counter[] = $counter;
		$counter = 0;
	}
}

// получем максимальное число из массива и записываем в файл
file_put_contents('output.txt', max($numb_counter));


?>
