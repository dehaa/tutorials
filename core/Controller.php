<?php
namespace core;
/**
 * Class Controller
 * @package core
 * @author sefa@dehaa.com
 */
abstract class Controller
{
	public abstract function add();

	public abstract function get();

	public abstract function update();

	public abstract function remove();
}