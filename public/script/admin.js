let table = document.getElementById("table")

let elem = `<tr>
    <th class="fira-sans-light font-small">No</th>
    <th class="fira-sans-light font-small">Team Name</th>
    <th class="fira-sans-light font-small">Email</th>
    <th class="fira-sans-light font-small">Register Date</th>
    <th class="fira-sans-light font-small">Verified</th>
</tr>`

async function fetchData(url = "", method, data) {
    const response = await fetch(url, {
      method: method,
      headers: {
        "Content-Type": "application/json",
      },
      body: data && JSON.stringify(data), 
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

    if(!authData.isAdmin){
        window.location.replace("/");
    } else {
        if(!authData.ok){
            window.location.replace("/");
        }
    }


    fetchData("/api/admin", "GET").then((response) =>{
        if(response.success){
            response.data.map((val, idx) =>{
                elem = elem + `
                <tr>
                    <th class="fira-sans-light font-small">${idx + 1}</th>
                    <th class="fira-sans-light font-small">${val.group_team}</th>
                    <th class="fira-sans-light font-small">${val.email}</th>
                    <th class="fira-sans-light font-small">${val.register_date}</th>
                    <td class="fira-sans-light font-small">
                        <div class="${val.is_verifed ? "verified" : "not-verified"}"></div>
                    </td>
                </tr>
                `
            })
        
            table.innerHTML = elem
        }
    })
}

document.getElementById("logout-button").addEventListener("click", () =>{
    window.sessionStorage.removeItem("authData")
    window.location.replace("/")
})

AuthValidation()