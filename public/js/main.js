// window.onload = function(){ 
// }

// scrolls to top of page
const back_to_top = document.querySelector("#back-to-top");
back_to_top.addEventListener("click", function()
{
    //Safari
    document.body.scrollTop = 0;
    //Chrome, Firefox, IE, Opera
    document.documentElement.scrollTop = 0;
})

// changes text size using toggle switch
const toggle_text = document.querySelector("#toggle-text-size").querySelector("input");
toggle_text.addEventListener("click", function()
{
    //dataset.textSize accesses data-text-size attribute in body (dataset.x-y accesses data-xY)
    //if data-text-size != large, data-text-size = large ELSE data-text-size = normal
    var text_size = document.body.dataset.textSize != "large" ? "large" : "normal";
    // assigns new value to data-text-size
    document.body.setAttribute("data-text-size", text_size);
})