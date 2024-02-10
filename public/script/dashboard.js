function AuthValidation() {
    let authData = null
    const auth = window.sessionStorage.getItem("isAuth")

    if(auth){
        let parseAuth = JSON.parse(auth)

        authData = parseAuth
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
}

AuthValidation()