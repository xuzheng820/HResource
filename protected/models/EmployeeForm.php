<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class EmployeeForm extends CFormModel
{
	public $name;
	public $ID;
	public $email;
	public $Entry_time;
	public $QQ_num;
	public $job;
	public $team;
}