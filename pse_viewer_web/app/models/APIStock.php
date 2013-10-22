<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class APIStock extends Eloquent implements UserInterface, RemindableInterface {

	protected $table = 'api_stocks';
	

}