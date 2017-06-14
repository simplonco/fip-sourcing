@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="col-md-8 col-md-offset-2">




<!--<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Dispositif de suivi</label>
  <div class="col-10">
    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
  </div>
</div>-->
<form action="">


<div class="form-group">
    <label for="exampleTextarea">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
</div>

<h3>EXPERIENCES ET PARCOURS</h3>

    <div class="form-group">
        <label for="exampleTextarea">Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire?</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="exampleTextarea">Racontez-nous un de vos "Hacks"(pas forcément technique ou informatique)</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>

 <label>Quel est le dernier diplôme que vous ayez obtenu ? </label>
    <span>Information demandée a titre indicatif</span>
    <div class="form-group">
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios1" value="option1" >
                Sans diplôme
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios2" value="option2" >
                brevet des collèges
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios3" value="option3" >
                BEP
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios4" value="option4" >
                CAP
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios5" value="option5" >
                Bac général ou technologique
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios6" value="option6" >
                Bac pro
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios7" value="option7" >
                Bac+2
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios8" value="option8" >
                Licence
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios9" value="option9" >
                Master
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios10" value="option10" >
               Doctorat
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios11" value="option11" >
                Autre :
                <input type="text" id="exampleTextarea" rows="4">
            </label>
        </div>
    </div>

        <div class="form-group">
        <label for="exampleTextarea">Racontez-nous en quelques phrases votre parcours</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            <div class="required-message">Cette question est obligatoire.</div>
        </div>

    <label>Quel est votre niveau d'anglais (lu/écrit)?</label>
        <br><span>Cette information n'est pas éliminatoire, ni déterminante dans la candidature, nous la demandons titre indicatif.</span>
        <div class="form-group">
            <div class="form-check ">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="anglais" id="anglais" value="tbon" >
                   Très bon
                </label>
            </div>
            <div class="form-check ">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="anglais" id="anglais" value="bon" >
                   Bon
                </label>
            </div>
            <div class="form-check ">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="anglais" id="anglais" value="middle" >
                  Intermédiaire
                </label>
            </div>
            <div class="form-check ">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="anglais" id="anglais" value="bad" >
                   Débutant
                </label>
            </div>

            <div class="form-check ">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="anglais" id="anglais" value="anything" >
                    Autre :
                    <input type="text" id="exampleTextarea" rows="4">
                </label>
            </div>
        </div>

    <h3>MOTIVATIONS</h3>
    <label>Dites nous pourquoi vous voulez intégrer Simplon Occitanie. Racontez-nous votre parcours et détaillez-nous votre motivation ci-dessous, en vous exprimantavec votre style a vous, mais ne vous limitez pas à un texte tapé à la va-vite. Aussi, n'hésitez pas à faire une vidéo, un site ou tout autre chose qui démontrera votre envie, votre motivation, et vos compétences! </label>
    <div class="form-group">
        {{-- <label for="exampleTextarea"></label> --}}
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>

    <label>Dans un an, avec vos nouveaux super pouvoirs de code informatique, que souhaiterez-vous faire dans votre vie? </label>
    <div class="form-group">
        {{-- <label for="exampleTextarea"></label> --}}
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>


    <div class="form-group">
        <label for="exampleTextarea">

        Pré-requis : Badges Codecademy (OBLIGATOIRE) </label>
    <span>Rendez vous sur <a href="https://www.codecademy.com/fr">www.codecademy</a>et inscrivez vous gratuitement sur la plateforme. Vous devez passer au minimum : – « HTML & CSS » (10 badges) – « Javascript » (10 badges) – « PHP » (10 à 15 badges) – « Ruby » (optionnel - 10 badges) 2) Déposez ici l'URL de votre profil Codecademy pour attester des badges obtenus (IMPORTANT : afin que nous puissions accéder à vos badges, pensez à mettre votre profil en public. Astuce : testez votre lien sur une session où vous n'êtes pas connectés pour vérifier qu'ils s'affichent bien)
    </span>

            <input class="form-control" id="exampleTextarea" ></input>
    </div>

    <label>Si vous avez un profil Openclassrooms, Codeschool ou autre, indiquez nous votre profil(FACULTATIF).</label>
    <span>Votre présence et activité sur un des sites d'apprentissage en ligne atteste de votre motivation ;)</span></br>
    <input class="form-control" type="text" id="exampleTextarea" />
<br>
    <label>Êtes vous disponibles pour suivre une formation de 8 mois a temps plein (35h/semaine) suivie d'un stage de 2.5 mois ?</label>
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
             <input type="radio" name="yesno" class="form-check-input" id="yesno" value="yes">
            Oui
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" name="yesno" class="form-check-input" id="yesno" value="no">
             Non
            </label>
        </div>
     </div>

        <div class="form-group">
            <label for="exampleTextarea">Si non, quelles sont vos contraintes ?</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
        </div>

     <div class="form-group">
        <label for="exampleTextarea">Cette formation peut ouvrir droit à une rémunération forfaitaire (ARE Pôle Emploi ou ASP Région, RSA) en fonction de votre situation familiale et de celle en regard de l'emploi. Comment allez vous financer votre vie quotidienne durant les 10,5 mois de formation?</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>

    <div class="form-group">
    <label>Comment avez-vous entendu parler de la formation Simplon Occitanie?</label>
        <div class="form-check ">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionentendu" value="polemploi" >
                   Via Pôle Emploi
                </label>
            </div>
            <div class="form-check ">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionentendu" value="bureauter" >
                   Via le Bureau Territorial
                </label>
            </div>
            <div class="form-check ">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionentendu" value="mission" >
                   Via la Mission Locale
                </label>
            </div>
            <div class="form-check ">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionentendu" value="internet" >
                   Via les réseaux sociaux et internet
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionentendu" value="autre" >
                   Autre:
                    <input type="text" id="exampleTextarea" rows="4">
                </label>
            </div>
        </div>

        <h3>IMPORTANT</h3>
        <p>juste après avoir cliqué sur "Envoyer", prenez bien soin de conserver le lien vers votre candidature, afin de pouvoir y apporter des modifications (ex: pour y ajouter des badges que vous auriez passés sur des plates-formes, mettre à jour vos informations, etc.). </p>

    <div class="form-group number">
    <input class="btn btn-primary" type="submit" value="Submit">
    </div>

    <div class="form-group number">
    <input class="btn btn-primary" href="#" value="Modifier">
    </div>


 </div>
 </form>


            <div class="panel panel-default">
            </div>
        </div>
    </div>



@endsection
