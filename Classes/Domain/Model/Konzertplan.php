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
 * Konzertplan
 */
class Konzertplan extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Bezeichnung
	 *
	 * @var string
	 */
	protected $bezeichnung = '';

	/**
	 * Konzerte
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Schilke\Voices\Domain\Model\Konzert>
	 * @cascade remove
	 */
	protected $konzerts = NULL;

	/**
	 * Chormitglieder
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Schilke\Voices\Domain\Model\Singer>
	 * @cascade remove
	 */
	protected $singers = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->konzerts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->singers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the bezeichnung
	 *
	 * @return string $bezeichnung
	 */
	public function getBezeichnung() {
		return $this->bezeichnung;
	}

	/**
	 * Sets the bezeichnung
	 *
	 * @param string $bezeichnung
	 * @return void
	 */
	public function setBezeichnung($bezeichnung) {
		$this->bezeichnung = $bezeichnung;
	}

	/**
	 * Adds a Konzert
	 *
	 * @param \Schilke\Voices\Domain\Model\Konzert $konzert
	 * @return void
	 */
	public function addKonzert(\Schilke\Voices\Domain\Model\Konzert $konzert) {
		$this->konzerts->attach($konzert);
	}

	/**
	 * Removes a Konzert
	 *
	 * @param \Schilke\Voices\Domain\Model\Konzert $konzertToRemove The Konzert to be removed
	 * @return void
	 */
	public function removeKonzert(\Schilke\Voices\Domain\Model\Konzert $konzertToRemove) {
		$this->konzerts->detach($konzertToRemove);
	}

	/**
	 * Returns the konzerts
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Schilke\Voices\Domain\Model\Konzert> $konzerts
	 */
	public function getKonzerts() {
		return $this->konzerts;
	}

	/**
	 * Sets the konzerts
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Schilke\Voices\Domain\Model\Konzert> $konzerts
	 * @return void
	 */
	public function setKonzerts(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $konzerts) {
		$this->konzerts = $konzerts;
	}

	/**
	 * Adds a Singer
	 *
	 * @param \Schilke\Voices\Domain\Model\Singer $singer
	 * @return void
	 */
	public function addSinger(\Schilke\Voices\Domain\Model\Singer $singer) {
		$this->singers->attach($singer);
	}

	/**
	 * Removes a Singer
	 *
	 * @param \Schilke\Voices\Domain\Model\Singer $singerToRemove The Singer to be removed
	 * @return void
	 */
	public function removeSinger(\Schilke\Voices\Domain\Model\Singer $singerToRemove) {
		$this->singers->detach($singerToRemove);
	}

	/**
	 * Returns the singers
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Schilke\Voices\Domain\Model\Singer> $singers
	 */
	public function getSingers() {
		return $this->singers;
	}

	/**
	 * Sets the singers
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Schilke\Voices\Domain\Model\Singer> $singers
	 * @return void
	 */
	public function setSingers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $singers) {
		$this->singers = $singers;
	}

}