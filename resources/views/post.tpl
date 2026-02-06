{extends file="layout.tpl"}

{block name="content"}
    <div class="container">
        <article class="post-detail">
            <div class="post-header">
                <h1>{$post.title}</h1>
                <div class="post-meta">
                    <span class="meta-item">
                        <i class="fas fa-eye"></i> {$post.views} просмотров
                    </span>
                    <a href="/category?id={$post.category_id}" class="category-link">
                        <i class="fas fa-folder"></i> К категории
                    </a>
                </div>
            </div>

            <div class="post-content">
                {$post.content}
            </div>

            <div class="post-actions">
                <div class="like-section">
                    {if isset($smarty.session.user_id)}
                        <button class="like-btn" data-post-id="{$post.id}" id="like-btn-{$post.id}">
                            {if $post.is_liked}
                                <i class="fas fa-heart" style="color: #ff4757;"></i>
                            {else}
                                <i class="far fa-heart"></i>
                            {/if}
                        </button>
                    {else}
                        <a href="/login" class="like-btn" style="text-decoration: none;">
                            <i class="far fa-heart"></i>
                        </a>
                    {/if}
                </div>

                <div class="navigation-buttons">
                    <a href="/" class="btn btn-back">
                        <i class="fas fa-arrow-left"></i> На главную
                    </a>
                    <a href="/category?id={$post.category_id}" class="btn btn-category">
                        <i class="fas fa-folder"></i> Все статьи категории
                    </a>
                </div>
            </div>
        </article>
    </div>
{/block}