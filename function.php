<?php 

// array functions 

//1 - count function 
$array = [1,2,3,4,5];
echo my_count($array);
function my_count($array){
    $count=0;
foreach($array as $value){
    $count++;
}
return $count;
}
// 2- pop function 
// function my_pop($pop){
//     $newArray ;
//     $count = my_count($pop);
//     for($i = 0 ; $i <= $count-2 ;$i++){
//         $newArray[$i] = $pop[$i];
//     }
//     return $newArray;
// }
// print_r(my_pop($array));
// echo "<br>";
// echo "<br>";
// 3- shift function 

// function my_array_shift($shift){
//     $newArray ;
//     $count = my_count($shift);
//     for($i = 0 ; $i < $count-1 ;$i++){
//         $newArray[$i] = $shift[$i+1];
//     }
//     return $newArray;
// }
// print_r(my_array_shift($array));
// echo "<br>";
// echo "<br>";

// 4- push function 

function my_array_push(&$push,$el){
    $count = my_count($push);
    $push[$count]=$el;
    return $push;
}
// print_r(my_array_push($array,6));
// echo "<br>";
// echo "<br>";

// 5- unshift function 

// function my_array_unshift($Array,$el){
//     $newArray[0]=$el;
//     $count = my_count($Array);
//     for($i = 0 ; $i < $count ;$i++){
//         $newArray[$i+1] = $Array[$i];

//     }
//     $array = $newArray;
//     return $newArray;
// }
// my_array_unshift($array,10);
// print_r($array);

// $sort=['c','A','B','a'];
// echo "<br>";
// echo print_r($sort);
// echo "<br>";
// sort($sort);
// echo print_r($sort);
// print(+'a');
//sort array 

// my_sort($arr);
// print_r($arr);
echo "<br>";
// 6- sort function 
function my_sort($arr){
    for($i=0;$i<my_count($arr);$i++){

        for($j = $i+1 ; $j < my_count($arr) ;$j++){
            if($arr[$i]>$arr[$j]){
                $tmp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j]=$tmp;
            }
        }
    }
    return $arr;
}


// 7- revers array
function reverse($arr){
    $newArr ;
    $count = 0;
    for($i = my_count($arr)-1 ; $i >= 0; $i--){
        $newArr[$count] = $arr[$i];
        $count ++;
    }
    return $newArr;
}

// - 8 is the element in array 
// var_dump(in_array('z',$arr));
// echo "<br>";
// var_dump(my_in_array('z',$arr));

// function my_in_array($el,$arr){
//     foreach($arr as $value){
//         if($value == $el){
//             return true;
//         }
//     }
//     return false;
// }

// string function 

// 9 - strLen 
// echo my_strLen($name);
function my_strlen($str){
    $count = 0;
    $point =$str.'$';
    $flage =false;
    while(true){
        if($point[$count] == '$'){
            break;
        }
        $count ++ ;
    }
    return $count ;
}

// 10  strpos function

// function my_strpos($str,$ele){
//     $counter =0;
//     for($i = 0 ; $i<my_strlen($str) ; $i++ ){
//         if($str[$i] == $ele){
//             break;
//         }
//         $counter++;
//     }
//     return $counter;
// }

// echo my_strpos('mohammed','o');

// 11 substr function

function my_substr($str,$start,$end){
    $string ='' ;
    for($i = $start ; $i < $end; $i++){
        $string .= $str[$i];
    }
    return $string;
}

// 12 trim function


function my_trim($str){
    $index =0;
    $string = '';
    for($i = my_strlen($str)-1 ; $i >= 0 ; $i--){
        if($str[$i] != ' '){
            $index = $i;
            break;
        }
    }
    $string = my_substr($str,0,$index+1);

    return $string;
}
 
// 13 conver string into upper case;

function my_strtoupper($str){
    $string ='';
    for($i = 0 ; $i < my_strlen($str) ; $i++){
        if($str[$i] != ' ' && ord($str[$i]) > 96 && ord($str[$i]) < 123){
            $string .= chr(ord($str[$i])- 32) ;
            echo $string ;
            echo "<br>";
        }else{
            $string .= $str[$i];
        }
    }
    return $string;
}

// 14 conver strimng into lower case;

function my_strtolower($str){
    $string ='';
    for($i = 0 ; $i < my_strlen($str) ; $i++){
        if($str[$i] != ' ' && ord($str[$i]) < 96 && ord($str[$i]) > 64){
            $string .= chr(ord($str[$i])+ 32) ;
            echo $string ;
            echo "<br>";
        }else{
            $string .= $str[$i];
        }
    }
    return $string;
}


