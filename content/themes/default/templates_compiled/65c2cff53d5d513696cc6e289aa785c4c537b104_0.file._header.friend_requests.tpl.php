<?php
/* Smarty version 4.2.0, created on 2022-11-07 09:30:30
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/_header.friend_requests.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6368d036496db8_43622150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65c2cff53d5d513696cc6e289aa785c4c537b104' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/_header.friend_requests.tpl',
      1 => 1666167307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
  ),
),false)) {
function content_6368d036496db8_43622150 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="dropdown js_live-requests">
  <a href="#" data-toggle="dropdown" data-display="static">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-friends",'width'=>"20px",'height'=>"20px",'style'=>"fill: #fff"), 0, false);
?>
    <span class="counter purple shadow-sm <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_live_requests_counter'] == 0) {?>x-hidden<?php }?>">
      <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_live_requests_counter'];?>

    </span>
  </a>
  <div class="dropdown-menu dropdown-menu-right dropdown-widget js_dropdown-keepopen">
    <div class="dropdown-widget-header">
      <span class="title"><?php echo __("Friend Requests");?>
</span>
    </div>
    <div class="dropdown-widget-body">
      <div class="js_scroller">
        <!-- Friend Requests -->
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests']) {?>
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
              <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"request"), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        <?php } else { ?>
          <p class="text-center text-muted mt10">
            <?php echo __("No new requests");?>

          </p>
        <?php }?>
        <!-- Friend Requests -->
      </div>
    </div>
    <a class="dropdown-widget-footer" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people/friend_requests"><?php echo __("See All");?>
</a>
  </div>
</li><?php }
}
