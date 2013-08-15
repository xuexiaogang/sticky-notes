<?php

/**
 * Sticky Notes
 *
 * An open source lightweight pastebin application
 *
 * @package     StickyNotes
 * @author      Sayak Banerjee
 * @copyright   (c) 2013 Sayak Banerjee <mail@sayakbanerjee.com>
 * @license     http://www.opensource.org/licenses/bsd-license.php
 * @link        http://sayakbanerjee.com/sticky-notes
 * @since       Version 1.0
 * @filesource
 */

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * User class
 *
 * Handles user management
 *
 * @package     StickyNotes
 * @subpackage  Models
 * @author      Sayak Banerjee
 */
class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * Disable timestamps for this model
	 *
	 * @var bool
	 */
	public $timestamps = FALSE;

	/**
	 * Define fillable properties
	 *
	 * @var array
	 */
	protected $fillable = array(
		'id',
		'username',
		'password',
		'salt',
		'email',
		'dispname',
		'sid',
		'lastlogin',
		'admin'
	);

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return int
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}
