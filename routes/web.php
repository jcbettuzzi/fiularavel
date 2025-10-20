<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogControllerPG;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
php artisan make:controller LoginController
|
*/

// route a commenter
Route::get('Sesigner', [LoginController::class, 'demandedeloggin']);                   //  ecran = sesigner.blade.php  
Route::post('Sesigneraveclecode', [LoginController::class, 'postSesigneraveclecode']);


Route::get('CreerVotrecompteaveccode', [LoginController::class, 'CreerVotrecompteaveccode']);           // affiche ecran registerSansMDP.blade.php
Route::post('CreerVotrecompteAvecCode', [LoginController::class, 'postCreerVotrecompteAvecCode']);  // ecran = register.blade.php
Route::post('CreerVotrecompteaveclecode', [LoginController::class, 'CreerVotrecompteaveclecode']);   // ecran = registerlecode.blade.php


Route::get('registerSansMDP', [LoginController::class, 'registerSansMDP']);           // affiche ecran registerSansMDP.blade.php
Route::post('registerSansMDP', [LoginController::class, 'postregisterSansMDP']);    //  ecran = registerSansMDP.blade.php

Route::get('CreerVotrecompte', [LoginController::class, 'CreerVotrecompte']);             // amène sur register.blade

//Route::post('CreerVotrecompte', [LoginController::class, 'postCreerVotrecompte']);


Route::get('registerCodeMdp', [LoginController::class, 'registerCodeMdp']);           // affiche ecran registerCodeMdp.blade.php
Route::post('registerCodeMdp', [LoginController::class, 'postregisterCodeMdp']);    //  ecran = registerSansMDP.blade.php


// -------- fin de asup
Route::post('CreerVotrecompteSansMDP', [LoginController::class, 'postregisterSansMDP']);
Route::get('validationCreationCompte/{uuid}', [LoginController::class, 'validationCreationCompte']);
Route::post('FIULogin', [LoginController::class, 'postdemandeloggin']);   // traite se signer, le mot de passe oublié et Sesigneravecunlien (dépend du submit type)
Route::post('connectEmailOnly', [LoginController::class, 'connectEmailOnly']);
Route::post('validerCodeConnexionEmailOnly', [LoginController::class, 'validerCodeConnexionEmailOnly']);

Route::get('Motdepasseoublie/{uuid}', [LoginController::class, 'Motdepasseoublie']);
Route::post('MettreAjourMotdePasse', [LoginController::class, 'postMettreAjourMotdePasse']);
Route::get('logout', [LoginController::class, 'demandeLogout']);
Route::get('Supprimerlecompte', [LoginController::class, 'Supprimerlecompte']);
Route::get('Me', [LoginController::class, 'getInformationUtiSigne']);
Route::post('updateProfileUser', [LoginController::class, 'updateProfileUser']);


Route::get('lienpoursesigner/{uuid}', [LoginController::class, 'lienpoursesigner']);

Route::get('ValiderCreationCompte/{uuid}', [LoginController::class, 'ValiderCreationCompte']);

//Route::get('registerCodeMdp', [LoginController::class, 'registerCodeMdp']);           // affiche ecran registerCodeMdp.blade.php
//Route::post('registerCodeMdp', [LoginController::class, 'postregisterCodeMdp']);    //  ecran = registerSansMDP.blade.php


Route::get('recupereimageDocumentID/{offreID}/{documentID}', [OffreController::class, 'recupereimageDocumentID']);
//Route::get('recupereimageprincipaleOFFRE/{offreID}', [OffreController::class, 'recupereimageprincipaleOFFRE']);
Route::get('recupereimageGrandeDocumentID/{offreID}/{documentID}', [OffreController::class, 'recupereimageGrandeDocumentID']);
Route::get('recupereimageBLOG/{blogpostid}/{imageUUID}/{TypeImage}', [OffreController::class, 'recupereimageBLOG']);
Route::get('recupereimageTitre/{offreID}/{documentID}', [OffreController::class, 'recupereimageTitre']);


Route::get('AjouterOffrefavori/{offreid}', [OffreController::class, 'AjouterOffrefavori']);
Route::get('SupprimerOffrefavori/{offreid}', [OffreController::class, 'SupprimerOffrefavori']);
Route::post('addFavorisOffre',[OffreController::class,'addFavorisOffre']);
Route::get('modifyFavorisOffre/{FiuID}/{OffreID}/{addordelete}',[OffreController::class,'modifyFavorisOffre']);


Route::post('inscrirenewsletter',[OffreController::class, 'inscrirenewsletter']);
Route::get('inscriptionnewsletter/{uuid}', [OffreController::class, 'inscrirenewsletterconfirmer']);
Route::post('inscrirenewsletterNumber2',[OffreController::class, 'inscrirenewsletterNumber2']);// on duplique le meme chemin que 'inscrirenewsletter' car il y a 2 captcha sur la meme page
Route::post('inscrirenewsletterNumber3',[OffreController::class,'inscrirenewsletterNumber3']);




