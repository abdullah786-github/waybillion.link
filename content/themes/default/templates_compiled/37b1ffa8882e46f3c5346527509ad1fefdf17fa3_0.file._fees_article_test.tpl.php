<?php
/* Smarty version 4.2.0, created on 2022-11-11 13:54:27
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/_fees_article_test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_636de393f1bc76_55101043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37b1ffa8882e46f3c5346527509ad1fefdf17fa3' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/_fees_article_test.tpl',
      1 => 1668146065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__reaction_emojis.tpl' => 2,
    'file:__svg_icons.tpl' => 3,
    'file:__feeds_post.comments.category.tpl' => 1,
  ),
),false)) {
function content_636de393f1bc76_55101043 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u246756914/domains/waybillion.link/public_html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['_tpl']->value == "featured") {?>
  <div class="<?php if ($_smarty_tpl->tpl_vars['_iteration']->value == 1) {?>col-sm-12 col-md-12 col-lg-8<?php } else { ?>col-sm-6 col-md-6 col-lg-4<?php }?>" data-aos="fade-up" data-aos-duration="1000">
    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="blog-container <?php if ($_smarty_tpl->tpl_vars['_iteration']->value == 1) {?>primary<?php }?>">
      <div class="blog-image">
        <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_cover'];?>
">
        <div class="blog-more">         
        <span><?php echo __("More");?>
</span>
      </div>
      </div>
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
<?php } else { ?>
  <div class="post-media list post" data-id="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
    	<div class="post-media-meta">
          <h2><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
</a></h2>
          <div class="info">
            <?php echo __("By");?>

            <span class="js_user-popover pr10" data-type="<?php echo $_smarty_tpl->tpl_vars['article']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['article']->value['user_id'];?>
">
              <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_name'];?>
</a>
            </span>
            <i class="fa fa-clock pr5"></i><span class="js_moment pr10" data-time="<?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
</span>
            <i class="fa fa-comments pr5"></i><span class="pr10"><?php echo $_smarty_tpl->tpl_vars['article']->value['comments'];?>
</span>
            <i class="fa fa-eye pr5"></i><span class="pr10"><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['views'];?>
</span>
          </div>
        </div>
    
    
        <div class="post-media-image-wrapper">
          <a class="post-media-image" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
">
            <div style="padding-top: 50%; background-position: center center; background-size: cover; background-image:url('<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_cover'];?>
');"></div>
          </a>
          <div class="post-media-image-meta" style="display:none;">
            <a class="article-category <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>small<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['category_url'];?>
">
              <?php echo __($_smarty_tpl->tpl_vars['article']->value['article']['category_name']);?>

            </a>
          </div>
        </div>
        
    <div class="post-media-meta">
      <div class="text mb5 js_readmore" dir="auto">
        <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>
          <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['article']['parsed_text'],100);?>

        <?php } else { ?>
          <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['article']['parsed_text'],5000);?>

        <?php }?>
		
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
				  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/hashtag/<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
"><?php echo __($_smarty_tpl->tpl_vars['tag']->value);?>
</a>
				</li>
			  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		  </div>
		<?php }?>
      </div>
   </div>
   
	<div class="post-text-translation x-hidden" dir="auto"></div>

 <!-- post footer -->

	  <!-- post actions -->
      <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['_get']->value != "posts_information") {?>
        <div class="post-actions clearfix">
          <!-- reactions -->
          <div class="action-btn unselectable reactions-wrapper <?php if ($_smarty_tpl->tpl_vars['article']->value['i_react']) {?>js_unreact-post<?php }?>" data-reaction="<?php echo $_smarty_tpl->tpl_vars['article']->value['i_reaction'];?>
">
            <!-- reaction-btn -->
            <div class="reaction-btn">
              <?php if (!$_smarty_tpl->tpl_vars['article']->value['i_react']) {?>
                <div class="reaction-btn-icon">
                  <i class="far fa-smile fa-lg fa-fw"></i>
                </div>
                <span class="reaction-btn-name"><?php echo __("React");?>
</span>
              <?php } else { ?>
                <div class="reaction-btn-icon">
                  <div class="inline-emoji no_animation">
                    <?php $_smarty_tpl->_subTemplateRender('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->tpl_vars['article']->value['i_reaction']), 0, false);
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
$__foreach_reaction_1_saved = $_smarty_tpl->tpl_vars['reaction'];
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
$_smarty_tpl->tpl_vars['reaction'] = $__foreach_reaction_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <!-- reactions-container -->
          </div>
          <!-- reactions -->

          <!-- comment -->
          <div class="action-btn js_comment <?php if ($_smarty_tpl->tpl_vars['article']->value['comments_disabled']) {?>x-hidden<?php }?>">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"comment",'width'=>"16px",'height'=>"16px",'class'=>"mr5"), 0, false);
?>
            <span><?php echo __("Comment");?>
</span>
          </div>
          <!-- comment -->

          <!-- share -->
            <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"share",'width'=>"16px",'height'=>"16px",'class'=>"mr5"), 0, true);
?>
              <span><?php echo __("Share");?>
</span>
            </div>

          <!-- save post -->
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
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
      <div class="post-footer <?php if (!$_smarty_tpl->tpl_vars['standalone']->value) {?>x-hidden<?php }?>">
        <!-- comments -->
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.comments.category.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!-- comments -->
      </div>
    <?php } else { ?>
      <div class="post-footer">
        <div class="post-comments">
          <div class="pb10">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin"><?php echo __("Please log in to like and comment!");?>
</a>
          </div>
		  <?php if ($_smarty_tpl->tpl_vars['article']->value['privacy'] == "public" || ($_smarty_tpl->tpl_vars['article']->value['in_group'] && $_smarty_tpl->tpl_vars['article']->value['group_privacy'] == "public") || ($_smarty_tpl->tpl_vars['article']->value['in_event'] && $_smarty_tpl->tpl_vars['article']->value['event_privacy'] == "public")) {?>
            <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"share",'width'=>"16px",'height'=>"16px",'class'=>"mr5"), 0, true);
?>
              <b><?php echo __("Share");?>
</b>
            </div>
          <?php }?>
        </div>
      </div>
    <?php }?>
         <?php } else { ?>
         
        <div class="post-footer" id="article-comments">
                    <div class="mb20" style="margin-top: 20px;">
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
            	
            	     <div class="text-left">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin"><?php echo __("Please log in to like, share and comment!");?>
</a>
                    </div>
            </div>

            <?php }?>
      <!-- post actions -->
  </div>
<?php }
}
}
