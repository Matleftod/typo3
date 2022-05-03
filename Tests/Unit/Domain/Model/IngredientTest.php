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
class IngredientTest extends UnitTestCase
{
    /**
     * @var \Matleftod\BeerNtmjm\Domain\Model\Ingredient|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Matleftod\BeerNtmjm\Domain\Model\Ingredient::class,
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
    public function getLibelleReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getLibelle()
        );
    }

    /**
     * @test
     */
    public function setLibelleForStringSetsLibelle(): void
    {
        $this->subject->setLibelle('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('libelle'));
    }
}
