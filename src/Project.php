<?php
/**
 * PHPCI - Continuous Integration for PHP
 *
 * @copyright    Copyright 2014, Block 8 Limited.
 * @license      https://github.com/Block8/PHPCI/blob/master/LICENSE.md
 * @link         https://www.phptesting.org/
 */

namespace PHPCI\Contracts;

/**
 * PHPCI Project Interface
 * @author Guido Contreras Woda <guiwoda@gmail.com>
 */
interface Project
{
	/**
	 * @return string
	 */
	public function getTableName();

	/**
	 * @param int $depth
	 * @param int $currentDepth
	 *
	 * @return array
	 */
	public function toArray($depth = 2, $currentDepth = 0);

	/**
	 * @return array
	 */
	public function getDataArray();

	/**
	 * @return array
	 */
	public function getModified();

	/**
	 * @param array $values
	 *
	 * @return void
	 */
	public function setValues(array $values);

	/**
	 * @param string $branch
	 * @param null   $status
	 *
	 * @return string
	 */
	public function getLatestBuild($branch = 'master', $status = null);

	/**
	 * @param $value
	 *
	 * @return void
	 */
	public function setAccessInformation($value);

	/**
	 * @param null $key
	 *
	 * @return mixed
	 */
	public function getAccessInformation($key = null);

	/**
	 * Get the value of Branch / branch.
	 *
	 * @return string
	 */
	public function getBranch();

	/**
	 * Get the value of Id / id.
	 *
	 * @return int
	 */
	public function getId();

	/**
	 * Get the value of Title / title.
	 *
	 * @return string
	 */
	public function getTitle();

	/**
	 * Get the value of SshPrivateKey / ssh_private_key.
	 *
	 * @return string
	 */
	public function getSshPrivateKey();

	/**
	 * Get the value of Type / type.
	 *
	 * @return string
	 */
	public function getType();

	/**
	 * Get the value of LastCommit / last_commit.
	 *
	 * @return string
	 */
	public function getLastCommit();

	/**
	 * Get the value of BuildConfig / build_config.
	 *
	 * @return string
	 */
	public function getBuildConfig();

	/**
	 * Get the value of AllowPublicStatus / allow_public_status.
	 *
	 * @return int
	 */
	public function getAllowPublicStatus();

	/**
	 * Set the value of Id / id.
	 *
	 * Must not be null.
	 *
	 * @param $value int
	 */
	public function setId($value);

	/**
	 * Set the value of Title / title.
	 *
	 * Must not be null.
	 *
	 * @param $value string
	 */
	public function setTitle($value);

	/**
	 * Set the value of Reference / reference.
	 *
	 * Must not be null.
	 *
	 * @param $value string
	 */
	public function setReference($value);

	/**
	 * Set the value of Branch / branch.
	 *
	 * Must not be null.
	 *
	 * @param $value string
	 */
	public function setBranch($value);

	/**
	 * Set the value of SshPrivateKey / ssh_private_key.
	 *
	 * @param $value string
	 */
	public function setSshPrivateKey($value);

	/**
	 * Set the value of Type / type.
	 *
	 * Must not be null.
	 *
	 * @param $value string
	 */
	public function setType($value);

	/**
	 * Set the value of LastCommit / last_commit.
	 *
	 * @param $value string
	 */
	public function setLastCommit($value);

	/**
	 * Set the value of BuildConfig / build_config.
	 *
	 * @param $value string
	 */
	public function setBuildConfig($value);

	/**
	 * Get Build models by ProjectId for this Project.
	 *
	 * @return \PHPCI\Contracts\Build[]
	 */
	public function getProjectBuilds();

	/**
	 * Get BuildMeta models by ProjectId for this Project.
	 *
	 * @return \PHPCI\Contracts\BuildMeta[]
	 */
	public function getProjectBuildMetas();
}