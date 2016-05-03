// Restituisce il primo nodo incontrato
// il cui nome del tag sia uguale a nomeTag
function cercaPrimoElementoPerTag(nodo, nomeTag) {
	nomeTag = nomeTag.toUpperCase();
	if (nodo.nodeType == document.ELEMENT_NODE) {
		if (nodo.tagName == nomeTag)
			return nodo;
		else {
			var figli = nodo.childNodes;
			for (var i = 0; i < figli.length; i++) {
				var nodoFiglio = cercaPrimoElementoPerTag(figli[i], nomeTag);
				if (nodoFiglio != null)
					return nodoFiglio;
			}
		}
		return null;
	}
	return null;
}