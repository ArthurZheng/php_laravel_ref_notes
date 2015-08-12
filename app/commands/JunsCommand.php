<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class JunsCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'user:generate';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generate a new user by Juns command.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$this ->line("Welcome to the user:generate command.");
		$this ->info('This is some info');
		$this ->comment('This is some cooment');
		$this ->question('This is some question');
		$this ->error('This is some error');

		// get the name arguments and the age option from the input instance;
		$name = $this -> argument('name');
		$age = $this ->option('age');
		$this ->info("{$name} is {$age} years old known by Jun.");
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('name', InputArgument::REQUIRED, 'Name of the new user.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('age', null, InputOption::VALUE_OPTIONAL, 'Age of the new user.', null),
		);
	}

}
