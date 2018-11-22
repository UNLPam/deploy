<?php


/**
 * This class adds structure of 'address' table to 'propel' DatabaseMap object.
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
 * @package    lib.model.map
 */
class AddressMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.AddressMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(AddressPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(AddressPeer::TABLE_NAME);
		$tMap->setPhpName('Address');
		$tMap->setClassname('Address');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('STATE_ID', 'StateId', 'INTEGER', 'state', 'ID', false, null);

		$tMap->addForeignKey('CITY_ID', 'CityId', 'INTEGER', 'city', 'ID', false, null);

		$tMap->addColumn('STREET', 'Street', 'VARCHAR', false, 255);

		$tMap->addColumn('NUMBER', 'Number', 'VARCHAR', false, 255);

		$tMap->addColumn('FLOOR', 'Floor', 'VARCHAR', false, 255);

		$tMap->addColumn('FLAT', 'Flat', 'VARCHAR', false, 255);

	} // doBuild()

} // AddressMapBuilder
