<?php


/**
 * This class adds structure of 'student_free' table to 'propel' DatabaseMap object.
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
class StudentFreeMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.StudentFreeMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(StudentFreePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(StudentFreePeer::TABLE_NAME);
		$tMap->setPhpName('StudentFree');
		$tMap->setClassname('StudentFree');

		$tMap->setUseIdGenerator(true);

		$tMap->addForeignKey('STUDENT_ID', 'StudentId', 'INTEGER', 'student', 'ID', true, null);

		$tMap->addForeignKey('CAREER_SCHOOL_YEAR_PERIOD_ID', 'CareerSchoolYearPeriodId', 'INTEGER', 'career_school_year_period', 'ID', false, null);

		$tMap->addForeignKey('CAREER_SCHOOL_YEAR_ID', 'CareerSchoolYearId', 'INTEGER', 'career_school_year', 'ID', false, null);

		$tMap->addForeignKey('COURSE_SUBJECT_ID', 'CourseSubjectId', 'INTEGER', 'course_subject', 'ID', false, null);

		$tMap->addColumn('IS_FREE', 'IsFree', 'BOOLEAN', false, null);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

	} // doBuild()

} // StudentFreeMapBuilder
