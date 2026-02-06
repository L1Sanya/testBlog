{extends file="layout.tpl"}

{block name="content"}
    <div class="container">
        <h1>Категории статей</h1>

        {foreach $categories as $category}
            <section class="category-section">
                <div class="category-header">
                    <div class="category-info">
                        <h2>{$category.name}</h2>
                        <p>{$category.description}</p>
                    </div>
                    <a href="/category?id={$category.id}" class="view-all-btn">
                        <i class="fas fa-arrow-right"></i> Все статьи
                    </a>
                </div>

                {if !empty($category.posts)}
                    <div class="posts-row">
                        {foreach $category.posts as $post}
                            <div class="post-card">
                                <div class="post-img">
                                    <img src="/images/placeholder.png" alt="{$post.title}">
                                </div>
                                <div class="post-content">
                                    <h3><a href="/post?id={$post.id}">{$post.title}</a></h3>
                                    <p class="post-excerpt">{$post.content|truncate:100:"..."}</p>
                                    <div class="post-footer">
                                        <div class="post-stats">
                                            <span class="stat-item">
                                                <i class="fas fa-eye"></i> {$post.views}
                                            </span>
                                        </div>
                                        <a href="/post?id={$post.id}" class="read-btn">
                                            Читать <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                {else}
                    <div class="no-posts">
                        <p>В этой категории пока нет статей</p>
                    </div>
                {/if}
            </section>
        {/foreach}
    </div>
{/block}