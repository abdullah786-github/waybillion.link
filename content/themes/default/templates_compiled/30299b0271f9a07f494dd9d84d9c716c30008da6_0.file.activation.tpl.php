<?php
/* Smarty version 4.2.0, created on 2022-11-10 21:57:24
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/activation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_636d0344719919_19561259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30299b0271f9a07f494dd9d84d9c716c30008da6' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/activation.tpl',
      1 => 1668088028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_636d0344719919_19561259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_check_boxes_re_v40f.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo __("Activation Required");?>
</h2>
    <p class="text-xlg"><?php echo __("You have to activate your account before you start");?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container" style="margin-top: -25px;">
  <div class="row">
    <div class="col-12 col-md-10 mx-md-auto">
      <div class="card shadow">
        <div class="card-body text-center">

          <h2><?php echo __("Hey");?>
 👋 <?php echo __("Complete your registration by");?>
 <!-- <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['registration_method'] == "ByEmail") {
echo __("Email");
} else {
echo __("Phone Number");
}?>--> 
          </h2>
          <p class="text-xlg mt10 mb30">
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['registration_method'] == "ByEmail") {?>
              <?php echo __("Please go to");?>
 <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
</span> <?php echo __("to complete the activation process");?>

            <?php } else { ?>
              <?php echo __("OTP has been sent to");?>
 <strong><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_phone'];?>
</strong> <!-- <?php echo __("to complete the activation process");?>
 -->
            <?php }?>
          </p>

          <div>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['registration_method'] == "ByEmail") {?>
              <button type="button" class="btn btn-success rounded-pill mr10" data-toggle="modal" data-url="core/activation_email_resend.php">
                <?php echo __("Resend Verification Email");?>

              </button>
              <button type="button" class="btn btn-primary rounded-pill" data-toggle="modal" data-url="#activation-email-reset">
                <?php echo __("Change Email");?>

              </button>
            <?php } else { ?>
              <button type="button" class="btn btn-success rounded-pill mr10" data-toggle="modal" data-url="#activation-phone"><?php echo __("Enter Code");?>
</button>
              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_phone']) {?>
                <button type="button" class="btn btn-primary rounded-pill" data-toggle="modal" data-url="core/activation_phone_resend.php">
                  <?php echo __("Resend SMS");?>

                </button>
              <?php }?>
              <button type="button" class="btn btn-primary rounded-pill" data-toggle="modal" data-url="#activation-phone-reset">
                <?php echo __("Change Phone Number");?>

              </button>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
