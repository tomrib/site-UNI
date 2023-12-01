<?php
$formError = [];
$regex = [
    'name' => '/^[A-Za-z\- áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]{1,20}$/',
    'email' => '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
    'address' => '/^([1-9][0-9]*(?:-[1-9][0-9]*)*)[\s,-]+(?:(bis|ter|qua)[\s,-]+)?([\w]+[\-\w]*)[\s,]+([-\w].+)$/',
    'phone' => '/^(?:0)\s*[1-9](?:[\s.-]*\d{2}){4}$/',
    'text' => '/^(?!.*\bscript\b).*$/i',
];
$frequency = [
    "1 fois par semaine",
    "2 fois par semaine",
    "3 fois par semaine",
    "4 fois par semaine",
    "5 fois par semaine",
    "6 fois par semaine",
    "7 fois par semaine",
    "Mensuelle",
    "Occasionnelle"
];
var_dump($_POST);
if (!empty($_POST)) {
    if(!empty($_POST['firstname'])){

    } else {
        $
    }
}
