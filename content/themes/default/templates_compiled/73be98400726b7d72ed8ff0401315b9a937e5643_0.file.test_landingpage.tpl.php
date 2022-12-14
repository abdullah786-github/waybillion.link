<?php
/* Smarty version 4.2.0, created on 2022-11-11 18:07:05
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/test_landingpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_636e1ec9e6f2d8_82540444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73be98400726b7d72ed8ff0401315b9a937e5643' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/test_landingpage.tpl',
      1 => 1668161222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 5,
    'file:_fees_article_test.tpl' => 1,
    'file:_no_data.tpl' => 2,
    'file:__feeds_article.tpl' => 2,
    'file:_ads.tpl' => 3,
    'file:_widget.tpl' => 2,
    'file:_tabs.tpl' => 1,
    'file:__feeds_article_right.tpl' => 1,
    'file:__reaction_emojis.tpl' => 3,
    'file:__feeds_post.comments.tpl' => 1,
    'file:__categories.recursive_new_options.tpl' => 1,
    'file:__svg_icons.tpl' => 4,
    'file:__categories.recursive_options.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_636e1ec9e6f2d8_82540444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u246756914/domains/waybillion.link/public_html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link href="https://kenwheeler.github.io/slick/slick/slick.css" rel="stylesheet" crossorigin="anonymous">
<link href="https://kenwheeler.github.io/slick/slick/slick-theme.css" rel="stylesheet" crossorigin="anonymous">
<link href="/content/themes/default/css/style-new.css" rel="stylesheet" crossorigin="anonymous">

<style>
.tabbing-column ul {
    display: flex;
    flex-wrap: wrap;
}
.tabbing-column ul li {
    display: block;
    width: 100%;
    background-size: cover;
    position: relative;
    background: #2b354c;
}
.tabbing-column ul li a {
    display: inline-block;
    width: 100%;
    padding: 20px 20px;
}
.tabbing-column img {
    width: 100% !important;
    border-radius: 50%;
    object-fit: cover;
}
.tabbing-column ul li:before {
    position: absolute;
    right: -34px;
    top: 50%;
    border-left: 17px solid transparent;
    border-right: 17px solid transparent;
    border-bottom: 17px solid transparent;
    border-top: 17px solid transparent;
    content: "";
    transform: translateY(-50%);
}
.tabbing-column ul li.active {
    background: #f69d7d;
}
.tabbing-column ul li.active:before{
border-left: 17px solid #f69d7d;
}
@media screen and (max-width: 991px) and (min-width: 768px){
.container, .container-md, .container-sm {
    max-width: 865px;
}
.tab button {
    padding: 12px 7px;
    font-size: 10px;
}
}
@media screen and (max-width: 767px) {
.tabbing-column ul {
    flex-wrap: nowrap;
}
.tabbing-column ul li.active:before {
    border-top: 17px solid #f69d7d;
      border-left: 17px solid transparent;
}
.tabbing-column ul li:before {
    position: absolute;
    left: 50%;
    bottom: -51px;
    border-left: 17px solid transparent;
    border-right: 17px solid transparent;
    border-bottom: 17px solid transparent;
    border-top: 17px solid transparent;
    content: "";
    transform: translate(-50%, -50%);
      right: auto;
    top: auto;
}

}


</style>
<div class="banner_slider_wrapper">
  <div class="slider-for">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->iteration = 0;
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['article']->iteration++;
$__foreach_article_0_saved = $_smarty_tpl->tpl_vars['article'];
?>
		<div class="banner_slide">
      <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_cover'];?>
">
      <div class="banner_content">
       <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
">
        <div class="blog-content">
          <div class="text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['article']['text_snippet'],400);?>
</div>
          <div class="blog_post_detail">
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
        </div>
         </a>
      </div>
      <?php if ($_smarty_tpl->tpl_vars['article']->value['article']['cover_video']) {?>
      <div class="video_btn_banner">
        <button type="button" class="video_popup_btn" data-toggle="modal" data-src="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['cover_video'];?>
">
          <span></span>
        </button>
      </div>
      <?php }?>
    </div>
    <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>

	<div class="slider-nav">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->iteration = 0;
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['article']->iteration++;
$__foreach_article_1_saved = $_smarty_tpl->tpl_vars['article'];
?>
		<div><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_cover'];?>
"></div>
  <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
  </div>

  <div class="modal blog_video_modal fade" id="video_model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="500" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen  id="you_video_url"></iframe>
      </div>
    </div>
  </div>
</div>
<!-- 
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner"> 
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://waybillion.link/content/uploads/photos/2022/10/sngine_a28455ef26a94923cc52b1d4711fa783.png" alt="First slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="https://waybillion.link/content/uploads/photos/2022/10/sngine_f4fdf38b0849bfc465f947b38620e93c_cropped.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://waybillion.link/content/uploads/photos/2022/10/sngine_3727d43da5444113e8986ddf638a8a58.jpg" alt="Third slide">
    </div> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 -->



<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
  <!-- page header class="page-header" -->
  <div>
  
  
    <div class="tabs tabs-style-iconbox"> 
      <nav>
        <ul>
        
      
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li style="display:inline;" data-val="<?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
"> <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogsfront/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_url'];?>
">
               <div class="category_icon"><?php if ($_smarty_tpl->tpl_vars['category']->value['category_icon']) {?> <img src="<?php echo __($_smarty_tpl->tpl_vars['category']->value['category_icon']);?>
"  style="height:20px; width:20px;" /> <?php }?><span><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</span></div>
            </a></li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </nav>
    </div>
    </div>
  <?php }?>
    <!-- page header -->
<?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
  <!-- page header -->
  <!-- page header -->
<?php }?>


<!-- page content -->
<div class="container mt20 offcanvas">
  <div class="row">

    <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

      <!-- side panel -->
      <div class="col-12 d-block d-md-none offcanvas-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 offcanvas-mainbar">
    <div class="row">
    <div class="col-md-2 mb20 tabbing-column">
      <?php if ($_smarty_tpl->tpl_vars['pages']->value) {?>
              <ul>
                <li style="display:inline;" class="active" data-val="Home"> <a href="https://waybillion.link/blogsfront">
           <img src="https://waybillion.link/content/uploads/photos/logo-new.png">
          </a></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
          <li style="display:inline;" class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_id']) {?>active<?php }?>" data-val="<?php echo __($_smarty_tpl->tpl_vars['page']->value['page_name']);?>
"> <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogsfront/pageview/<?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
/">
           <img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_picture'];?>
">
          </a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
      <?php }?>
      </div>
        <div class="col-md-10 mb20 blogs-wrapper">
          <?php if ($_smarty_tpl->tpl_vars['articles']->value) {?>
            <ul class="row">
              <!-- articles -->
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->iteration = 0;
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['article']->iteration++;
$__foreach_article_4_saved = $_smarty_tpl->tpl_vars['article'];
?>
                <?php $_smarty_tpl->_subTemplateRender('file:_fees_article_test.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"featured",'_iteration'=>$_smarty_tpl->tpl_vars['article']->iteration), 0, true);
?>
              <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <!-- articles -->
            </ul>

            <!-- see-more -->
            <div class="alert alert-post see-more js_see-more" data-get="articles_test">
              <span><?php echo __("More Articles");?>
</span>
              <div class="loader loader_small x-hidden"></div>
            </div>
            <!-- see-more -->
          <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php }?>
        </div>
        </div>
      </div>
      <!-- content panel -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "category") {?>

      <!-- side panel -->
      <div class="col-12 d-block d-md-none offcanvas-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 offcanvas-mainbar">
        <div class="row">
          <!-- left panel -->
          <div class="col-md-2 mb20 tabbing-column">
     
              <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
          <li style="display:inline;" class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_id']) {?>active<?php }?>" data-val="<?php echo __($_smarty_tpl->tpl_vars['page']->value['page_name']);?>
"> <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogsfront/pageview/<?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
/">
           <img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_picture'];?>
">
          </a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
      
      </div>
      <div class="col-md-6 mb20">
            <?php if ($_smarty_tpl->tpl_vars['articles']->value) {?>
              <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->iteration = 0;
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['article']->iteration++;
$__foreach_article_6_saved = $_smarty_tpl->tpl_vars['article'];
?>
                  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_6_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>

              <!-- see-more -->
              <div class="alert alert-post see-more js_see-more" data-get="category_articles" data-id="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
">
                <span><?php echo __("More Articles");?>
</span>
                <div class="loader loader_small x-hidden"></div>
              </div>
              <!-- see-more -->
            <?php } else { ?>
              <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="col-md-4">
            <!-- add new article -->
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles']) {?>
              <div class="mb10 d-none d-sm-block">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/new" class="btn btn-success btn-block">
                  <i class="fa fa-edit mr5"></i><?php echo __("Write New Article");?>

                </a>
              </div>
            <?php }?>
            <!-- add new article -->

            <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php if ($_smarty_tpl->tpl_vars['category']->value['category_description']) {?>
              <!-- category description -->
              <div class="articles-widget-header">
                <div class="articles-widget-title"><?php echo __("Description");?>
</div>
              </div>
              <div class="mb15">
                <?php echo __($_smarty_tpl->tpl_vars['category']->value['category_description']);?>

              </div>
              <!-- category description -->
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['blogs_categories']->value) {?>
              <!-- blogs categories -->
              <div class="articles-widget-header">
                <div class="articles-widget-title"><?php echo __("Sub-Categories");?>
</div>
              </div>
              <ul class="article-categories clearfix">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                  <li>
                    <a class="article-category" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_url'];?>
">
                      <?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>

                    </a>
                  </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
              <!-- blogs categories -->
            <?php }?>
      <?php $_smarty_tpl->_subTemplateRender('file:_tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <!-- read more -->
            <div class="articles-widget-header">
              <div class="articles-widget-title"><?php echo __("Read More");?>
</div>
            </div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->iteration = 0;
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['article']->iteration++;
$__foreach_article_8_saved = $_smarty_tpl->tpl_vars['article'];
?>
              <?php $_smarty_tpl->_subTemplateRender('file:__feeds_article_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_small'=>true), 0, true);
?>
            <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <!-- read more -->
          </div>
          <!-- right panel -->
        </div>
      </div>
      <!-- content panel -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "article") {?>

      <!-- side panel -->
      <div class="col-12 d-block d-md-none offcanvas-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 offcanvas-mainbar">
        <div class="row">
          <!-- left panel -->
          <div class="col-md-8 mb20">
            <div class="article mb20 post" data-id="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
              <div class="article-wrapper <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>pb10<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['article']->value['manage_post']) {?>
                  <div class="text-right">
                    <a class="btn btn-sm btn-outline-primary rounded-pill ml5 mb5" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/edit/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
                      <i class="fa fa-edit fa-fw mr5"></i> <?php echo __("Edit");?>

                    </a>
                    <button class="btn btn-sm btn-outline-danger rounded-pill ml5 mb5 js_delete-article" data-id="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
                      <i class="fa fa-trash fa-fw mr5"></i><?php echo __("Delete");?>

                    </button>
                  </div>
                <?php }?>

                <!-- article category -->
                <div class="mb10">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value['article']['all_cats'], 'itemvar', false, 'key');
$_smarty_tpl->tpl_vars['itemvar']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['itemvar']->value) {
$_smarty_tpl->tpl_vars['itemvar']->do_else = false;
?>
                  <a class="article-category" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['itemvar']->value;?>
">
            <?php echo $_smarty_tpl->tpl_vars['itemvar']->value;?>

                  </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <!-- article category -->

                <!-- article title -->
                <h2><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
</h2>
                <!-- article title -->

                <!-- article meta -->
                <div class="row">
                  <div class="col-md-6 mb20">
                    <div class="post-avatar">
                      <a class="post-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_picture'];?>
);">
                      </a>
                    </div>
                    <div class="post-meta">
                      <div>
                        <!-- post author name -->
                        <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->tpl_vars['article']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['article']->value['user_id'];?>
">
                          <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_name'];?>
</a>
                        </span>
                        <?php if ($_smarty_tpl->tpl_vars['article']->value['post_author_verified']) {?>
                          <?php if ($_smarty_tpl->tpl_vars['article']->value['user_type'] == "user") {?>
                            <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                          <?php } else { ?>
                            <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified Page");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                          <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['article']->value['user_subscribed']) {?>
                          <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Pro User");?>
' class="fa fa-bolt fa-fw pro-badge"></i>
                        <?php }?>
                        <!-- post author name -->
                      </div>
                      <div class="post-time">
                        <?php echo __("Posted");?>
 <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 text-md-right mb20">
                    <a class="article-meta-counter unselectable" href="#article-comments">
                      <i class="fa fa-comments fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['article']->value['comments'];?>

                    </a>
                    <div class="article-meta-counter unselectable">
                      <i class="fa fa-eye fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['article']->value['article']['views'];?>

                    </div>
                  </div>
                </div>
                <!-- article meta -->

                <!-- social share -->
                <div class="mb20">
                  <a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-facebook" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-rounded btn-twitter" target="_blank">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="https://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-vk" target="_blank">
                    <i class="fab fa-vk"></i>
                  </a>
                  <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin" target="_blank">
                    <i class="fab fa-linkedin"></i>
                  </a>
                  <a href="https://api.whatsapp.com/send?text=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-whatsapp d-none d-sm-inline-block" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                  </a>
                  <a href="https://reddit.com/submit?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-reddit" target="_blank">
                    <i class="fab fa-reddit"></i>
                  </a>
                  <a href="https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-pinterest" target="_blank">
                    <i class="fab fa-pinterest"></i>
                  </a>
                </div>
                <!-- social share -->

                <!-- article cover -->
                <?php if ($_smarty_tpl->tpl_vars['article']->value['article']['cover']) {?>
                  <div class="mb20">
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_cover'];?>
">
                  </div>
                <?php }?>
                <!-- article cover -->

                <!-- article text -->
                <div class="article-text text-with-list" dir="auto">
                  <?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_text'];?>

                </div>
                <!-- article text -->

                <!-- article tags -->
                <?php if ($_smarty_tpl->tpl_vars['article']->value['article']['parsed_tags']) {?>
                  <div class="article-tags">
                    <ul>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value['article']['parsed_tags'], 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                        <li>
                          <!--<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/hashtag/<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
"><?php echo __($_smarty_tpl->tpl_vars['tag']->value);?>
</a>-->
                          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
/articles"><?php echo __($_smarty_tpl->tpl_vars['tag']->value);?>
</a>
                        </li>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                  </div>
                <?php }?>
                <!-- article tags -->

                <!-- post stats -->
                <div class="post-stats clearfix">
                  <!-- reactions stats -->
                  <?php if ($_smarty_tpl->tpl_vars['article']->value['reactions_total_count'] > 0) {?>
                    <div class="float-left mr10" data-toggle="modal" data-url="posts/who_reacts.php?post_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
                      <div class="reactions-stats">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value['reactions'], 'reaction_count', false, 'reaction_type');
$_smarty_tpl->tpl_vars['reaction_count']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reaction_type']->value => $_smarty_tpl->tpl_vars['reaction_count']->value) {
$_smarty_tpl->tpl_vars['reaction_count']->do_else = false;
?>
                          <?php if ($_smarty_tpl->tpl_vars['reaction_count']->value > 0) {?>
                            <div class="reactions-stats-item">
                              <div class="inline-emoji no_animation">
                                <?php $_smarty_tpl->_subTemplateRender('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->tpl_vars['reaction_type']->value), 0, true);
?>
                              </div>
                            </div>
                          <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <!-- reactions count -->
                        <span>
                          <?php echo $_smarty_tpl->tpl_vars['article']->value['reactions_total_count'];?>

                        </span>
                        <!-- reactions count -->
                      </div>
                    </div>
                  <?php }?>
                  <!-- reactions stats -->
                </div>
                <!-- post stats -->

                <!-- post actions -->
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                  <div class="post-actions clearfix">
                    <!-- reactions -->
                    <div class="action-btn unselectable reactions-wrapper <?php if ($_smarty_tpl->tpl_vars['article']->value['i_react']) {?>js_unreact-post<?php }?>" data-reaction="<?php echo $_smarty_tpl->tpl_vars['article']->value['i_reaction'];?>
">
                      <!-- reaction-btn -->
                      <div class="reaction-btn">
                        <?php if (!$_smarty_tpl->tpl_vars['article']->value['i_react']) {?>
                          <div class="reaction-btn-icon">
                            <i class="fa fa-smile fa-fw"></i>
                          </div>
                          <span class="reaction-btn-name"><?php echo __("React");?>
</span>
                        <?php } else { ?>
                          <div class="reaction-btn-icon">
                            <div class="inline-emoji no_animation">
                              <?php $_smarty_tpl->_subTemplateRender('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->tpl_vars['article']->value['i_reaction']), 0, true);
?>
                            </div>
                          </div>
                          <span class="reaction-btn-name <?php echo $_smarty_tpl->tpl_vars['article']->value['i_reaction_details']['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['i_reaction_details']['title'];?>
</span>
                        <?php }?>
                      </div>
                      <!-- reaction-btn -->

                      <!-- reactions-container -->
                      <div class="reactions-container">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reactions']->value, 'reaction');
$_smarty_tpl->tpl_vars['reaction']->iteration = 0;
$_smarty_tpl->tpl_vars['reaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reaction']->value) {
$_smarty_tpl->tpl_vars['reaction']->do_else = false;
$_smarty_tpl->tpl_vars['reaction']->iteration++;
$__foreach_reaction_12_saved = $_smarty_tpl->tpl_vars['reaction'];
?>
                          <div class="reactions_item reaction reaction-<?php echo $_smarty_tpl->tpl_vars['reaction']->iteration;?>
 js_react-post" data-reaction="<?php echo $_smarty_tpl->tpl_vars['reaction']->value['reaction'];?>
" data-reaction-color="<?php echo $_smarty_tpl->tpl_vars['reaction']->value['color'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['reaction']->value['title'];?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->tpl_vars['reaction']->value['reaction']), 0, true);
?>
                          </div>
                        <?php
$_smarty_tpl->tpl_vars['reaction'] = $__foreach_reaction_12_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </div>
                      <!-- reactions-container -->
                    </div>
                    <!-- reactions -->

                    <!-- comment -->
                    <div class="action-btn js_comment <?php if ($_smarty_tpl->tpl_vars['article']->value['comments_disabled']) {?>x-hidden<?php }?>">
                      <i class="fa fa-comment fa-fw mr5"></i><span><?php echo __("Comment");?>
</span>
                    </div>
                    <!-- comment -->

                    <!-- share -->
                    <?php if ($_smarty_tpl->tpl_vars['article']->value['privacy'] == "public") {?>
                      <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
                        <i class="fa fa-share fa-fw mr5"></i><span><?php echo __("Share");?>
</span>
                      </div>
                    <?php }?>
                    <!-- share -->
          <?php if ($_smarty_tpl->tpl_vars['_post']->value['i_save']) {?>
            <div href="#" class="action-btn pointer js_unsave-post">
              <div class="action no-desc">
              <i class="fa fa-bookmark fa-fw"></i> <span><?php echo __("Unsave Post");?>
</span>
              </div>
            </div>
            <?php } else { ?>
            <div class="action-btn pointer js_save-post">
              <div class="action no-desc">
              <i class="fa fa-bookmark fa-fw"></i> <span><?php echo __("Save Post");?>
</span>
              </div>
            </div>
            <?php }?>
                  </div>
                <?php }?>
                <!-- post actions -->
              </div>

              <!-- post footer -->
              <div class="post-footer" id="article-comments">
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                  <!-- comments -->
                  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['article']->value), 0, false);
?>
                  <!-- comments -->
                <?php } else { ?>
                  <div class="ptb10">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin"><?php echo __("Please log in to like, share and comment!");?>
</a>
                  </div>
                <?php }?>
              </div>
              <!-- post footer -->
            </div>
            <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ads'=>$_smarty_tpl->tpl_vars['ads_footer']->value), 0, true);
?>
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="col-md-4">
            <!-- add new article -->
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles']) {?>
              <div class="mb10 d-none d-sm-block">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/new" class="btn btn-sm btn-success btn-block">
                  <i class="fa fa-edit mr5"></i><?php echo __("Write New Article");?>

                </a>
              </div>
            <?php }?>
            <!-- add new article -->

            <!-- search-->
            <div class="articles-widget-header">
              <div class="articles-widget-title"><?php echo __("Search");?>
</div>
            </div>
            <div class="mb10">
              <form class="js_search-form">
                <div class="input-group">
                  <input type="text" class="form-control" name="query">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-danger"><?php echo __("Search");?>
</button>
                  </div>
                </div>
              </form>
            </div>
             <!-- search--->

            <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <!-- blogs categories -->
            <div class="articles-widget-header">
              <div class="articles-widget-title"><?php echo __("Categories");?>
</div>
            </div>
            <ul class="article-categories clearfix">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <li>
                  <a class="article-category" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_url'];?>
">
                    <?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>

                  </a>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <!-- blogs categories -->

            <!-- read more -->
            <div class="articles-widget-header">
              <div class="articles-widget-title"><?php echo __("Read More");?>
</div>
            </div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->iteration = 0;
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['article']->iteration++;
$__foreach_article_14_saved = $_smarty_tpl->tpl_vars['article'];
?>
              <?php $_smarty_tpl->_subTemplateRender('file:__feeds_article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_small'=>true), 0, true);
?>
            <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_14_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
            <!-- read more -->
          </div>
          <!-- right panel -->
        </div>
      </div>
      <!-- content panel -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "edit") {?>

      <!-- side panel -->
      <div class="col-md-4 col-lg-3 offcanvas-sidebar js_sticky-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-md-8 col-lg-9 offcanvas-mainbar">
        <!-- content -->
        <div class="card">
          <div class="card-header with-icon">
            <i class="fa fa-blog mr10" style="color: #f25e4e;"></i><?php echo __("Edit Article");?>

            <div class="float-right">
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-light">
                <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

              </a>
            </div>
          </div>
          <div class="js_ajax-forms-html " data-url="posts/article.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
            <div class="card-body">
              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Title");?>

                </label>
                <div class="col-md-10">
                  <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
">
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Content");?>

                </label>
                <div class="col-md-10">
                  <textarea name="text" class="form-control js_wysiwyg"><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['text'];?>
</textarea>
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Cover");?>

                </label>
                <div class="col-md-10">
                  <?php if ($_smarty_tpl->tpl_vars['article']->value['article']['cover'] == '') {?>
                    <div class="x-image">
                      <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                        <span>??</span>
                      </button>
                      <div class="x-image-loader">
                        <div class="progress x-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                      <input type="hidden" class="js_x-image-input" name="cover" value="">
                    </div>
                  <?php } else { ?>
                    <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['cover'];?>
')">
                      <button type="button" class="close js_x-image-remover" title='<?php echo __("Remove");?>
'>
                        <span>??</span>
                      </button>
                      <div class="x-image-loader">
                        <div class="progress x-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                      <input type="hidden" class="js_x-image-input" name="cover" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['cover'];?>
">
                    </div>
                  <?php }?>
                </div>
              </div>
              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Type");?>

                </label>
                <div class="col-md-10">
                  <select class="form-control" name="type">
                    <option value=""><?php echo __("Select Image Type");?>
</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value['article']['type'] == '1') {?> selected <?php }?>><?php echo __("Square Image");?>
</option>
                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['article']->value['article']['type'] == '2') {?> selected <?php }?>><?php echo __("Rectangular Image");?>
</option>
          </select>
                </div>
              </div>
        <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Category");?>

                </label>
                <div class="col-md-10">
                  <select class="form-control" name="category[]" multiple>
                    <option><?php echo __("Select Category");?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_new_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->tpl_vars['article']->value['article']['all_cats']), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Tags");?>

                </label>
                <div class="col-md-10">
                  <input class="form-control" name="tags" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['tags'];?>
">
                </div>
              </div>

              <!-- error -->
              <div class="alert alert-danger mb0 x-hidden"></div>
              <!-- error -->
            </div>
            <div class="card-footer text-right">
              <button type="button" class="btn btn-danger js_delete-article" data-id="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
                <i class="fa fa-trash mr5"></i><?php echo __("Delete Article");?>

              </button>
              <button type="submit" class="btn btn-primary"><?php echo __("Publish");?>
</button>
            </div>
          </div>
        </div>
        <!-- content -->
      </div>
      <!-- content panel -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "new") {?>

      <!-- side panel -->
      <div class="col-md-4 col-lg-3 offcanvas-sidebar js_sticky-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-md-8 col-lg-9 offcanvas-mainbar">
        <!-- content -->
        <div class="card">
          <div class="card-header with-icon">
            <i class="fa fa-blog mr10" style="color: #f25e4e;"></i><?php echo __("Write New Article");?>

          </div>
          <div class="js_ajax-forms-html" data-url="posts/article.php?do=create">
            <div class="card-body">
              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Publish To");?>

                </label>
                <div class="col-md-10">
                  <!-- publish to options -->
                  <div>
                    <!-- Timeline -->
                    <input class="x-hidden input-label" type="radio" name="publish_to" id="publish_to_timeline" value="timeline" <?php if ($_smarty_tpl->tpl_vars['share_to']->value == "timeline") {?>checked="checked" <?php }?> />
                    <label class="button-label" for="publish_to_timeline">
                      <div class="icon">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'width'=>"20px",'height'=>"20px"), 0, false);
?>
                      </div>
                      <div class="title"><?php echo __("Timeline");?>
</div>
                    </label>
                    <!-- Timeline -->
                    <!-- Page -->
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled'] && $_smarty_tpl->tpl_vars['pages']->value) {?>
                      <input class="x-hidden input-label" type="radio" name="publish_to" id="publish_to_page" value="page" <?php if ($_smarty_tpl->tpl_vars['share_to']->value == "page") {?>checked="checked" <?php }?> />
                      <label class="button-label" for="publish_to_page">
                        <div class="icon">
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                        </div>
                        <div class="title"><?php echo __("Page");?>
</div>
                      </label>
                    <?php }?>
                    <!-- Page -->
                    <!-- Group -->
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['groups_enabled'] && $_smarty_tpl->tpl_vars['groups']->value) {?>
                      <input class="x-hidden input-label" type="radio" name="publish_to" id="publish_to_group" value="group" <?php if ($_smarty_tpl->tpl_vars['share_to']->value == "group") {?>checked="checked" <?php }?> />
                      <label class="button-label" for="publish_to_group">
                        <div class="icon">
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                        </div>
                        <div class="title"><?php echo __("Group");?>
</div>
                      </label>
                    <?php }?>
                    <!-- Group -->
                    <!-- Event -->
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled'] && $_smarty_tpl->tpl_vars['events']->value) {?>
                      <input class="x-hidden input-label" type="radio" name="publish_to" id="publish_to_event" value="event" <?php if ($_smarty_tpl->tpl_vars['share_to']->value == "event") {?>checked="checked" <?php }?> />
                      <label class="button-label" for="publish_to_event">
                        <div class="icon">
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                        </div>
                        <div class="title"><?php echo __("Event");?>
</div>
                      </label>
                    <?php }?>
                    <!-- Event -->
                  </div>
                  <!-- publish to options -->
                </div>
              </div>

              <div id="js_publish-to-page" <?php if ($_smarty_tpl->tpl_vars['share_to']->value != "page") {?>class="x-hidden" <?php }?>>
                <div class="form-group form-row">
                  <label class="col-md-2 form-control-label">
                    <?php echo __("Select Page");?>

                  </label>
                  <div class="col-md-10">
                    <select name="page_id" class="form-control">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['share_to_page_id']->value == $_smarty_tpl->tpl_vars['page']->value['page_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value['page_title'];?>
</option>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                  </div>
                </div>
              </div>

              <div id="js_publish-to-group" <?php if ($_smarty_tpl->tpl_vars['share_to']->value != "group") {?>class="x-hidden" <?php }?>>
                <div class="form-group form-row">
                  <label class="col-md-2 form-control-label">
                    <?php echo __("Select Group");?>

                  </label>
                  <div class="col-md-10">
                    <select name="group_id" class="form-control">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['share_to_group_id']->value == $_smarty_tpl->tpl_vars['group']->value['group_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
</option>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                  </div>
                </div>
              </div>

              <div id="js_publish-to-event" <?php if ($_smarty_tpl->tpl_vars['share_to']->value != "event") {?>class="x-hidden" <?php }?>>
                <div class="form-group form-row">
                  <label class="col-md-2 form-control-label">
                    <?php echo __("Select Event");?>

                  </label>
                  <div class="col-md-10">
                    <select name="event_id" class="form-control">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['events']->value, 'event');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['share_to_event_id']->value == $_smarty_tpl->tpl_vars['event']->value['event_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
</option>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Title");?>

                </label>
                <div class="col-md-10">
                  <input class="form-control" name="title">
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Content");?>

                </label>
                <div class="col-md-10">
                  <textarea name="text" class="form-control js_wysiwyg"></textarea>
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Cover");?>

                </label>
                <div class="col-md-10">
                  <div class="x-image">
                    <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                      <span>??</span>
                    </button>
                    <div class="x-image-loader">
                      <div class="progress x-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                    <input type="hidden" class="js_x-image-input" name="cover">
                  </div>
                </div>
              </div>
        
        <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Type");?>

                </label>
                <div class="col-md-10">
                  <select class="form-control" name="type">
                    <option value=""><?php echo __("Select Image Type");?>
</option>
                    <option value="1"><?php echo __("Square Image");?>
</option>
                    <option value="2"><?php echo __("Rectangular Image");?>
</option>
                  </select>
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Category");?>

                </label>
                <div class="col-md-10">
                  <select class="form-control" name="category[]" multiple>
                    <option><?php echo __("Select Category");?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Tags");?>

                </label>
                <div class="col-md-10">
                  <input class="form-control" name="tags">
                </div>
              </div>

              <!-- error -->
              <div class="alert alert-danger mb0 x-hidden"></div>
              <!-- error -->
            </div>
            <div class="card-footer text-right">
              <button type="submit" class="btn btn-primary"><?php echo __("Publish");?>
</button>
            </div>
          </div>
        </div>
        <!-- content -->
      </div>
      <!-- content panel -->

    <?php }?>
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="https://kenwheeler.github.io/slick/slick/slick.js" defer=""><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
  
  $('.video_popup_btn').click(function(){
    $('#you_video_url').attr('src',$(this).attr('data-src'));
    $('.blog_video_modal').modal('show');
  }) 

  /* share post */
  $('input[type=radio][name=publish_to]').on('change', function() {
    switch ($(this).val()) {
      case 'timeline':
        $('#js_publish-to-page').hide();
        $('#js_publish-to-group').hide();
        $('#js_publish-to-event').hide();
        break;
      case 'page':
        $('#js_publish-to-page').fadeIn();
        $('#js_publish-to-group').hide();
        $('#js_publish-to-event').hide();
        break;
      case 'group':
        $('#js_publish-to-page').hide();
        $('#js_publish-to-group').fadeIn();
        $('#js_publish-to-event').hide();
        break;
      case 'event':
        $('#js_publish-to-page').hide();
        $('#js_publish-to-group').hide();
        $('#js_publish-to-event').fadeIn();
        break;
    }
  });
  $( document ).ready(function() {

 var url = window.location.href;
 var urls = decodeURIComponent(url);
  const lastItem = urls.substring(urls.lastIndexOf('/') + 1);

   $('li').removeClass('active-tabs');
   $('li[data-val='+lastItem+']').addClass('active-tabs');

     $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      infinite: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 10,
      slidesToScroll: 1,
      arrows: true,
      asNavFor: '.slider-for',
      dots: false,
      centerMode: true,
      infinite: true,
      focusOnSelect: true,
      responsive: [
         {
      breakpoint: 1600,
      settings: {
        slidesToShow: 10
      }
    },
         {
      breakpoint: 1370,
      settings: {
        slidesToShow: 8
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 7
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 6
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2
      }
    }
  ]
    });
    AOS.refresh();
  
    });
<?php echo '</script'; ?>
><?php }
}
