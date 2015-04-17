<?php
class Theme_ParagraphsGroup_ExtConfig extends Kwc_Paragraphs_ExtConfig
{
    protected function _getConfig()
    {
        $ret = parent::_getConfig();
        $ret['form'] = $this->_getStandardConfig('kwf.autoform', 'Settings', trlKwf('Settings'), new Kwf_Asset('wrench'));
        return $ret;
    }

    public function getEditAfterCreateConfigKey()
    {
        return 'form';
    }
}
