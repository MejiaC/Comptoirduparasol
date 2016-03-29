<?php namespace App;


class Application extends \Illuminate\Foudation\Application
{
	
	public function publicPath()
	{
		return $this->basePath . '/../../web';
	}
}