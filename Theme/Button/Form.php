<?php
class Theme_Button_Form extends Kwc_Basic_Link_Form
{
    protected function _initFields()
    {
        $this->add(new Kwf_Form_Field_Radio('color', trlKwf('Color')))
        ->setValues(array(
            'green' => trlKwf('Green'),
            'grey' => trlKwf('Grey')
        ))
        ->setDefaultValue('green')
        ->setWidth(210);

        $this->add(new Kwf_Form_Field_Radio('position', trlKwf('Alignment')))
        ->setValues(array(
            'left' => trlKwf('Left'),
            'center' => trl('Mitte'),
            'right' => trlKwf('Right')
        ))
        ->setDefaultValue('left')
        ->setWidth(210);

        parent::_initFields();
    }
}
