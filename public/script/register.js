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