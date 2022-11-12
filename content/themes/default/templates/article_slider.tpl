 <div class="blog-content">
        <div class="text">{$article['article']['text_snippet']|truncate:400}</div>
        <div>
          <div class="post-avatar">
            <div class="post-avatar-picture small" style="background-image:url('{$article['post_author_picture']}');">
            </div>
          </div>
          <div class="post-meta">
            <span class="text-link">
              {$article['post_author_name']}
            </span>
            <div class="post-time">
              <span class="js_moment" data-time="{$article['time']}">{$article['time']}</span>
            </div>
          </div>
        </div>
</div>