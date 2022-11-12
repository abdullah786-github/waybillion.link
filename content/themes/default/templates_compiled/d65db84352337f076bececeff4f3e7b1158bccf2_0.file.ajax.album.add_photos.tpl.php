<?php
/* Smarty version 4.2.0, created on 2022-11-12 15:46:32
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/ajax.album.add_photos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_636f4f5846ad24_76322002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd65db84352337f076bececeff4f3e7b1158bccf2' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/ajax.album.add_photos.tpl',
      1 => 1648004578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 3,
  ),
),false)) {
function content_636f4f5846ad24_76322002 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body plr0 ptb0">
  <div class="x-form publisher mini" data-id="<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
">

    <!-- publisher close -->
    <div class="publisher-close">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <!-- publisher close -->

    <!-- publisher-message -->
    <div class="publisher-message">
      <img class="publisher-avatar" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
">
      <textarea dir="auto" class="js_autosize js_mention" placeholder='<?php echo __("What is on your mind? #Hashtag.. @Mention.. Link..");?>
'></textarea>
      <div class="publisher-emojis" style="display: block;">
        <div class="position-relative">
          <span class="js_emoji-menu-toggle" data-toggle="tooltip" data-placement="top" title='<?php echo __("Insert an emoji");?>
'>
            <i class="far fa-smile-wink fa-lg"></i>
          </span>
        </div>
      </div>
    </div>
    <!-- publisher-message -->

    <!-- post attachments -->
    <div class="publisher-attachments attachments clearfix x-hidden"></div>
    <!-- post attachments -->

    <!-- post feelings -->
    <div class="publisher-meta" data-meta="feelings">
      <div id="feelings-menu-toggle" data-init-text='<?php echo __("What are you doing?");?>
'><?php echo __("What are you doing?");?>
</div>
      <div id="feelings-data" style="display: none">
        <input type="text" class="no-icon" placeholder='<?php echo __("What are you doing?");?>
'>
        <span></span>
      </div>
      <div id="feelings-menu" class="dropdown-menu dropdown-widget">
        <div class="dropdown-widget-body ptb5">
          <div class="js_scroller">
            <ul class="feelings-list">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feelings']->value, 'feeling');
$_smarty_tpl->tpl_vars['feeling']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feeling']->value) {
$_smarty_tpl->tpl_vars['feeling']->do_else = false;
?>
                <li class="feeling-item js_feelings-add" data-action="<?php echo $_smarty_tpl->tpl_vars['feeling']->value['action'];?>
" data-placeholder="<?php echo __($_smarty_tpl->tpl_vars['feeling']->value['placeholder']);?>
">
                  <div class="icon">
                    <i class="twa twa-3x twa-<?php echo $_smarty_tpl->tpl_vars['feeling']->value['icon'];?>
"></i>
                  </div>
                  <div class="data">
                    <?php echo __($_smarty_tpl->tpl_vars['feeling']->value['text']);?>

                  </div>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        </div>
      </div>
      <div id="feelings-types" class="dropdown-menu dropdown-widget">
        <div class="dropdown-widget-body ptb5">
          <div class="js_scroller">
            <ul class="feelings-list">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feelings_types']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
                <li class="feeling-item js_feelings-type" data-type="<?php echo $_smarty_tpl->tpl_vars['type']->value['action'];?>
" data-icon="<?php echo $_smarty_tpl->tpl_vars['type']->value['icon'];?>
">
                  <div class="icon">
                    <i class="twa twa-3x twa-<?php echo $_smarty_tpl->tpl_vars['type']->value['icon'];?>
"></i>
                  </div>
                  <div class="data">
                    <?php echo __($_smarty_tpl->tpl_vars['type']->value['text']);?>

                  </div>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- post feelings -->

    <!-- post location -->
    <div class="publisher-meta" data-meta="location">
      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'width'=>"16px",'height'=>"16px"), 0, false);
?>
      <input class="js_geocomplete" type="text" placeholder='<?php echo __("Where are you?");?>
'>
    </div>
    <!-- post location -->

    <!-- publisher-tools-tabs -->
    <div class="publisher-tools-tabs">
      <ul class="row">
        <?php if ($_smarty_tpl->tpl_vars['system']->value['photos_enabled']) {?>
          <li class="col-md-6">
            <div class="publisher-tools-tab attach js_publisher-tab" data-tab="photos">
              <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/svg/camera.svg" class="js_x-uploader" data-handle="publisher" data-multiple="true">
              <?php echo __("Upload Photos");?>

            </div>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['activity_posts_enabled']) {?>
          <li class="col-md-6">
            <div class="publisher-tools-tab js_publisher-feelings">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"smile",'class'=>"mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("Feelings/Activity");?>

            </div>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['geolocation_enabled']) {?>
          <li class="col-md-6">
            <div class="publisher-tools-tab js_publisher-tab" data-tab="location">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("Check In");?>

            </div>
          </li>
        <?php }?>
      </ul>
    </div>
    <!-- publisher-tools-tabs -->

    <!-- publisher-footer -->
    <div class="publisher-footer">
      <!-- publisher-buttons -->
      <?php if ($_smarty_tpl->tpl_vars['album']->value['user_type'] == 'user' && !$_smarty_tpl->tpl_vars['album']->value['in_group'] && !$_smarty_tpl->tpl_vars['album']->value['in_event']) {?>
        <!-- privacy -->
        <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="friends" title='<?php echo __("Shared with: Friends");?>
'>
          <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" data-display="static">
            <i class="btn-group-icon fa fa-users mr10"></i><span class="btn-group-text"><?php echo __("Friends");?>
</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-item pointer" data-title='<?php echo __("Shared with: Public");?>
' data-value="public">
              <i class="fa fa-globe mr5"></i><?php echo __("Public");?>

            </div>
            <div class="dropdown-item pointer" data-title='<?php echo __("Shared with: Friends");?>
' data-value="friends">
              <i class="fa fa-users mr5"></i><?php echo __("Friends");?>

            </div>
            <div class="dropdown-item pointer" data-title='<?php echo __("Shared with: Only Me");?>
' data-value="me">
              <i class="fa fa-lock mr5"></i><?php echo __("Only Me");?>

            </div>
          </div>
        </div>
        <!-- privacy -->
      <?php } else { ?>
        <!-- privacy -->
        <?php if ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "custom") {?>
          <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="custom" title='<?php echo __("Shared with");?>
 <?php echo __("Custom People");?>
'>
            <button type="button" class="btn btn-sm btn-info">
              <i class="btn-group-icon fa fa-cog mr10"></i> <span class="btn-group-text"><?php echo __("Custom");?>
</span>
            </button>
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "public") {?>
          <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="public" title='<?php echo __("Shared with: Public");?>
'>
            <button type="button" class="btn btn-sm btn-info">
              <i class="btn-group-icon fa fa-users mr10"></i> <span class="btn-group-text"><?php echo __("Public");?>
</span>
            </button>
          </div>
        <?php }?>
        <!-- privacy -->
      <?php }?>
      <button type="button" class="btn btn-sm btn-primary mr5 js_publisher-btn js_publisher-album"><?php echo __("Post");?>
</button>
      <!-- publisher-buttons -->
    </div>
    <!-- publisher-footer -->
  </div>
</div><?php }
}
