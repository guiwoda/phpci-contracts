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
 * PHPCI BuildMeta Interface
 * @author Guido Contreras Woda <guiwoda@gmail.com>
 */
interface BuildMeta
{
	/**
	 * Get the value of Id / id.
	 *
	 * @return int
	 */
	public function getId();

	/**
	 * Get the value of ProjectId / project_id.
	 *
	 * @return int
	 */
	public function getProjectId();

	/**
	 * Get the value of BuildId / build_id.
	 *
	 * @return int
	 */
	public function getBuildId();

	/**
	 * Get the value of MetaKey / meta_key.
	 *
	 * @return string
	 */
	public function getMetaKey();

	/**
	 * Get the value of MetaValue / meta_value.
	 *
	 * @return string
	 */
	public function getMetaValue();

	/**
	 * Set the value of Id / id.
	 *
	 * Must not be null.
	 *
	 * @param $value int
	 */
	public function setId($value);

	/**
	 * Set the value of ProjectId / project_id.
	 *
	 * Must not be null.
	 *
	 * @param $value int
	 */
	public function setProjectId($value);

	/**
	 * Set the value of BuildId / build_id.
	 *
	 * @param $value int
	 */
	public function setBuildId($value);

	/**
	 * Set the value of MetaKey / meta_key.
	 *
	 * Must not be null.
	 *
	 * @param $value string
	 */
	public function setMetaKey($value);

	/**
	 * Set the value of MetaValue / meta_value.
	 *
	 * @param $value string
	 */
	public function setMetaValue($value);

	/**
	 * Get the Project model for this BuildMeta by Id.
	 *
	 * @return \PHPCI\Contracts\Project
	 */
	public function getProject();

	/**
	 * Set Project - Accepts an ID, an array representing a Project or a Project model.
	 *
	 * @param $value mixed
	 */
	public function setProject($value);

	/**
	 * Set Project - Accepts a Project model.
	 *
	 * @param $project \PHPCI\Contracts\Project
	 */
	public function setProjectObject(Project $project);

	/**
	 * Get the Build model for this BuildMeta by Id.
	 *
	 * @return \PHPCI\Contracts\Build
	 */
	public function getBuild();

	/**
	 * Set Build - Accepts an ID, an array representing a Build or a Build model.
	 *
	 * @param $value mixed
	 */
	public function setBuild($value);

	/**
	 * Set Build - Accepts a Build model.
	 *
	 * @param $build \PHPCI\Contracts\Build
	 */
	public function setBuildObject(Build $build);

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
}