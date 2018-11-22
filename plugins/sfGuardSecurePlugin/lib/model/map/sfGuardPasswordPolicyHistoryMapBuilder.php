<?php


/**
 * This class adds structure of 'sf_guard_secure_password_policy_history' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Tue Nov 13 02:10:17 2018
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    plugins.sfGuardSecurePlugin.lib.model.map
 */
class sfGuardPasswordPolicyHistoryMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.sfGuardSecurePlugin.lib.model.map.sfGuardPasswordPolicyHistoryMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(sfGuardPasswordPolicyHistoryPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(sfGuardPasswordPolicyHistoryPeer::TABLE_NAME);
		$tMap->setPhpName('sfGuardPasswordPolicyHistory');
		$tMap->setClassname('sfGuardPasswordPolicyHistory');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('USERNAME', 'Username', 'VARCHAR', true, 128);

		$tMap->addColumn('ALGORITHM', 'Algorithm', 'VARCHAR', true, 128);

		$tMap->addColumn('SALT', 'Salt', 'VARCHAR', true, 128);

		$tMap->addColumn('PASSWORD', 'Password', 'VARCHAR', true, 128);

		$tMap->addColumn('CHANGED_AT', 'ChangedAt', 'TIMESTAMP', true, null);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

	} // doBuild()

} // sfGuardPasswordPolicyHistoryMapBuilder
