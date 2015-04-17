<div class="<?=$this->cssClass?> width<?=$this->width?> <?=$this->color?> <?=$this->bgWidth?> <? if ($this->hasContent($this->background)) { ?>bgImage<? } ?>  opacity<?=$this->bgOpacity?> <? if ($this->textAlign) { ?>align<?=$this->textAlign?><? } ?>" data-width="100%">
    <div class="innerGroup">
        <? foreach ($this->paragraphs as $paragraph) { ?>
            <div class="<?=$paragraph['class'];?>" data-width="100%">
                <?=$this->component($paragraph['data']);?>
            </div>
        <? } ?>
    </div>
    <div class="background">
        <? if ($this->hasContent($this->background)) { ?>
            <?=$this->component($this->background);?>
        <? } ?>
    </div>
</div>
