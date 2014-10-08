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
 * PHPCI Build Interface
 * @author Guido Contreras Woda <guiwoda@gmail.com>
 */
interface Build 
{
	/**
	 * Get link to commit from another source (i.e. Github)
	 * @return string
	 */
	public function getCommitLink();

	/**
	 * Get link to branch from another source (i.e. Github)
	 * @return string
	 */
	public function getBranchLink();

	/**
	 * @return string
	 */
	public function getFileLinkTemplate();

	/**
	 * Send status updates to any relevant third parties (i.e. Github)
	 * @return void
	 */
	public function sendStatusPostback();

	/**
	 * @return string
	 */
	public function getProjectTitle();

	/**
	 * Store build metadata
	 *
	 * @param $key string
	 * @param $value mixed
	 *
	 * @return void
	 */
	public function storeMeta($key, $value);

	/**
	 * Is this build successful?
	 * @return bool
	 */
	public function isSuccessful();

	/**
	 * @param null $key
	 *
	 * @return mixed
	 */
	public function getExtra($key = null);

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
	 * Get the value of CommitId / commit_id.
	 *
	 * @return string
	 */
	public function getCommitId();

	/**
	 * Get the value of Status / status.
	 *
	 * @return int
	 */
	public function getStatus();

	/**
	 * Get the value of Log / log.
	 *
	 * @return string
	 */
	public function getLog();

	/**
	 * Get the value of Branch / branch.
	 *
	 * @return string
	 */
	public function getBranch();

	/**
	 * Get the value of Created / created.
	 *
	 * @return \DateTime
	 */
	public function getCreated();

	/**
	 * Get the value of Started / started.
	 *
	 * @return \DateTime
	 */
	public function getStarted();

	/**
	 * Get the value of Finished / finished.
	 *
	 * @return \DateTime
	 */
	public function getFinished();

	/**
	 * Get the value of CommitterEmail / committer_email.
	 *
	 * @return string
	 */
	public function getCommitterEmail();

	/**
	 * Get the value of CommitMessage / commit_message.
	 *
	 * @return string
	 */
	public function getCommitMessage();

	/**
	 * Set the value of Id / id.
	 *
	 * Must not be null.
	 *
	 * @param $value int
	 * @return void
	 */
	public function setId($value);

	/**
	 * Set the value of ProjectId / project_id.
	 *
	 * Must not be null.
	 *
	 * @param $value int
	 * @return void
	 */
	public function setProjectId($value);

	/**
	 * Set the value of CommitId / commit_id.
	 *
	 * @param $value string
	 * @return void
	 */
	public function setCommitId($value);

	/**
	 * Set the value of Status / status.
	 *
	 * Must not be null.
	 *
	 * @param $value int
	 * @return void
	 */
	public function setStatus($value);

	/**
	 * Set the value of Log / log.
	 *
	 * @param $value string
	 * @return void
	 */
	public function setLog($value);

	/**
	 * Set the value of Branch / branch.
	 *
	 * Must not be null.
	 *
	 * @param $value string
	 * @return void
	 */
	public function setBranch($value);

	/**
	 * Set the value of Created / created.
	 *
	 * @param $value \DateTime
	 * @return void
	 */
	public function setCreated($value);

	/**
	 * Set the value of Started / started.
	 *
	 * @param $value \DateTime
	 * @return void
	 */
	public function setStarted($value);

	/**
	 * Set the value of Finished / finished.
	 *
	 * @param $value \DateTime
	 * @return void
	 */
	public function setFinished($value);

	/**
	 * Set the value of CommitterEmail / committer_email.
	 *
	 * @param $value string
	 * @return void
	 */
	public function setCommitterEmail($value);

	/**
	 * Set the value of CommitMessage / commit_message.
	 *
	 * @param $value string
	 * @return void
	 */
	public function setCommitMessage($value);

	/**
	 * Set the value of Extra / extra.
	 *
	 * @param $value string
	 * @return void
	 */
	public function setExtra($value);

	/**
	 * Get the Project model for this Build by Id.
	 *
	 * @return \PHPCI\Contracts\Project
	 */
	public function getProject();

	/**
	 * Set Project - Accepts an ID, an array representing a Project or a Project model.
	 *
	 * @param $value \PHPCI\Contracts\Project
	 */
	public function setProject($value);

	/**
	 * Set Project - Accepts a Project model.
	 *
	 * @param $value \PHPCI\Contracts\Project
	 */
	public function setProjectObject(Project $value);

	/**
	 * Get BuildMeta models by BuildId for this Build.
	 *
	 * @return \PHPCI\Contracts\BuildMeta[]
	 */
	public function getBuildBuildMetas();

	public function getTableName();

	public function toArray($depth = 2, $currentDepth = 0);

	public function getDataArray();

	public function getModified();

	public function setValues(array $values);
}
 