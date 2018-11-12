<?php


/**
 * This class adds structure of 'sf_guard_secure_login_failure' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Thu Oct 11 16:23:26 2018
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    plugins.sfGuardSecurePlugin.lib.model.map
 */
class sfGuardLoginFailureMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.sfGuardSecurePlugin.lib.model.map.sfGuardLoginFailureMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(sfGuardLoginFailurePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(sfGuardLoginFailurePeer::TABLE_NAME);
		$tMap->setPhpName('sfGuardLoginFailure');
		$tMap->setClassname('sfGuardLoginFailure');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('USERNAME', 'Username', 'VARCHAR', true, 128);

		$tMap->addColumn('IP_ADDRESS', 'IpAddress', 'VARCHAR', true, 50);

		$tMap->addColumn('COOKIE_ID', 'CookieId', 'VARCHAR', true, 255);

		$tMap->addColumn('FAILED_AT', 'FailedAt', 'TIMESTAMP', true, null);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

	} // doBuild()

} // sfGuardLoginFailureMapBuilder