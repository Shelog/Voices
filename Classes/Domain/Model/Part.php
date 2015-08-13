<?php
namespace Schilke\Voices\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Iris Schilke <ischilke@gmail.com>, Kaitzbach Webdesign
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Teilnahme
 */
class Part extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * ja
	 *
	 * @var boolean
	 */
	protected $ja = FALSE;

	/**
	 * nein
	 *
	 * @var boolean
	 */
	protected $nein = FALSE;

	/**
	 * vielleicht
	 *
	 * @var boolean
	 */
	protected $vielleicht = FALSE;

	/**
	 * Kommentar
	 *
	 * @var string
	 */
	protected $comment = '';

	/**
	 * Konzert
	 *
	 * @var \Schilke\Voices\Domain\Model\Konzert
	 */
	protected $konzert = NULL;

	/**
	 * Chormitglied
	 *
	 * @var \Schilke\Voices\Domain\Model\Singer
	 */
	protected $singer = NULL;

	/**
	 * Returns the ja
	 *
	 * @return boolean $ja
	 */
	public function getJa() {
		return $this->ja;
	}

	/**
	 * Sets the ja
	 *
	 * @param boolean $ja
	 * @return void
	 */
	public function setJa($ja) {
		$this->ja = $ja;
	}

	/**
	 * Returns the boolean state of ja
	 *
	 * @return boolean
	 */
	public function isJa() {
		return $this->ja;
	}

	/**
	 * Returns the nein
	 *
	 * @return boolean $nein
	 */
	public function getNein() {
		return $this->nein;
	}

	/**
	 * Sets the nein
	 *
	 * @param boolean $nein
	 * @return void
	 */
	public function setNein($nein) {
		$this->nein = $nein;
	}

	/**
	 * Returns the boolean state of nein
	 *
	 * @return boolean
	 */
	public function isNein() {
		return $this->nein;
	}

	/**
	 * Returns the vielleicht
	 *
	 * @return boolean $vielleicht
	 */
	public function getVielleicht() {
		return $this->vielleicht;
	}

	/**
	 * Sets the vielleicht
	 *
	 * @param boolean $vielleicht
	 * @return void
	 */
	public function setVielleicht($vielleicht) {
		$this->vielleicht = $vielleicht;
	}

	/**
	 * Returns the boolean state of vielleicht
	 *
	 * @return boolean
	 */
	public function isVielleicht() {
		return $this->vielleicht;
	}

	/**
	 * Returns the comment
	 *
	 * @return string $comment
	 */
	public function getComment() {
		return $this->comment;
	}

	/**
	 * Sets the comment
	 *
	 * @param string $comment
	 * @return void
	 */
	public function setComment($comment) {
		$this->comment = $comment;
	}

	/**
	 * Returns the konzert
	 *
	 * @return \Schilke\Voices\Domain\Model\Konzert $konzert
	 */
	public function getKonzert() {
		return $this->konzert;
	}

	/**
	 * Sets the konzert
	 *
	 * @param \Schilke\Voices\Domain\Model\Konzert $konzert
	 * @return void
	 */
	public function setKonzert(\Schilke\Voices\Domain\Model\Konzert $konzert) {
		$this->konzert = $konzert;
	}

	/**
	 * Returns the singer
	 *
	 * @return \Schilke\Voices\Domain\Model\Singer $singer
	 */
	public function getSinger() {
		return $this->singer;
	}

	/**
	 * Sets the singer
	 *
	 * @param \Schilke\Voices\Domain\Model\Singer $singer
	 * @return void
	 */
	public function setSinger(\Schilke\Voices\Domain\Model\Singer $singer) {
		$this->singer = $singer;
	}

}