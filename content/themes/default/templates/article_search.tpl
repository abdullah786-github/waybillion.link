{include file='_head.tpl'}
{include file='_header.tpl'}
<style>
.col-lg-4 .post-replace, .col-lg-4 .post-media-image, .col-lg-4 .post-stats, .col-lg-4 .post-footer, .col-lg-4 .js_user-popover, .col-lg-4 .post-title, .col-lg-4 .post-actions.clearfix, .col-lg-4 .float-right.dropdown, .col-lg-4 .posts-filter { 
    display: none;
}
.col-lg-4 .post-media-meta, .col-lg-4 .post-media {
    background: #fff;
}
.col-lg-4 .post-avatar {
    float: right;
}
.col-lg-4 .articles-widget-title {
    border-bottom: 0px solid #aaa;
    display: block;
    background: orange;
    color: #fff;
    padding: 10px 20px;
    border-radius: 7px;
}
.col-lg-4 .articles-widget-header {
    border-bottom: 0px solid #e1e1e1;
    margin-bottom: 0px;
}
.col-lg-4 .post-media-meta .title {
    display: block;
    font-size: 16px;
    font-weight: 600;
    line-height: 22px;
    word-break: break-word;
    color: orange;
}
.col-lg-4 .post {
    background: #fff;
    margin-bottom: 0px;
    box-shadow: none;
    }
    .col-lg-4 a.post_text_custom {
    color: var(--link-color);
}
.col-lg-4 .post-body {
    margin: 0px 16px;
    border-bottom: 1px solid #00000026;
}
.col-lg-4 .post-body:last-child{
  border-bottom: 0px solid #00000026;
}
.col-lg-4  .post-media-meta {
    padding: 0px 15px 15px;
    }
