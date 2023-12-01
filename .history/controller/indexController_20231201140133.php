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
                $lastname = strip_tags(ucfirst($_POST['lastname']));
            }else {
                $formError['firstname'] = "Format invalide pour le champ Nom.";
            }
        } else {
            $formError['lastname'] = "Veuillez saisir votre nom.";
        }

        if (!empty($_POST['companyName'])) {
            if(preg_match($regex['name'], $_POST['companyName'])){
                $companyName = strip_tags($_POST['companyName']);
            }else {
                $formError['firstname'] = "Format invalide pour le champ Nom de l'entreprise.";
            }
        } else {
            $formError['companyName'] = "Veuillez saisir le nom de l'entreprise.";
        }

        if (!empty($_POST['phone'])) {
            if(preg_match($regex['phone'], $_POST['phone'])){
                $phone = strip_tags($_POST['phone']);
            }else {
                $formError['firstname'] = "Format invalide pour le champ Numéro de téléphone.";
            }
        } else {
            $formError['phone'] = "Veuillez saisir votre numéro de téléphone.";
        }

        if (!empty($_POST['email'])) {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $email = strip_tags($_POST['email']);
            } else {
                $formError['email'] = "Format invalide pour le champ E-mail.";
            }
        } else {
            $formError['email'] = "Veuillez saisir votre adresse e-mail.";
        }

        if (!empty($_POST['surface'])) {
            if (is_numeric($_POST['surface']) || $_POST['surface'] <= 0) {
                $surface = strip_tags($_POST['surface']);
            } else {
                $formError['surface'] = "Veuillez saisir une valeur valide pour le champ Surface en m2.";
            }
        } else {
            $formError['surface'] = "Veuillez saisir la surface en m2.";
        }

        if (!empty($_POST['frequency']|| !in_array($_POST['frequency'], $frequency))) {
            $frequency = strip_tags($_POST['frequency']);
        } else {
            $formError['frequency'] = "Veuillez sélectionner la fréquence.";
        }

        if (!empty($_POST['city'])) {
            if (preg_match($regex['name'], $_POST['city'])) {
                $frequency = strip_tags($_POST['frequency']);
            } else {
                $formError['city'] = "Format invalide pour le champ Ville.";
            }
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
