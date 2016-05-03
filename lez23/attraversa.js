function attraversa(nodo, livello) {
  var str = "" + livello + ": ";
  for (var t=0; t < livello; t++)
     str += "\t";
  if (nodo.nodeType == document.TEXT_NODE) {
     str += "#text: " + nodo.nodeValue + "\n";
  } else if (nodo.nodeType == document.ELEMENT_NODE) {
     str += "#elem: " + nodo.tagName + "\n";
     var figli = nodo.childNodes;
     for (var i = 0; i < figli.length; i++) {
        str += attraversa(figli[i], livello+1);
     }
  }
  return str;
}