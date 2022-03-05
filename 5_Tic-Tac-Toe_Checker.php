//https://www.codewars.com/kata/525caa5c1bf619d28c000335
function is_solved(array $board): int {
  $arr=$board;
  // TODO: Check if the board is solved!
  if(($arr[0][0]==1 && $arr[0][1]==1 && $arr[0][2]==1) || ($arr[0][0]==1 && $arr[1][0]==1 && $arr[2][0]==1) ||
     ($arr[0][2]==1 && $arr[1][2]==1 && $arr[1][3]==1) || ($arr[2][0]==1 && $arr[2][1]==1 && $arr[2][2]==1) ||
     ($arr[0][0]==1 && $arr[1][1]==1 && $arr[2][2]==1) || ($arr[2][0]==1 && $arr[1][1]==1 && $arr[0][2]==1)){
    return 1;
  }elseif(($arr[0][0]==2 && $arr[0][1]==2 && $arr[0][2]==2) || ($arr[0][0]==2 && $arr[1][0]==2 && $arr[2][0]==2) ||
     ($arr[0][2]==2 && $arr[1][2]==2 && $arr[1][3]==2) || ($arr[2][0]==2 && $arr[2][1]==2 && $arr[2][2]==2) ||
     ($arr[0][0]==2 && $arr[1][1]==2 && $arr[2][2]==2) || ($arr[2][0]==2 && $arr[1][1]==2 && $arr[0][2]==2)){
    return 2;
  }elseif($arr[0][0]==0 || $arr[0][1]==0 || $arr[0][2]==0 || $arr[1][0]==0 || $arr[1][1]==0 || $arr[1][2]==0 || $arr[2][0]==0 || $arr[2][1]==0 || $arr[2][2]==0
  ){return -1;}else{return 0;}
}
