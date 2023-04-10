function check_passwords() {

  var firstP = document.getElementById("firstP").value;
  var secondP = document.getElementById("secondP").value;
  if (firstP.length < 8) {
      alert("Password must be more than 8 letters long.")
  } else if (secondP.length < 8) {
      alert("Password must be more than 8 letters long.")

  } else if (firstP != secondP) {
      alert("The passwords don't match.")

  } else {
      alert("Passwords are valid!")
  }
}