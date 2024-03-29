<h1>Exercice Cinéma</h1>

<p>
Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.<br>
<br>
Les films seront caractérisés par leur titre, leur date de sortie en France, leur durée (en minutes)<br>
ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film <br>
(synopsis) pourra éventuellement être renseigné. Chaque film est caractérisé par un seul genre <br>
cinématographique (science-fiction, aventure, action, ...).<br>
<br>
Votre application devra recenser également les acteurs de chacun des films. On désire connaître le <br>
nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) <br>
joué par l’acteur dans le(s) film(s) concerné(s).<br>
<br>
Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de le mettre en place correctement !<br>
Attention, le rôle (par exemple James Bond) ne doit être instancié qu'une seule fois (dans la mesure <br>
où ce rôle a été incarné par plusieurs acteurs.)<br>
<br>
On doit pouvoir :<br>
Lister la liste des acteurs ayant incarné un rôle précis (ex: les acteurs ayant joué le rôle de <br>
Batman : Michael Keaton, Val Kilmer, George Clooney, …)<br>
Lister le casting d'un film (dans le film Star Wars Episode IV, Han Solo a été incarné par <br>
Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)<br>
Lister les films par genre (exemple : le genre SF est associé à X films : Star Wars, Blade <br>
Runner, ...)<br>
Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)<br>
Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)<br>
</p>

<h2>Résultat</h2>

<p>--------------------------------------------------------------------------------------------------------------------</p>

<?php
    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });

    //GENRES :
    $scifi= new Genre("SF");
    $horreur= new Genre("Horreur");

    //REALISATEURS :
    $jamesCameron= new Realisateur("James", "Cameron", "H", "16-08-1954");

    //ACTEURS :
    $arnoldSchwarzenegger= new Acteur("Arnold", "Schwarzenegger", "H", "1947-07-30");
    $lindaHamilton= new Acteur("Linda", "Hamilton", "F", "1956-09-26");
    $michaelBiehn= new Acteur("Michael", "Biehn", "H", "1956-07-31");
    $robertPatrick= new Acteur("Robert", "Patrick", "H", "1958-11-05");

    //FILMS :
    $terminator= new Film("The Terminator", 1984, 107, $jamesCameron, $scifi);
    $terminator2= new Film("Terminator 2 : Judgement Day", 1991, 137, $jamesCameron, $scifi);
    $aliens= new Film("Aliens", 1986, 137, $jamesCameron, $scifi);
    $avatar= new Film("Avatar", 2009, 167, $jamesCameron, $scifi);

    //ROLES :
    $theTerminator= new Role ("T-800");
    $majorSchaefer= new Role ("Major Alan 'Dutch' Schaefer");
    $kyleReese= new Role ("Kyle Reese");
    $sarahConnor= new Role ("Sarah Connor");

    //CASTINGS :
    $castingTerminator= new Casting($terminator, $arnoldSchwarzenegger, $theTerminator);
    $castingSarahConnor=new Casting($terminator, $lindaHamilton, $sarahConnor);
    $castingKyleReese= new Casting($terminator, $michaelBiehn, $kyleReese);
    $castingTerminator2= new Casting($terminator2, $arnoldSchwarzenegger, $theTerminator);
    $castingSarahConnor2= new Casting($terminator2, $lindaHamilton, $sarahConnor);

//---------------------------------------------------------------------------------------------------------------------------------
    /*FONCTIONS : 
        Acteur & Realisateur -> afficherFilmographie
        Film -> afficherListeActeurs
    */
    $theTerminator->afficherlisteActeurs();
    $terminator->afficherCasting();
    $scifi->afficherListeFilms();
    $jamesCameron->afficherFilmographie();
    $arnoldSchwarzenegger->afficherFilmographie();
?>