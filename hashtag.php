<?php
function hashtag($text_0,$start,$end,$exit){
$see_s_e=false;
$text=$text_0.$exit;
$text_n=strlen($text);
$i=0;
$z=0;

while($i<=$text_n){
	$text_v=substr($text,$i,1);
	
	if($text_v==$start){
		//echo $text_v;
		$text_v=substr($text,$i+1,1);
		
	$s=$i;$h=0;$arry[$z]="";
		while(($text_v!==$end)&&($text_v!==$exit)){
			
				$text_v=substr($text,$s+1,1);
				if($text_v!==$exit){
					$array[$h]=$text_v;
					//echo $array[$h];
					$arry[$z]=$arry[$z].$array[$h];
					
					}
				$s++;$h++;
			}
            $arry_2[$z]=$start.$arry[$z];
			//echo $arry_2[$z];
			//echo $z;
			$z++;
			//echo "<br>";
        
			
		}
	
	$i++;
	}

$f=0;
while($f<$z){
	if ($see_s_e==false){
		$string=$arry_2[$f];
		$new_string = str_replace(array($start,$end),array('',''), $string);
		echo "$new_string";
	}else{
		echo $arry_2[$f];
	}
	
	$f++;

}       

//
}

?>