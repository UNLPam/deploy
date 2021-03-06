<?php
/*
 * Kimkëlen - School Management Software
 * Copyright (C) 2013 CeSPI - UNLP <desarrollo@cespi.unlp.edu.ar>
 *
 * This file is part of Kimkëlen.
 *
 * Kimkëlen is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License v2.0 as published by
 * the Free Software Foundation.
 *
 * Kimkëlen is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Kimkëlen.  If not, see <http://www.gnu.org/licenses/gpl-2.0.html>.
 */ ?>
<?php

/**
 * Student form.
 *
 * @package    conservatorio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class StudentForm extends BaseStudentForm
{
  public function configure()
  {
    $this->unsetFields();

    $person = $this->getObject()->getPerson();
    if (is_null($person))
    {
      $person = new Person();
      $this->getObject()->setPerson($person);
    }

    $personForm = new PersonForm($person, array('related_class'=>'student','embed_as'=>'person'));
    $this->embedMergeForm('person',$personForm);

    $this->getWidgetSchema()->setLabel('occupation_id','Occupation');

    $this->getWidget('student_tag_list')->setOption('expanded', true);
    $this->getWidget('student_tag_list')->setOption('multiple', true);

    $this->getWidgetSchema()->setHelp('folio_number', __('Format must be XX-XXXX'));
    $this->getWidgetSchema()->setHelp('order_of_merit', __('Format must be XX-XXXX'));
   
    $this->setWidget('nationality', new sfWidgetFormChoice(array('choices' => BaseCustomOptionsHolder::getInstance('Nationality')->getOptions())));
    $this->setValidator('nationality', new sfValidatorChoice(array('choices' => BaseCustomOptionsHolder::getInstance('Nationality')->getKeys(), 'required' => false)));
  }

  public function unsetFields()
  {
    unset($this['global_file_number'],
          $this['person_id']);
  }

  public function getFormFieldsDisplay()
  {
    $personal_data_fields = array('person-lastname', 'person-firstname', 'person-identification_type', 'person-identification_number', 'person-sex', 'origin_school', 'person-cuil', 'person-birthdate', 'person-birth_country', 'person-birth_state', 'person-birth_city', 'person-photo', 'person-observations', 'person-civil_status' );

    if($this->getObject()->getPerson()->getPhoto())
    {
      $personal_data_fields = array_merge($personal_data_fields, array('person-current_photo', 'person-delete_photo'));
    }

    return array(
          'Personal data'   =>  $personal_data_fields,
          'Contact data'    =>  array('person-email', 'person-phone', 'person-address'),
          'Health data'   =>  array('blood_group', 'blood_factor', 'health_coverage_id', 'emergency_information'),
          'Statistics'      => array('nationality','year_income'), //aca agregar año de ingreso. Son los campos del objeto student
          'Tags' => array('student_tag_list'),
    );
  }

  protected function doSave($con = null)
  {
    parent::doSave($con);
    $guard_user = $this->getObject()->getPersonSfGuardUser();
    if ( !is_null($guard_user))
    {   $student_group = BaseCustomOptionsHolder::getInstance('GuardGroups')->getStringFor(GuardGroups::STUDENT);
        if ( ! array_key_exists( $student_group,$guard_user->getGroups()) )
        {
          $guard_user->addGroupByName($student_group);
          $guard_user->save($con);
        }
    }
  }
}