Route::get('qui-sommes-nous', [TestController::class, 'quiSommeNous']);
Route::get('platefome-location-bureau', [TestController::class, 'leConcept']);
Route::get('engagements-rse', [TestController::class, 'EngagementRSE']);
//Route::get('nous-rejoindre', [TestController::class, 'nousRejoindre']);
Route::get('location-bureaux', [TestController::class, 'locationBureaux']);
Route::get('coworking', [TestController::class, 'coworking']);
Route::get('recherche-sur-mesure', [TestController::class, 'rechercheSurMesure']);
Route::post('rechercheSurMesuredemande', [TestController::class, 'rechercheSurMesuredemande']);


Route::post('prendrecontact', [TestController::class, 'prendrecontact']);

Route::get('location-bureau-paris', [TestController::class, 'locationBureauParis']);
Route::get('contact', [TestController::class, 'contact']);
Route::get('mentionslegales', [TestController::class, 'mentionsLegales']);
Route::get('cgu', [TestController::class, 'cgu']);
Route::get('confidentialite', [TestController::class, 'confidentialite']);
// Route::get('deposer-une-annonce', [TestController::class, 'deposerUneAnnonce']);
Route::get('guideducoworking', [TestController::class, 'guideDuCoworking']);

Route::get('/area/{params}', [TestController::class, 'area']);

Route::get('', [TestController::class, 'accueil']);

//Route::get('allLocationBureau', [TestController::class, 'allLocationBureau']);
Route::get('accueil', [TestController::class, 'accueil']);
//Route::get('accueil-2', [TestController::class, 'accueil2']);
//Route::get('testFiu', [TestController::class, 'testFrontFiu']);

Route::get('location-bureau-entreprise', [TestController::class, 'searchEngineFiu']);
//Route::get('searchEngineTest', [TestController::class, 'searchEngineTest']);



//Route::post('contacterlegestionnaire2', [TestController::class, 'contacterlegestionnaire2']);
Route::post('contacterlegestionnaire3', [TestController::class, 'contacterlegestionnaire3']);
Route::post('contacterlegestionnaire3mobile', [TestController::class, 'contacterlegestionnaire3mobile']);
Route::post('contacterlegestionnaire', [OffreController::class, 'contacterlegestionnaire']);   // a supp temporaire pour test jc

Route::get('oneOffreFiu', [TestController::class, 'oneOffreFiu']);
Route::get('location-bureau-entreprise/{contentUrl}/{offreID}', [TestController::class, 'onlyOneOffreFiu']);


Route::get('rse', [TestController::class, 'rse']);

