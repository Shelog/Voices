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
 * Test case for class Schilke\Voices\Controller\SingerController.
 *
 * @author Iris Schilke <ischilke@gmail.com>
 */
class SingerControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Schilke\Voices\Controller\SingerController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Schilke\\Voices\\Controller\\SingerController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllSingersFromRepositoryAndAssignsThemToView() {

		$allSingers = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$singerRepository = $this->getMock('Schilke\\Voices\\Domain\\Repository\\SingerRepository', array('findAll'), array(), '', FALSE);
		$singerRepository->expects($this->once())->method('findAll')->will($this->returnValue($allSingers));
		$this->inject($this->subject, 'singerRepository', $singerRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('singers', $allSingers);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenSingerToView() {
		$singer = new \Schilke\Voices\Domain\Model\Singer();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('singer', $singer);

		$this->subject->showAction($singer);
	}
}
