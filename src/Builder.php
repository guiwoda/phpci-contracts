<?php
/**
 * PHPCI - Continuous Integration for PHP
 *
 * @copyright    Copyright 2014, Block 8 Limited.
 * @license      https://github.com/Block8/PHPCI/blob/master/LICENSE.md
 * @link         https://www.phptesting.org/
 */

namespace PHPCI\Contracts;

use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * PHPCI Builder Interface
 * @author Guido Contreras Woda <guiwoda@gmail.com>
 */
interface Builder
{
	/**
	 * Set the config array, as read from phpci.yml
	 *
	 * @param array|null $config
	 * @return void
	 *
	 * @throws \Exception
	 */
	public function setConfigArray($config);

	/**
	 * Access a variable from the phpci.yml file.
	 *
	 * @param string
	 *
	 * @return mixed
	 */
	public function getConfig($key);

	/**
	 * Access a variable from the config.yml
	 *
	 * @param $key
	 *
	 * @return mixed
	 */
	public function getSystemConfig($key);

	/**
	 * @return string   The title of the project being built.
	 */
	public function getBuildProjectTitle();

	/**
	 * Run the active build.
	 * @return void
	 */
	public function execute();

	/**
	 * Used by this class, and plugins, to execute shell commands.
	 * @param ... All parameters will be passed through
	 * @return bool Indicates success
	 */
	public function executeCommand();

	/**
	 * Returns the output from the last command run.
	 * @return string
	 */
	public function getLastOutput();

	/**
	 * @param bool $enableLog
	 *
	 * @return void
	 */
	public function logExecOutput($enableLog = true);

	/**
	 * Find a binary required by a plugin.
	 *
	 * @param $binary
	 *
	 * @return null|string
	 */
	public function findBinary($binary);

	/**
	 * Replace every occurrence of the interpolation vars in the given string
	 * Example: "This is build %PHPCI_BUILD%" => "This is build 182"
	 *
	 * @param string $input
	 *
	 * @return string
	 */
	public function interpolate($input);

	/**
	 * Sets a logger instance on the object
	 *
	 * @param LoggerInterface $logger
	 *
	 * @return null
	 */
	public function setLogger(LoggerInterface $logger);

	/**
	 * @param        $message
	 * @param string $level
	 * @param array  $context
	 *
	 * @return void
	 */
	public function log($message, $level = LogLevel::INFO, $context = []);

	/**
	 * Add a success-coloured message to the log.
	 *
	 * @param string
	 * @return void
	 */
	public function logSuccess($message);

	/**
	 * Add a failure-coloured message to the log.
	 *
	 * @param string     $message
	 * @param \Exception $exception The exception that caused the error.
	 * @return void
	 */
	public function logFailure($message, \Exception $exception = null);
}
 