Route::get('location-bureau-paris-1', [TestController::class, 'locationParis1']);
Route::get('location-bureau-paris-2', [TestController::class, 'locationParis2']);
Route::get('location-bureau-paris-3', [TestController::class, 'locationParis3']);
Route::get('location-bureau-paris-4', [TestController::class, 'locationParis4']);
Route::get('location-bureau-paris-5', [TestController::class, 'locationParis5']);
Route::get('location-bureau-paris-6', [TestController::class, 'locationParis6']);
Route::get('location-bureau-paris-7', [TestController::class, 'locationParis7']);
Route::get('location-bureau-paris-8', [TestController::class, 'locationParis8']);
Route::get('location-bureau-paris-9', [TestController::class, 'locationParis9']);
Route::get('location-bureau-paris-10', [TestController::class, 'locationParis10']);
Route::get('location-bureau-paris-11', [TestController::class, 'locationParis11']);
Route::get('location-bureau-paris-12', [TestController::class, 'locationParis12']);
Route::get('location-bureau-paris-13', [TestController::class, 'locationParis13']);
Route::get('location-bureau-paris-14', [TestController::class, 'locationParis14']);
Route::get('location-bureau-paris-15', [TestController::class, 'locationParis15']);
Route::get('location-bureau-paris-16', [TestController::class, 'locationParis16']);
Route::get('location-bureau-paris-17', [TestController::class, 'locationParis17']);
Route::get('location-bureau-paris-18', [TestController::class, 'locationParis18']);
Route::get('location-bureau-paris-19', [TestController::class, 'locationParis19']);
Route::get('location-bureau-paris-20', [TestController::class, 'locationParis20']);
Route::get('location-boulogne-billancourt', [TestController::class, 'locationBoulogneBilancourt']);
Route::get('location-gare-du-nord', [TestController::class, 'locationGareDuNord']);
Route::get('location-gare-de-lyon', [TestController::class, 'locationGareDeLyon']);
Route::get('location-levallois-perret', [TestController::class, 'locationlocationLevalloisPerret']);
Route::get('location-montparnasse', [TestController::class, 'locationMontparnasse']);
Route::get('location-republique', [TestController::class, 'locationRepublique']);
Route::get('location-saint-lazare', [TestController::class, 'locationSaintLazare']);
Route::get('coworking-paris-1', [TestController::class, 'coworkingParis1']);
Route::get('coworking-paris-2', [TestController::class, 'coworkingParis2']);
Route::get('coworking-paris-3', [TestController::class, 'coworkingParis3']);
Route::get('coworking-paris-4', [TestController::class, 'coworkingParis4']);
Route::get('coworking-paris-5', [TestController::class, 'coworkingParis5']);
Route::get('coworking-paris-6', [TestController::class, 'coworkingParis6']);
Route::get('coworking-paris-7', [TestController::class, 'coworkingParis7']);
Route::get('coworking-paris-8', [TestController::class, 'coworkingParis8']);
Route::get('coworking-paris-9', [TestController::class, 'coworkingParis9']);
Route::get('coworking-paris-10', [TestController::class, 'coworkingParis10']);
Route::get('coworking-paris-11', [TestController::class, 'coworkingParis11']);
Route::get('coworking-paris-12', [TestController::class, 'coworkingParis12']);
Route::get('coworking-paris-13', [TestController::class, 'coworkingParis13']);
Route::get('coworking-paris-14', [TestController::class, 'coworkingParis14']);
Route::get('coworking-paris-15', [TestController::class, 'coworkingParis15']);
Route::get('coworking-paris-16', [TestController::class, 'coworkingParis16']);
Route::get('coworking-paris-17', [TestController::class, 'coworkingParis17']);
Route::get('coworking-paris-18', [TestController::class, 'coworkingParis18']);
Route::get('coworking-paris-19', [TestController::class, 'coworkingParis19']);
Route::get('coworking-paris-20', [TestController::class, 'coworkingParis20']);
Route::get('coworking-saint-lazare-paris', [TestController::class, 'coworkingSaintLazareParis']);
Route::get('coworking-gare-lyon-paris', [TestController::class, 'coworkingGareLyonParis']);
//coworking-montparnasse-paris
Route::get('coworking-montparnasse-paris', [TestController::class, 'coworkingMontparnasseParis']);
//coworking-boulogne-billancourt-paris
Route::get('coworking-boulogne-billancourt-paris', [TestController::class, 'coworkingBoulogneBillancourtParis']);
//coworking-levallois-perret
Route::get('coworking-levallois-perret', [TestController::class, 'coworkingLevalloisPerret']);
//coworking-republique-paris
Route::get('coworking-republique-paris', [TestController::class, 'coworkingRepubliqueParis']);
//coworking-gare-du-nord-paris
Route::get('coworking-gare-du-nord-paris', [TestController::class, 'coworkingGareDuNordParis']);

Route::get('blog', [BlogControllerPG::class, 'testBlog']);
Route::get('blog/{slug}', [BlogControllerPG::class, 'oneBlog']);
Route::get('allBlog/{blogID}', [BlogControllerPG::class, 'allBlog']);
Route::get('tag/{slug}', [BlogControllerPG::class, 'recapBlogCategory']);
Route::get('alldataBlogByCategory/{slug}', [BlogControllerPG::class, 'alldataBlogByCategory']);

Route::get('guide', [BlogControllerPG::class, 'testBlog']);
Route::get('guide/{slug}', [BlogControllerPG::class, 'oneBlog']);

Route::get('profile', [LoginController::class, 'profileUser']);

Route::get('mes-favoris', [LoginController::class, 'offresFavoris']);
Route::get('mes-demandes', [LoginController::class, 'mesDemandes']);



// pour faire des tests a supprimer
Route::get('/bettuzzi', function () {        
    return view('pages.firstscreen');
});
Route::get('offredetail/{offreID}', [OffreController::class, 'offredetail']);
Route::get('/autocomplete', function () {
    return view('pages.autocomplete');
});
Route::get('/imagetest', function () {        
    return view('pages.imagetest');
});

Route::get('newsearchpage', [OffreController::class, 'newsearchpage']);
Route::get('publier-une-annonce', [OffreController::class, 'publierAnnonce']);

Route::get('investir', [OffreController::class, 'investisseur']);
Route::get('achat-de-bureau', [OffreController::class, 'acheteur']);

Route::post('investirImmo', [OffreController::class, 'investirImmo']);
Route::post('acheterBureau', [OffreController::class, 'postAcheterBureau']);
Route::post('postPublierUneAnnonce', [OffreController::class, 'postPublierUneAnnonce']);


Route::get('podcast', [TestController::class, 'getpodcast']);


//Route::get('testImage', [TestController::class, 'testImage']);