<?php

/**
 * This class models a subdomain
 *
 * @package Transip
 * @class SubDomain
 * @author TransIP (support@transip.nl)
 * @version 20121211 12:04
 */
class Transip_SubDomain
{
	/**
	 * SubDomain hostname, must be fully qualified (e.g. test.example.com)
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Create a subdomain
	 *
	 * @param string $name Name of SubDomain
	 */
	public function __construct($name)
	{
		$this->name = $name;
	}
}

?>