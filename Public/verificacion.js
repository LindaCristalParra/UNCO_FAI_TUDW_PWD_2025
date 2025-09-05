function validarFormulario() {
  let usuario = document.getElementById("usuario").value;
  let clave = document.getElementById("clave").value;

  if (clave.length < 8) {
    alert("La contraseña debe tener al menos 8 caracteres.");
    return false;
  }

  if (clave === usuario) {
    alert("La contraseña no puede ser igual al usuario.");
    return false;
  }

  let regex = /^(?=.*[a-zA-Z])(?=.*[0-9])/;
  if (!regex.test(clave)) {
    alert("La contraseña debe contener letras y números.");
    return false;
  }

  return true;
}
