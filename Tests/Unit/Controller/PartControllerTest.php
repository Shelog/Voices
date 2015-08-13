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
 * Test case for class Schilke\Voices\Controller\PartController.
 *
 * @author Iris Schilke <ischilke@gmail.com>
 */
class PartControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Schilke\Voices\Controller\PartController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Schilke\\Voices\\Controller\\PartController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllPartsFromRepositoryAndAssignsThemToView() {

		$allParts = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$partRepository = $this->getMock('Schilke\\Voices\\Domain\\Repository\\PartRepository', array('findAll'), array(), '', FALSE);
		$partRepository->expects($this->once())->method('findAll')->will($this->returnValue($allParts));
		$this->inject($this->subject, 'partRepository', $partRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('parts', $allParts);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenPartToView() {
		$part = new \Schilke\Voices\Domain\Model\Part();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('part', $part);

		$this->subject->showAction($part);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenPartToView() {
		$part = new \Schilke\Voices\Domain\Model\Part();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newPart', $part);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($part);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenPartToPartRepository() {
		$part = new \Schilke\Voices\Domain\Model\Part();

		$partRepository = $this->getMock('Schilke\\Voices\\Domain\\Repository\\PartRepository', array('add'), array(), '', FALSE);
		$partRepository->expects($this->once())->method('add')->with($part);
		$this->inject($this->subject, 'partRepository', $partRepository);

		$this->subject->createAction($part);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenPartToView() {
		$part = new \Schilke\Voices\Domain\Model\Part();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('part', $part);

		$this->subject->editAction($part);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenPartInPartRepository() {
		$part = new \Schilke\Voices\Domain\Model\Part();

		$partRepository = $this->getMock('Schilke\\Voices\\Domain\\Repository\\PartRepository', array('update'), array(), '', FALSE);
		$partRepository->expects($this->once())->method('update')->with($part);
		$this->inject($this->subject, 'partRepository', $partRepository);

		$this->subject->updateAction($part);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenPartFromPartRepository() {
		$part = new \Schilke\Voices\Domain\Model\Part();

		$partRepository = $this->getMock('Schilke\\Voices\\Domain\\Repository\\PartRepository', array('remove'), array(), '', FALSE);
		$partRepository->expects($this->once())->method('remove')->with($part);
		$this->inject($this->subject, 'partRepository', $partRepository);

		$this->subject->deleteAction($part);
	}
}