// echo my_strtolower('mohamMMMmed Mazher OmAr');

// 15 find index of lettel
// function find_index($lett , $str){
//     for($i = 0 ; $i < my_strlen($str) ; $i++){
//         if($str[$i] == $lett){
//             return $i;
//         }
//     }
//     return $str;
// }
// 18 retuen all indexs
function find_Allindex($lett , $str){
    $indexs = [];
    for($i = 0 ; $i < my_strlen($str) ; $i++){
        if($str[$i] == $lett){
            array_push($indexs,$i);
        }
    }
    if(my_count($indexs)>=1)
    return $indexs;
    return $str;
}
// print_r(find_Allindex('m',"mohammed"));

// 17 replace function 

// echo str_replace('go','k','modgd');

function my_str_replace($search ,$replace,$str){
    $count = my_strlen($search);
    if($count == 1){
        if(find_index($search,$str) >= 0){
            for($i = 0 ; $i < my_strlen($str) ; $i++){
                if($str[$i] == $search){
                    $str[$i]=$replace;
                }
            }
            return $str;
        }
    }
    else if($count > 1){
        $indexs = find_Allindex($search[0],$str);
        $arrayIndex = 0;
        if(my_count($indexs) == null){
            return $str;
        }
        $start_str = '';
        $end_str = '';
        for($j =0 ; $j < my_count($indexs);$j++){
            $counter = 0;
            for($i = $indexs[$j] ; $i < $count+$indexs[$j] ; $i++)
            { 
                if($str[$i] == $search[$counter])
                {
                    $counter++;
                    if($i == $count+$indexs[$j] - 1 ){
                        $arrayIndex = $j;
                    }     
                }
                else if($str[$i] != $search[$counter])
                {
                    break;
                }
                
            }
        }
        
        for($i = 0 ; $i < my_strlen($str) ; $i++){
            if($indexs[$arrayIndex] == $i){
                continue;
            }
            else if($i < $indexs[$arrayIndex]){
                $start_str.=$str[$i];
            }else if($i >= $count+$indexs[$arrayIndex]){
                $end_str .=$str[$i];
            }

        }
        // $str[$first_index]=$replace;
        return $start_str.$replace.$end_str;
    }
    return $str;

}

// 18 str_reverse 

function str_revers($str){
    $string ='';
    for($i = my_strlen($str)-1 ; $i>= 0 ; $i--){
        $string .=$str[$i];
    }
    return $string;
}

// echo str_revers('stroy');

// 19 str_split

// function my_str_spilt($str , $number){
//     $array =[];
//     if($number >= my_strlen($str)){
//         array_push($array,$str);
//     }else
//     {
//     $sub_str='';
//     for($i = 0 ; $i<my_strlen($str) ; $i+=($number)){
//         for($j = $i ; $j< $i+$number ; $j++){
//             if(isset($str[$j])){

//                 $sub_str .=$str[$j];
//             }
//         }
//         array_push($array,$sub_str);
//         $sub_str = '';
//     }
//     }
//     return $array;
// }

// print_r(my_str_spilt('mohammed',3));

// 20 right trim
function my_right_trim($str){
    $index =0;
    $string = '';
    for($i = 0 ; $i < my_strlen($str) ; $i++){
        if($str[$i] != ' '){
            $index = $i;
            break;
        }
    }
    $string = my_substr($str,$index,my_strlen($str));

    return $string;
}
 // 21 number of words 
function  my_str_word_count($statement){
    $str1 = my_right_trim($str1);
    $str = trim($statement);
    $newStr='';
    $strArray =[] ;
    for($i = 0 ; $i < my_strlen($str);$i++){
        if($str[$i] == ' ' || $i ==my_strlen($str) -1 ){
            if($i == my_strlen($str)-1)  $newStr .= $str[$i];
            array_push($strArray,$newStr);
            $newStr = '';
        }else{

            $newStr .= $str[$i];
        }
    }

    return my_count($strArray);
}

// 22  return words of statment in array 
// function  my_str_word_array($statement){
//     $str = my_right_trim($statement);
//     $str = trim($statement);
//     $newStr='';
//     $strArray =[] ;
//     for($i = 0 ; $i < my_strlen($str);$i++){
//         if($str[$i] == ' ' || $i ==my_strlen($str) -1 ){
//             array_push($strArray,$newStr);
//             $newStr = '';
//         }else{
//             $newStr .= $str[$i];
//         }
//     }

