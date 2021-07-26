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
        $manager->flush();
    }
}
