<?php

function isAdmin(){
    if (auth()->user()->role == 'administrator') {
        return true;
    }

    return false;
}

function isCUstomer(){
    if (auth()->user()->role == 'user') {
        return true;
    }

    return false;
}


function getImage($name){

    return asset('images/logo/' . $name);

}