@extends('layouts.master')
@section('content')
<div style="height: 50px">
   &nbsp;
</div>
<section id="hero" class="d-flex flex-column justify-content-center faq" style="height: auto">
   <div class="container" data-aos="zoom-in" data-aos-delay="100" >
      <h1 style="color: white">Des questions ?  </h1>
      <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Vous pouvez rechercher votre par type d'émissions"></span></p>
      <div class="row mt-5">
         <div class="col-lg-8 mt-5 mt-lg-0" style="border-radius: 5px;">
            <div class="owl-carousel">
               <div class="faqItem">
                  <p class="faqheadertext">Faire une demande</p>   
               </div>
               <div class="faqItem">
                  <p class="faqheadertext">Prendre un RDV</p>
               </div>
               <div class="faqItem">
                  <p class="faqheadertext">Comment nous contacter</p>
               </div>
               <div class="faqItem">
                  <p class="faqheadertext">Documents non générés</p>
               </div>
               <div class=" faqItem">
                  <p class="faqheadertext">Informations générales</p>
               </div>
               <div class="faqItem faqheadertextActive">
                  <p class="faqheadertext">Autres informations</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row mt-3">
         <div class="col-lg-8 mt-5 mt-lg-0" style="border-radius: 5px;">
            <div class="accordion" id="InformationGenerales">
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne" style="background:#d4d9f6">
                     <button style="font-weight: bold;" 
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseOne"
                        aria-expanded="false"
                        aria-controls="collapseOne"
                        >
                     1. Quel est le rôle du site www.monpasseport.ci et quelles sont les étapes pour s’y inscrire ?
                     </button>
                  </h2>
                  <div
                     id="collapseOne"
                     class="accordion-collapse collapse "
                     aria-labelledby="headingOne"
                     data-mdb-parent="#InformationGenerales"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p style="font-size: 14px">Le site web monpasseport.ci est la plate-forme digitale de SNEDAI qui permet à tout requérant désireux de se faire établir un passeport de faciliter sa démarche à travers les étapes suivantes :</p>
                        <ol>
                           <li>Créer son compte et l'activer </li>
                           <li>Remplir son formulaire en ligne  </li>
                           <li>Prendre rendez-vous gratuitement  </li>
                           <li>Et de payer les frais d’établissement du passeport en ligne via orange money ou Ecobankpay ou MTN MONEY ou par VISA/MASTERCARD </li>
                        </ol>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo" style="background:#eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                        >
                     2. Quelle est la procédure à suivre pour obtenir un passeport biométrique ?
                     </button>
                  </h2>
                  <div
                     id="collapseTwo"
                     class="accordion-collapse collapse"
                     aria-labelledby="headingTwo"
                     data-mdb-parent="#InformationGenerales"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p style="font-size: 14px">Pour obtenir un passeport biométrique, vous devez vous connecter sur la plateforme monpasseport.ci et suivre les étapes indiquées ou vous rendre dans un centre d’enrôlement muni des pièces à fournir.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree" style="background: #eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                        >
                     3. Quelle est la procédure pour un mineur pour obtenir un passeport biométrique
                     </button>
                  </h2>
                  <div
                     id="collapseThree"
                     class="accordion-collapse collapse"
                     aria-labelledby="headingThree"
                     data-mdb-parent="#InformationGenerales"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p>Le mineur désireux de se faire établir un passeport fait son pré-enrôlement en ligne sur la plateforme monpasseport.ci et se rend dans un centre d’enrôlement de son choix muni des pièces à fournir accompagné de son tuteur légal.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour" style="background:#eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseFour"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                        >
                     4. Le passeport peut-il être remis à une personne autre que le titulaire ?
                     </button>
                  </h2>
                  <div
                     id="collapseFour"
                     class="accordion-collapse collapse "
                     aria-labelledby="headingOne"
                     data-mdb-parent="#InformationGenerales"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p style="font-size: 14px">Non, la délivrance du passeport se fait en présence de la personne sous présentation du reçu d’enrôlement et après vérifications des empreintes digitales. En cas d’indisponibilité du demandeur , il est dans l’obligation d’obtenir la validation de la police pour le retrait de son passeport par une tierce personne à l’aide d’une procuration.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive" style="background:#eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseFive"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                        >
                     5. Je me suis inscris en ligne mais je souhaite changer ma date de rdv. Que faire ?
                     </button>
                  </h2>
                  <div
                     id="collapseFive"
                     class="accordion-collapse collapse"
                     aria-labelledby="headingTwo"
                     data-mdb-parent="#InformationGenerales"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p style="font-size: 14px">Pour pouvoir modifier votre Rendez-vous, connectez-vous à la plateforme www.monpasseport.ci ,cliquez sur l’onglet modification de rdv et suivre les instructions.Vous avez la possibilité de modifier votre rendez-vous.</p>
                     </div>
                  </div>
               </div>
              
            </div>
            <div class="accordion" id="Autresinformations" style="display: none">
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOneAI" style="background:#d4d9f6">
                     <button style="font-weight: bold;" 
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseOneAI"
                        aria-expanded="false"
                        aria-controls="collapseOneAI"
                        >
                     1. J'ai égaré mon passeport, que dois-je faire ?
                     </button>
                  </h2>
                  <div
                     id="collapseOneAI"
                     class="accordion-collapse collapse "
                     aria-labelledby="headingOneAI"
                     data-mdb-parent="#Autresinformations"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p style="font-size: 14px">Il faut rapidement se faire établir une déclaration de perte, et aller sur le site web monpasseport.ci pour un pré-enrôlement</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwoAI" style="background:#eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseTwoAI"
                        aria-expanded="false"
                        aria-controls="collapseTwoAI"
                        >
                     2. J’ai déjà payé un reçu bancaire physique à la Banque Atlantique ou à ECOBANK. Puis je m’inscrire avec ces reçus en ligne et prendre rdv ?
                     </button>
                  </h2>
                  <div
                     id="collapseTwoAI"
                     class="accordion-collapse collapse"
                     aria-labelledby="headingTwo"
                     data-mdb-parent="#Autresinformations"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p style="font-size: 14px">Les frais d’établissement pour le passeport ordinaire payés à la caisse des banques partenaires ne peuvent être utilisés pour prendre rdv sur la plateforme www.monpasseport.ci. Seuls les paiements en ligne donne droit a une prise de rdv</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThreeAI" style="background: #eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseThreeAI"
                        aria-expanded="false"
                        aria-controls="collapseThreeAI"
                        >
                     3. Quelle est la procédure pour un mineur pour obtenir un passeport biométrique
                     </button>
                  </h2>
                  <div
                     id="collapseThreeAI"
                     class="accordion-collapse collapse"
                     aria-labelledby="headingThree"
                     data-mdb-parent="#Autresinformations"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p>Le mineur désireux de se faire établir un passeport fait son pré-enrôlement en ligne sur la plateforme monpasseport.ci et se rend dans un centre d’enrôlement de son choix muni des pièces à fournir accompagné de son tuteur légal.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFourAI" style="background:#eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseFourAI"
                        aria-expanded="true"
                        aria-controls="collapseFourAI"
                        >
                     3. Le passeport peut-il être remis à une personne autre que le titulaire ?
                     </button>
                  </h2>
                  <div
                     id="collapseFourAI"
                     class="accordion-collapse collapse"
                     aria-labelledby="headingOne"
                     data-mdb-parent="#Autresinformations"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p style="font-size: 14px">Non ! Le passeport ne peut être utilisé que par la personne dont le nom y figure.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFiveAI" style="background:#eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseFiveAI"
                        aria-expanded="false"
                        aria-controls="collapseFiveAI"
                        >
                     4. Quel est le delai pour obtenir un passeport biométrique ?
                     </button>
                  </h2>
                  <div
                     id="collapseFiveAI"
                     class="accordion-collapse collapse"
                     aria-labelledby="headingTwo"
                     data-mdb-parent="#Autresinformations"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p style="font-size: 14px">Le délai d'obtention du passeport en Côte d'Ivoire est de 72 heures après la validation des documents par la police</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSixAI" style="background: #eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseSixAI"
                        aria-expanded="false"
                        aria-controls="collapseSixAI"
                        >
                     5.	Est-ce que je dois ôter mes lunettes pour la prise de la photographie ?
                     </button>
                  </h2>
                  <div
                     id="collapseSixAI"
                     class="accordion-collapse collapse"
                     aria-labelledby="headingThree"
                     data-mdb-parent="#Autresinformations"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p>Oui il est demandé à ceux qui en portent de les ôter pour la prise de la photographie (dans le passeport il sera marqué à la mention signes particuliers : port de lunettes).</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSevenAI" style="background: #eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseSevenAI"
                        aria-expanded="false"
                        aria-controls="collapseSevenAI"
                        >
                     6.   Est-ce que je peux me faire enrôler avec le reçu de paiement en ligne ou le reçu bancaire d’une tierce personne ?
                     </button>
                  </h2>
                  <div
                     id="collapseSevenAI"
                     class="accordion-collapse collapse"
                     aria-labelledby="headingThree"
                     data-mdb-parent="#Autresinformations"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p>Oui, si et seulement si ces reçus n’ont jamais été utilisés.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSix" style="background: #eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseSix"
                        aria-expanded="false"
                        aria-controls="collapseSix"
                        >
                     7.	Il est mentionné dans mon passeport que je suis étudiant, seulement depuis peu je suis médecin et je voudrais que ma fonction soit modifiée dans mon passeport, que dois-je faire ?
                     </button>
                  </h2>
                  <div
                     id="collapseSix"
                     class="accordion-collapse collapse"
                     aria-labelledby="headingThree"
                     data-mdb-parent="#Autresinformations"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p>Vous devez présenter un justificatif de votre nouvelle profession. Dans ce cas, il vous faudra à nouveau vous acquitter du reçu de paiement en ligne ou du reçu bancaire pour vous faire établir un nouveau passeport. Le précédent passeport n’est dans ce cas plus valable.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="accordion" id="Faireunedemande" style="display: none" >
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOneFD" style="background:#d4d9f6">
                     <button style="font-weight: bold;" 
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseOneFD"
                        aria-expanded="false"
                        aria-controls="collapseOne"
                        >
                     1. Quelles sont les conditions pour obtenir un passeport ?
                     </button>
                  </h2>
                  <div
                     id="collapseOneFD"
                     class="accordion-collapse collapse "
                     aria-labelledby="headingOne"
                     data-mdb-parent="#Faireunedemande"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p style="font-size: 14px">Il faut disposer des pièces à fournir tels que le dispose la loi<br /><a href="#" style="color: #ff6700; text-decoration: none">Liste des pièces à fournir</a></p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwoFD" style="background:#eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseTwoFD"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                        >
                     2. Une fois mon inscription en ligne achevée quelle est la suite de la procédure ?
                     </button>
                  </h2>
                  <div
                     id="collapseTwoFD"
                     class="accordion-collapse collapse"
                     aria-labelledby="headingTwo"
                     data-mdb-parent="#Faireunedemande"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p style="font-size: 14px">Après vous être inscrit et après avoir payé les frais pour l’établissement du passeport en ligne vous recevez par mail les documents suivants</p>
                        <ul>
                           <li>L’attestation de prise de rdv</li>
                           <li>Le reçu de paiement </li>
                           <li>Le formulaire de demande de passeport</li>
                        </ul>
                        <p style="font-size: 14px">Vous imprimez ces trois documents et vous vous rendez au centre d’enrôlement de votre prise de rdv muni de la liste des pièces à fournir pour l’établissement du passeport ordinaire biométrique.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThreeFD" style="background: #eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseThreeFD"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                        >
                     3. Je veux être informé sur l'évolution de ma demande de passeport ?
                     </button>
                  </h2>
                  <div
                     id="collapseThreeFD"
                     class="accordion-collapse collapse"
                     aria-labelledby="headingThree"
                     data-mdb-parent="#Faireunedemande"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p style="font-size: 14px">Pour être informé de l’évolution de votre demande de passeport, vous pouvez vous connecter sur la plateforme www.monpasseport.ci et cliquez sur l’onglet espace personnel, puis cliquez sur l’onglet « voir le statut de votre demande » et renseignez les différents champs puis cliquez sur valider.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFourFD" style="background:#eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseFourFD"
                        aria-expanded="false"
                        aria-controls="collapsefour"
                        >
                     4. Quelles sont les différentes catégories de passeport ?
                     </button>
                  </h2>
                  <div
                     id="collapseFourFD"
                     class="accordion-collapse collapse "
                     aria-labelledby="collapseFourFD"
                     data-mdb-parent="#Faireunedemande"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p style="font-size: 14px">Il existe 3 catégories de passeport biométriques </p>
                        <ul class="check">
                           <li>Le passeport ordinaire de couleur verte</li>
                           <li>Le passeport de service de couleur bleue</li>
                           <li>Le passeport diplomatique de couleur rouge.</li>
                        </ul>
                     </div>
                  </div>
               </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSix" style="background: #eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseSix"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                        >
                     5. J’ai pris un rendez-vous en ligne mais je ne me suis pas présenté à la date de rdv au centre d’enrôlement. Qu’elle est la suite de la procédure ?
                     </button>
                  </h2>
                  <div
                     id="collapseSix"
                     class="accordion-collapse collapse"
                     aria-labelledby="headingThree"
                     data-mdb-parent="#InformationGenerales"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p>Si vous prenez un rendez-vous que vous ne vous présentez pas au centre d’enrôlement le jour indiqué de votre rendez-vous, vous avez la possibilité de modifier votre RDV en allant sur l'onglet "Modification de RDV" puis saisissez votre code RDV et choisissez votre nouvelle date et heure puis validez.</p>
                     </div>
                  </div>
               </div>
            
            </div>
            <div class="accordion" id="PrendreunRDV" style="display: none;background: rgb(255 255 255 / 90%);min-height: 100px" >
               <h2 style="text-align: center;">Aucune information</h2>
            </div>
            <div class="accordion" id="Commentnouscontacter" style="display: none;background: rgb(255 255 255 / 90%)" >
               <h2 style="text-align: center;">Aucune information contacter</h2>
            </div>

             <div class="accordion" id="Documentsnongeneres" style="display: none" >
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOneDNG" style="background:#eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseOneDNG"
                        aria-expanded="false"
                        aria-controls="collapsefour"
                        >
                     1. J'ai payé les frais de passeport en ligne et je n'ai pas reçu les documents dans ma boite électronique. Que dois-je faire ?
                     </button>
                  </h2>
                  <div
                     id="collapseOneDNG"
                     class="accordion-collapse collapse "
                     aria-labelledby="collapseOneDNG"
                     data-mdb-parent="#Documentsnongeneres"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p style="font-size: 14px">Si vous ne recevez pas les documents après le paiement, vous avez la possibilité de : </p>
                        <ul class="check">
                           <li>Ecrire une réclamation en cliquant sur l'onglet "réclamations" à la page d'accueil puis renseigner le formulaire </li>
                           <li>Appeler l'info line </li>
                           <li>Ecrire en messagerie privée des réseaux sociaux SNEDAI Cote d'ivoire (Facebook, intagram, twitter...)</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwoDNG" style="background:#eef0ff">
                     <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseTwoDNG"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                        >
                     2. Professions
                     </button>
                  </h2>
                  <div
                     id="collapseTwoDNG"
                     class="accordion-collapse collapse "
                     aria-labelledby="collapseTwoDNG"
                     data-mdb-parent="#Documentsnongeneres"
                     >
                     <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
                        <p style="font-size: 14px">Les fonctions ne sont plus acceptées dans le passeport, il est plutôt exigé la profession qui est liée à la formation, au diplôme obtenu </p>
                        <ul class="check">
                           <li>Toute nouvelle profession ou changement de profession doit impérativement être justifiée, soit par le diplôme soit par tout autre document qui prouve la nouvelle activité; </li>
                           <li>Tout changement de situation matrimoniale (mariée) doit imperativement être justifié par l'original de l'acte de mariage pour l'adjonction du nom de l'époux et (divorcée) par la grosse de divorce pour le retrait du nom du conjoint</li>
                        </ul>
                     </div>
                  </div>
               </div>
              
            </div>


            <div class="accordion" id="AutresSujets" style="display: none;background: rgb(255 255 255 / 90%)" >
               <h2 style="text-align: center;">Aucune information sujet</h2>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
