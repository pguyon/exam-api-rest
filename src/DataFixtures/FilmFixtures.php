<?php

namespace App\DataFixtures;

use App\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $film = new Film();
        $film->setTitre('Dracula');
        $film->setDescription('Un film qui fait presque peur avec presque du sang');
        $film->setRealisateur('Francis Ford Copolla');
        $manager->persist($film);

        $film2 = new Film();
        $film2->setTitre('Salut l\'ami audieu le trésor');
        $film2->setDescription('Un film où il y a de la baffe');
        $film2->setRealisateur('Un mec');
        $manager->persist($film2);


        $film3 = new Film();
        $film3->setTitre('La Boum');
        $film3->setDescription('Un film pour les vieux nostalgique');
        $film3->setRealisateur('Une personne sûrement morte');
        $manager->persist($film3);


        $manager->flush();
    }
}
