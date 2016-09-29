'use strict';

var elements;

function create_window() { 
    var max_height = 0; 
    elements = document.getElementsByClassName('panel_inner_content'); 
    for(var i = 0; i < elements.length; i++){if(elements[i].offsetHeight > max_height){max_height = elements[i].offsetHeight;}} 
    for(var i = 0; i < elements.length; i++){elements[i].style.height = max_height + 'px';} 
} 
document.addEventListener("DOMContentLoaded", create_window);