@section('footer')
<script type="text/javascript">
   $('.owl-carousel').owlCarousel({
     // autoplay: true,
     center: true,
     loop: true,
     nav: true,
   });
</script>
<style type="text/css">
   .owl-item > div:after {
   font-family: sans-serif;
   font-size: 24px;
   font-weight: bold;
   }
   .active.center {
   transform: scale(1);
   -webkit-filter: grayscale(0); /* Safari 6.0 - 9.0 */
   filter: grayscale(0);
   }
   /*.active {
   transform: scale(.8);
   transition: .6s ease;
   -webkit-filter: grayscale(100%); 
   filter: grayscale(100%);
   }*/
   .faqheadertext{
   position: relative;
   top: 40%;
   color: white !important;
   font-size: 13px !important;
   text-align: center;
   margin-top: 0px !important;
   }
   .faqheadertextActive{
   background: #8c97d1 !important;
   }
   .owl-dots{display: none}
   .owl-nav{
   text-align: center;
   font-size: 30px;
   height: 10px;
   /*background: #28285e;*/
   }
   .owl-prev{
   background: white !important;
   padding: 0px 10px!important;
   margin-right: 10px !important;
   position: relative;
   top: -85px;
   left: -310px;
   opacity: .5;
   }
   .owl-next{
   background: white !important;
   padding: 0px 10px!important;
   margin-right: 10px !important;
   position: relative;
   top: -85px;
   right: -328px;
   opacity: .5;
   }
   .owl-left{
   margin-right: 10px
   }
   /*.owl-nav{display: none}*/
   .accordion-body{
   background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px
   }
   .accordion-body p{
   font-size: 14px !important;
   }
   .faqItem{
   height: 120px; 
   background: #28285e;
   border: dashed 1px white;
   }
