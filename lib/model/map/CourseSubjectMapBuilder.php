<?php


/**
 * This class adds structure of 'course_subject' table to 'propel' DatabaseMap object.
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
class CourseSubjectMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.CourseSubjectMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(CourseSubjectPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(CourseSubjectPeer::TABLE_NAME);
		$tMap->setPhpName('CourseSubject');
		$tMap->setClassname('CourseSubject');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('COURSE_ID', 'CourseId', 'INTEGER', 'course', 'ID', true, null);

		$tMap->addForeignKey('CAREER_SUBJECT_SCHOOL_YEAR_ID', 'CareerSubjectSchoolYearId', 'INTEGER', 'career_subject_school_year', 'ID', true, null);

	} // doBuild()

} // CourseSubjectMapBuilder