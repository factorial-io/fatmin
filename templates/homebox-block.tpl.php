<?php
/**
 * @file
 * homebox-block.tpl.php
 * Default theme implementation each homebox block.
 */
?>
<div id="homebox-block-<?php print $block->key; ?>" class="panel <?php print $block->homebox_classes ?> clearfix block block-<?php print $block->module ?>">
  <div class="homebox-portlet">
    <div class="homebox-portlet-inner">
      <div class="panel-heading portlet-header">
        <div class="panel-title">
            <?php print $block->subject ?>
          <div class="panel-ctrls">
            <?php if ($block->closable): ?>
              <i class="portlet-icon portlet-close glyphicon glyphicon-remove-circle"></i>
            <?php endif; ?>
            <i class="portlet-icon portlet-minus glyphicon glyphicon-minus"></i>
            <?php if ($page->settings['color'] || isset($block->edit_form)): ?>
              <i class="portlet-icon portlet-settings glyphicon glyphicon-cog"></i>
            <?php endif; ?>
            <i class="portlet-icon portlet-maximize glyphicon glyphicon-resize-full"></i>
          </div>
        </div>
      </div>
      <div class="portlet-config">
        <?php if ($page->settings['color']): ?>
          <div class="clearfix"><div class="homebox-colors">
            <span class="homebox-color-message"><?php print t('Select a color') . ':'; ?></span>
            <?php for ($i=0; $i < HOMEBOX_NUMBER_OF_COLOURS; $i++): ?>
              <span class="homebox-color-selector" style="background-color: <?php print $page->settings['colors'][$i] ?>;">&nbsp;</span>
            <?php endfor ?>
          </div></div>
        <?php endif; ?>
        <?php if (isset($block->edit_form)): print $block->edit_form; endif; ?>
      </div>
      <div class="portlet-content content panel-body"><?php if (is_string($block->content)){ print $block->content; } else { print drupal_render($block->content); } ?></div>
    </div>
  </div>
</div>
