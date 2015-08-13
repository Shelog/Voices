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
 * Test case for class \Schilke\Voices\Domain\Model\Konzertplan.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Iris Schilke <ischilke@gmail.com>
 */
class KonzertplanTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Schilke\Voices\Domain\Model\Konzertplan
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Schilke\Voices\Domain\Model\Konzertplan();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getBezeichnungReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBezeichnung()
		);
	}

	/**
	 * @test
	 */
	public function setBezeichnungForStringSetsBezeichnung() {
		$this->subject->setBezeichnung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'bezeichnung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getKonzertsReturnsInitialValueForKonzert() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getKonzerts()
		);
	}

	/**
	 * @test
	 */
	public function setKonzertsForObjectStorageContainingKonzertSetsKonzerts() {
		$konzert = new \Schilke\Voices\Domain\Model\Konzert();
		$objectStorageHoldingExactlyOneKonzerts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneKonzerts->attach($konzert);
		$this->subject->setKonzerts($objectStorageHoldingExactlyOneKonzerts);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneKonzerts,
			'konzerts',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addKonzertToObjectStorageHoldingKonzerts() {
		$konzert = new \Schilke\Voices\Domain\Model\Konzert();
		$konzertsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$konzertsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($konzert));
		$this->inject($this->subject, 'konzerts', $konzertsObjectStorageMock);

		$this->subject->addKonzert($konzert);
	}

	/**
	 * @test
	 */
	public function removeKonzertFromObjectStorageHoldingKonzerts() {
		$konzert = new \Schilke\Voices\Domain\Model\Konzert();
		$konzertsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$konzertsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($konzert));
		$this->inject($this->subject, 'konzerts', $konzertsObjectStorageMock);

		$this->subject->removeKonzert($konzert);

	}

	/**
	 * @test
	 */
	public function getSingersReturnsInitialValueForSinger() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getSingers()
		);
	}

	/**
	 * @test
	 */
	public function setSingersForObjectStorageContainingSingerSetsSingers() {
		$singer = new \Schilke\Voices\Domain\Model\Singer();
		$objectStorageHoldingExactlyOneSingers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneSingers->attach($singer);
		$this->subject->setSingers($objectStorageHoldingExactlyOneSingers);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneSingers,
			'singers',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addSingerToObjectStorageHoldingSingers() {
		$singer = new \Schilke\Voices\Domain\Model\Singer();
		$singersObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$singersObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($singer));
		$this->inject($this->subject, 'singers', $singersObjectStorageMock);

		$this->subject->addSinger($singer);
	}

	/**
	 * @test
	 */
	public function removeSingerFromObjectStorageHoldingSingers() {
		$singer = new \Schilke\Voices\Domain\Model\Singer();
		$singersObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$singersObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($singer));
		$this->inject($this->subject, 'singers', $singersObjectStorageMock);

		$this->subject->removeSinger($singer);

	}
}
