 /** Devuelve la rotación en grados de un elemento */
 function getCurrentRotation(el){
  var st = window.getComputedStyle(el, null);
  var tm = st.getPropertyValue("-webkit-transform") ||
           st.getPropertyValue("-moz-transform") ||
           st.getPropertyValue("-ms-transform") ||
           st.getPropertyValue("-o-transform") ||
           st.getPropertyValue("transform") ||
           "none";
  if (tm != "none") {
    var values = tm.split('(')[1].split(')')[0].split(',');
    var angle = Math.round(Math.atan2(values[1],values[0]) * (180/Math.PI));
    return (angle < 0 ? angle + 360 : angle);
  }
  return 0;
}


/** Recibe un Nº base 1 y devuelve un Nº base 360 */
function probabilidadAGrados(probabiliad){
	return probabiliad * 360 / 100;
}

/** Recibe un Nº base 1 y devuelve radianes */
function probabilidadARadianes(probabilidad){
	return probabilidad/100 * 2 * Math.PI;
}