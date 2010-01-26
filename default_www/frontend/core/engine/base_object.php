<?php

/**
 * FrontendBaseObject
 *
 * This class will be the base of the objects
 *
 * @package		frontend
 * @subpackage	core
 *
 * @author 		Tijs Verkoyen <tijs@netlash.com>
 * @since		2.0
 */

class FrontendBaseObject
{
	/**
	 * Template instance
	 *
	 * @var	ForkTemplate
	 */
	protected $tpl;


	/**
	 * URL instance
	 *
	 * @var	FrontendURL
	 */
	protected $url;


	/**
	 * Default constructor
	 *
	 * @return	void
	 */
	public function __construct()
	{
		// get template from reference
		$this->tpl = Spoon::getObjectReference('template');

		// get url from reference
		$this->url = Spoon::getObjectReference('url');
	}
}

?>