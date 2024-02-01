// FUNCTION  TO RESTRICT THE ALPHABETIC ENTRIES
function restrictAlphabets(e) {
  var x = e.which || e.keycode;
  if ((x >= 48 && x <= 57) || x === 58) return true;
  else return false;
}
