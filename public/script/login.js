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
  

const form = document.getElementById("form-login")

async function fetchData(url = "", method, data = {}) {
  const response = await fetch(url, {
    method: method,
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(data), // body data type must match "Content-Type" header
  });

  return response.json(); // parses JSON response into native JavaScript objects
}

form.addEventListener("submit", (e) => {
  e.preventDefault()

  inputEmail = document.getElementById("input_login_email")
  inputPassword = document.getElementById("input_login_password")
  
  document.getElementById("error-login").innerHTML = ""
  document.getElementById("login-text-button").innerHTML = "Loading.."

  fetchData("/api/login", "POST", {email: inputEmail.value, password:inputPassword.value}).then((response) =>{
    if(response.success){
      window.sessionStorage.setItem("authData", JSON.stringify(response.data))
      if(response.data.isAdmin){
        window.location.replace("/admin")
      } else {
        window.location.replace("/dashboard")
      }
    } else {
      document.getElementById("error-login").innerHTML = response.message
    }

    document.getElementById("login-text-button").innerHTML = "Sign In"
  })
})


// code jelek wkwk