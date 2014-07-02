<?php
namespace Soerenkroell\Bookshop\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Soerenkroell.Bookshop". *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Book {

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $isbn;


	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return void
	 */
	public function setName($isbn) {
		$this->isbn = $isbn;
	}

	/**
	 * @return string
	 */
	public function getIsbn() {
		return $this->isbn;
	}

	/**
	 * @param string $isbn
	 * @return void
	 */
	public function setIsbn($isbn) {
		$this->isbn = $$isbn;
	}

}