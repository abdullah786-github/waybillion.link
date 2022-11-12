<?php
/* Smarty version 4.2.0, created on 2022-11-11 16:04:51
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/started.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_636e02239c23b8_88497140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f77f572dad543ca4967f8ba17d675d374c5f6d21' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/started.tpl',
      1 => 1668153886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__categories.recursive_checkbox.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_636e02239c23b8_88497140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_product_teardown_elol.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo __("Getting Started");?>
</h2>
    <p class="text-xlg"><?php echo __("This information will let us know more about you");?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container" style="margin-top: -25px;">
  <div class="row">
    <div class="col-12 col-md-10 mx-md-auto">
      <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
        <div class="card-body" data-aos="fade-up" data-aos-duration="1000">

          <!-- nav -->
          <ul class="nav nav-pills nav-fill nav-started mb30 js_wizard-steps">
            <li class="nav-item">
              <a class="nav-link active" href="#step-1">
                <h4 class="mb5"><?php echo __("Step 1");?>
</h4>
                <p class="mb0"><?php echo __("Upload an Avatar photo");?>
</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#step-2">
                <h4 class="mb5"><?php echo __("Step 2");?>
</h4>
                <p class="mb0"><?php echo __("Setup your personal profile");?>
</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#step-3">
                <h4 class="mb5"><?php echo __("Step 3");?>
</h4>
                <p class="mb0"><?php echo __("Add Interests");?>
</p>
              </a>
            </li>
          </ul>
          <!-- nav -->

          <!-- tabs -->
          <div class="js_wizard-content" id="step-1">
            <div class="text-center">
              <h3 class="mb5"><?php echo __("Welcome");?>
 <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
</span></h3>
              <p class="mb20"><?php echo __("Let's start with your photo");?>
</p>
            </div>

            <!-- profile-avatar -->
            <div class="position-relative" style="height: 170px;">
              <div class="profile-avatar-wrapper static">
                <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" alt="">

                <!-- buttons -->
                <div class="profile-avatar-change">
                  <i class="fa fa-camera js_x-uploader" data-handle="picture-user"></i>
                </div>
                <div class="profile-avatar-change-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="profile-avatar-crop <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_picture_default'] || !$_smarty_tpl->tpl_vars['user']->value->_data['user_picture_id']) {?>x-hidden<?php }?>">
                  <i class="fa fa-crop-alt js_init-crop-picture" data-image="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture_full'];?>
" data-handle="user" data-id="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
"></i>
                </div>
                <div class="profile-avatar-delete <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_picture_default']) {?>x-hidden<?php }?>">
                  <i class="fa fa-trash js_delete-picture" data-handle="picture-user"></i>
                </div>
                <!-- buttons -->
              </div>
            </div>
            <!-- profile-avatar -->

            <!-- buttons -->
            <div class="clearfix mt20">
              <button id="activate-step-2" class="btn btn-primary float-right"><?php echo __("Next Step");?>
<i class="fas fa-arrow-circle-right ml5"></i></button>
            </div>
            <!-- buttons -->
          </div>

          <div class="js_wizard-content x-hidden" id="step-2">
            <div class="text-center">
              <h3 class="mb5"> <?php echo __("I am");?>
...</h3>
              <p class="mb20"><?php echo __("Setup your personal profile");?>
，<?php echo __("To enjoy latest info and exclusive offers");?>
</p>
            </div>

            <form class="js_ajax-forms" data-url="users/started.php?do=update">
              <!-- <div class="heading-small mb20">
                <?php echo __("I am");?>

              </div> -->
              <div class="pl-md-4">
				<div class="form-group">
				  <label class="form-control-label" for="country"><?php echo __("First Name");?>
</label>
					<input name="user_firstname" type="text" class="form-control" placeholder='<?php echo __("First name");?>
' value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
" >
				</div>
				<div class="form-group">
				  <label class="form-control-label" for="country"><?php echo __("Last Name");?>
</label>
					<input name="user_lastname" type="text" class="form-control" placeholder='<?php echo __("Last name");?>
' value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
" >
				</div>
			  
				<div class="form-group">
				  <label class="form-control-label" for="country"><?php echo __("Username");?>
</label>
					<input name="user_name" type="text" class="form-control" placeholder='<?php echo __("Username");?>
' required value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
">
				</div>
				<div class="form-group">
				  <label class="form-control-label" for="country"><?php echo __("Gender");?>
</label>
					<select class="form-control" name="user_gender" id="user_gender">
						<option value="none"><?php echo __("Select Gender");?>
</option>
						<option value="1" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_gender'] == 1) {?>selected<?php }?>><?php echo __("Male");?>
</option>
						<option value="2" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_gender'] == 2) {?>selected<?php }?>><?php echo __("Female");?>
</option>
						<option value="3" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_gender'] == 3) {?>selected<?php }?>><?php echo __("Other");?>
</option>
					</select>
				</div>
				<div class="form-group">
                  <label class="form-control-label"><?php echo __("Birthdate");?>
</label>
                  <div class="form-row">
                    <div class="col">
                      <select class="form-control" name="birth_month">
                        <option value="none"><?php echo __("Select Month");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo __("Jan");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo __("Feb");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo __("Mar");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo __("Apr");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo __("May");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo __("Jun");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo __("Jul");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo __("Aug");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo __("Sep");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?> value="10"><?php echo __("Oct");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?> value="11"><?php echo __("Nov");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?> value="12"><?php echo __("Dec");?>
</option>
                      </select>
                    </div>
                    <div class="col">
                      <select class="form-control" name="birth_day">
                        <option value="none"><?php echo __("Select Day");?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                          <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['day'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                        <?php }
}
?>
                      </select>
                    </div>
                    <div class="col">
                      <select class="form-control" name="birth_year">
                        <option value="none"><?php echo __("Select Year");?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2022+1 - (1905) : 1905-(2022)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1905, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                          <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['year'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                        <?php }
}
?>
                      </select>
                    </div>
                  </div>
                </div>
				<div class="form-group">
				  <label class="form-control-label" for="country">Telephone number</label>
				  <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_phone']) {?>
					<input name="" type="text" class="form-control" placeholder='+852987654321' required value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_phone'];?>
" disabled>
					<?php } else { ?>
					<input name="user_phone" type="text" class="form-control" placeholder='+852987654321' required value="">
					<?php }?>
				</div>
				
				
                <div class="form-group">
                  <label class="form-control-label" for="country"><?php echo __("Country");?>
</label>
                  <select class="form-control" name="country" id="country">
                    <option value="none"><?php echo __("Select Country");?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                      <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_country'] == $_smarty_tpl->tpl_vars['country']->value['country_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['country']->value['country_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['location_info_enabled']) {?>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label class="form-control-label" for="city"><?php echo __("Current City");?>
</label>
                      <input type="text" class="form-control js_geocomplete" name="city" id="city" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_current_city'];?>
">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-control-label" for="hometown"><?php echo __("Hometown");?>
</label>
                      <input type="text" class="form-control js_geocomplete" name="hometown" id="hometown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_hometown'];?>
">
                    </div>
                  </div>
                <?php }?>
              </div>

              
              <?php if ($_smarty_tpl->tpl_vars['system']->value['education_info_enabled']) {?>
                <div class="divider"></div>

                <div class="heading-small mb20">
                  <?php echo __("Education");?>

                </div>
                <div class="pl-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="edu_major"><?php echo __("Major");?>
</label>
                    <input type="text" class="form-control" name="edu_major" id="edu_major" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_major'];?>
">
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label class="form-control-label" for="edu_school"><?php echo __("School");?>
</label>
                      <input type="text" class="form-control" name="edu_school" id="edu_school" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_school'];?>
">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-control-label" for="edu_class"><?php echo __("Class");?>
</label>
                      <input type="text" class="form-control" name="edu_class" id="edu_class" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_class'];?>
">
                    </div>
                  </div>
                </div>
              <?php }?>

              <!-- success -->
              <div class="alert alert-success x-hidden"></div>
              <!-- success -->

              <!-- error -->
              <div class="alert alert-danger x-hidden"></div>
              <!-- error -->

              <!-- buttons -->
              <div class="clearfix mt20">
                <div class="float-right">
                  <button type="submit" class="btn btn-success"><i class="fas fa-check-circle mr5"></i><?php echo __("Save Changes");?>
</button>
                  <button type="button" class="btn btn-primary" id="activate-step-3"><?php echo __("Next Step");?>
<i class="fas fa-arrow-circle-right ml5"></i></button>
                </div>
              </div>
              <!-- buttons -->
            </form>
          </div>

          <div class="js_wizard-content x-hidden" id="step-3">
            <div class="text-center">
              <h3 class="mb5"><?php echo __("My hobby and interests are");?>
...</h3>
              <!-- <p class="mb20"><?php echo __("Let us find you the latest information!");?>
</p> -->
            </div>

            <form class="js_ajax-forms" data-url="users/started.php?do=finish">
              <!-- new people -->
              			  <div class="form-group form-row interest_checkbox">
              <div class="col-md-12">
			  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['categories'], 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_checkbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>''), 0, true);
?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            </div>
              <!-- new people -->

              <!-- success -->
              <div class="alert alert-success x-hidden"></div>
              <!-- success -->

              <!-- error -->
              <div class="alert alert-danger x-hidden"></div>
              <!-- error -->

              <!-- buttons -->
              <div class="clearfix mt20">
                <button type="submit" class="btn btn-danger float-right"><i class="fas fa-check-circle mr5"></i><?php echo __("Finish");?>
</button>
              </div>
              <!-- buttons -->
            </form>
          </div>
          <!-- tabs -->

        </div>
      </div>
    </div>
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
  $(function() {

    var wizard_steps = $('.js_wizard-steps li a');
    var wizard_content = $('.js_wizard-content');

    wizard_content.hide();

    wizard_steps.click(function(e) {
      e.preventDefault();
      var $target = $($(this).attr('href'));
      if (!$(this).hasClass('disabled')) {
        wizard_steps.removeClass('active');
        $(this).addClass('active');
        wizard_content.hide();
        $target.show();
      }
    });

    $('.js_wizard-steps li a.active').trigger('click');

    $('#activate-step-2').on('click', function(e) {
      $('.js_wizard-steps li:eq(1) a').removeClass('disabled');
      $('.js_wizard-steps li a[href="#step-2"]').trigger('click');
    });

    $('#activate-step-3').on('click', function(e) {
      $('.js_wizard-steps li:eq(2) a').removeClass('disabled');
      $('.js_wizard-steps li a[href="#step-3"]').trigger('click');
    });

  });
<?php echo '</script'; ?>
><?php }
}
