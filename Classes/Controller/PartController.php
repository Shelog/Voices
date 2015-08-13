<?php
namespace Schilke\Voices\Controller;


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
 * PartController
 */
class PartController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * partRepository
	 *
	 * @var \Schilke\Voices\Domain\Repository\PartRepository
	 * @inject
	 */
	protected $partRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$parts = $this->partRepository->findAll();
		$this->view->assign('parts', $parts);
	}

	/**
	 * action show
	 *
	 * @param \Schilke\Voices\Domain\Model\Part $part
	 * @return void
	 */
	public function showAction(\Schilke\Voices\Domain\Model\Part $part) {
		$this->view->assign('part', $part);
	}

	/**
	 * action addForm
	 * @param \Schilke\Voices\Domain\Model\Konzertplan $konzertplan
	 * @param \Schilke\Voices\Domain\Model\Konzert $konzert
	 * @param \Schilke\Voices\Domain\Model\Part $part
	 * @param \Schilke\Voices\Domain\Model\Singer $singer
	 * @ignorevalidation $part
	 * @return void
	 */
	public function addFormAction(\Schilke\Voices\Domain\Model\Konzertplan $konzertplan, \Schilke\Voices\Domain\Model\Konzert $konzert, \Schilke\Voices\Domain\Model\Part $part = NULL, \Schilke\Voices\Domain\Model\Singer $singer) {
		
		$this->view->assign('konzertplan', $konzertplan);
		$this->view->assign('konzert', $konzert);
		$this->view->assign('part', $part);
		$this->view->assign('singer', $singer);
	}

	/**
	 * action add
	 *
	 * @param \Schilke\Voices\Domain\Model\Konzertplan $konzertplan
	 * @param \Schilke\Voices\Domain\Model\Konzert $konzert
	 * @param \Schilke\Voices\Domain\Model\Part $part
	 * @param \Schilke\Voices\Domain\Model\Singer $singer
	 * @dontverifyrequesthash
	 * @return void
	 */
	public function addAction(\Schilke\Voices\Domain\Model\Konzertplan $konzertplan, \Schilke\Voices\Domain\Model\Konzert $konzert, \Schilke\Voices\Domain\Model\Part $part, \Schilke\Voices\Domain\Model\Singer $singer) {

			
		$konzert->addPart($part);
		
		$zusagen = $this->partRepository->countByJa('x');
		
		$this->view->assign('zusagen', $zusagen);
		
		
		$this->objectManager->get('Schilke\\Voices\\Domain\\Repository\\KonzertRepository')->update($konzert);	
		
		$this->redirect('show','Konzert',NULL,array('konzertplan'=>$konzertplan, 'konzert'=>$konzert, 'singer'=>$singer, 'zusagen'=>$zusagen));
		
	}

	/**
	 * action edit
	 *
	 * @param \Schilke\Voices\Domain\Model\Part $part
	 * @ignorevalidation $part
	 * @return void
	 */
	public function editAction(\Schilke\Voices\Domain\Model\Part $part) {
		$this->view->assign('part', $part);
	}

	/**
	 * action update
	 *
	 * @param \Schilke\Voices\Domain\Model\Part $part
	 * @return void
	 */
	public function updateAction(\Schilke\Voices\Domain\Model\Part $part) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->partRepository->update($part);
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \Schilke\Voices\Domain\Model\Part $part
	 * @return void
	 */
	public function deleteAction(\Schilke\Voices\Domain\Model\Part $part) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->partRepository->remove($part);
		$this->redirect('list');
	}

}