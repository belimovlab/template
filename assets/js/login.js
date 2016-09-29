var el;

function create_window() { 
    el = document.getElementById("users_is_use");
    var set_new_user = setInterval(function(){
        el.innerHTML = parseInt(el.innerHTML) + 1;
    },1000);
} 

document.addEventListener("DOMContentLoaded", create_window);