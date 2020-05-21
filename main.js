"use strict";


$( document ).ready(function() {

    $( ".cross" ).hide();
    $( ".menu" ).hide();
    
    $( ".hamburger" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".hamburger" ).hide();
            $( ".cross" ).show();
            });
        });
    
    $( ".cross" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".cross" ).hide();
            $( ".hamburger" ).show();
        });
    });
    


});

let aside_left = $('.aside-left')[0]
let aside_right = $('.aside-right')[0]
let content_right = aside_right.children[0]
let content_left = aside_left.children
let size = 280

$( window ).resize(function() {
    if(aside_right.clientWidth < size){
        console.log(aside_right.clientWidth)
        content_right.children[0].style.scale = aside_right.clientWidth / size
        content_right.children[2].style.scale = aside_right.clientWidth / size
    }
    if(aside_left.clientWidth < size){
        aside_left.children[0].style.scale = aside_left.clientWidth / size
    }


});

