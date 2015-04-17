<?php
class Theme_ParagraphsGroup_SettingsForm extends Kwc_Abstract_Form
{
    protected function _initFields()
    {
        parent::_initFields();

        $types = array(
            'none' => 'None',
            'bgGrey' => trlStatic('Grau'),
            'bgBlack' => trlStatic('Schwarz')
        );
        $this->add(new Kwf_Form_Field_Select('color', trlKwf('Hintergrundfarbe')))
            ->setAllowBlank(true)
            ->setValues($types);

        $bgWidthTypes = array(
            'standardWidth' => 'Standard',
            'fullWidth' => trlStatic('Volle Breite')
        );
        $this->add(new Kwf_Form_Field_Select('bgWidth', trlKwf('Hintergrundbreite')))  //falsch benannt, korrekt: bg_width
        ->setAllowBlank(true)
        ->setValues($bgWidthTypes);

        $imageForm = Kwc_Abstract_Form::createChildComponentForm('Theme_ParagraphsGroup_Component', '-background');
        $this->add($imageForm);

        $widthTypes = array(
            '100' => '100%',
            '90' => '90%',
            '80' => '80%',
            '70' => '70%',
            '60' => '60%',
            '50' => '50%'
        );
        $this->add(new Kwf_Form_Field_Select('width', trlKwf('Breite')))
            ->setAllowBlank(true)
            ->setValues($widthTypes);

        $bgOpacityTypes = array(
            '100' => '100%',
            '90' => '90%',
            '80' => '80%',
            '70' => '70%',
            '60' => '60%',
            '50' => '50%',
            '40' => '40%',
            '30' => '30%',
            '20' => '20%',
            '10' => '10%',
        );
        $this->add(new Kwf_Form_Field_Select('bgOpacity', trlKwf('Hintergrundbild Transparenz')))  //falsch benannt, korrekt: bg_opacity
            ->setAllowBlank(true)
            ->setValues($bgOpacityTypes);

        $textAlignTypes = array(
            'left' => 'left',
            'center' => 'center',
            'right' => 'right'
        );
        $this->add(new Kwf_Form_Field_Select('text_align', trl('Text Ausrichtung')))
            ->setAllowBlank(true)
            ->setValues($textAlignTypes);
    }
}
