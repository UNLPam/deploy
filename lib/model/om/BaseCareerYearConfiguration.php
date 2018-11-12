<?php

/**
 * Base class that represents a row from the 'subject_year_configuration' table.
 *
 * Configuración de las materias
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Thu Oct 11 16:23:26 2018
 *
 * @package    lib.model.om
 */
abstract class BaseCareerYearConfiguration extends BaseObject  implements Persistent {


  const PEER = 'CareerYearConfigurationPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        CareerYearConfigurationPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the subject_configuration_id field.
	 * @var        int
	 */
	protected $subject_configuration_id;

	/**
	 * The value for the course_type field.
	 * @var        int
	 */
	protected $course_type;

	/**
	 * The value for the year field.
	 * @var        int
	 */
	protected $year;

	/**
	 * The value for the has_max_absence_by_period field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $has_max_absence_by_period;

	/**
	 * The value for the max_absences field.
	 * @var        int
	 */
	protected $max_absences;

	/**
	 * @var        SubjectConfiguration
	 */
	protected $aSubjectConfiguration;

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
	 * Initializes internal state of BaseCareerYearConfiguration object.
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
		$this->has_max_absence_by_period = true;
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
	 * Get the [subject_configuration_id] column value.
	 * Referencia a la configuracion de la carrera
	 * @return     int
	 */
	public function getSubjectConfigurationId()
	{
		return $this->subject_configuration_id;
	}

	/**
	 * Get the [course_type] column value.
	 * Indica el tipo de la materia (anual, anual cuatrimestral, etc)
	 * @return     int
	 */
	public function getCourseType()
	{
		return $this->course_type;
	}

	/**
	 * Get the [year] column value.
	 * 
	 * @return     int
	 */
	public function getYear()
	{
		return $this->year;
	}

	/**
	 * Get the [has_max_absence_by_period] column value.
	 * Esta configuración da la posibilidad de totalizar por periodo o de forma anual las asistencias.
	 * @return     boolean
	 */
	public function getHasMaxAbsenceByPeriod()
	{
		return $this->has_max_absence_by_period;
	}

	/**
	 * Get the [max_absences] column value.
	 * 
	 * @return     int
	 */
	public function getMaxAbsences()
	{
		return $this->max_absences;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     CareerYearConfiguration The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CareerYearConfigurationPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [subject_configuration_id] column.
	 * Referencia a la configuracion de la carrera
	 * @param      int $v new value
	 * @return     CareerYearConfiguration The current object (for fluent API support)
	 */
	public function setSubjectConfigurationId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->subject_configuration_id !== $v) {
			$this->subject_configuration_id = $v;
			$this->modifiedColumns[] = CareerYearConfigurationPeer::SUBJECT_CONFIGURATION_ID;
		}

		if ($this->aSubjectConfiguration !== null && $this->aSubjectConfiguration->getId() !== $v) {
			$this->aSubjectConfiguration = null;
		}

