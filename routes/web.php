<?php

use App\Models\Add;
use App\Models\Edite;
use App\Models\Liste;
use App\Models\Lutteur;


use App\Models\ResultalCombat;
use Illuminate\Support\Facades\Route;


Route::view('/add', 'pages/vitrine/combat/add');
Route::view('/edite', 'pages/vitrine/combat/edite');
Route::view('/liste', 'pages/vitrine/combat/liste');

Route::view('/add', 'pages/vitrine/lutte/add');
Route::view('/edite', 'pages/vitrine/lutte/edite');
Route::view('/liste', 'pages/vitrine/lutte/liste');

Route::view('/add', 'pages/vitrine/resultatcombat/add');
Route::view('/edite', 'pages/vitrine/resultatcombat/edite');
Route::view('/liste', 'pages/vitrine/resultatcombat/liste');



Route::get('/', function () {



               // 🌴🌴🌴  c'est pour inseret 7 lutteures 🔥🔥🔥 💪🏾💪🏾🌴🌴🌴
//     $ok = DB::table('lutteurs')->insert(
//       [
//       [
//          'nom'=>'Diallo',
//          'prenom'=> 'Ismael',
//          'adresse'=>'FasseMbaao',
//          'lieudeNaiss'=>'Conakry',
//          'dateNaiss'=>date('Y-m-d H:i:s'),
//          'age'=>25,
//          'categorie'=>'Combat',
//       ],
//       [
//         'nom'=>'Diagne',
//         'prenom'=> 'Mbaye',
//         'adresse'=>'Dakar',
//         'lieudeNaiss'=>'pikin',
//         'dateNaiss'=>date('Y-m-d H:i:s'),
//         'age'=>30,
//         'categorie'=>'Combat',
//       ],
//       [
//         'nom'=>'Sarr',
//         'prenom'=> 'Mbaye',
//         'adresse'=>'louga',
//         'lieudeNaiss'=>'Matam',
//         'dateNaiss'=>date('Y-m-d H:i:s'),
//         'age'=>22,
//         'categorie'=>'Combat',
//       ],
//       [
//         'nom'=>'Diouf',
//         'prenom'=> 'Sathiesse',
//         'adresse'=>'Rufisque',
//         'lieudeNaiss'=>'Rufisque',
//         'dateNaiss'=>date('Y-m-d H:i:s'),
//         'age'=>27,
//         'categorie'=>'Combat',
//       ],
//       [
//         'nom'=>'Lo',
//         'prenom'=> 'Modou',
//         'adresse'=>'Saint Luis',
//         'lieudeNaiss'=>'Saint Luis',
//         'dateNaiss'=>date('Y-m-d H:i:s'),
//         'age'=>35,
//         'categorie'=>'Combat',
//       ],
//       [
//         'nom'=>'Diouf',
//         'prenom'=> 'Yekini',
//         'adresse'=>'Thiaroye',
//         'lieudeNaiss'=>'Kaolack',
//         'dateNaiss'=>date('Y-m-d H:i:s'),
//         'age'=>36,
//         'categorie'=>'Combat',
//       ],
//       [
//         'nom'=>'Gueye',
//         'prenom'=> 'Balla',
//         'adresse'=>'Pikin',
//         'lieudeNaiss'=>'Fatick',
//         'dateNaiss'=>date('Y-m-d H:i:s'),
//         'age'=>33,
//         'categorie'=>'Combat',
//       ]
//      ]
// );
// dd($ok);

            // 🌴🌴🌴  c'est pour inseret 3 combats 🔥🔥🔥 💪🏾💪🏾🌴🌴🌴
//     $ok = DB::table('combats')->insert(
//     [
//       [
//         'nomCombat'=>'Lutte',
//         'nomLuteur1'=>'Bala Gueye 2',
//         'nomLuteur2'=>'Modou Lo',
//         'nomPromoteur'=>'Gaston Mbengue',
//         'etat'=>0,
//         'date'=>date('Y-m-d H:i:s'),
//        ],
//        [
//          'nomCombat'=>'Lutte',
//          'nomLuteur1'=>'Bombardier',
//          'nomLuteur2'=>'Adama Diatta',
//          'nomPromoteur'=>'Mouhamadou Mansour Niang',
//          'etat'=>0,
//          'date'=>date('Y-m-d H:i:s'),
//         ],
//         [
//           'nomCombat'=>'Lutte',
//           'nomLuteur1'=>'Gris Bordeaux',
//           'nomLuteur2'=>'Lac de Guiers',
//           'nomPromoteur'=>'Luc NICOLAi',
//           'etat'=> 0,
//           'date'=>date('Y-m-d H:i:s'),
//         ]
//     ]
//     );
//   dd($ok);


    // 🌴🌴🌴 c'est pour inseret 2 Resultatcombat avec Eloquent 🔥🔥🔥 💪🏾💪🏾🌴🌴🌴
//   $resultal_combat = ResultalCombat::create(
//     [
//       'nomVainquer'=>' Bala Gueye 2 ',
//       'nomPerdant'=>'Modou Lo',
//       'sensVerdique'=>'Perte',
//       'etat'=>0,
//     ],
//     [
//       'nomVainquer'=>'Bombardier',
//       'nomPerdant'=>'Adama Diatta',
//       'sensVerdique'=>'Vainqueur',
//       'etat'=>0,
//     ]
//   );
//   dd("resultal_combats " . $resultal_combat->nomVainquer .
//     ' a été Averti  il est perdu !!! ');

// $resultal_combat = ResultalCombat::create(
//     [
//       'nomVainquer'=>' Bala Gueye 2 ',
//       'nomPerdant'=>'Modou Lo',
//       'sensVerdique'=>'Perte',
//       'etat'=>0,
//     ],
//     [
//       'nomVainquer'=>'Bombardier',
//       'nomPerdant'=>'Adama Diatta',
//       'sensVerdique'=>'Vainqueur',
//       'etat'=>0,
//     ]
// );
// dd($resultal_combat);


//     $ok = DB::table('resultal_combats')->insert(
//      [
//        [
//          'nomVainquer' => 'Taf Tine',
//          'nomPerdant' => 'Modou Lo',
//          'sensVerdique' => 'Averti',
//          'etat' => 0,
//        ],
//        [
//          'nomVainquer' => 'Yekini',
//          'nomPerdant' => 'Balla Gueye',
//          'sensVerdique' => 'Thiaxabal',
//          'etat' => 0,
//        ]
//      ]
//     );
//   dd($ok);


        // 🌴🌴🌴  Eloquent  🔥🔥🔥 💪🏾💪🏾🌴🌴🌴
//  1. Recuperer tous les lutters dont l'age est > 10 et Etat est 1
// $lutteurs = Lutteur::where('age', '>', 10)
//                     ->where('etat=1');
// dd($lutteurs);



        //🔥 2. Recuperer tous les ResultalCombat dont le nom du vainqueur =Modo LO🔥
// $resultal_combats = ResultalCombat::where('Le Nom Vainqueur = Modou Lo');
//     dd($resultal_combats);


        //🔥2. Afficher le nombrede resultat combat enresistrer🔥
// $resultal_combats = DB::table('resultal_combats')->count();
// dd($resultal_combats);


       //🔥 2. Modifier la date du 3eme combat🔥
// $ok = DB::table('combats')->whereId(3)->update(
//           ['date' => '2023-05-11',]);
// dd($ok);


        //🔥 3. Supprimer le 6em Lutteur🔥
// $ok = DB::table('lutteurs')->where('id', 6)->delete();
// dd($ok);




return view('base');
 });
