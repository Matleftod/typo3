<?php

declare(strict_types=1);

namespace Matleftod\BeerNtmjm\Domain\Model;


/**
 * This file is part of the "Biere NTMJM" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 
 */

/**
 * Beer
 */
class Beer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Nom
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * Image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

    /**
     * Saveur
     *
     * @var string
     */
    protected $flavour = '';

    /**
     * Description
     *
     * @var string
     */
    protected $description = '';

    /**
     * Degré
     *
     * @var float
     */
    protected $degree = 0.0;

    /**
     * Type
     *
     * @var \Matleftod\BeerNtmjm\Domain\Model\Type
     */
    protected $type = null;

    /**
     * Ingredients
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Matleftod\BeerNtmjm\Domain\Model\Ingredient>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $ingredients = null;

    /**
     * Pays
     *
     * @var \Matleftod\BeerNtmjm\Domain\Model\Country
     */
    protected $country = null;

    /**
     * Avis
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Matleftod\BeerNtmjm\Domain\Model\Review>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $reviews = null;

    /**
     * Marque
     *
     * @var \Matleftod\BeerNtmjm\Domain\Model\Brand
     */
    protected $brand = null;

    /**
     * Thème
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Matleftod\BeerNtmjm\Domain\Model\Theme>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $theme = null;

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the flavour
     *
     * @return string $flavour
     */
    public function getFlavour()
    {
        return $this->flavour;
    }

    /**
     * Sets the flavour
     *
     * @param string $flavour
     * @return void
     */
    public function setFlavour(string $flavour)
    {
        $this->flavour = $flavour;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Returns the degree
     *
     * @return float $degree
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Sets the degree
     *
     * @param float $degree
     * @return void
     */
    public function setDegree(float $degree)
    {
        $this->degree = $degree;
    }

    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->ingredients = $this->ingredients ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->reviews = $this->reviews ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->theme = $this->theme ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the type
     *
     * @return \Matleftod\BeerNtmjm\Domain\Model\Type $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param \Matleftod\BeerNtmjm\Domain\Model\Type $type
     * @return void
     */
    public function setType(\Matleftod\BeerNtmjm\Domain\Model\Type $type)
    {
        $this->type = $type;
    }

    /**
     * Adds a Ingredient
     *
     * @param \Matleftod\BeerNtmjm\Domain\Model\Ingredient $ingredient
     * @return void
     */
    public function addIngredient(\Matleftod\BeerNtmjm\Domain\Model\Ingredient $ingredient)
    {
        $this->ingredients->attach($ingredient);
    }

    /**
     * Removes a Ingredient
     *
     * @param \Matleftod\BeerNtmjm\Domain\Model\Ingredient $ingredientToRemove The Ingredient to be removed
     * @return void
     */
    public function removeIngredient(\Matleftod\BeerNtmjm\Domain\Model\Ingredient $ingredientToRemove)
    {
        $this->ingredients->detach($ingredientToRemove);
    }

    /**
     * Returns the ingredients
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Matleftod\BeerNtmjm\Domain\Model\Ingredient> $ingredients
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Sets the ingredients
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Matleftod\BeerNtmjm\Domain\Model\Ingredient> $ingredients
     * @return void
     */
    public function setIngredients(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ingredients)
    {
        $this->ingredients = $ingredients;
    }

    /**
     * Returns the country
     *
     * @return \Matleftod\BeerNtmjm\Domain\Model\Country $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country
     *
     * @param \Matleftod\BeerNtmjm\Domain\Model\Country $country
     * @return void
     */
    public function setCountry(\Matleftod\BeerNtmjm\Domain\Model\Country $country)
    {
        $this->country = $country;
    }

    /**
     * Adds a Review
     *
     * @param \Matleftod\BeerNtmjm\Domain\Model\Review $review
     * @return void
     */
    public function addReview(\Matleftod\BeerNtmjm\Domain\Model\Review $review)
    {
        $this->reviews->attach($review);
    }

    /**
     * Removes a Review
     *
     * @param \Matleftod\BeerNtmjm\Domain\Model\Review $reviewToRemove The Review to be removed
     * @return void
     */
    public function removeReview(\Matleftod\BeerNtmjm\Domain\Model\Review $reviewToRemove)
    {
        $this->reviews->detach($reviewToRemove);
    }

    /**
     * Returns the reviews
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Matleftod\BeerNtmjm\Domain\Model\Review> $reviews
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Sets the reviews
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Matleftod\BeerNtmjm\Domain\Model\Review> $reviews
     * @return void
     */
    public function setReviews(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $reviews)
    {
        $this->reviews = $reviews;
    }

    /**
     * Returns the brand
     *
     * @return \Matleftod\BeerNtmjm\Domain\Model\Brand $brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets the brand
     *
     * @param \Matleftod\BeerNtmjm\Domain\Model\Brand $brand
     * @return void
     */
    public function setBrand(\Matleftod\BeerNtmjm\Domain\Model\Brand $brand)
    {
        $this->brand = $brand;
    }

    /**
     * Adds a Theme
     *
     * @param \Matleftod\BeerNtmjm\Domain\Model\Theme $theme
     * @return void
     */
    public function addTheme(\Matleftod\BeerNtmjm\Domain\Model\Theme $theme)
    {
        $this->theme->attach($theme);
    }

    /**
     * Removes a Theme
     *
     * @param \Matleftod\BeerNtmjm\Domain\Model\Theme $themeToRemove The Theme to be removed
     * @return void
     */
    public function removeTheme(\Matleftod\BeerNtmjm\Domain\Model\Theme $themeToRemove)
    {
        $this->theme->detach($themeToRemove);
    }

    /**
     * Returns the theme
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Matleftod\BeerNtmjm\Domain\Model\Theme> $theme
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Sets the theme
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Matleftod\BeerNtmjm\Domain\Model\Theme> $theme
     * @return void
     */
    public function setTheme(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $theme)
    {
        $this->theme = $theme;
    }
}
