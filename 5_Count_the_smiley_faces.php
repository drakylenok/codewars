//https://www.codewars.com/kata/583203e6eb35d7980400002a
//return the total number of smiling faces in the array
export function countSmileys(arr: string[]): number {
  let smils = [":",";"];
  let faces = ["","-","~"];
  let smilings = [")", "D"];
  let white_list = [];
  
  for(let key1 in smils){
    for(let key2 in faces){
      for(let key3 in smilings){
        white_list.push(smils[key1]+faces[key2]+smilings[key3]);
      }
    }
  }
  
  let valid_smiles = 0;
  for(let key in arr){
    if(white_list.indexOf(arr[key]) != -1){valid_smiles++;}
  }
  return valid_smiles;
}
