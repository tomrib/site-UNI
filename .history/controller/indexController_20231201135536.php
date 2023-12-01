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
    if (!empty($_POST['flexCheck'])) {
        if (!empty($_POST['firstname'])) {
            if(preg_match($regex['name'], $_POST['firstname'])){
                $firstname = strip_tags(ucfirst($_POST['firstname']));
            }else {
                $formError['firstname'] = "Format invalide pour le champ Prénom.";
            }
        } else {
            $formError['firstname'] = "Veuillez saisir votre prénom.";
        }

        if (!empty($_POST['lastname'])) {
            if(preg_match($regex['name'], $_POST['lastname'])){
                $firstname = strip_tags(ucfirst($_POST['lastname']));
            }else {
                $formError['firstname'] = "Format invalide pour le champ Nom.";
            }
        } else {
            $formError['lastname'] = "Veuillez saisir votre nom.";
        }

        if (!empty($_POST['companyName'])) {
            if(preg_match($regex['name'], $_POST['companyName'])){
                $firstname = strip_tags(ucfirst($_POST['lastname']));
            }else {
                $formError['firstname'] = "Format invalide pour le champ Nom.";
            }
        } else {
            $formError['companyName'] = "Veuillez saisir le nom de l'entreprise.";
        }

        if (!empty($_POST['phone'])) {
        } else {
            $formError['phone'] = "Veuillez saisir votre numéro de téléphone.";
        }

        if (!empty($_POST['email'])) {
        } else {
            $formError['email'] = "Veuillez saisir votre adresse e-mail.";
        }

        if (!empty($_POST['surface'])) {
        } else {
            $formError['surface'] = "Veuillez saisir la surface en m2.";
        }

        if (!empty($_POST['frequency'])) {
        } else {
            $formError['frequency'] = "Veuillez sélectionner la fréquence.";
        }

        if (!empty($_POST['city'])) {
        } else {
            $formError['city'] = "Veuillez saisir votre ville.";
        }

        if (!empty($_POST['message'])) {
        }

        if (count($formError) > 0) {
        }

    } else {
        $formError['flexCheck'] = "Veuillez cocher la case pour confirmer que vous acceptez les conditions.";
    }

}
