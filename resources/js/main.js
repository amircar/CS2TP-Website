// window.onload = function(){ 
// }

const back_to_top = document.querySelector("#back-to-top");
back_to_top.addEventListener("click", function()
{
    //Safari
    document.body.scrollTop = 0;
    //Chrome, Firefox, IE, Opera
    document.documentElement.scrollTop = 0;
})