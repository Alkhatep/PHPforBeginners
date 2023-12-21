<?php

namespace Core;

class Container {

	protected $binfings = [];
	
	public function bind($key, $resolver)
	{
		$this->binfings[$key] = $resolver;
	}

	public function resolve($key)
	{
		if (! array_key_exists($key, $this->binfings)) {
			throw new \Exception("No matcing binding found for {$key}");
		}

		$resolver = $this->binfings[$key];
		return call_user_func($resolver);
	}

}