<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class CategoryFixtures extends Fixture
{
    public function __construct(private SluggerInterface $slugger)
    {
        
    }
    public function load(ObjectManager $manager): void
    {
         $category = new Category();
         $category->setName('Coding');
         $category->setSlug($this->slugger->slug($category->getName()));
         $category->setImage('image.png');
         $manager->persist($category);

         $category2 = new Category();
       

        $manager->flush();
    }
}
