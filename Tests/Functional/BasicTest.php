<?php
declare(strict_types=1);

namespace Matleftod\BeerNtmjm\Tests\Functional;

use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

/**
 * Test case
 *
 * @author Matéo Girollet <mateo.girollet33@gmail.com>
 * @author Jan Vaysse--Zinkhöfer <jan.vz94@gmail.com>
 * @author Nicolas Travers <nico.travers.49@gmail.com>
 * @author Thibaut Jouet 
 * @author Mathieu Brung 
 */
class BasicTest extends FunctionalTestCase
{
    /**
     * @var array
     */
    protected $testExtensionsToLoad = [
        'typo3conf/ext/beer_ntmjm',
    ];

    /**
     * Just a dummy to show that at least one test is actually executed
     *
     * @test
     */
    public function dummy(): void
    {
        $this->assertTrue(true);
    }
}
