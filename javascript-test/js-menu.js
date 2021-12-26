/*start function menu */
let menubarr = document.querySelector(".menubar");
let menuu = document.querySelector(".menui");
let img111 = document.querySelector(".img11");
let menubtn = document.querySelector(".menu-btn");
let menuui = document.querySelector(".menu");
let menustatus = false;
menuui.style.marginLeft = "-50%";

let st =false;
function menuhide(e){
   if(menustatus == false)
    {
        menuui.style.marginLeft = "0px";
        menustatus = true;
    }
    else if(menustatus == true)
    {
        menuui.style.marginLeft = "-50%"
        menustatus = false;

    }
}

img111.addEventListener("click", menuhide);
menubtn.addEventListener("click", menuhide);

/*end function menu */