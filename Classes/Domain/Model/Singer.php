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
 * SängerIn
 */
class Singer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Nachname
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $nachname = '';

	/**
	 * Vorname
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $vorname = '';

	/**
	 * Stimmgruppe
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $stimme = '';

	/**
	 * Returns the nachname
	 *
	 * @return string $nachname
	 */
	public function getNachname() {
		return $this->nachname;
	}

	/**
	 * Sets the nachname
	 *
	 * @param string $nachname
	 * @return void
	 */
	public function setNachname($nachname) {
		$this->nachname = $nachname;
	}

	/**
	 * Returns the vorname
	 *
	 * @return string $vorname
	 */
	public function getVorname() {
		return $this->vorname;
	}

	/**
	 * Sets the vorname
	 *
	 * @param string $vorname
	 * @return void
	 */
	public function setVorname($vorname) {
		$this->vorname = $vorname;
	}

	/**
	 * Returns the stimme
	 *
	 * @return string $stimme
	 */
	public function getStimme() {
		return $this->stimme;
	}

	/**
	 * Sets the stimme
	 *
	 * @param string $stimme
	 * @return void
	 */
	public function setStimme($stimme) {
		$this->stimme = $stimme;
	}

}