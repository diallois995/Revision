<?php

use App\Models\Add;
use App\Models\Edite;
use App\Models\Liste;



use App\Models\Combat;
use App\Models\Lutteur;

use App\Models\ResultalCombat;
use Illuminate\Support\Facades\Route;


Route::view('/add', 'pages/vitrine/combat/add');
Route::view('/edite', 'pages/vitrine/combat/edite');
Route::view('/liste', 'pages/vitrine/combat/liste');

// Route::view('/add', 'pages/vitrine/lutte/add');
// Route::view('/edite', 'pages/vitrine/lutte/edite');
// Route::view('/liste', 'pages/vitrine/lutte/liste');

// Route::view('/add', 'pages/vitrine/resultatcombat/add');
// Route::view('/edite', 'pages/vitrine/resultatcombat/edite');
// Route::view('/liste', 'pages/vitrine/resultatcombat/liste');



Route::get('/', function () {

            // 🌴🌴🔥🔥💪🏾💪🏾Inserer7 lutteures🔥🔥💪🏾💪🏾🌴🌴
    // $ok = DB::table('lutteurs')->insert(
    //     [
    //         [
    //         'nom'=>'Eumeu ',
    //         'prenom'=> 'Sene',
    //         'adresse'=>'FasseMbaao',
    //         'lieudeNaiss'=>'Dakar',
    //         'dateNaiss'=>date('Y-m-d H:i:s'),
    //         'age'=>25,
    //         'categorie'=>'Combat',
    //         'etat'=>1,
    //         ],
    //         [
    //         'nom'=>'Diagne',
    //         'prenom'=> 'Mbaye',
    //         'adresse'=>'Dakar',
    //         'lieudeNaiss'=>'pikin',
    //         'dateNaiss'=>date('Y-m-d H:i:s'),
    //         'age'=>30,
    //         'categorie'=>'Combat',
    //         'etat'=>0,
    //         ],
    //         [
    //         'nom'=>'Sarr',
    //         'prenom'=> 'Mbaye',
    //         'adresse'=>'louga',
    //         'lieudeNaiss'=>'Matam',
    //         'dateNaiss'=>date('Y-m-d H:i:s'),
    //         'age'=>22,
    //         'categorie'=>'Combat',
    //         'etat'=>0,
    //         ],
    //         [
    //         'nom'=>'Diouf',
    //         'prenom'=> 'Sathiesse',
    //         'adresse'=>'Rufisque',
    //         'lieudeNaiss'=>'Rufisque',
    //         'dateNaiss'=>date('Y-m-d H:i:s'),
    //         'age'=>27,
    //         'categorie'=>'Combat',
    //         'etat'=>0,
    //         ],
    //         [
    //         'nom'=>'Lo',
    //         'prenom'=> 'Modou',
    //         'adresse'=>'Saint Luis',
    //         'lieudeNaiss'=>'Saint Luis',
    //         'dateNaiss'=>date('Y-m-d H:i:s'),
    //         'age'=>35,
    //         'etat'=>1,
    //         'categorie'=>'Combat',
    //         ],
    //         [
    //         'nom'=>'Diouf',
    //         'prenom'=> 'Yekini',
    //         'adresse'=>'Thiaroye',
    //         'lieudeNaiss'=>'Kaolack',
    //         'dateNaiss'=>date('Y-m-d H:i:s'),
    //         'age'=>36,
    //         'categorie'=>'Combat',
    //         'etat'=>0,
    //         ],
    //         [
    //         'nom'=>'Gueye',
    //         'prenom'=> 'Balla',
    //         'adresse'=>'Pikin',
    //         'lieudeNaiss'=>'Fatick',
    //         'dateNaiss'=>date('Y-m-d H:i:s'),
    //         'age'=>33,
    //         'categorie'=>'Combat',
    //         'etat'=>1,
    //         ]
    //     ]
    //     );
    // dd($ok);

            // 🌴🌴🌴Inserer 3 combats🔥🔥🔥💪🏾💪🏾🌴🌴🌴
    // $ok = DB::table('combats')->insert(
    //     [
    //       [
    //         'nomCombat'=>'Lutte',
    //         'nomLuteur1'=>'Bala Gueye 2',
    //         'nomLuteur2'=>'Modou Lo',
    //         'nomPromoteur'=>'Gaston Mbengue',
    //         'etat'=>1,
    //         'date'=>date('Y-m-d'),
    //        ],
    //        [
    //          'nomCombat'=>'Lutte',
    //          'nomLuteur1'=>'Bombardier',
    //          'nomLuteur2'=>'Adama Diatta',
    //          'nomPromoteur'=>'Mouhamadou Mansour Niang',
    //          'etat'=>1,
    //          'date'=>date('Y-m-d'),
    //         ],
    //         [
    //           'nomCombat'=>'Lutte',
    //           'nomLuteur1'=>'Gris Bordeaux',
    //           'nomLuteur2'=>'Lac de Guiers',
    //           'nomPromoteur'=>'Luc NICOLAi',
    //           'etat'=>1,
    //           'date'=>date('Y-m-d'),
    //         ]
    //     ]
    //     );
    // dd($ok);

            // 🌴🌴🌴 c'est pour inseret 2 Resultatcombat
            //avec Eloquent🔥🔥🔥 💪🏾💪🏾🌴🌴🌴
    // $resultal = ResultalCombat::create(
    //     [
    //         [
    //         'nomVainquer'=>'Bombardier ',
    //         'nomPerdant'=>'Modou Lo',
    //         'sensVerdique'=>'Vainqueur',
    //         'etat'=>0,
    //         ],
    //         [
    //         'nomVainquer'=>'Bala Gueye 2',
    //         'nomPerdant'=>'Adama Diatta',
    //         'sensVerdique'=>'Perte',
    //         'etat'=>1,
    //         ],
    //     ],
    //    );
    // dd($resultal);

    // $resultal = new ResultalCombat();
    //     $resultal->nomVainquer= "Modou Lo";
    //     $resultal->nomPerdant = "Bombardier ";
    //     $resultal->sensVerdique = "Vainqueur";
    //     $resultal->etat = 0;
    //     $ok = $resultal->save();
    // dd($ok);

    // $resultal = new ResultalCombat();
    //     $resultal->nomVainquer= "Modou Lo";
    //     $resultal->nomPerdant = "Bala Gueye 2";
    //     $resultal->sensVerdique = "Perte";
    //     $resultal->etat = 0;
    //     $ok = $resultal->save();
    // dd($ok);


            // 🌴🌴🌴🔥🔥💪🏾💪🏾Eloquent🔥🔥💪🏾💪🏾🌴🌴🌴

                //🔥1.Recuperer tous les lutters dont
                //l'age est > 10 et Etat est 1🔥
    // $lutteurs = Lutteur::where('age', '>', 10)
    //                     ->where('etat', '=', 1)
    //                     ->get();
    // dd($lutteurs);

                //🔥2.Recuperer tous les ResultalCombat
                // dont le nom du vainqueur =Modo LO🔥
// $resultal_combats = ResultalCombat::where('nomVainquer',"=",'Modou Lo',)
//                                     ->get();
//     dd($resultal_combats);


               //🔥2.Afficher le nombrede resultat combat enresistrer🔥
    // $resultal_combats = ResultalCombat::count();
    // ($resultal_combats);



              //🔥2.Modifier la date du 3eme combat🔥
    // $combats = Combat::Find(3);
    // $combats->update(['date' => '2023-03-12',]);


             //🔥3.Supprimer le 6em Lutteur Avec Eloquent🔥
    // $lutteurs = Lutteur::Find(6);
    // $lutteurs->delete();


            //🔥Recuperer tous les lutters
            //dont l'age est >10 et Etat est 1🔥
    // $lutteurs = Lutteur::where('age', '>', 10)->where('etat', '=', 1)
    //                     ->get(['etat','age']);

    // dd($lutteurs);



            //🔥Recuperer L'etat et  l'age
            //du ResultalCombat dont l'id > 3🔥
    // $resultal_combats = ResultalCombat::where('id', '>',3)
    //                                ->where('etat','>',3)
    //                                ->get('id','etat');

    // dd($resultal_combats);



return view('base');
 });
