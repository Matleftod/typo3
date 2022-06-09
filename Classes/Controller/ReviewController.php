<?php

declare(strict_types=1);

namespace Matleftod\BeerNtmjm\Controller;

use DateTime;

/**
 * This file is part of the "Biere NTMJM" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 
 */

/**
 * ReviewController
 */
class ReviewController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    
    /**
     * reviewRepository
     *
     * @var \Matleftod\BeerNtmjm\Domain\Repository\ReviewRepository
     */
    protected $reviewRepository = null;

    /**
     * @param \Matleftod\BeerNtmjm\Domain\Repository\ReviewRepository $reviewRepository
     */
    public function injectReviewRepository(\Matleftod\BeerNtmjm\Domain\Repository\ReviewRepository $reviewRepository)
    {
        $this->reviewRepository = $reviewRepository;
    }

    
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
     * action new
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function newAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * action create
     *
     * @param \Matleftod\BeerNtmjm\Domain\Model\Review $newReview
     */
    public function createAction(\Matleftod\BeerNtmjm\Domain\Model\Beer $beer, \Matleftod\BeerNtmjm\Domain\Model\Review $newReview)
    {
        $newReview->setDate(new DateTime());
        $beer->addReview($newReview);
        $this->reviewRepository->add($newReview);
        $this->beerRepository->add($beer);
        $this->redirect('show', "Beer", null, ["beer"=>$beer]);
    }
}
