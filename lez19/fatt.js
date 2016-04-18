function fattoriale(n) { 
  if (n >= 0 && n <=1)
    return 1;
  else if (n >= 2)
    return n*fattoriale(n-1);
  else {
    console.log("Non so calcolare il fattoriale di un numero negativo!");
    return -1;
  }
}