<?php
class Theme_ParagraphsGroup_Component extends Kwc_Paragraphs_Group_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['cssClass'] = 'webStandard';
        $ret['componentName'] = trlKwfStatic('Paragraphs Group');
        $ret['componentCategory'] = 'layout';
        $ret['generators']['background'] = array(
            'class' => 'Kwf_Component_Generator_Static',
            'component' => 'Theme_ParagraphsGroup_Image_Component'
        );
        $ret['extConfig'] = 'Theme_ParagraphsGroup_ExtConfig';
        $ret['ownModel'] = 'Theme_ParagraphsGroup_OwnModel';
        return $ret;
    }

    public function getTemplateVars()
    {
        $ret = parent::getTemplateVars();
        $ret['background'] = $this->getData()->getChildComponent('-background');
        $ret['width'] = $this->getRow()->width;
        $ret['bgWidth'] = $this->getRow()->bgWidth; //falsch benannt, korrekt: bg_width
        $ret['color'] = $this->getRow()->color;
        $ret['bgOpacity'] = $this->getRow()->bgOpacity; //falsch benannt, korrekt: bg_opacity
        $ret['textAlign'] = $this->getRow()->text_align;
        return $ret;
    }
}