//     return $strArray;
// }
// 23  return words of statment in array 
// function  my_explode($delimiter, $str){
//     $newStr='';
//     $strArray =[] ;
//     for($i = 0 ; $i < my_strlen($str);$i++){
//         if($str[$i] == $delimiter || $i ==my_strlen($str) -1 ){
//             array_push($strArray,$newStr);
//             $newStr = '';
//         }else{
//             $newStr .= $str[$i];
//         }
//     }

//     return $strArray;
// }
// print_r(my_explode('.',' hello.mohammed mazher '));

// Numric function 

// 24 absulate value 
function my_bs($number){
    if($number< 0 ){
        $number =($number)*-1;
        return $number; 
    }
    return $number; 
}

// 25 power function 

// function my_power($number,$power){
//     if($power == 0)
//     return 1;
//     $result = $number;
//     for($i = 0 ;$i < $power - 1 ; $i++){
//         $result *=$number;
//     }
//     return $result;
// }

// 26 squre 
function my_squar($number){
    return $number * $number;
}

//27 mcubic function 

function cubic($number){
    return $number*$number*$number;
 }

 //28 Squarroot
 function my_Squarroot($number){
    for($i=0;$i<$number;$i++){
        if($i*$i==$number)
        return $i; 
    }
    return -1;
}

//29 Cubicroot
function my_Cubicroot($number){
    for($i=0;$i<$number;$i++){
        if($i*$i*$i==$number)
        return $i; 
    }
    return -1;
}
// 30 
function my_Factorial($number){ 
    $factor=1;
    for($i= $number;$i>0;$i--){ 
        $factor = $factor * $i;   
    }
    return $factor;
}

// 31 get max number 
echo "<br>";
function my_max(...$params){
     $max = 1;
     $param = $params;
    if(gettype($params[0]) == 'array'){
        $param = $params[0];
    }
     for($i = 0 ; $i< my_count($param) -1  ; $i++){
        if($param[$i] > $param[$i+1]){
            $max = $param[$i];
        }
        else{
            $max = $param[$i+1];
        }
     }

     return $max ;
}
// 32 get max number 
function my_min(...$params){
    $max = 1;
    $param = $params;
   if(gettype($params[0]) == 'array'){
       $param = $params[0];
   }
    for($i = 0 ; $i< my_count($param) -1  ; $i++){
       if($param[$i] < $param[$i+1]){
           $max = $param[$i];
       }
       else{
           $max = $param[$i+1];
       }
    }

    return $max ;
}
// echo "<br>";\

// 33 is integer 

function my_is_int($param){
    if(gettype($param)=='integer')
        return true;
        return false;
}

// 34 is integer 

function my_is_string($param){
    if(gettype($param)=='string')
        return true;
        return false;
}

// 35 is integer 

function my_is_array($param){
    if(gettype($param)=='array')
        return true;
        return false;
}

// 36 is integer 

function my_is_object($param){
    if(gettype($param)=='object')
        return true;
        return false;
}

// 37 get first element from array 

function array_last_element($array){
    return $array[my_count($array)-1];
}

// 38 avg
function my_avg(...$params){
    $sum = 0;
    $param = $params;
   if(gettype($params[0]) == 'array'){
       $param = $params[0];
   }
    for($i = 0 ; $i< my_count($param)  ; $i++){
       $sum += $param[$i];
    }
    return $sum/my_count($param) ;
}

// 39 in_array

function my_in_array($arr,$ele){
    for($i = 0 ;$i < my_count($arr); $i++){
        if($arr[$i] == $ele) return true;
    }
    return false;
}

// 40 array sum elements 

function array_sum_ele(...$arr){
    $sum = 0;
    $param = $arr;
   if(gettype($arr[0]) == 'array'){
       $param = $arr[0];
   }
    for($i = 0 ; $i< my_count($param)  ; $i++){
       $sum += $param[$i];
    }
    return $sum ;
}

// 41 is string contain this word
function is_str_contain($statement , $word){
    $str1 = my_right_trim($statement);
    $str = trim($str1);
    $newStr = '';
    $strArray =[] ;
    for($i = 0 ; $i < my_strlen($str);$i++){
        if($str[$i] == ' ' || $i == my_strlen($str)-1){
            if($i == my_strlen($str)-1)  $newStr .= $str[$i];
            array_push($strArray,$newStr);
            $newStr = '';
        }else{

            $newStr .= $str[$i];
        }
    }

    foreach($strArray as $value){
        if($value == $word) return true;
    }

    return false;
}

