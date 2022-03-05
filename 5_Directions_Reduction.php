//https://www.codewars.com/kata/550f22f4d758534c1100025a

function dirReduc($arr) {
  
  do{
    $arr_l_old=count($arr);
    foreach($arr as $key=>$value){
      if(isset($arr[$key+1])){
        if(($arr[$key]=="NORTH" && $arr[$key+1]=="SOUTH") || ($arr[$key+1]=="NORTH" && $arr[$key]=="SOUTH")
        || ($arr[$key]=="WEST"  && $arr[$key+1]=="EAST")    || ($arr[$key+1]=="WEST" && $arr[$key]=="EAST")){
          unset($arr[$key]);
          unset($arr[$key+1]);
        }
      }
    }
    $arr=array_values($arr);
  }while($arr_l_old!=count($arr));
  return($arr);
}
