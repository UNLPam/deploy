<?php

/**
 * Base class that represents a row from the 'student_reincorporation' table.
 *
 * Representa una reincorporacion de un alumno que se quedo libre
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Tue Nov 13 02:10:17 2018
 *
 * @package    lib.model.om
 */
abstract class BaseStudentReincorporation extends BaseObject  implements Persistent {


  const PEER = 'StudentReincorporationPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        StudentReincorporationPeer
	 */
	protected static $peer;

	/**
	 * The value for the career_school_year_period_id field.
	 * @var        int
	 */
	protected $career_school_year_period_id;

	/**
	 * The value for the student_id field.
	 * @var        int
	 */
	protected $student_id;

	/**
	 * The value for the reincorporation_days field.
	 * @var        int
	 */
	protected $reincorporation_days;

	/**
	 * The value for the course_subject_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $course_subject_id;

	/**
	 * The value for the observation field.
	 * @var        string
	 */
	protected $observation;

	/**
	 * The value for the created_at field.
	 * @var        string
	 */
	protected $created_at;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * @var        CareerSchoolYearPeriod
	 */
	protected $aCareerSchoolYearPeriod;

	/**
	 * @var        Student
	 */
	protected $aStudent;

	/**
	 * @var        CourseSubject
	 */
	protected $aCourseSubject;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Initializes internal state of BaseStudentReincorporation object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->course_subject_id = 0;
	}

	/**
	 * Get the [career_school_year_period_id] column value.
	 * 
	 * @return     int
	 */
	public function getCareerSchoolYearPeriodId()
	{
		return $this->career_school_year_period_id;
	}

	/**
	 * Get the [student_id] column value.
	 * Referencia al estudiante
	 * @return     int
	 */
	public function getStudentId()
	{
		return $this->student_id;
	}

	/**
	 * Get the [reincorporation_days] column value.
	 * 
	 * @return     int
	 */
	public function getReincorporationDays()
	{
		return $this->reincorporation_days;
	}

	/**
	 * Get the [course_subject_id] column value.
	 * Referencia a la cursada de una materia
	 * @return     int
	 */
	public function getCourseSubjectId()
	{
		return $this->course_subject_id;
	}

	/**
	 * Get the [observation] column value.
	 * 
	 * @return     string
	 */
	public function getObservation()
	{
		return $this->observation;
	}

	/**
	 * Get the [optionally formatted] temporal [created_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->created_at === null) {
			return null;
		}


		if ($this->created_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->created_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of [career_school_year_period_id] column.
	 * 
	 * @param      int $v new value
	 * @return     StudentReincorporation The current object (for fluent API support)
	 */
	public function setCareerSchoolYearPeriodId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->career_school_year_period_id !== $v) {
			$this->career_school_year_period_id = $v;
			$this->modifiedColumns[] = StudentReincorporationPeer::CAREER_SCHOOL_YEAR_PERIOD_ID;
		}

		if ($this->aCareerSchoolYearPeriod !== null && $this->aCareerSchoolYearPeriod->getId() !== $v) {
			$this->aCareerSchoolYearPeriod = null;
		}

		return $this;
	} // setCareerSchoolYearPeriodId()

	/**
	 * Set the value of [student_id] column.
	 * Referencia al estudiante
	 * @param      int $v new value
	 * @return     StudentReincorporation The current object (for fluent API support)
	 */
	public function setStudentId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->student_id !== $v) {
			$this->student_id = $v;
			$this->modifiedColumns[] = StudentReincorporationPeer::STUDENT_ID;
		}

		if ($this->aStudent !== null && $this->aStudent->getId() !== $v) {
			$this->aStudent = null;
		}

		return $this;
	} // setStudentId()

	/**
	 * Set the value of [reincorporation_days] column.
	 * 
	 * @param      int $v new value
	 * @return     StudentReincorporation The current object (for fluent API support)
	 */
	public function setReincorporationDays($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->reincorporation_days !== $v) {
			$this->reincorporation_days = $v;
			$this->modifiedColumns[] = StudentReincorporationPeer::REINCORPORATION_DAYS;
		}

		return $this;
	} // setReincorporationDays()

	/**
	 * Set the value of [course_subject_id] column.
	 * Referencia a la cursada de una materia
	 * @param      int $v new value
	 * @return     StudentReincorporation The current object (for fluent API support)
	 */
	public function setCourseSubjectId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->course_subject_id !== $v || $v === 0) {
			$this->course_subject_id = $v;
			$this->modifiedColumns[] = StudentReincorporationPeer::COURSE_SUBJECT_ID;
		}

		if ($this->aCourseSubject !== null && $this->aCourseSubject->getId() !== $v) {
			$this->aCourseSubject = null;
		}

		return $this;
	} // setCourseSubjectId()

	/**
	 * Set the value of [observation] column.
	 * 
	 * @param      string $v new value
	 * @return     StudentReincorporation The current object (for fluent API support)
	 */
	public function setObservation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->observation !== $v) {
			$this->observation = $v;
			$this->modifiedColumns[] = StudentReincorporationPeer::OBSERVATION;
		}

		return $this;
	} // setObservation()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     StudentReincorporation The current object (for fluent API support)
	 */
	public function setCreatedAt($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->created_at !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->created_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = StudentReincorporationPeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     StudentReincorporation The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = StudentReincorporationPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			// First, ensure that we don't have any columns that have been modified which aren't default columns.
			if (array_diff($this->modifiedColumns, array(StudentReincorporationPeer::COURSE_SUBJECT_ID))) {
				return false;
			}

			if ($this->course_subject_id !== 0) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->career_school_year_period_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->student_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->reincorporation_days = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->course_subject_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->observation = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->created_at = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 7; // 7 = StudentReincorporationPeer::NUM_COLUMNS - StudentReincorporationPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating StudentReincorporation object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aCareerSchoolYearPeriod !== null && $this->career_school_year_period_id !== $this->aCareerSchoolYearPeriod->getId()) {
			$this->aCareerSchoolYearPeriod = null;
		}
		if ($this->aStudent !== null && $this->student_id !== $this->aStudent->getId()) {
			$this->aStudent = null;
		}
		if ($this->aCourseSubject !== null && $this->course_subject_id !== $this->aCourseSubject->getId()) {
			$this->aCourseSubject = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(StudentReincorporationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = StudentReincorporationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCareerSchoolYearPeriod = null;
			$this->aStudent = null;
			$this->aCourseSubject = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseStudentReincorporation:delete:pre') as $callable)
    {
      $ret = call_user_func($callable, $this, $con);
      if ($ret)
      {
        return;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(StudentReincorporationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			StudentReincorporationPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	

    foreach (sfMixer::getCallables('BaseStudentReincorporation:delete:post') as $callable)
    {
      call_user_func($callable, $this, $con);
    }

  }
	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseStudentReincorporation:save:pre') as $callable)
    {
      $affectedRows = call_user_func($callable, $this, $con);
      if (is_int($affectedRows))
      {
        return $affectedRows;
      }
    }


    if ($this->isNew() && !$this->isColumnModified(StudentReincorporationPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(StudentReincorporationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
    foreach (sfMixer::getCallables('BaseStudentReincorporation:save:post') as $callable)
    {
      call_user_func($callable, $this, $con, $affectedRows);
    }

			StudentReincorporationPeer::addInstanceToPool($this);
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aCareerSchoolYearPeriod !== null) {
				if ($this->aCareerSchoolYearPeriod->isModified() || $this->aCareerSchoolYearPeriod->isNew()) {
					$affectedRows += $this->aCareerSchoolYearPeriod->save($con);
				}
				$this->setCareerSchoolYearPeriod($this->aCareerSchoolYearPeriod);
			}

			if ($this->aStudent !== null) {
				if ($this->aStudent->isModified() || $this->aStudent->isNew()) {
					$affectedRows += $this->aStudent->save($con);
				}
				$this->setStudent($this->aStudent);
			}

			if ($this->aCourseSubject !== null) {
				if ($this->aCourseSubject->isModified() || $this->aCourseSubject->isNew()) {
					$affectedRows += $this->aCourseSubject->save($con);
				}
				$this->setCourseSubject($this->aCourseSubject);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = StudentReincorporationPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = StudentReincorporationPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += StudentReincorporationPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aCareerSchoolYearPeriod !== null) {
				if (!$this->aCareerSchoolYearPeriod->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCareerSchoolYearPeriod->getValidationFailures());
				}
			}

			if ($this->aStudent !== null) {
				if (!$this->aStudent->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aStudent->getValidationFailures());
				}
			}

			if ($this->aCourseSubject !== null) {
				if (!$this->aCourseSubject->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCourseSubject->getValidationFailures());
				}
			}


			if (($retval = StudentReincorporationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = StudentReincorporationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCareerSchoolYearPeriodId();
				break;
			case 1:
				return $this->getStudentId();
				break;
			case 2:
				return $this->getReincorporationDays();
				break;
			case 3:
				return $this->getCourseSubjectId();
				break;
			case 4:
				return $this->getObservation();
				break;
			case 5:
				return $this->getCreatedAt();
				break;
			case 6:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = StudentReincorporationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCareerSchoolYearPeriodId(),
			$keys[1] => $this->getStudentId(),
			$keys[2] => $this->getReincorporationDays(),
			$keys[3] => $this->getCourseSubjectId(),
			$keys[4] => $this->getObservation(),
			$keys[5] => $this->getCreatedAt(),
			$keys[6] => $this->getId(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = StudentReincorporationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCareerSchoolYearPeriodId($value);
				break;
			case 1:
				$this->setStudentId($value);
				break;
			case 2:
				$this->setReincorporationDays($value);
				break;
			case 3:
				$this->setCourseSubjectId($value);
				break;
			case 4:
				$this->setObservation($value);
				break;
			case 5:
				$this->setCreatedAt($value);
				break;
			case 6:
				$this->setId($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = StudentReincorporationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCareerSchoolYearPeriodId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setStudentId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setReincorporationDays($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCourseSubjectId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setObservation($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setId($arr[$keys[6]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(StudentReincorporationPeer::DATABASE_NAME);

		if ($this->isColumnModified(StudentReincorporationPeer::CAREER_SCHOOL_YEAR_PERIOD_ID)) $criteria->add(StudentReincorporationPeer::CAREER_SCHOOL_YEAR_PERIOD_ID, $this->career_school_year_period_id);
		if ($this->isColumnModified(StudentReincorporationPeer::STUDENT_ID)) $criteria->add(StudentReincorporationPeer::STUDENT_ID, $this->student_id);
		if ($this->isColumnModified(StudentReincorporationPeer::REINCORPORATION_DAYS)) $criteria->add(StudentReincorporationPeer::REINCORPORATION_DAYS, $this->reincorporation_days);
		if ($this->isColumnModified(StudentReincorporationPeer::COURSE_SUBJECT_ID)) $criteria->add(StudentReincorporationPeer::COURSE_SUBJECT_ID, $this->course_subject_id);
		if ($this->isColumnModified(StudentReincorporationPeer::OBSERVATION)) $criteria->add(StudentReincorporationPeer::OBSERVATION, $this->observation);
		if ($this->isColumnModified(StudentReincorporationPeer::CREATED_AT)) $criteria->add(StudentReincorporationPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(StudentReincorporationPeer::ID)) $criteria->add(StudentReincorporationPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(StudentReincorporationPeer::DATABASE_NAME);

		$criteria->add(StudentReincorporationPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of StudentReincorporation (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setCareerSchoolYearPeriodId($this->career_school_year_period_id);

		$copyObj->setStudentId($this->student_id);

		$copyObj->setReincorporationDays($this->reincorporation_days);

		$copyObj->setCourseSubjectId($this->course_subject_id);

		$copyObj->setObservation($this->observation);

		$copyObj->setCreatedAt($this->created_at);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     StudentReincorporation Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     StudentReincorporationPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new StudentReincorporationPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a CareerSchoolYearPeriod object.
	 *
	 * @param      CareerSchoolYearPeriod $v
	 * @return     StudentReincorporation The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCareerSchoolYearPeriod(CareerSchoolYearPeriod $v = null)
	{
		if ($v === null) {
			$this->setCareerSchoolYearPeriodId(NULL);
		} else {
			$this->setCareerSchoolYearPeriodId($v->getId());
		}

		$this->aCareerSchoolYearPeriod = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the CareerSchoolYearPeriod object, it will not be re-added.
		if ($v !== null) {
			$v->addStudentReincorporation($this);
		}

		return $this;
	}


	/**
	 * Get the associated CareerSchoolYearPeriod object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     CareerSchoolYearPeriod The associated CareerSchoolYearPeriod object.
	 * @throws     PropelException
	 */
	public function getCareerSchoolYearPeriod(PropelPDO $con = null)
	{
		if ($this->aCareerSchoolYearPeriod === null && ($this->career_school_year_period_id !== null)) {
			$c = new Criteria(CareerSchoolYearPeriodPeer::DATABASE_NAME);
			$c->add(CareerSchoolYearPeriodPeer::ID, $this->career_school_year_period_id);
			$this->aCareerSchoolYearPeriod = CareerSchoolYearPeriodPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aCareerSchoolYearPeriod->addStudentReincorporations($this);
			 */
		}
		return $this->aCareerSchoolYearPeriod;
	}

	/**
	 * Declares an association between this object and a Student object.
	 *
	 * @param      Student $v
	 * @return     StudentReincorporation The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setStudent(Student $v = null)
	{
		if ($v === null) {
			$this->setStudentId(NULL);
		} else {
			$this->setStudentId($v->getId());
		}

		$this->aStudent = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Student object, it will not be re-added.
		if ($v !== null) {
			$v->addStudentReincorporation($this);
		}

		return $this;
	}


	/**
	 * Get the associated Student object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Student The associated Student object.
	 * @throws     PropelException
	 */
	public function getStudent(PropelPDO $con = null)
	{
		if ($this->aStudent === null && ($this->student_id !== null)) {
			$c = new Criteria(StudentPeer::DATABASE_NAME);
			$c->add(StudentPeer::ID, $this->student_id);
			$this->aStudent = StudentPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aStudent->addStudentReincorporations($this);
			 */
		}
		return $this->aStudent;
	}

	/**
	 * Declares an association between this object and a CourseSubject object.
	 *
	 * @param      CourseSubject $v
	 * @return     StudentReincorporation The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCourseSubject(CourseSubject $v = null)
	{
		if ($v === null) {
			$this->setCourseSubjectId(0);
		} else {
			$this->setCourseSubjectId($v->getId());
		}

		$this->aCourseSubject = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the CourseSubject object, it will not be re-added.
		if ($v !== null) {
			$v->addStudentReincorporation($this);
		}

		return $this;
	}


	/**
	 * Get the associated CourseSubject object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     CourseSubject The associated CourseSubject object.
	 * @throws     PropelException
	 */
	public function getCourseSubject(PropelPDO $con = null)
	{
		if ($this->aCourseSubject === null && ($this->course_subject_id !== null)) {
			$c = new Criteria(CourseSubjectPeer::DATABASE_NAME);
			$c->add(CourseSubjectPeer::ID, $this->course_subject_id);
			$this->aCourseSubject = CourseSubjectPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aCourseSubject->addStudentReincorporations($this);
			 */
		}
		return $this->aCourseSubject;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

			$this->aCareerSchoolYearPeriod = null;
			$this->aStudent = null;
			$this->aCourseSubject = null;
	}


  public function __call($method, $arguments)
  {
    if (!$callable = sfMixer::getCallable('BaseStudentReincorporation:'.$method))
    {
      throw new sfException(sprintf('Call to undefined method BaseStudentReincorporation::%s', $method));
    }

    array_unshift($arguments, $this);

    return call_user_func_array($callable, $arguments);
  }


} // BaseStudentReincorporation
