document.getElementById("field_login_email").addEventListener("click", function() {
  const antoher = document.getElementById('field_login_password')
  document.getElementById("field_login_email").style.opacity = "1"
  antoher.style.opacity = "0.5"
})

document.getElementById("field_login_password").addEventListener("click", function() {
    const antoher = document.getElementById('field_login_email')
    document.getElementById("field_login_password").style.opacity = "1"
    antoher.style.opacity = "0.5"
})
  



// code jelek wkwk