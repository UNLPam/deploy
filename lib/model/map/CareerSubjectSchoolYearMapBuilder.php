<?php


/**
 * This class adds structure of 'career_subject_school_year' table to 'propel' DatabaseMap object.
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
class CareerSubjectSchoolYearMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.CareerSubjectSchoolYearMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(CareerSubjectSchoolYearPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(CareerSubjectSchoolYearPeer::TABLE_NAME);
		$tMap->setPhpName('CareerSubjectSchoolYear');
		$tMap->setClassname('CareerSubjectSchoolYear');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('CAREER_SCHOOL_YEAR_ID', 'CareerSchoolYearId', 'INTEGER', 'career_school_year', 'ID', true, null);

		$tMap->addForeignKey('CAREER_SUBJECT_ID', 'CareerSubjectId', 'INTEGER', 'career_subject', 'ID', true, null);

		$tMap->addForeignKey('SUBJECT_CONFIGURATION_ID', 'SubjectConfigurationId', 'INTEGER', 'subject_configuration', 'ID', false, null);

		$tMap->addColumn('INDEX_SORT', 'IndexSort', 'INTEGER', false, null);

	} // doBuild()

} // CareerSubjectSchoolYearMapBuilder
