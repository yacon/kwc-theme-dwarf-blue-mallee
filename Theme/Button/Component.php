<?php
class Theme_Button_Component extends Kwc_Basic_Link_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['cssClass'] = 'webStandard';
        $ret['componentIcon'] = 'bullet_go';
        $ret['componentName'] = trlStatic('Button');
        $ret['ownModel'] = 'Kwf_Component_FieldModel';
        return $ret;
    }

    public function getTemplateVars()
    {
        $ret = parent::getTemplateVars();
        $row = $this->getRow();
        $pos = $row->position;
        $col = $row->color;
        $ret['propCssClass'] = 'position'.ucfirst($pos).' color'.ucfirst($col);
        return $ret;
    }
}
