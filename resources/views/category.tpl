{extends file="layout.tpl"}

{block name="content"}
    <div class="category-hero">
        <h2>{$category.name}</h2>
        <p>{$category.description}</p>
        <div class="category-stats">
            <span><i class="fas fa-newspaper"></i> Всего статей: {$total_pages*10|default:0}</span>
        </div>
    </div>

    <div class="sort-controls">
        <form method="get" class="sort-form">
            <label><i class="fas fa-sort-amount-down"></i> Сортировать по:</label>
            <select name="sort" onchange="this.form.submit()" class="sort-select">
                <option value="date" {if $sort=='date'}selected{/if}>Дате публикации</option>
                <option value="views" {if $sort=='views'}selected{/if}>Просмотрам</option>
            </select>
            <input type="hidden" name="id" value="{$category.id}">
        </form>
    </div>

    {if !empty($posts)}
        <div class="category-posts">
            {foreach $posts as $post}
                <article class="post-item">
                    <h3><a href="/post?id={$post.id}">{$post.title}</a></h3>
                    <p class="post-excerpt">{$post.content|truncate:150:"..."}</p>
                    <div class="post-item-footer">
                        <div class="post-item-stats">
                            <span><i class="fas fa-eye"></i> {$post.views}</span>
                            <span><i class="far fa-calendar"></i> {$post.created_at|date_format:"%d.%m.%Y"}</span>
                        </div>
                        <a href="/post?id={$post.id}" class="read-link">
                            Читать <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            {/foreach}
        </div>
    {else}
        <div class="no-posts">
            <i class="fas fa-newspaper fa-3x"></i>
            <h3>В этой категории пока нет статей</h3>
            <a href="/" class="btn">Вернуться на главную</a>
        </div>
    {/if}

    {if $total_pages > 1}
        <div class="pagination">
            {if $current_page > 1}
                <a href="/category?id={$category.id}&page={$current_page-1}&sort={$sort}" class="page-prev">
                    <i class="fas fa-chevron-left"></i> Назад
                </a>
            {/if}

            {for $i=1 to $total_pages}
                {if $i == $current_page}
                    <span class="page-current">{$i}</span>
                {else}
                    <a href="/category?id={$category.id}&page={$i}&sort={$sort}" class="page-link">{$i}</a>
                {/if}
            {/for}

            {if $current_page < $total_pages}
                <a href="/category?id={$category.id}&page={$current_page+1}&sort={$sort}" class="page-next">
                    Вперед <i class="fas fa-chevron-right"></i>
                </a>
            {/if}
        </div>
    {/if}
{/block}