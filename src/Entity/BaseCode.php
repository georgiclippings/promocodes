<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;

/** @ORM\MappedSuperclass */
class BaseCode implements Translatable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @Gedmo\Slug(fields={"title"}, updatable=false, unique=true)
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="short_description", type="text")
     */
    private $shortDescription;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="description", type="text")
     */
    private $desctiption;

    /**
     * @var string
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="button_title", type="string", length=20)
     */
    private $buttonTitle;

    /**
     * @var float
     * @ORM\Column(name="rating", type="decimal", precision=1, scale=1)
     */
    private $rating;

    /**
     * @var int
     * @ORM\Column(name="rating_reviews", type="integer")
     */
    private $ratingReviews;

    /**
     * @Gedmo\Sortable(groups={"category"})
     * @ORM\Column(type="integer")
     */
    private $position;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug($slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getDesctiption(): string
    {
        return $this->desctiption;
    }

    public function setDesctiption(string $desctiption): self
    {
        $this->desctiption = $desctiption;

        return $this;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getButtonTitle(): string
    {
        return $this->buttonTitle;
    }

    public function setButtonTitle(string $buttonTitle): self
    {
        $this->buttonTitle = $buttonTitle;

        return $this;
    }

    public function getRating(): float
    {
        return $this->rating;
    }

    public function setRating(float $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getRatingReviews(): int
    {
        return $this->ratingReviews;
    }

    public function setRatingReviews(int $ratingReviews): self
    {
        $this->ratingReviews = $ratingReviews;

        return $this;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }


    public function getCreated(): DateTime
    {
        return $this->createdAt;
    }

    public function getUpdated(): DateTime
    {
        return $this->updatedAt;
    }
}
