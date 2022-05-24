<?php

declare(strict_types=1);

namespace Matleftod\BeerNtmjm\Domain\Repository;


/**
 * This file is part of the "Biere NTMJM" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 
 */

/**
 * The repository for Beers
 */
class BeerRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function filter(?\Matleftod\BeerNtmjm\Domain\Model\Brand $brand = null)
    {
        $query = $this->createQuery();
        if($brand !== null){
            $query->matching($query->equals('brand', $brand));
        }
        return $query->execute();
    }

    public function search(\Matleftod\BeerNtmjm\Controller\Query\BeerSearch $search)
    {
        $query = $this->createQuery();
        $query->matching($query->logicalOr(
            $query->like('name', '%' . $search->getKeyWord() . '%'),
            $query->like('description', '%' . $search->getKeyWord() . '%')
        ));        
        return $query->execute();
    }
}
