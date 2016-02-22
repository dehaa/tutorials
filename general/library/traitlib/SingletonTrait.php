<?php
namespace general\library\traitlib;
/**
 * Trait SingletonTrait
 * @package general\library\traitlib
 * @author sefa@dehaa.com
 */
trait SingletonTrait
{
	/**
	 * @var
	 */
	protected static $instance;

	/**
	 * @return static
	 */
	final public static function getInstance()
	{
		return isset(static::$instance)
			? static::$instance
			: static::$instance = new static;
	}


	/**
	 * SingletonTrait constructor.
	 */
	final private function __construct()
	{
		static::init();
	}

	/**
	 *
	 */
	protected function init()
	{
	}

	/**
	 *
	 */
	final private function __wakeup()
	{
	}

	/**
	 *
	 */
	final private function __clone()
	{
	}
}