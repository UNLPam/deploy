<?php


/**
 * This class adds structure of 'examination_repproved' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Thu Oct 11 16:23:27 2018
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class ExaminationRepprovedMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.ExaminationRepprovedMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(ExaminationRepprovedPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(ExaminationRepprovedPeer::TABLE_NAME);
		$tMap->setPhpName('ExaminationRepproved');
		$tMap->setClassname('ExaminationRepproved');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('NAME', 'Name', 'VARCHAR', true, 255);

		$tMap->addColumn('DATE_FROM', 'DateFrom', 'DATE', true, null);

		$tMap->addColumn('DATE_TO', 'DateTo', 'DATE', true, null);

		$tMap->addColumn('EXAMINATION_NUMBER', 'ExaminationNumber', 'INTEGER', true, null);

		$tMap->addColumn('EXAMINATION_TYPE', 'ExaminationType', 'INTEGER', true, null);

		$tMap->addForeignKey('SCHOOL_YEAR_ID', 'SchoolYearId', 'INTEGER', 'school_year', 'ID', true, null);

	} // doBuild()

} // ExaminationRepprovedMapBuilder
