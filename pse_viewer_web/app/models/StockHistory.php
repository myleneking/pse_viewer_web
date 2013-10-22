<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class StockHistory extends Eloquent implements UserInterface, RemindableInterface {

	protected $table = 'stock_history';
	

}