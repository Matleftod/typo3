<?php

declare(strict_types=1);

namespace Matleftod\BeerNtmjm\Controller\Query;


/**
 * This file is part of the "Biere NTMJM" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 
 */

/**
 * BeerSearch
 */
class BeerSearch 
{
    private string $keyWord;

    public function __construct(string $keyWord)
    {
        $this->keyWord = $keyWord;
    }

    public function getKeyWord(){
        return $this->keyWord;
    }
}