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
 * Konzert
 */
class Konzert extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Datum
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $datum = '';

	/**
	 * Beginn
	 *
	 * @var string
	 */
	protected $beginn = '';

	/**
	 * Ort
	 *
	 * @var string
	 */
	protected $place = '';

	/**
	 * address
	 *
	 * @var string
	 */
	protected $address = '';

	/**
	 * Bemerkung
	 *
	 * @var string
	 */
	protected $remark = '';

	/**
	 * Leitung R
	 *
	 * @var string
	 */
	protected $leitungR = '';

	/**
	 * Leitung L
	 *
	 * @var string
	 */
	protected $leitunL = '';

	/**
	 * zusagen
	 *
	 * @var integer
	 */
	protected $zusagen = 0;

	/**
	 * absagen
	 *
	 * @var integer
	 */
	protected $absagen = 0;

	/**
	 * vielleichts
	 *
	 * @var integer
	 */
	protected $vielleichts = 0;

	/**
	 * Teilnahmen
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Schilke\Voices\Domain\Model\Part>
	 * @cascade remove
	 */
	protected $parts = NULL;

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
		$this->parts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the datum
	 *
	 * @return string $datum
	 */
	public function getDatum() {
		return $this->datum;
	}

	/**
	 * Sets the datum
	 *
	 * @param string $datum
	 * @return void
	 */
	public function setDatum($datum) {
		$this->datum = $datum;
	}

	/**
	 * Returns the beginn
	 *
	 * @return string $beginn
	 */
	public function getBeginn() {
		return $this->beginn;
	}

	/**
	 * Sets the beginn
	 *
	 * @param string $beginn
	 * @return void
	 */
	public function setBeginn($beginn) {
		$this->beginn = $beginn;
	}

	/**
	 * Returns the place
	 *
	 * @return string $place
	 */
	public function getPlace() {
		return $this->place;
	}

	/**
	 * Sets the place
	 *
	 * @param string $place
	 * @return void
	 */
	public function setPlace($place) {
		$this->place = $place;
	}

	/**
	 * Returns the address
	 *
	 * @return string $address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Sets the address
	 *
	 * @param string $address
	 * @return void
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * Returns the remark
	 *
	 * @return string $remark
	 */
	public function getRemark() {
		return $this->remark;
	}

	/**
	 * Sets the remark
	 *
	 * @param string $remark
	 * @return void
	 */
	public function setRemark($remark) {
		$this->remark = $remark;
	}

	/**
	 * Returns the leitungR
	 *
	 * @return string $leitungR
	 */
	public function getLeitungR() {
		return $this->leitungR;
	}

	/**
	 * Sets the leitungR
	 *
	 * @param string $leitungR
	 * @return void
	 */
	public function setLeitungR($leitungR) {
		$this->leitungR = $leitungR;
	}

	/**
	 * Returns the leitunL
	 *
	 * @return string $leitunL
	 */
	public function getLeitunL() {
		return $this->leitunL;
	}

	/**
	 * Sets the leitunL
	 *
	 * @param string $leitunL
	 * @return void
	 */
	public function setLeitunL($leitunL) {
		$this->leitunL = $leitunL;
	}

	/**
	 * Returns the zusagen
	 *
	 * @return integer $zusagen
	 */
	public function getZusagen() {
		return $this->zusagen;
	}

	/**
	 * Sets the zusagen
	 *
	 * @param integer $zusagen
	 * @return void
	 */
	public function setZusagen($zusagen) {
		$this->zusagen = $zusagen;
	}

	/**
	 * Returns the absagen
	 *
	 * @return integer $absagen
	 */
	public function getAbsagen() {
		return $this->absagen;
	}

	/**
	 * Sets the absagen
	 *
	 * @param integer $absagen
	 * @return void
	 */
	public function setAbsagen($absagen) {
		$this->absagen = $absagen;
	}

	/**
	 * Returns the vielleichts
	 *
	 * @return integer $vielleichts
	 */
	public function getVielleichts() {
		return $this->vielleichts;
	}

	/**
	 * Sets the vielleichts
	 *
	 * @param integer $vielleichts
	 * @return void
	 */
	public function setVielleichts($vielleichts) {
		$this->vielleichts = $vielleichts;
	}

	/**
	 * Adds a Part
	 *
	 * @param \Schilke\Voices\Domain\Model\Part $part
	 * @return void
	 */
	public function addPart(\Schilke\Voices\Domain\Model\Part $part) {
		$this->parts->attach($part);
	}

	/**
	 * Removes a Part
	 *
	 * @param \Schilke\Voices\Domain\Model\Part $partToRemove The Part to be removed
	 * @return void
	 */
	public function removePart(\Schilke\Voices\Domain\Model\Part $partToRemove) {
		$this->parts->detach($partToRemove);
	}

	/**
	 * Returns the parts
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Schilke\Voices\Domain\Model\Part> $parts
	 */
	public function getParts() {
		return $this->parts;
	}

	/**
	 * Sets the parts
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Schilke\Voices\Domain\Model\Part> $parts
	 * @return void
	 */
	public function setParts(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $parts) {
		$this->parts = $parts;
	}

}