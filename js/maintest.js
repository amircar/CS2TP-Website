//opens/closes drop-down menu
const menu_button = document.querySelector("#menu-button");
menu_button.addEventListener("click", function()
{
    //dataset.menu accesses data-menu attribute in body
    //dataset.x accesses data-x
    //if data-menu != open, data-menu = open else data-menu = close
    var drop_menu = document.body.dataset.menu != "open" ? "open" : "closed";
    document.body.setAttribute("data-menu", drop_menu);
})