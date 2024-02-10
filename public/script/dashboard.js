async function fetchData(url = "", method, data = {}) {
    const response = await fetch(url, {
      method: method,
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data), 
    });
  
    return response.json(); 
}


function AuthValidation() {
    let authData = null
    const auth = window.sessionStorage.getItem("authData")

    if(auth){
        authData = JSON.parse(auth)
    } else{
        authData = false
    }

    if(authData.isAdmin){
        window.location.replace("/");
    } else {
        if(!authData.ok){
            window.location.replace("/");
        }
    }

    fetchData("/api/dashboard", "POST", {group_id: authData.id}).then((response) =>{
        if(response.success){
            document.getElementById("hello-team").innerHTML = response.data.team_name

            document.getElementById("team-name-dashboard").innerHTML = response.data.team_name

            document.getElementById("fullname-dashboard").innerHTML = response.data.fullname

            document.getElementById("email-dashboard").innerHTML = response.data.email

            document.getElementById("birth-dashboard").innerHTML = response.data.birth

            document.getElementById("lineid-dashboard").innerHTML = response.data.line_id

            document.getElementById("phone-dashboard").innerHTML = response.data.phone_no
        
            if(response.data.cv_file){
                document.getElementById("img-cv").src = `/uploaded/${response.data.cv_file}`
                document.getElementById("img-cv-status").style.display = "none"
            } else {
                document.getElementById("img-cv").style.display = "none"
                document.getElementById("img-cv-status").style.src = "block"
            }

            if(response.data.payment_file){
                document.getElementById("img-payment").src = `/uploaded/${response.data.payment_file}`
                document.getElementById("img-pay-status").style.display = "none"
            } else {
                document.getElementById("img-payment").style.display = "none"
                document.getElementById("img-pay-status").style.src = "block"
            }
        }
    })
}

let base64Cv = ""
let base64Payment = ""

function handle_file_select(evt, type) {
    console.info ( "[Event] file chooser" );

    let file = evt.target.files[0];

    let reader = new FileReader(); 
    reader.readAsDataURL(file);
    reader.onload = function () {
        if(type == "cv"){
            document.getElementById("img-cv").style.display = "block"
            document.getElementById("img-cv").src = reader.result
            document.getElementById("img-cv-status").style.display = "none"
            base64Cv = reader.result
        } else {
            document.getElementById("img-payment").style.display = "block"
            document.getElementById("img-payment").src = reader.result
            document.getElementById("img-pay-status").style.display = "none"
            base64Payment = reader.result
        }
    };
}

document.getElementById('cv-upload').addEventListener( 'change', (e) => handle_file_select(e, "cv"), false );
document.getElementById('pay-upload').addEventListener( 'change', (e) => handle_file_select(e, "payment"), false );

document.getElementById("save-file-button").addEventListener("click", () =>{
    if(base64Cv || base64Payment){
        document.getElementById("save-file-button").innerHTML = "Loading..."

        const auth = JSON.parse(window.sessionStorage.getItem("authData")) 

        fetchData("/api/savefile", "POST", {group_id:auth.id, cv_file: base64Cv, payment_file: base64Payment}).then((response) =>{
            document.getElementById("save-file-button").innerHTML = "Save File"
        })
    }
})

document.getElementById("logout-button").addEventListener("click", () =>{
    window.sessionStorage.removeItem("authData")
    window.location.replace("/")
})

AuthValidation()