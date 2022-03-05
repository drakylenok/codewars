//https://www.codewars.com/kata/5544c7a5cb454edb3c000047

export function bouncingBall(h: number, bounce: number, window: number): number {
  if(h <= 0){return -1;}
  if(bounce <= 0 || bounce >= 1){return -1;}
  if(window >= h){return -1;}
  
  let see_times: number = 0;
  while(h > window){
    see_times++;
    h*=bounce;
    if(h > window){see_times++;}
  }
  return see_times;
}
