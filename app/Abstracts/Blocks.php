<?php

namespace App\Abstracts;

abstract class Blocks {

	/**
	 * The main data of the block.
	 * Will be defined by setData() function.
	 * @var array.
	 */
	protected $data;

	/**
	 * The template endpoint of the block.
	 * Will be defined by _setTemplate() function.
	 * @var string.
	 */
    protected $template;

    /**
     * Define the current template will be used for the block.
     *
     * @return \App\Abstracts\Blocks.
     */ 
    abstract public function setTemplate();

    /**
     * Return the HTML layout of the block.
     *
     * @return string.
     */
    abstract public function getHtml();

    public function __construct()
    {
    	$this->setTemplate();
    }

    /**
     * Return the property of the block, using Magic Method: getter.
     *
     * @param string $property.
     * @return mixed.
     */
    public function __get($property)
    {
    	if($this->data[$property]) return $this->data[$property];
        return false;
    }

    /**
     * Set the main data of the block.
     *
     * @param array $data.
     * @return \App\Abstracts\Blocks.
     */
    public function setData($data) {
        $this->data = $data;
        return $this;
    }
}