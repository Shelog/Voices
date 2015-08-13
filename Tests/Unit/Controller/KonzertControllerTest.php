<?php
namespace Schilke\Voices\Tests\Unit\Controller;
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
 * Test case for class Schilke\Voices\Controller\KonzertController.
 *
 * @author Iris Schilke <ischilke@gmail.com>
 */
class KonzertControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Schilke\Voices\Controller\KonzertController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Schilke\\Voices\\Controller\\KonzertController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllKonzertsFromRepositoryAndAssignsThemToView() {

		$allKonzerts = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$konzertRepository = $this->getMock('Schilke\\Voices\\Domain\\Repository\\KonzertRepository', array('findAll'), array(), '', FALSE);
		$konzertRepository->expects($this->once())->method('findAll')->will($this->returnValue($allKonzerts));
		$this->inject($this->subject, 'konzertRepository', $konzertRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('konzerts', $allKonzerts);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenKonzertToView() {
		$konzert = new \Schilke\Voices\Domain\Model\Konzert();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('konzert', $konzert);

		$this->subject->showAction($konzert);
	}
}
