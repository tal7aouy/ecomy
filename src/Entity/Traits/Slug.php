<?php


namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait Slug
{
    #[ORM\Column(length: 255)]
    private ?string $slug = null;
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}