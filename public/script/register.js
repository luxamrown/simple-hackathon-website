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

const fieldList = ["field_regis_fullname", "field_regis_birth", "field_register_email", "field_regis_line", "field_register_password", "field_regis_phone", "field_register_team", "field_regis_comptype"]

var fields = document.getElementsByClassName("field");

var myFunction = function(fieldname) {
    fieldList.map((field) => {
        if(field !== fieldname.id){
            let elem = document.getElementById(field)

            elem.style.opacity = 0.5
        } else {
            let elem = document.getElementById(field)

            elem.style.opacity = 1
        }
    })
};

for (var i = 0; i < fields.length; i++) {
    let selected = fields[i]
    selected.addEventListener('click', () => myFunction(selected), false);
}

document.getElementById("register-form").addEventListener("submit", (e) =>{
    e.preventDefault()
    document.getElementById("register-button").innerHTML = "Loading.."

    var inputFields = document.getElementsByClassName("input-field");

    const body = {};

    for (var i = 0; i < inputFields.length; i++) {
        body[inputFields[i].name] = inputFields[i].value;
    } 

    fetchData("/api/register", "POST", body).then((response) =>{
        if(response.success){
            alert("Register Success")
        } else {
            alert("Register Failed")
        }

        document.getElementById("register-button").innerHTML = "Register"

    })

})