//42  array intersect 

function my_array_intersect($arr1,$arr2){
    $newArr = [];
    for($i = 0 ; $i < my_count($arr1) ; $i++){
        for($j = 0 ; $j < my_count($arr2) ; $j++){
            
            if($arr1[$i] == $arr2[$j]){
                my_array_push($newArr,$arr1[$i]);
            }
        }
    }
    return $newArr;
}

//43 string repate 

function my_sting_repate($str , $num){
    $new = '';
    for($i = 0 ; $i < $num ; $i++){
        $new .= $str;
    }

    return $new;
}

// 44 

function my_array_keys($arr){
    $newArray = [];
    foreach($arr as $key => $value){
        my_array_push($newArray,$key);
    }

    return $newArray;
}

// 45 
function my_array_values($arr){
    $newArray = [];
    foreach($arr as $key => $value){
        my_array_push($newArray,$value);
    }

    return $newArray;
}

// 46 
function my_array_diff($arr1,$arr2){
    $newArr = [];
    for($i = 0 ; $i < my_count($arr1) ; $i++){
        $flage = false;
        for($j = 0 ; $j < my_count($arr2) ; $j++){    
            if($arr1[$i] == $arr2[$j]){
                $flage = true;
            }
        }
        if($flage == false)
        my_array_push($newArr,$arr1[$i]);
    }
    return $newArr;
}

// 47 is boolen
function my_is_bool($param){
    if(gettype($param)=='boolean')
        return true;
        return false;
}

// 48 join
function my_join($ele,$arr){
    $str = '';
    for($i = 0 ; $i < my_count($arr) ; $i++){
        $str .=$arr[$i];
        if($i != my_count($arr)-1 ) $str .= $ele;
    }
    return $str;
}

//49

function my_isset($ele){

    if($ele != null)
    return true;

    return false;
}

// 50 first key

function first_array_key($arr){
    $newArray = [];
    foreach($arr as $key => $value){
        my_array_push($newArray,$key);
    }

    return $newArray[0];
} 

// 51 first key

function last_array_key($arr){
    $newArray = [];
    foreach($arr as $key => $value){
        my_array_push($newArray,$key);
    }

    return $newArray[my_count($arr)-1];
}

//52
function my_stristr($str,$ele){
     $str = my_strtoupper($str);
     $ele = my_strtoupper($ele);
    $newstr = '';
    $flage = false; 
    for($i = 0 ; $i<my_strlen($str);$i++){
        if($str[$i] == $ele) $flage =true;
        if($flage == true){
            $newstr .= $str[$i];
        }
    }
    return $newstr;
}

// 53
function Percentage($totalVal,$countVal){
    return ($countVal/$totalVal)*100;
}
 // 54
function spletwords($word){
    static $counter = 0;
    $str = '';
    $array;
    for($i = 0 ; $i < my_strlen($word); $i++){
        if($word[$i]== ' '){
            $array[$counter]=$str;
            // echo $array[$counter];
            $counter++;
            $str='';
        }else{
            $str.=$word[$i];
        }
    }
    $array[$counter]=$str;
}

// 55
function get_year($date){
 if(strpos($date,'/'))
    $newDate = explode('/',$date);
else if(strpos($date,'-'))
    $newDate = explode('-',$date);
else if(strpos($date,' '))
    $newDate = explode(' ',$date);

    return $newDate[0];
}
// 56
function get_month($date){
 if(strpos($date,'/'))
    $newDate = explode('/',$date);
else if(strpos($date,'-'))
    $newDate = explode('-',$date);
else if(strpos($date,' '))
    $newDate = explode(' ',$date);

    return $newDate[1];
}

// 57
function get_day($date){
 if(strpos($date,'/'))
    $newDate = explode('/',$date);
else if(strpos($date,'-'))
    $newDate = explode('-',$date);
else if(strpos($date,' '))
    $newDate = explode(' ',$date);

    return $newDate[2];
}

// 58 
function is_morning(){
    $check = date('A');
    if($check == 'AM')
    return true;

return false;
}

//59
function mode($num1,$num2){
    if($num1==$num2)return 0;
    if($num1<$num2)return $num1;
    for($i=1;true;$i++){
        if($i*$num2>=$num1){
            if($i*$num2==$num1) return 0;
            else return $num1-(($i-1)*$num2);
        }
    }
}

