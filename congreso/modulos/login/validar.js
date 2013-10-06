function validar(formulario) { 
//Para USUARIO 
if (formulario.user.value.length > 9 || formulario.user.value.length < 9) 
{ alert("Son 9 caracteres en el campo \"Usuario\"."); 
formulario.user.focus(); 
return (false); } 
var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZ" + "abcdefghijklmnopqrstuvwxyz"+ "0123456789"; 
var checkStr = formulario.user.value; var allValid = true; 
for (i = 0; i < checkStr.length; i++) { 
ch = checkStr.charAt(i); 
for (j = 0; j < checkOK.length; j++) 
if (ch == checkOK.charAt(j)) break; 
if (j == checkOK.length) { 
allValid = false; break; } } 
if (!allValid) {
 alert("Escriba números y letra en el campo \"Usuario\".");
 formulario.nombre.focus(); return (false); }
  //Para contraseña 
  var checkOK = "0123456789" ;
  //por mientras las letras 
  var checkStr = formulario.pass.value;
  var allValid = true; var decPoints = 0; 
  var allNum = ""; 
  for (i = 0; i < checkStr.length; i++) { 
  ch = checkStr.charAt(i); 
  for (j = 0; j < checkOK.length; j++) 
  if (ch == checkOK.charAt(j)) break; 
  if (j == checkOK.length) { 
  allValid = false; break; } 
  allNum += ch; } if (!allValid) { 
  alert("Escriba sOlo nUmeros en el campo \"Password\"."); 
  formulario.pass.focus(); 
  return (false); } 
  if (formulario.pass.value.length > 6 || formulario.pass.value.length < 6) { 
  alert("Son 6 caracteres en el campo \"Password\"."); 
  formulario.pass.focus(); return (false);
   } 
   //Para correo electrónico 
   if ((formulario.correo.value.indexOf ('@', 0) == -1)||(formulario.correo.value.length < 5)) {
    alert(" \"correo\" incorrecto"); 
    return (false); } 
    return (true); 
}