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
class ReviewTest extends UnitTestCase
{
    /**
     * @var \Matleftod\BeerNtmjm\Domain\Model\Review|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Matleftod\BeerNtmjm\Domain\Model\Review::class,
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
    public function getContentReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getContent()
        );
    }

    /**
     * @test
     */
    public function setContentForStringSetsContent(): void
    {
        $this->subject->setContent('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('content'));
    }

    /**
     * @test
     */
    public function getMarkReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getMark()
        );
    }

    /**
     * @test
     */
    public function setMarkForIntSetsMark(): void
    {
        $this->subject->setMark(12);

        self::assertEquals(12, $this->subject->_get('mark'));
    }

    /**
     * @test
     */
    public function getUsernameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getUsername()
        );
    }

    /**
     * @test
     */
    public function setUsernameForStringSetsUsername(): void
    {
        $this->subject->setUsername('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('username'));
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime(): void
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate(): void
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertEquals($dateTimeFixture, $this->subject->_get('date'));
    }

    /**
     * @test
     */
    public function getValidatedReturnsInitialValueForBool(): void
    {
        self::assertFalse($this->subject->getValidated());
    }

    /**
     * @test
     */
    public function setValidatedForBoolSetsValidated(): void
    {
        $this->subject->setValidated(true);

        self::assertEquals(true, $this->subject->_get('validated'));
    }
}