//60 
function swap(&$valu1,&$valu2){    
    $temp=$valu1;
    $valu1=$valu2;
    $valu2=$temp;
}

//61 
function array_multiply(array $numbers){
    $result=1;
    for($i=0;$i<mkCount($numbers);$i++){
        $result *= $numbers[$i];
    }
    return $result;
}

// 62
function alphabetSortDeced(&$incomingarray){
    $counter=0;
    $isrepeted=false;   
   for($i=0;$i<my_count($incomingarray);$i++){
    for($j=$i+1;$j<my_count($incomingarray);$j++){
        if(my_strtoupper($incomingarray[$i])==my_strtoupper($incomingarray[$j])) continue;
        if(my_strtoupper($incomingarray[$j][$counter])==my_strtoupper($incomingarray[$i][$counter])){
            $isrepeted=true;    
            $counter++; 
            $j--;
            continue;
        }
        if(my_strtoupper($incomingarray[$j][$counter])> my_strtoupper($incomingarray[$i][$counter])){
            swap($incomingarray[$j],$incomingarray[$i]);
        }
        if($isrepeted){
            $counter=0;
            $isrepeted=false;
        }
    }  
   }  
}

// 63
function str_Append($incomingString,$addString){
    return $incomingString.$addString;
} 

// 64 
function proportionality($totalVal,$countVal,$percent){
    return ($countVal/$totalVal)*$percent;
}

//65
function _is_null($value){
    if($value === null)
        return true ;
    return false;
}

// 66

function _is_bool($value):bool{
    if($value === true || $value === false)
        return true;

    return false;
}

// 67
function _array_flip(array $array): array{
    $newarr=[];
    foreach($array as $key => $value)
        $newarr[$value] = $key;
    return $newarr ;
}

// 68

function _array_count_values(array $array): array{
    $newArr=[];
    foreach($array as $key => $value){
        $count=0;
        for($i=0; $i < my_count($array); $i++){
            if($value == $array[$i]){
                $count++;
            }
        }
        $newArr[$value]=$count;
    }
    return $newArr;
}

//69
function _array_diff_key(array $arr, array $array): array{
    $diff = [];
    foreach ($arr as $key => $value) {
        $found = false;
        foreach ($array as $k => $v) {
            if ($key === $k) {
                $found = true;
                break;
            }
        }
        if (!$found) {
            $diff[$key] = $value;
        }
    }
    return $diff;
}

// 70
function _array_assoc_diff(array $arr, array $array): array{
    $diff = [];
    foreach ($arr as $key => $value) {
        $found = false;
        foreach ($array as $k => $v) {
            if ($key === $k && $value === $v) {
                $found = true;
                break;
            }
        }
        if (!$found) {
            $diff[$key] = $value;
        }
    }
    return $diff;
}

// 71
function _array_is_list(array $array): bool{
    $i=0;
    foreach($array as $key => $value){
        if($key != $i){
            return false;
        }
    $i++;
    }
    return true;
}

// 72
function _array_search( $search,  $array,  $strict = false){
    foreach($array as $key => $value){
        if($value == $search){
            return $key;
        }
    }
    return false ;
}

//73
function _is_array( $array):bool{
    if($array === (array)$array)
        return true;
    return false;
}
//74
function _gettype(mixed $value): string{
    if($value === (int)$value)
        return "integer";
    elseif($value === (float)$value)
        return "double";
    elseif($value === (string)$value)
        return "string";
    elseif($value === (array)$value)
        return "array";
    elseif($value === (object)$value)
        return "object";
    elseif($value === (bool)$value)
        return "boolean";
    elseif($value === null)
        return null;
}

// 75
function is_empty(mixed $var): bool{
    if($var===null || $var==='')
        return true;
    return false;
}

//76
function _settype(mixed &$var, string $type): bool{
    if($type=='integer' || $type=='int'){
        (int) $var ;
        return true;
    }
    else if($type=='float' || $type=='double'){
        (float) $var ;
        return true;
    }
    else if($type=='boolean' || $type=='bool'){
        (bool) $var ;
        return true;
    }
    else if($type=='string'){
        (string) $var ;
        return true;
    }
    else if($type=='array' ){
        (array) $var ;
        return true;
    }
    else if($type=='object'){
        (object) $var ;
        return true;
    }
    else if($type=='null'){
         $var=null ;
        return true;
    }
    else{
        return false;
    }
    return false;
}
//77
function is_str_starts_with(string $string, string $needle): bool{
    $test='';
    for ($i=0; $i < my_strlen($needle) ; $i++) 
        $test +=$string[$i]; 
    
    return $test == $needle ? true : false;
}

