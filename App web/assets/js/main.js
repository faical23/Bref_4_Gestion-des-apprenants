var valide = document.querySelector("#btn_valide_on");
var update = document.querySelector("#btn_update_off");

var update_icon = document.querySelector(".update_icon");



change_to_ipdate = () => {
    valide.id="#btn_update_off";
    update.id="#btn_valide_on";
}

update_icon.addEventListener("click", change_to_ipdate);

