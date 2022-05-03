<?php

declare(strict_types=1);

namespace Matleftod\BeerNtmjm\Controller;


/**
 * This file is part of the "Biere NTMJM" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 
 */

/**
 * BrandController
 */
class BrandController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $brands = $this->brandRepository->findAll();
        $this->view->assign('brands', $brands);
        return $this->htmlResponse();
    }
}
