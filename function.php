<!--    Бинарный поиск 
  function binarySearch($m, $x)
{
    $s = 0;
    $f = count($m)-1;
    
    while($s <= $f)
    {
        $q = floor(($s+$f)/2);
        
        if($m[$q] == $x)
        {
            return $q;
        }
        elseif($m[$q] > $x)
        {
            $f = $q-1;
        }
        else
        {
            $s = $q+1;
        }
    }
    
    return 'notFound';
} -->




function binarySearch($file,$value){
		$handle = fopen($file , "r");     						  //Чтение файла
		while(!feof($handle)){			 						  //Если файл не закончился
		$string = fgets($handle,4000);  						  //Чтение по 400 мб
		mb_convert_encoding($string , 'cp1251');    			  //Кодировка
		$explode = explode('\x0A', $string);         			 //массив (ключ , значение)

		array_pop($explode);
		foreach($explode as key => $value){

		$array[] = explode('\t' , $value);						 //разбиваем ключи на массив и пушим в новый массив

	}

	$start = 0 , $end = count($array)-1;				 

	while($start <= $end){										// пока массив не закончился
		$middle = floor(($start + $end) / 2);       			// получили середину и округлили 
		$comparison = strnatcmp($array[$middle][0] ,$value); 	//Сравнение строк 

			if($comparison > 0 ){								//
			++$end
		} elseif($comparison < 0 ){
			++$start
		} else{
			return $array[$middle][1];
		}
}

}	
return "Undefined"

}

