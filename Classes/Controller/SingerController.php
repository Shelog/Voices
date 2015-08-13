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
 * SingerController
 */
class SingerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * singerRepository
	 *
	 * @var \Schilke\Voices\Domain\Repository\SingerRepository
	 * @inject
	 */
	protected $singerRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$singers = $this->singerRepository->findAll();
		$this->view->assign('singers', $singers);
	}

	/**
	 * action show
	 *
	 * @param \Schilke\Voices\Domain\Model\Singer $singer
	 * @return void
	 */
	public function showAction(\Schilke\Voices\Domain\Model\Singer $singer) {
		$this->view->assign('singer', $singer);
	}

}