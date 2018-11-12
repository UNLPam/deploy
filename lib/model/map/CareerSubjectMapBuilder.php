<?php


/**
 * This class adds structure of 'career_subject' table to 'propel' DatabaseMap object.
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
 * @package    lib.model.map
 */
class CareerSubjectMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.CareerSubjectMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(CareerSubjectPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(CareerSubjectPeer::TABLE_NAME);
		$tMap->setPhpName('CareerSubject');
		$tMap->setClassname('CareerSubject');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null);

		$tMap->addForeignKey('CAREER_ID', 'CareerId', 'INTEGER', 'career', 'ID', true, null);

		$tMap->addForeignKey('SUBJECT_ID', 'SubjectId', 'INTEGER', 'subject', 'ID', true, null);

		$tMap->addColumn('YEAR', 'Year', 'INTEGER', true, null);

		$tMap->addColumn('HAS_OPTIONS', 'HasOptions', 'BOOLEAN', false, null);

		$tMap->addColumn('IS_OPTION', 'IsOption', 'BOOLEAN', false, null);

		$tMap->addForeignKey('ORIENTATION_ID', 'OrientationId', 'INTEGER', 'orientation', 'ID', false, null);

		$tMap->addForeignKey('SUB_ORIENTATION_ID', 'SubOrientationId', 'INTEGER', 'sub_orientation', 'ID', false, null);

		$tMap->addColumn('HAS_CORRELATIVE_PREVIOUS_YEAR', 'HasCorrelativePreviousYear', 'BOOLEAN', false, null);

	} // doBuild()

} // CareerSubjectMapBuilder
