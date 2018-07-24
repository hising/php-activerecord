<?php

namespace ActiveRecord;

class Apcu {

	/**
	 * Apcu constructor.
	 */
	public function __construct($options)
	{
	}

	public function read($key)
	{
		return apcu_fetch($key);
	}

	public function write($key, $value, $expire)
	{
		apcu_store($key, $value, $expire);
	}

	public function delete($key)
	{
		apcu_delete($key);
	}
}
