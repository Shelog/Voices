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
 * Test case for class \Schilke\Voices\Domain\Model\Part.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Iris Schilke <ischilke@gmail.com>
 */
class PartTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Schilke\Voices\Domain\Model\Part
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Schilke\Voices\Domain\Model\Part();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getJaReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getJa()
		);
	}

	/**
	 * @test
	 */
	public function setJaForBooleanSetsJa() {
		$this->subject->setJa(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'ja',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNeinReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getNein()
		);
	}

	/**
	 * @test
	 */
	public function setNeinForBooleanSetsNein() {
		$this->subject->setNein(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'nein',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVielleichtReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getVielleicht()
		);
	}

	/**
	 * @test
	 */
	public function setVielleichtForBooleanSetsVielleicht() {
		$this->subject->setVielleicht(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'vielleicht',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCommentReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getComment()
		);
	}

	/**
	 * @test
	 */
	public function setCommentForStringSetsComment() {
		$this->subject->setComment('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'comment',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getKonzertReturnsInitialValueForKonzert() {
		$this->assertEquals(
			NULL,
			$this->subject->getKonzert()
		);
	}

	/**
	 * @test
	 */
	public function setKonzertForKonzertSetsKonzert() {
		$konzertFixture = new \Schilke\Voices\Domain\Model\Konzert();
		$this->subject->setKonzert($konzertFixture);

		$this->assertAttributeEquals(
			$konzertFixture,
			'konzert',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSingerReturnsInitialValueForSinger() {
		$this->assertEquals(
			NULL,
			$this->subject->getSinger()
		);
	}

	/**
	 * @test
	 */
	public function setSingerForSingerSetsSinger() {
		$singerFixture = new \Schilke\Voices\Domain\Model\Singer();
		$this->subject->setSinger($singerFixture);

		$this->assertAttributeEquals(
			$singerFixture,
			'singer',
			$this->subject
		);
	}
}
