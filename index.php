<!DOCTYPE>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>php exercices</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

  <!-- Header -->
    <div class="container-fluid">
      <div class="container">
      <header class="title" >
  
   <!-- Barre de navigation -->
        <div class="col-lg-12">

          <nav class="navbar navbar-inverse navbar-right navbar-fixed-top">             
            <ul class="nav navbar-nav">
              <li ><a href="#exo1">exercice 1</a></li>
              <li ><a href="#exo2">exercice 2</a></li>
              <li ><a href="#exo3">exercice 3</a></li>
              <li ><a href="#exo4">exercice 4</a></li>
              <li ><a href="#exo5">exercice 5</a></li>
              <li ><a href="#exo6">exercice 6</a></li>
              <li ><a href="#exo7">exercice 7</a></li>      
            </ul>              
          </nav>
        </div>
    
        <h1>2ème Niveau</h1>
    
      </header>
    
      <div="exercice1">

        <a name="exo1"><h2>exercice 1</h2></a>
          <div class="row exo">
            <div class="col-lg-6">
              <p>Un algo pour créer un tableau associatif à partir de deux autres tableaux.<p>
              <p>Tableau formateurs :<br/>  
              $cuissons : ["à point", "saignant", "bleu", "bien cuit"];</br>
              $viandes : ["poulet", "boeuf", "mouton"];
              </p>
              </p> Exemple de rendu :<br/>    
              $commandes : ["poulet à point", "poulet saignant", "poulet bleu", etc... ]
              </p>
          </div>
          <div class="col-lg-6">
              <?php 
              $cuissons=["à point", "saignant", "bleu", "bien cuit"];
              $viandes=["poulet", "boeuf", "mouton"];
              function cookMeat($viandes,$cuisson){
                    for($indexViandes=0;$indexViandes<count($viandes);$indexViandes++){
                      for($indexCuisson=0;$indexCuisson<count($viandes);$indexCuisson++){
                       //definition d'une variable string reprenant la variable viande et cuisson a chq tour de boucle
                        $typeCook=$viandes[$indexViandes]." ".$cuisson[$indexCuisson]." , ";
                        // reponse à la problématique un array comprenant l'ensemble de la variable string précédente
                        $commande[]=$typeCook;
                       
                        }
                      }
                     //conversion de la variable commande en string pour affichage 
                       $commandes=implode("",$commande);
                      return "<span> Nos type de cuisson en fonction des viandes sont les suivantes :</span>".$commandes.".";
                    }
             ?>
             <?php
                echo cookMeat($viandes,$cuissons);
             ?>
          </div>
        </div>

      <div class="container ">
           <a name="exo2"><h2>exercice 2</h2></a>
           <div class="row exo">
              <div class="col-lg-6 ">
                <p>Un algo pour transformer une chaine de caractères en tableau </p>
                <p>Phrase formateurs :<br/>  
                  $genres : "horreur fantastique action western thriller comédie drame romance historique";
                </p>

                <p>Exemple de rendu :</br>    
                $tags : ["horreur", "fantastique", "action", "western", etc...] <p>
                </p>
              </div>
              <div class="col-lg-6 ">
                <?php 
                 $genres ="horreur fantastique action western thriller comédie drame romance historique";
                 function film($genres){
                   //définition d'une variable array pour répondre à la problématique: un tableau reprenant les genres de films
                   $genresFilm=explode(" ",$genres);
                   // on définit une variable string vide
                   $film="";
                   for ($indexFilm=0;$indexFilm<count($genresFilm);$indexFilm++){
                     //on incrémente la variable string à chq tour de boucle
                     $film.=$genresFilm[$indexFilm]." ";
                      }
                     return $film;
                    }
                ?>
                <p><span>les genres de films sont les suivants:</span> 
                <?php
                  echo film($genres) ;
                ?>
                </p>
              </div>
            </div>
        </div>

     <div="exercice3">
        <a name="exo3"><h2>exercice 3</h2></a>
          <div class="row exo">
            <div class="col-lg-6">
              <p>Un algo pour faire ressortir les deux derniers éléments d'un tableau dans un nouveau tableau<p>
              <p>Tableau formateurs :<br/>  
              $fruits : ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];
              </p>
              </p> Exemple de rendu :<br/>    
              $fruits_favoris : ["noix de coco", "ananas"];
              </p>
          </div>
          <div class="col-lg-6">
              <?php 
              $fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"]; 
              function fruits($fruits){
                    for($indexFruits=0;$indexFruits<count($fruits);$indexFruits++){
                         //on définit un tableau avec les valeurs de la var fruit
                        $fruit[]=$fruits[$indexFruits];
                        }
                        // on répond à la problématique: une variable avec les 2 derniers fruits
                        $meilleurFruit[]=$fruit[count($fruit)-1]." ".$fruit[count($fruit)-2];
                        // on convertit la variable en string pour affichage
                        $meilleurFruits=implode(" ",$meilleurFruit);
                        return $meilleurFruits;
                      }
              ?>
                
                <p>les fruits que je préfère sont : <?php echo fruits($fruits)?> </p>
             
          </div>
        </div>
      </div>

      <div class="container">
           <a name="exo4"> <h2>exercice 4</h2> </a>
           <div class="row exo">
              <div class="col-lg-6 ">
                <p>Un algo pour supprimer la valeur "milieu" d'un tableau </p>
                <p>Phrase formateurs :<br/>  
                 $prenoms : ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];
                </p>

                <p>Exemple de rendu :</br>    
                $prenoms : ["Harry", "Hilary", "Hagrid", "Holmes"]; <p>
                </p>
              </div>
              <div class="col-lg-6 ">
                <?php 
                  $prenoms=["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];
                  
                  function prenom($prenom){
                    //on calcule une moitié
                    $taille=intdiv(count($prenom),2);
                   //on supprime un élément du tableau en utilisant la moitié calculée pcdmt
                    array_splice($prenom,$taille,1);
                   
                    for ($indexPrenom=0;$indexPrenom<count($prenom);$indexPrenom++){
                     //on parcourt le tableau réduit dans un nouveau tableau
                      $Prenoms[]=$prenom[$indexPrenom]." ";
                                  
                      }
                    // on convertit le tableaau en string pour affichage
                      $name=implode(",",$Prenoms);
                      return $name;
                    }
                ?>
                <p><span>j'aime les prénoms suivants : </span><?php echo prenom($prenoms) ?></p>
              </div>
            </div>
          </div>

          <div class="container">
           <a name="exo5"> <h2>exercice 5</h2> </a>
           <div class="row exo">
              <div class="col-lg-6 ">
                <p>Un algo pour trouver la chaine de caractères la plus longue d'un tableau </p>
                <p>Phrase formateurs :<br/>  
               $phrase : ["ah...", "encore un beau dimanche", "de perdu", "cloîtré chez", "vous", "à coder", ",mais", " vous avez signé pour ça pas vrai ?", "alors courage !"];
                </p>

                <p>Exemple de rendu :</br>    
                $plus_longue_phrase : " vous avez signé pour ça pas vrais ?" <p>
                </p>
              </div>
              <div class="col-lg-6 ">
                <?php 
                   $phrase =["ah...", "encore un beau dimanche", "de perdu", "cloîtré chez", "vous", "à coder", ",mais", " vous avez signé pour ça pas vrai ?", "alors courage !"];
                  
                  function lenght($phrase){
                   
                    for($indexPhrase=0;$indexPhrase<count($phrase);$indexPhrase++){
                      //a chaque tour de boucle 
                      //on lit une valeur:une string
                      $str=$phrase[$indexPhrase];
                     //on calcule la taille de la valeur
                      $lenght=strlen($str);
                      //on ajoute la variable lenght dans un  tableau nomé taille
                      $taille[]=$lenght;
                    }
                    //on définit la taille (int)la plus longue
                    $tailleMax=max($taille);
                    //on recherche la clé associée à cette taille
                    $key=array_search($tailleMax,$taille);
                    //cette clé détermine l'index de la phrase la plus longue
                    $phraseLong=$phrase[$key];
                  return $phraseLong."avec ".$tailleMax." ";                 

                  }
                ?>
                <p><span>la valeur la plus longue dans le tableau est : 
                </span> <?php echo lenght($phrase);?>caractères
                </p>
              </div>
            </div>
          </div>
            <div class="container">
           <a name="exo6"> <h2>exercice 6</h2> </a>
           <div class="row exo">
              <div class="col-lg-6 ">
                <p>Un algo pour modifier les valeurs d'un tableau de façon systèmatique</p>
                <p>Phrase formateurs :<br/>  
                $portables : ["0612459623", "0645896235", "0678145263", "0647895263", "0655069912"];
                </p>

                <p>Exemple de rendu :</br>    
                $portables : ["+33612459623", "+33645896235", "+33678145263", "+33647895263", "+33655069912"]; <p>
                </p>
              </div>
              <div class="col-lg-6 ">
                <?php 
                $portables = ["0612459623", "0645896235", "0678145263", "0647895263", "0655069912"];
                
                function changeNumber($portable){
                  //on utilise une regex qui determine la place du 0 en début de string
                  // on remplace l'éléments trouvé par +33
                  $portable=preg_replace('#(^0)#',' (+33) $1',$portable);
                  $number=implode(" , ",$portable);
                return $number;
                }

                ?>
                <p>les numéros de téléphone sont les suivants :<?php echo changeNumber($portables) ?>
                </p>
              </div>
            </div>
          </div>

          <div class="container">
           <a name="exo7"> <h2>exercice 7</h2> </a>
           <div class="row exo">
              <div class="col-lg-6 ">
                <p>Un algo pour trouver le nombre d'occurrence d'une lettre dans un tableau</p>
                <p>Phrase formateurs :<br/>  
               $sadisme : ["haha", "hehe", "j'aime mon travail", "une vraie joie", "je changerai pour rien au monde", "hhhhhhhh", "have fun !"];
                </p>

                <p>Exemple de rendu :</br>    
               $occurrence_lettre_h : 14; <p>
                </p>
              </div>
              <div class="col-lg-6 ">
                <?php
                 $sadisme=["haha", "hehe", "j'aime mon travail", "une vraie joie", "je changerai pour rien au monde", "hhhhhhhh", "have fun !"];
                function nbOccurrence($sadisme){
                  //on transforme le tableu en une seule chaine
                  $str=implode("," ,$sadisme);
                  //on compte le nb de h dans la chaine
                  $occurence=substr_count($str,"h");
                  
                return $occurence;
                } 
                                  
                ?>
                <p> Il y a <?php echo nbOccurrence($sadisme); ?> h dans Le tableau </p>
              </div>
            </div>
          </div>
           <div class="container">
             <div class="row">
              <footer>
              <p>Pourquoi avoir choisi l'exercice 2: Tout simplement parceque j'avais des notions 
              sur les variables, leurs types , les boucles, les fonctions mais j'avais besoins
              de comprendre un peu mieux leur fonctionnement. Par ailleurs tout au long de cet exercice
              mon code a évolué en fonction des notions que je parvenais à acquérir et maitriser.Le code a été
              changé mais j'aurais du le garder pour voir l'évolution.En un mot trop de variables peu de fonctions et beaucoup d'echo.
              Le 3ème niveau est je pense essentiellement axé sur les regex. Je m'y suis tenté sur l'exercice 6
              pour comprendre le fonctionnement, mais je ne pense pas encore réussir tout un exercice 
              sur les Regex.Il me manque des notions. Si je parvenais à compter une occurence dans une str avec substr_count et preg_match,ou, dans un tableau avec count j'aurais fait un 
              grand pas.J'ai essayé en provoquant une boucle dans une chaine puis dans un tableau mais les résultats sont un peu bizarres. Un petit tuto serait le bienvenue
              </p>
              </footer>
            </div>
          </div>


  
    </div>
  </div>
  </body> 
</html>
