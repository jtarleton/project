<?php


class Collection extends ArrayObject {
	public function add ($obj) {
		return $this->append($obj);	
	}
	public function remove ($obj) {}
	
	public function removeAll () {
		$this->exchangeArray(array());
	}
} 
class OutletCollection extends Collection 
{
	/**
	 * @var OutletQuery
	 */
	private $q;
	
	private $loaded = false;
	private $removeAll = false;
	
	public function __construct(OutletQuery $q) {
		$this->q = $q;
	}
	
	public function setQuery(OutletQuery $q) {
		// if the query is different from the previous one
		if ($this->q != $q) {
			$this->q = $q;
			$this->loaded = false;
		}
	}
	
	/**
	 * Load the collection if necessary and return an Iterator
	 * 
	 * @return ArrayIterator
	 */
	public function getIterator() {
		if (!$this->loaded) $this->load();
		
		return parent::getIterator();
	}
	
	/**
	 * Get the iterator without loading remote values
	 * 
	 * @return ArrayIterator
	 */
	public function getLocalIterator() {
		return parent::getIterator();
	}
	
	private function load() {
		if (!$this->loaded) {
			$this->exchangeArray( $this->q->find() );
			$this->loaded = true;
		}
	} 
	
	public function toArray() {
		if (!$this->loaded) $this->load();
		
		return $this->getArrayCopy();
	}
	
	public function removeAll() {
		$this->removeAll = true;
		$this->exchangeArray( array() );
		$this->loaded = true;
	}
	
	public function isRemoveAll() {
		return $this->removeAll;
	}
	
	public function add ($obj) {
		$this[] = $obj;
	}
	
	/**
	 * @return int
	 */
	public function count() {
		$this->load();
		return parent::count();
	}
}
