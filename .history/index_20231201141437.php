<?php 
require_once "controller/indexController.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ajoutez des balises méta avec des mots-clés pertinents pour une entreprise de ménage de bureaux -->

    <meta name="description" content="Votre entreprise de confiance pour le nettoyage professionnel de bureaux et locaux administratifs. Offrez-vous des services de propreté adaptés à vos besoins.">
    <meta name="keywords" content="nettoyage de bureau, entretien locaux professionnels, services de nettoyage commercial, entreprise de propreté, nettoyage espaces de travail, services entretien bureaux, nettoyage professionnel, société nettoyage entreprise, entretien locaux administratifs, nettoyage surfaces professionnelles, services propreté commerciale, entreprise nettoyage bureaux, nettoyage espaces professionnels, prestations nettoyage entreprises, nettoyage régulier bureaux, services hygiène professionnel, entreprise spécialisée propreté, solutions nettoyage bureaux, nettoyage écologique bureaux, services entretien sur mesure">
    <meta name="author" content="Nom de votre entreprise">

    <!-- Incluez une sitemap XML pour aider les moteurs de recherche à indexer votre site -->
    <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">

    <!-- Intégrez des balises Open Graph pour améliorer l'apparence des liens sur les réseaux sociaux -->
    <meta property="og:title" content="UNI Entretien">
    <meta property="og:description" content="UNI Entretien, votre partenaire de confiance pour des services de nettoyage professionnel de bureaux et de locaux administratifs. Notre équipe expérimentée propose une gamme complète de services, de l'entretien régulier des espaces de travail au nettoyage spécifique de moquettes. Découvrez nos solutions de propreté adaptées à vos besoins.">
    <meta property="og:image" content="assets/img/logo/logo_uni_512x512_transparent.png">

    <!-- Lier l'icône favicon -->
    <link rel="icon" href="assets/img/logo/favicon.png" type="image/png">
    <link rel="shortcut icon" href="assets/img/logo/favicon.png" type="image/png">

    <meta http-equiv="Content-Language" content="fr-FR">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>UNI Entretien</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Basculer la navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Maison</font>
                        </font>
                    </a>
                    <a class="nav-link" href="#">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Caractéristiques</font>
                        </font>
                    </a>
                    <a class="nav-link" href="#">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Tarifs</font>
                        </font>
                    </a>
                    <a class="nav-link disabled" aria-disabled="true">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Désactivé</font>
                        </font>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <section>
            <div class="headImg">
                <div class="displayLogo">
                    <img class="headLogo" src="assets/img/logo/logo_uni_512x512_transparent.png" alt="Le logo est un triangle de couleur verte, et au centre, il y a un balai de couleur vert pâle qui laisse des traces de propreté.">
                    <p>Spécialiste de la propreté</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#request">
                        Demande votre devis
                    </button>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <section>
                    <div class="text-center m-5">
                        <div class="d-flex">
                            <div class="col">
                                <h1 class="col">Notre entreprise</h1>
                                <p class="col mt-5">Forte de son expérience et de l'expertise de son équipe de
                                    professionnels,
                                    l'entreprise propose une large gamme de services de nettoyage pour les entreprises. Que ce
                                    soit pour
                                    l'entretien régulier des bureaux, des commerces ou des copropriétés, ou pour des travaux
                                    spécifiques
                                    tels que le nettoyage de moquettes, ainsi que le décapage de sols, Prudence Nettoyage
                                    Services saura
                                    répondre à tous les besoins de ses clients avec efficacité et professionnalisme.</p>
                            </div>
                            <img class="col ms-5 imgBusiness" src="assets/img/van.jpg" alt="camionnette de couleur blanc avec le logo de l'entreprice">
                        </div>
                    </div>
                </section>
                <section>
                    <h2>Nos services</h2>
                    <P>DES PROFESSIONNELS À VOTRE SERVICE</P>
                    <P>UNI Entretien est spécialiste de la propreté pour les entreprises et collectivités. Nos services s'adaptent à toutes situations.</P>
                    <div class="d-flex">
                        <div class="card m-2" style="width: 18rem; ">
                            <img src="assets/img/van.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>VITRERIE</h3>
                                <p class="card-text">Nettoyage de vitre d’accès difficle.</p>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="assets/img/van.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>ENTRETIEN DES LOCAUX</h3>
                                <p class="card-text">Opérations d’entretien et de maintenance.</p>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="assets/img/van.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>ENTRETIEN DES BUREAUX</h3>
                                <p class="card-text">Propreté de vos bureaux et locaux professionnels.</p>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="assets/img/van.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>SYNDICS DE COPROPRIÉTÉ​</h3>
                                <p class="card-text">Entretien de votre immeuble.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="card m-2" style="width: 18rem;">
                            <img src="assets/img/van.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>REMISE EN ÉTAT</h3>
                                <p class="card-text">Remise en état après travaux et sinistres.</p>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="assets/img/van.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>DÉBARRASSAGE</h3>
                                <p class="card-text">Enlèvement des encombrants.</p>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="assets/img/van.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>DÉCONTAMINATION</h3>
                                <p class="card-text">Après dégâts des eaux et incendie</p>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="assets/img/van.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>DÉSINFECTION</h3>
                                <p class="card-text">Après cas covid</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <h2>Avant et aprés</h2>
                    <div class="displayContainer">
                        <div id="cardContainer" class="cardContainer">
                            <div class="cardSide">
                                <div class="side cardFront">
                                    <p class="textSide">Avant </p>
                                    <img class="sideImg" src="assets\img\menage_bureau.jpg" alt="Avant">
                                </div>
                                <div class="side cardBack">
                                    <p class="textSide">Après</p>
                                    <img class="sideImg" src="assets\img\entretion_bureau.jpg" alt="Après">
                                </div>
                            </div>
                        </div>
                        <div id="cardContainer" class="cardContainer">
                            <div class="cardSide">
                                <div class="side cardFront">
                                    <p class="textSide">Avant </p>
                                    <img class="sideImg" src="assets\img\menage_bureau.jpg" alt="Avant">
                                </div>
                                <div class="side cardBack">
                                    <p class="textSide">Après</p>
                                    <img class="sideImg" src="assets\img\entretion_bureau.jpg" alt="Après">
                                </div>
                            </div>
                        </div>
                        <div id="cardContainer" class="cardContainer">
                            <div class="cardSide">
                                <div class="side cardFront">
                                    <p class="textSide">Avant </p>
                                    <img class="sideImg" src="assets\img\menage_bureau.jpg" alt="Avant">
                                </div>
                                <div class="side cardBack">
                                    <p class="textSide">Après</p>
                                    <img class="sideImg" src="assets\img\entretion_bureau.jpg" alt="Après">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <!-- Modal -->
                    <div class="modal fade" id="request" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title fs-5" id="exampleModalLabel">Demande de devis</h2>
                                </div>
                                <form  action="" method="post">
                                    <div class="modal-body">
                                        <div class="displayForm">
                                            <div class="d-flex">
                                                <div class="m-3">
                                                    <label for="firstname" class="form-label ">Prénom<span>*</span></label>
                                                    <input type="text" class="form-control <?php echo isset($formError['firstname']) ? 'invalid-input' : ''; ?>" value="" id="firstname"  name="firstname" aria-describedby="Prénom">
                                                </div>
                                                <div class="m-3">
                                                    <label for="lastname" class="form-label">Nom<span>*</span></label>
                                                    <input type="text" class="form-control  <?php echo isset($formError['lastname']) ? 'invalid-input' : ''; ?>" value="" id="lastname" name="lastname" aria-describedby="Nom">
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="m-3">
                                                    <label for="companyName" class="form-label">Nom de l'entreprise<span>*</span></label>
                                                    <input type="text" class="form-control  <?php echo isset($formError['companyName']) ? 'invalid-input' : ''; ?>" value="" name="companyName" id="companyName" aria-describedby="Nom de l'entreprise">
                                                </div>
                                                <div class="m-3">
                                                    <label for="phone" class="form-label ">Numéro de téléphone<span>*</span></label>
                                                    <input type="tel" class="form-control <?php echo isset($formError['phone']) ? 'invalid-input' : ''; ?>" value="" name="phone" id="phone" aria-describedby="Numéro de téléphone">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="m-3">
                                                    <label for="email" class="form-label ">E-mail<span>*</span></label>
                                                    <input type="email" class="form-control <?php echo isset($formError['email']) ? 'invalid-input' : ''; ?>" name="email" value="" id="email" aria-describedby="email">
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="m-3">
                                                    <label for="surface" class="form-label">Surface (en m2)<span>*</span></label>
                                                    <input type="number" min="0" class="form-control <?php echo isset($formError['surface']) ? 'invalid-input' : ''; ?>" name="surface" value="" id="surface" aria-describedby="Surface (en m2)">
                                                </div>

                                                <div class="m-3">
                                                    <label for="frequency" class="form-label ">Fréquence<span>*</span></label>
                                                    <select type="text" class="form-control <?php echo isset($formError['frequency']) ? 'invalid-input' : ''; ?>" name="frequency" value="" id="frequency" aria-describedby="telephone">
                                                        <option disabled selected value="">Veuillez sélectionner</option>
                                                        <option value="1 fois par semaine">1 fois par semaine</option>
                                                        <option value="2 fois par semaine">2 fois par semaine</option>
                                                        <option value="3 fois par semaine">3 fois par semaine</option>
                                                        <option value="4 fois par semaine">4 fois par semaine</option>
                                                        <option value="5 fois par semaine">5 fois par semaine</option>
                                                        <option value="6 fois par semaine">6 fois par semaine</option>
                                                        <option value="7 fois par semaine">7 fois par semaine</option>
                                                        <option value="Mensuelle">Mensuelle</option>
                                                        <option value="Occasionnelle">Occasionnelle</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="m-3">
                                                    <label for="city" class="form-label ">Ville<span>*</span></label>
                                                    <input type="text" class="form-control <?php echo isset($formError['city']) ? 'invalid-input' : ''; ?>" name="city" value="" id="city" aria-describedby="Ville">
                                                </div>
                                            </div>
                                            <div class="form-floating m-3">
                                                <textarea class="form-control <?php echo isset($formError['message']) ? 'invalid-input' : ''; ?>" placeholder="Leave a comment here" id="message" style="height: 100px" name="message" value=""></textarea>
                                                <label for="message">Votre message (optionnel)</label>
                                            </div>
                                            <div class="form-check m-3">
                                                <input class="form-check-input <?php echo isset($formError['flexCheck']) ? 'invalid-input' : ''; ?>" type="checkbox" name="flexCheck" value="" id="flexCheck">
                                                <label class="form-check-label" for="flexCheck">
                                                En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de la demande de devis et de la relation commerciale qui peut en découler.<span>*</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- Style général du pied de page -->
    <footer>
        <!-- Informations de contact -->
        <section>
            <h3>Contact</h3>
            <p>Email : contact@votresite.fr</p>
            <p>Téléphone : +33 01 23 45 67 89</p>
        </section>

        <!-- Politique de confidentialité et mentions légales -->
        <section>
            <h3>Politique de confidentialité</h3>
            <p><a href="/confidentialite">Consultez notre politique de confidentialité</a></p>
            <h3>Mentions légales</h3>
            <p><a href="/mentions-legales">Informations légales sur le site</a></p>
        </section>

        <!-- Section recrutement -->
        <section>
            <h3>ttt</h3>
            <p><a href="mailto:">candidature</a></p>
        </section>

        <!-- Copyright -->
        <section>
            <p>&copy; 2023 <a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile" target="_blank">Ribeiro Tommy</a>. Tous droits réservés.</p>
        </section>
    </footer>

    <script async src="https://www.googletagmanager.com/gtag/js?id=VOTRE_ID"></script>
    <script src="assets/js/analytics.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>