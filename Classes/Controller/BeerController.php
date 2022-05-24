<?php

declare(strict_types=1);

namespace Matleftod\BeerNtmjm\Controller;

use  Matleftod\BeerNtmjm\Controller\Query\BeerSearch;

/**
 * This file is part of the "Biere NTMJM" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 
 */

/**
 * BeerController
 */
class BeerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * beerRepository
     *
     * @var \Matleftod\BeerNtmjm\Domain\Repository\BeerRepository
     */
    protected $beerRepository = null;

    /**
     * @param \Matleftod\BeerNtmjm\Domain\Repository\BeerRepository $beerRepository
     */
    public function injectBeerRepository(\Matleftod\BeerNtmjm\Domain\Repository\BeerRepository $beerRepository)
    {
        $this->beerRepository = $beerRepository;
    }

    /**
     * action list
     *
     * @param \Matleftod\BeerNtmjm\Domain\Model\Brand $brand
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(?\Matleftod\BeerNtmjm\Domain\Model\Brand $brand = null): \Psr\Http\Message\ResponseInterface
    {
        $beers = $this->beerRepository->filter($brand);
        $this->view->assign('beers', $beers);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Matleftod\BeerNtmjm\Domain\Model\Beer $beer
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Matleftod\BeerNtmjm\Domain\Model\Beer $beer): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('beer', $beer);
        return $this->htmlResponse();
    }

    /**
     * action search
     *
     * @param \Matleftod\BeerNtmjm\Controller\Query\BeerSearch $search
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function searchAction(BeerSearch $search): \Psr\Http\Message\ResponseInterface
    {
        $beers = $this->beerRepository->search($search);
        $this->view->assign('beers', $beers);
        $this->view->assign('search', $search);
        return $this->htmlResponse();
    }

    /**
     * action focus
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function focusAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }
}