</style> 
<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="{$system['system_url']}/content/themes/{$system['theme']}/images/headers/undraw_file_searching_duff.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2>{__("Search")}</h2>
    <p class="text-xlg">{__("Discover new people, create new connections and make new friends")}</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container offcanvas" style="margin-top: -45px;">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-sm-none offcanvas-sidebar mt30">
      {include file='_sidebar.tpl'}
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 offcanvas-mainbar">
      <!-- search form -->
      <div class="card">
        <div class="card-body">
          <form class="article_search">
            <div class="form-group mb0">
              <div class="input-group">
                <input type="text" class="form-control" name="query" placeholder='{__("Search")}' value="{$query}">
                <div class="input-group-append">
                  <button type="submit" name="submit" class="btn btn-danger plr30"><i class="fas fa-search mr10"></i>{__("Search")}</button>
                </div>
              </div>
            </div>
          </form>
        </div>
		<!--<ul class="article-categories clearfix">
              {foreach $blogs_categories as $category}
                <li>
                  <a class="article-category" href="{$system['system_url']}/blogs/category/{$category['category_id']}/{$category['category_url']}">
                    {__($category['category_name'])}
                  </a>
                </li>
              {/foreach}
            </ul>-->
      </div>
      <!-- search form -->

      <div class="row">
        <!-- left panel -->
        <div class="col-lg-8">
          <!-- panel nav -->
          <ul class="nav nav-pills nav-fill nav-search mb10">
            <!--<li class="nav-item">
              <a class="nav-link rounded-pill {if $tab == "" || $tab == "posts"}active{/if}" href="{$system['system_url']}/search/{if $hashtag}hashtag/{/if}{$query}/posts">
                <i class="fa fa-newspaper mr5"></i><strong>{__("Posts")}</strong>
              </a>
            </li>
            {if $system['blogs_enabled']}
              <li class="nav-item">
                <a class="nav-link rounded-pill {if $tab == "" || $tab == "articles"}active{/if}" href="{$system['system_url']}/search/{if $hashtag}hashtag/{/if}{$query}/articles">
                  <i class="fab fa-blogger-b mr5"></i><strong>{__("Articles")}</strong>
                </a>
              </li>
            {/if}
            <li class="nav-item">
              <a class="nav-link rounded-pill {if $tab == "users"}active{/if}" href="{$system['system_url']}/search/{$query}/users">
                <i class="fa fa-user mr5"></i><strong>{__("Users")}</strong>
              </a>
            </li>
            {if $system['pages_enabled']}
              <li class="nav-item">
                <a class="nav-link rounded-pill {if $tab == "pages"}active{/if}" href="{$system['system_url']}/search/{$query}/pages">
                  <i class="fa fa-flag mr5"></i><strong>{__("Pages")}</strong>
                </a>
              </li>
            {/if}
            {if $system['groups_enabled']}
              <li class="nav-item">
                <a class="nav-link rounded-pill {if $tab == "groups"}active{/if}" href="{$system['system_url']}/search/{$query}/groups">
                  <i class="fa fa-users mr5"></i><strong>{__("Groups")}</strong>
                </a>
              </li>
            {/if}
            {if $system['events_enabled']}
              <li class="nav-item">
                <a class="nav-link rounded-pill {if $tab == "events"}active{/if}" href="{$system['system_url']}/search/{$query}/events">
                  <i class="fa fa-calendar mr5"></i><strong>{__("Events")}</strong>
                </a>
              </li>
            {/if}-->
          </ul>
          <!-- panel nav -->
{if count($results) >= 10}
<h5>Showing 10 posts from {count($results)}</h5>
{else}
<h5>Showing {count($results)} posts from {count($results)}</h5>
{/if}
          <div class="tab-content">

            <div class="blogs-wrapper">
              {if $results}
                <ul>
                  {if $tab == "" || $tab == "posts"}
                    <!-- posts -->
                    {foreach $results as $post}
                      {include file='__feeds_post.tpl'}
                    {/foreach}
                    <!-- posts -->
                  {elseif $tab == "articles"}
                    <!-- articles -->
                    {foreach $results as $post}
                      {include file='__feeds_post.tpl'}
                    {/foreach}
                    <!-- articles -->
                  {elseif $tab == "users"}
                    <!-- users -->
                    {foreach $results as $_user}
                      {include file='__feeds_user.tpl' _tpl="list" _connection=$_user['connection']}
                    {/foreach}
                    <!-- users -->
                  {elseif $tab == "pages"}
                    <!-- pages -->
                    {foreach $results as $_page}
                      {include file='__feeds_page.tpl' _tpl="list"}
                    {/foreach}
                    <!-- pages -->
                  {elseif $tab == "groups"}
                    <!-- groups -->
                    {foreach $results as $_group}
                      {include file='__feeds_group.tpl' _tpl="list"}
                    {/foreach}
                    <!-- groups -->
                  {elseif $tab == "events"}
                    <!-- events -->
                    {foreach $results as $_event}
                      {include file='__feeds_event.tpl' _tpl="list"}
                    {/foreach}
                    <!-- events -->
                  {/if}
                </ul>

                {if count($results) >= $system['search_results']}
                  <!-- see-more -->
                  <div data-is-login="{$user->_logged_in}" class="alert alert-post see-more mb20 js_see-more js_see-more-infinite" data-get="search_{$tab}" data-filter="{$query}">
                    <span>{__("More Results")}</span>
                    <div class="loader loader_small x-hidden"></div>
                  </div>
                  <!-- see-more -->
                {/if}
              {else}
                {include file='_no_data.tpl'}
              {/if}
            </div>

          </div>
        </div>
        <!-- left panel -->

        <!-- right panel -->
        
        <div class="col-lg-4">
             <div>
              {include file='_ads_campaigns.tpl'}
              {include file='_ads.tpl'}
              {include file='_widget.tpl'}
             </div>        
             
             
			<div class="articles-widget-header">
              <div class="articles-widget-title">{__("Popular Posts")}</div>
            </div>
            <div class="mb10">
              {include file='_posts.tpl' _get="popular" _title=__("Sidebar Popular")}
            </div>
          <!-- search-->
            <div class="articles-widget-header">
              <div class="articles-widget-title">{__("Search")}</div>
            </div>
            <div class="mb10">
              <form class="article_search">
                <div class="input-group">
                  <input type="text" class="form-control" name="query" value="{$query}">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-danger">{__("Search")}</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
        
        
        
        <!-- right panel -->
      </div>
    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}