//78
function is_str_ends_with(string $string, string $needle): bool{
    $test='';
    $countNeeded =my_strlen($needle);
    for ($i=my_strlen($string)-($countNeeded+1); $i < $countNeeded ; $i++) 
        $test +=$string[$i]; 
    
    return $test == $needle ? true : false;
}

//79
function get_hour($date){
       $newDate = explode(' ',$date);
       $hour = explode(':', $newtime[1]);
       return $hour[0];
   }
//80
function get_minutes($date){
    $newDate = explode(' ',$date);
    $hour = explode(':', $newtime[1]);
    return $hour[1];
}

//81
function get_sec($date){
    $newDate = explode(' ',$date);
    $hour = explode(':', $newtime[1]);
    return $hour[1];
}

//82
function get_time($date){
    $newDate = explode(' ',$date);
    return $newDate[1];
}

//83
function get_AM_PM($date){
    $newDate = explode(' ',$date);
    return $newDate[2];
}
//84
function get_char($ascci){
    $char = [ 48 => 0, 49 => 1, 50 => 2, 51 => 3, 52 => 4, 53 => 5, 54 => 6, 55 => 7, 56 => 8, 57 => 9
         ,65 => "A", 66 => "B", 67 => "C", 68 => "D", 69 => "E", 70 => "F", 71 => "G", 72 => "H", 73 => "I", 74 => "J", 75 => "K", 76 => "L", 77 => "M", 78 => "N", 79 => "O", 80 => "P", 81 => "Q", 82 => "R", 83 => "S", 84 => "T", 85 => "U", 86 => "V", 87 => "W", 88 => "X", 89 => "Y", 90 => "Z" 
        ,97 => "a", 98 => "b", 99 => "c", 100 => "d", 101 => "e", 102 => "f", 103 => "g", 104 => "h", 105 => "i", 106 => "j", 107 => "k", 108 => "l", 109 => "m", 110 => "n", 111 => "o", 112 => "p", 113 => "q", 114 => "r", 115 => "s", 116 => "t", 117 => "u", 118 => "v", 119 => "w", 120 => "x", 121 => "y", 122 => "z"
    ];
    if(isset($char[$ascci]))
        return $char[$ascci];

    return -1;
}
//85
function get_Ascii($letter){
    $char = [ 48 => 0, 49 => 1, 50 => 2, 51 => 3, 52 => 4, 53 => 5, 54 => 6, 55 => 7, 56 => 8, 57 => 9
         ,65 => "A", 66 => "B", 67 => "C", 68 => "D", 69 => "E", 70 => "F", 71 => "G", 72 => "H", 73 => "I", 74 => "J", 75 => "K", 76 => "L", 77 => "M", 78 => "N", 79 => "O", 80 => "P", 81 => "Q", 82 => "R", 83 => "S", 84 => "T", 85 => "U", 86 => "V", 87 => "W", 88 => "X", 89 => "Y", 90 => "Z" 
        ,97 => "a", 98 => "b", 99 => "c", 100 => "d", 101 => "e", 102 => "f", 103 => "g", 104 => "h", 105 => "i", 106 => "j", 107 => "k", 108 => "l", 109 => "m", 110 => "n", 111 => "o", 112 => "p", 113 => "q", 114 => "r", 115 => "s", 116 => "t", 117 => "u", 118 => "v", 119 => "w", 120 => "x", 121 => "y", 122 => "z"
    ];
    foreach($char as $key => $value){
        if($value == $letter)
        return $key;
    }

    return -1;
}

// 86

function _UC_first ($string){
    $count = 1;
    $string[0]=my_strtoupper($string[0]);
    return $string;
}

// 87
function _LC_first ($string){
    $count = 1;
    $string[0]=my_strtolower($string[0]);
    return $string;
}

// 88
function _array_key_first($string){
    foreach($string as $key => $value)
        return $key ;
}
// 89
function _array_value_first($string){
    foreach($string as $key => $value)
        return $value ;
}
//90
function _array_comp($arr1, $arr2){
    for($i=0; $i<my_count($arr1); $i++)
        if($arr1[$i] != $arr2[$i] ){
            return false;
        }

    return true ;
}