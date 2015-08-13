<?php

namespace Schilke\Voices\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Iris Schilke <ischilke@gmail.com>, Kaitzbach Webdesign
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Schilke\Voices\Domain\Model\Konzert.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Iris Schilke <ischilke@gmail.com>
 */
class KonzertTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Schilke\Voices\Domain\Model\Konzert
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Schilke\Voices\Domain\Model\Konzert();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getDatumReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDatum()
		);
	}

	/**
	 * @test
	 */
	public function setDatumForStringSetsDatum() {
		$this->subject->setDatum('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'datum',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBeginnReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBeginn()
		);
	}

	/**
	 * @test
	 */
	public function setBeginnForStringSetsBeginn() {
		$this->subject->setBeginn('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'beginn',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPlaceReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPlace()
		);
	}

	/**
	 * @test
	 */
	public function setPlaceForStringSetsPlace() {
		$this->subject->setPlace('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'place',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAddressReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAddress()
		);
	}

	/**
	 * @test
	 */
	public function setAddressForStringSetsAddress() {
		$this->subject->setAddress('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'address',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRemarkReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getRemark()
		);
	}

	/**
	 * @test
	 */
	public function setRemarkForStringSetsRemark() {
		$this->subject->setRemark('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'remark',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLeitungRReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLeitungR()
		);
	}

	/**
	 * @test
	 */
	public function setLeitungRForStringSetsLeitungR() {
		$this->subject->setLeitungR('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'leitungR',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLeitunLReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLeitunL()
		);
	}

	/**
	 * @test
	 */
	public function setLeitunLForStringSetsLeitunL() {
		$this->subject->setLeitunL('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'leitunL',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getZusagenReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getZusagen()
		);
	}

	/**
	 * @test
	 */
	public function setZusagenForIntegerSetsZusagen() {
		$this->subject->setZusagen(12);

		$this->assertAttributeEquals(
			12,
			'zusagen',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAbsagenReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getAbsagen()
		);
	}

	/**
	 * @test
	 */
	public function setAbsagenForIntegerSetsAbsagen() {
		$this->subject->setAbsagen(12);

		$this->assertAttributeEquals(
			12,
			'absagen',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVielleichtsReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getVielleichts()
		);
	}

	/**
	 * @test
	 */
	public function setVielleichtsForIntegerSetsVielleichts() {
		$this->subject->setVielleichts(12);

		$this->assertAttributeEquals(
			12,
			'vielleichts',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPartsReturnsInitialValueForPart() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getParts()
		);
	}

	/**
	 * @test
	 */
	public function setPartsForObjectStorageContainingPartSetsParts() {
		$part = new \Schilke\Voices\Domain\Model\Part();
		$objectStorageHoldingExactlyOneParts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneParts->attach($part);
		$this->subject->setParts($objectStorageHoldingExactlyOneParts);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneParts,
			'parts',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addPartToObjectStorageHoldingParts() {
		$part = new \Schilke\Voices\Domain\Model\Part();
		$partsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$partsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($part));
		$this->inject($this->subject, 'parts', $partsObjectStorageMock);

		$this->subject->addPart($part);
	}

	/**
	 * @test
	 */
	public function removePartFromObjectStorageHoldingParts() {
		$part = new \Schilke\Voices\Domain\Model\Part();
		$partsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$partsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($part));
		$this->inject($this->subject, 'parts', $partsObjectStorageMock);

		$this->subject->removePart($part);

	}
}
