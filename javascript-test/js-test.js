let btnn1 = document.querySelector(".btn");
let img1 = document.querySelector(".imgg");


function firstFunction(e){

    /*alert("hey nachoua");*/
    btnn1.innerHTML="don't worry you will sucess!";
    btnn1.style.backgroundColor="pink";
    btnn1.style.color="#000";
    btnn1.style.width="100%"
    btnn1.style.fontSize="25px";
    btnn1.style.fontWeight="bold";
}
    /* tt */
   
   
/*function secondFunction(e){
    if(imgg.className === "hide")
    {
        imgg.className="";

    }else {
        imgg.className="hide";
    }

}*/
function tend(e) {
    document.getElementById('my').style.visibility='visible';
  }
 /* function tn(e) {
    document.getElementById('my').style.visibility='hidden';
  }
*/

btnn1.addEventListener("click", tend);
btnn1.addEventListener("click", firstFunction);
/*function for menu */
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

  /*  if(st == false)
    {
        document.getElementById('menuuu').style.visibility='visible';
    }
    else if(st == true)
        {
            document.getElementById('menuuu').style.visibility='hidden';
     }
    }*/
img111.addEventListener("click", menuhide);
menubtn.addEventListener("click", menuhide);
/*menuu.addEventListener("click", menuhide);*/
/*end function menu */