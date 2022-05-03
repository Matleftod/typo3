<?php
declare(strict_types=1);

namespace Matleftod\BeerNtmjm\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Matéo Girollet <mateo.girollet33@gmail.com>
 * @author Jan Vaysse--Zinkhöfer <jan.vz94@gmail.com>
 * @author Nicolas Travers <nico.travers.49@gmail.com>
 * @author Thibaut Jouet 
 * @author Mathieu Brung 
 */
class BeerTest extends UnitTestCase
{
    /**
     * @var \Matleftod\BeerNtmjm\Domain\Model\Beer|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Matleftod\BeerNtmjm\Domain\Model\Beer::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName(): void
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('name'));
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference(): void
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage(): void
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertEquals($fileReferenceFixture, $this->subject->_get('image'));
    }

    /**
     * @test
     */
    public function getFlavourReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getFlavour()
        );
    }

    /**
     * @test
     */
    public function setFlavourForStringSetsFlavour(): void
    {
        $this->subject->setFlavour('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('flavour'));
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription(): void
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('description'));
    }

    /**
     * @test
     */
    public function getDegreeReturnsInitialValueForFloat(): void
    {
        self::assertSame(
            0.0,
            $this->subject->getDegree()
        );
    }

    /**
     * @test
     */
    public function setDegreeForFloatSetsDegree(): void
    {
        $this->subject->setDegree(3.14159265);

        self::assertEquals(3.14159265, $this->subject->_get('degree'));
    }

    /**
     * @test
     */
    public function getTypeReturnsInitialValueForType(): void
    {
        self::assertEquals(
            null,
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForTypeSetsType(): void
    {
        $typeFixture = new \Matleftod\BeerNtmjm\Domain\Model\Type();
        $this->subject->setType($typeFixture);

        self::assertEquals($typeFixture, $this->subject->_get('type'));
    }

    /**
     * @test
     */
    public function getIngredientsReturnsInitialValueForIngredient(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getIngredients()
        );
    }

    /**
     * @test
     */
    public function setIngredientsForObjectStorageContainingIngredientSetsIngredients(): void
    {
        $ingredient = new \Matleftod\BeerNtmjm\Domain\Model\Ingredient();
        $objectStorageHoldingExactlyOneIngredients = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneIngredients->attach($ingredient);
        $this->subject->setIngredients($objectStorageHoldingExactlyOneIngredients);

        self::assertEquals($objectStorageHoldingExactlyOneIngredients, $this->subject->_get('ingredients'));
    }

    /**
     * @test
     */
    public function addIngredientToObjectStorageHoldingIngredients(): void
    {
        $ingredient = new \Matleftod\BeerNtmjm\Domain\Model\Ingredient();
        $ingredientsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ingredientsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($ingredient));
        $this->subject->_set('ingredients', $ingredientsObjectStorageMock);

        $this->subject->addIngredient($ingredient);
    }

    /**
     * @test
     */
    public function removeIngredientFromObjectStorageHoldingIngredients(): void
    {
        $ingredient = new \Matleftod\BeerNtmjm\Domain\Model\Ingredient();
        $ingredientsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ingredientsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($ingredient));
        $this->subject->_set('ingredients', $ingredientsObjectStorageMock);

        $this->subject->removeIngredient($ingredient);
    }

    /**
     * @test
     */
    public function getCountryReturnsInitialValueForCountry(): void
    {
        self::assertEquals(
            null,
            $this->subject->getCountry()
        );
    }

    /**
     * @test
     */
    public function setCountryForCountrySetsCountry(): void
    {
        $countryFixture = new \Matleftod\BeerNtmjm\Domain\Model\Country();
        $this->subject->setCountry($countryFixture);

        self::assertEquals($countryFixture, $this->subject->_get('country'));
    }

    /**
     * @test
     */
    public function getReviewsReturnsInitialValueForReview(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getReviews()
        );
    }

    /**
     * @test
     */
    public function setReviewsForObjectStorageContainingReviewSetsReviews(): void
    {
        $review = new \Matleftod\BeerNtmjm\Domain\Model\Review();
        $objectStorageHoldingExactlyOneReviews = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneReviews->attach($review);
        $this->subject->setReviews($objectStorageHoldingExactlyOneReviews);

        self::assertEquals($objectStorageHoldingExactlyOneReviews, $this->subject->_get('reviews'));
    }

    /**
     * @test
     */
    public function addReviewToObjectStorageHoldingReviews(): void
    {
        $review = new \Matleftod\BeerNtmjm\Domain\Model\Review();
        $reviewsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($review));
        $this->subject->_set('reviews', $reviewsObjectStorageMock);

        $this->subject->addReview($review);
    }

    /**
     * @test
     */
    public function removeReviewFromObjectStorageHoldingReviews(): void
    {
        $review = new \Matleftod\BeerNtmjm\Domain\Model\Review();
        $reviewsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($review));
        $this->subject->_set('reviews', $reviewsObjectStorageMock);

        $this->subject->removeReview($review);
    }

    /**
     * @test
     */
    public function getBrandReturnsInitialValueForBrand(): void
    {
        self::assertEquals(
            null,
            $this->subject->getBrand()
        );
    }

    /**
     * @test
     */
    public function setBrandForBrandSetsBrand(): void
    {
        $brandFixture = new \Matleftod\BeerNtmjm\Domain\Model\Brand();
        $this->subject->setBrand($brandFixture);

        self::assertEquals($brandFixture, $this->subject->_get('brand'));
    }

    /**
     * @test
     */
    public function getThemeReturnsInitialValueForTheme(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTheme()
        );
    }

    /**
     * @test
     */
    public function setThemeForObjectStorageContainingThemeSetsTheme(): void
    {
        $theme = new \Matleftod\BeerNtmjm\Domain\Model\Theme();
        $objectStorageHoldingExactlyOneTheme = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTheme->attach($theme);
        $this->subject->setTheme($objectStorageHoldingExactlyOneTheme);

        self::assertEquals($objectStorageHoldingExactlyOneTheme, $this->subject->_get('theme'));
    }

    /**
     * @test
     */
    public function addThemeToObjectStorageHoldingTheme(): void
    {
        $theme = new \Matleftod\BeerNtmjm\Domain\Model\Theme();
        $themeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $themeObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($theme));
        $this->subject->_set('theme', $themeObjectStorageMock);

        $this->subject->addTheme($theme);
    }

    /**
     * @test
     */
    public function removeThemeFromObjectStorageHoldingTheme(): void
    {
        $theme = new \Matleftod\BeerNtmjm\Domain\Model\Theme();
        $themeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $themeObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($theme));
        $this->subject->_set('theme', $themeObjectStorageMock);

        $this->subject->removeTheme($theme);
    }
}