		return $this;
	} // setSubjectConfigurationId()

	/**
	 * Set the value of [course_type] column.
	 * Indica el tipo de la materia (anual, anual cuatrimestral, etc)
	 * @param      int $v new value
	 * @return     CareerYearConfiguration The current object (for fluent API support)
	 */
	public function setCourseType($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->course_type !== $v) {
			$this->course_type = $v;
			$this->modifiedColumns[] = CareerYearConfigurationPeer::COURSE_TYPE;
		}

		return $this;
	} // setCourseType()

	/**
	 * Set the value of [year] column.
	 * 
	 * @param      int $v new value
	 * @return     CareerYearConfiguration The current object (for fluent API support)
	 */
	public function setYear($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->year !== $v) {
			$this->year = $v;
			$this->modifiedColumns[] = CareerYearConfigurationPeer::YEAR;
		}

		return $this;
	} // setYear()

	/**
	 * Set the value of [has_max_absence_by_period] column.
	 * Esta configuración da la posibilidad de totalizar por periodo o de forma anual las asistencias.
	 * @param      boolean $v new value
	 * @return     CareerYearConfiguration The current object (for fluent API support)
	 */
	public function setHasMaxAbsenceByPeriod($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->has_max_absence_by_period !== $v || $v === true) {
			$this->has_max_absence_by_period = $v;
			$this->modifiedColumns[] = CareerYearConfigurationPeer::HAS_MAX_ABSENCE_BY_PERIOD;
		}

		return $this;
	} // setHasMaxAbsenceByPeriod()

	/**
	 * Set the value of [max_absences] column.
	 * 
	 * @param      int $v new value
	 * @return     CareerYearConfiguration The current object (for fluent API support)
	 */
	public function setMaxAbsences($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_absences !== $v) {
			$this->max_absences = $v;
			$this->modifiedColumns[] = CareerYearConfigurationPeer::MAX_ABSENCES;
		}

		return $this;
	} // setMaxAbsences()

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
			if (array_diff($this->modifiedColumns, array(CareerYearConfigurationPeer::HAS_MAX_ABSENCE_BY_PERIOD))) {
				return false;
			}

			if ($this->has_max_absence_by_period !== true) {
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

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->subject_configuration_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->course_type = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->year = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->has_max_absence_by_period = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
			$this->max_absences = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 6; // 6 = CareerYearConfigurationPeer::NUM_COLUMNS - CareerYearConfigurationPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating CareerYearConfiguration object", $e);
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

		if ($this->aSubjectConfiguration !== null && $this->subject_configuration_id !== $this->aSubjectConfiguration->getId()) {
			$this->aSubjectConfiguration = null;
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
			$con = Propel::getConnection(CareerYearConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = CareerYearConfigurationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aSubjectConfiguration = null;
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

    foreach (sfMixer::getCallables('BaseCareerYearConfiguration:delete:pre') as $callable)
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
			$con = Propel::getConnection(CareerYearConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			CareerYearConfigurationPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	

    foreach (sfMixer::getCallables('BaseCareerYearConfiguration:delete:post') as $callable)
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

    foreach (sfMixer::getCallables('BaseCareerYearConfiguration:save:pre') as $callable)
    {
      $affectedRows = call_user_func($callable, $this, $con);
      if (is_int($affectedRows))
      {
        return $affectedRows;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CareerYearConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
    foreach (sfMixer::getCallables('BaseCareerYearConfiguration:save:post') as $callable)
    {
      call_user_func($callable, $this, $con, $affectedRows);
    }

			CareerYearConfigurationPeer::addInstanceToPool($this);
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

			if ($this->aSubjectConfiguration !== null) {
				if ($this->aSubjectConfiguration->isModified() || $this->aSubjectConfiguration->isNew()) {
					$affectedRows += $this->aSubjectConfiguration->save($con);
				}
				$this->setSubjectConfiguration($this->aSubjectConfiguration);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = CareerYearConfigurationPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = CareerYearConfigurationPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += CareerYearConfigurationPeer::doUpdate($this, $con);
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

			if ($this->aSubjectConfiguration !== null) {
				if (!$this->aSubjectConfiguration->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSubjectConfiguration->getValidationFailures());
				}
			}


			if (($retval = CareerYearConfigurationPeer::doValidate($this, $columns)) !== true) {
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
		$pos = CareerYearConfigurationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getId();
				break;
			case 1:
				return $this->getSubjectConfigurationId();
				break;
			case 2:
				return $this->getCourseType();
				break;
			case 3:
				return $this->getYear();
				break;
			case 4:
				return $this->getHasMaxAbsenceByPeriod();
				break;
			case 5:
				return $this->getMaxAbsences();
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
		$keys = CareerYearConfigurationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSubjectConfigurationId(),
			$keys[2] => $this->getCourseType(),
			$keys[3] => $this->getYear(),
			$keys[4] => $this->getHasMaxAbsenceByPeriod(),
			$keys[5] => $this->getMaxAbsences(),
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
		$pos = CareerYearConfigurationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setId($value);
				break;
			case 1:
				$this->setSubjectConfigurationId($value);
				break;
			case 2:
				$this->setCourseType($value);
				break;
			case 3:
				$this->setYear($value);
				break;
			case 4:
				$this->setHasMaxAbsenceByPeriod($value);
				break;
			case 5:
				$this->setMaxAbsences($value);
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
		$keys = CareerYearConfigurationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSubjectConfigurationId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCourseType($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setYear($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setHasMaxAbsenceByPeriod($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setMaxAbsences($arr[$keys[5]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(CareerYearConfigurationPeer::DATABASE_NAME);

		if ($this->isColumnModified(CareerYearConfigurationPeer::ID)) $criteria->add(CareerYearConfigurationPeer::ID, $this->id);
		if ($this->isColumnModified(CareerYearConfigurationPeer::SUBJECT_CONFIGURATION_ID)) $criteria->add(CareerYearConfigurationPeer::SUBJECT_CONFIGURATION_ID, $this->subject_configuration_id);
		if ($this->isColumnModified(CareerYearConfigurationPeer::COURSE_TYPE)) $criteria->add(CareerYearConfigurationPeer::COURSE_TYPE, $this->course_type);
		if ($this->isColumnModified(CareerYearConfigurationPeer::YEAR)) $criteria->add(CareerYearConfigurationPeer::YEAR, $this->year);
		if ($this->isColumnModified(CareerYearConfigurationPeer::HAS_MAX_ABSENCE_BY_PERIOD)) $criteria->add(CareerYearConfigurationPeer::HAS_MAX_ABSENCE_BY_PERIOD, $this->has_max_absence_by_period);
		if ($this->isColumnModified(CareerYearConfigurationPeer::MAX_ABSENCES)) $criteria->add(CareerYearConfigurationPeer::MAX_ABSENCES, $this->max_absences);

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
		$criteria = new Criteria(CareerYearConfigurationPeer::DATABASE_NAME);

		$criteria->add(CareerYearConfigurationPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of CareerYearConfiguration (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setSubjectConfigurationId($this->subject_configuration_id);

		$copyObj->setCourseType($this->course_type);

		$copyObj->setYear($this->year);

		$copyObj->setHasMaxAbsenceByPeriod($this->has_max_absence_by_period);

		$copyObj->setMaxAbsences($this->max_absences);


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
	 * @return     CareerYearConfiguration Clone of current object.
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
	 * @return     CareerYearConfigurationPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CareerYearConfigurationPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a SubjectConfiguration object.
	 *
	 * @param      SubjectConfiguration $v
	 * @return     CareerYearConfiguration The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setSubjectConfiguration(SubjectConfiguration $v = null)
	{
		if ($v === null) {
			$this->setSubjectConfigurationId(NULL);
		} else {
			$this->setSubjectConfigurationId($v->getId());
		}

		$this->aSubjectConfiguration = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the SubjectConfiguration object, it will not be re-added.
		if ($v !== null) {
			$v->addCareerYearConfiguration($this);
		}

		return $this;
	}


	/**
	 * Get the associated SubjectConfiguration object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     SubjectConfiguration The associated SubjectConfiguration object.
	 * @throws     PropelException
	 */
	public function getSubjectConfiguration(PropelPDO $con = null)
	{
		if ($this->aSubjectConfiguration === null && ($this->subject_configuration_id !== null)) {
			$c = new Criteria(SubjectConfigurationPeer::DATABASE_NAME);
			$c->add(SubjectConfigurationPeer::ID, $this->subject_configuration_id);
			$this->aSubjectConfiguration = SubjectConfigurationPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aSubjectConfiguration->addCareerYearConfigurations($this);
			 */
		}
		return $this->aSubjectConfiguration;
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

			$this->aSubjectConfiguration = null;
	}


  public function __call($method, $arguments)
  {
    if (!$callable = sfMixer::getCallable('BaseCareerYearConfiguration:'.$method))
    {
      throw new sfException(sprintf('Call to undefined method BaseCareerYearConfiguration::%s', $method));
    }

    array_unshift($arguments, $this);

    return call_user_func_array($callable, $arguments);
  }


} // BaseCareerYearConfiguration
