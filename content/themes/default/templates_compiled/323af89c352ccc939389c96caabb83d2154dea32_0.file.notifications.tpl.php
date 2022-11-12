<?php
/* Smarty version 4.2.0, created on 2022-11-05 09:29:27
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63662cf7cb88a6_19953974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '323af89c352ccc939389c96caabb83d2154dea32' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/notifications.tpl',
      1 => 1648004658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_notification.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_63662cf7cb88a6_19953974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container mt20 offcanvas">
  <div class="row">

    <!-- side panel -->
    <div class="col-md-4 col-lg-3 offcanvas-sidebar js_sticky-sidebar">
      <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-md-8 col-lg-9 offcanvas-mainbar">
      <div class="row">

        <!-- center panel -->
        <div class="col-lg-8">

          <!-- notifications -->
          <div class="card">
            <div class="card-header with-icon">
              <i class="fa fa-bell fa-fw mr10"></i><?php echo __("Your Notifications");?>

            </div>
            <div class="card-body">
              <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['notifications'], 'notification');
$_smarty_tpl->tpl_vars['notification']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->tpl_vars['notification']->do_else = false;
?>
                  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>

              <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['notifications']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                <!-- see-more -->
                <div class="alert alert-info see-more js_see-more" data-get="notifications">
                  <span><?php echo __("See More");?>
</span>
                  <div class="loader loader_small x-hidden"></div>
                </div>
                <!-- see-more -->
              <?php }?>

            </div>
          </div>
          <!-- notifications -->

        </div>
        <!-- center panel -->

        <!-- right panel -->
        <div class="col-lg-4">
          <?php $_smarty_tpl->_subTemplateRender('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <!-- right panel -->

      </div>
    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
