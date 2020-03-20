function add(n1, n2){   == in javascript
  return n1+n2;
}

#in typescript

function add(n1: number, n2: number){   == in javascript
  return n1 + n2;
}
or
function add(n1: number, n2: number): number {   == in javascript
  return n1 + n2;
}
add(5, 2);
add(5, 'sds');  == gives the error
========================================

#optional parameter

function add(n1: number, n2?: number): number {   == n2 is optional ? (undefined)
  if(n2) 
    return n1 + n2;
  else
    return n1;
}
add(5);