<?=$this->doctype('XHTML1_STRICT');?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?=$this->includeCode('header')?>
    </head>
    <body class="<?=$this->cssClass?>">
        <div id="outerHeader">
            <div id="innerHeader">
                <div class="headerLogo">Logo</div>
                <div class="headerMenu">
                    <?=$this->component($this->boxes['headerMenu']);?>
                </div>
            </div>
        </div>
        <div id="outerContent">
            <?=$this->componentWithMaster($this->componentWithMaster);?>
        </div>
        <div id="outerFooter">
            <?=$this->includeCode('footer')?>
        </div>
    </body>
</html>
