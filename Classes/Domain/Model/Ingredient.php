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
 * Ingrédients pour biere
 */
class Ingredient extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Libellé
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $libelle = '';

    /**
     * Returns the libelle
     *
     * @return string $libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Sets the libelle
     *
     * @param string $libelle
     * @return void
     */
    public function setLibelle(string $libelle)
    {
        $this->libelle = $libelle;
    }
}
