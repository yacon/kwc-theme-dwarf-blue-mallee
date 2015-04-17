<?php
class Theme_ParagraphsGroup_Image_Component extends Kwc_Box_BackgroundImage_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlStatic('Hintergrundbild');
        $ret['dimensions'] = array(
            'fullWidth'=>array(
                'text' => trlKwfStatic('full width'),
                'width' => 2560,
                'height' => 0,
                'cover' => true
            )
        );
        $ret['altText'] = false;
        $ret['useParentDivForDimensions'] = true;
        return $ret;
    }
}

