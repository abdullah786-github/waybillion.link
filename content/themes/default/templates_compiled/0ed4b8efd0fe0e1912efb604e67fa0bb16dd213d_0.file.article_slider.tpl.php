<?php
/* Smarty version 4.2.0, created on 2022-11-11 13:07:19
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/article_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_636dd887b2e990_03765535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ed4b8efd0fe0e1912efb604e67fa0bb16dd213d' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/article_slider.tpl',
      1 => 1668142945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636dd887b2e990_03765535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u246756914/domains/waybillion.link/public_html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
 <div class="blog-content">
        <div class="text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['article']['text_snippet'],400);?>
</div>
        <div>
          <div class="post-avatar">
            <div class="post-avatar-picture small" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_picture'];?>
');">
            </div>
          </div>
          <div class="post-meta">
            <span class="text-link">
              <?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_name'];?>

            </span>
            <div class="post-time">
              <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
</span>
            </div>
          </div>
        </div>
</div><?php }
}
