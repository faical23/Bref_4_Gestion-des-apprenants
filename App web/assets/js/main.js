var navbar_mobile =document.querySelector("#navbar_zone");
var burger_menu =document.querySelector("#burgger_menu_of");
var lin_1_burger =document.querySelector("#lin_1_burger");
var lin_2_burger =document.querySelector("#lin_2_burger");
var lin_3_burger =document.querySelector("#lin_3_burger");

var menu_work = true
function burger_click(){
    if(menu_work)
    {
        lin_1_burger.id="lin_1_burger_of"
        lin_2_burger.id="lin_2_burger_of"
        lin_3_burger.id="lin_3_burger_of"
        navbar_mobile.id="navbar_mobile_on"
        menu_work = false;
    }
    else{
        lin_1_burger.id="lin_1_burger"
        lin_2_burger.id="lin_2_burger"
        lin_3_burger.id="lin_3_burger"
        menu_work = true
        navbar_mobile.id="navbar_zone"

    }


}