</style>
<script type="text/javascript">
   $('.accordion-header').on('click', function(){
   	$(this).css('background','#d4d9f6');
   	$(this).find('button').css('font-weight','bold');
   	$(this).parent().siblings().find('h2').css('background','#eef0ff');
   	$(this).parent().siblings().find('button').css('font-weight','normal');
   
   })
   
   	$('.faqItem').on('click', function(){
   		console.log($(this).find('p').html());
   
   		var selectedFaq = $(this).find('p').html();
   		$(this).parent().siblings().find('.faqItem').removeClass("faqheadertextActive");
   		$(this).addClass('faqheadertextActive');
   
   // Informations générales
   // Autres informations
   // Faire une demande
   // Prendre un RDV
   // Comment nous contacter
   // Autres Sujets
   
   		if(selectedFaq =='Informations générales'){
   			$('.accordion').css('display','none');
   			$('#InformationGenerales').css('display','block');
   		}
   
   		if(selectedFaq =='Autres informations'){
   			$('.accordion').css('display','none');
   			$('#Autresinformations').css('display','block');
   		}
   
   		if(selectedFaq =='Faire une demande'){
   			$('.accordion').css('display','none');
   			$('#Faireunedemande').css('display','block');
   		}
   
   		if(selectedFaq =='Autres Sujets'){
   			$('.accordion').css('display','none');
   			$('#AutresSujets').css('display','block');
   		}
   
   		if(selectedFaq =='Comment nous contacter'){
   			$('.accordion').css('display','none');
   			$('#Commentnouscontacter').css('display','block');
   		}
   
   		if(selectedFaq =='Prendre un RDV'){
   			$('.accordion').css('display','none');
   			$('#PrendreunRDV').css('display','block');
   		}
   
   		if(selectedFaq =='Documents non générés'){
   			$('.accordion').css('display','none');
   			$('#Documentsnongeneres').css('display','block');
   		}
   
   
   		
   
   	})
   
</script>
<link rel="stylesheet" href="assets/css/all.css" />
<link rel="stylesheet" href="/mdb5/css/mdb.min.css" />
<script type="text/javascript" src="/mdb5/js/mdb.min.js"></script>
@endsection