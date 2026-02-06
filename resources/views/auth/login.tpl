{extends file="layout.tpl"}

{block name=content}
    <div style="max-width: 400px; margin: 0 auto;">
        <h2 style="color: #2d3748; text-align: center; margin-bottom: 2rem;">Вход</h2>

        <form method="post" action="/login" style="display: flex; flex-direction: column; gap: 1rem;">
            <input type="email" name="email" placeholder="Email" required style="padding: 12px; border: 2px solid #e2e8f0; border-radius: 5px;">
            <input type="password" name="password" placeholder="Пароль" required style="padding: 12px; border: 2px solid #e2e8f0; border-radius: 5px;">
            <button type="submit" style="background: #667eea; color: white; border: none; padding: 12px; border-radius: 5px; cursor: pointer;">Войти</button>
        </form>

        <p style="text-align: center; margin-top: 1rem; color: #718096;">
            Нет аккаунта? <a href="/register" style="color: #667eea;">Регистрация</a>
        </p>
    </div>
{/block}