<div class="<?=$this->cssClass?> <?=$this->propCssClass?>">
    <div class="innerButton">
        <?=$this->component($this->linkTag)?>

            <span><?=$this->mailEncodeText($this->text)?></span>

        <?if ($this->hasContent($this->linkTag)) {?>
        </a>
        <?}?>
    </div>
</div>
