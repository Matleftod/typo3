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
 * Avis
 */
class Review extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Contenu
     *
     * @var string
     */
    protected $content = '';

    /**
     * Note
     *
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $mark = 0;

    /**
     * Nom de l'utilisateur
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $username = '';

    /**
     * Date publication
     *
     * @var \DateTime
     */
    protected $date = null;

    /**
     * Validé
     *
     * @var bool
     */
    protected $validated = false;

    /**
     * Returns the content
     *
     * @return string $content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets the content
     *
     * @param string $content
     * @return void
     */
    public function setContent(string $content)
    {
        $this->content = $content;
    }

    /**
     * Returns the mark
     *
     * @return int $mark
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Sets the mark
     *
     * @param int $mark
     * @return void
     */
    public function setMark(int $mark)
    {
        $this->mark = $mark;
    }

    /**
     * Returns the username
     *
     * @return string $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the username
     *
     * @param string $username
     * @return void
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     * Returns the date
     *
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Returns the validated
     *
     * @return bool $validated
     */
    public function getValidated()
    {
        return $this->validated;
    }

    /**
     * Sets the validated
     *
     * @param bool $validated
     * @return void
     */
    public function setValidated(bool $validated)
    {
        $this->validated = $validated;
    }

    /**
     * Returns the boolean state of validated
     *
     * @return bool
     */
    public function isValidated()
    {
        return $this->validated;
    }
}
