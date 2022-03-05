//Complete the solution so that it splits the string into pairs of two characters. If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').
//* 'abc' =>  ['ab', 'c_']
//* 'abcdef' => ['ab', 'cd', 'ef']

function solution(str){
  let mas = [];
  if(str){
    mas = str.match(/.{1,2}/g);
  }
  for(let key in mas){
    mas[key] = mas[key].padEnd(2,'_');
  }
  return mas;
}
