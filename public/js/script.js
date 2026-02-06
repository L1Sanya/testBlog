document.addEventListener('DOMContentLoaded', function() {

    function toggleLike(postId, button) {
        if (!postId || !button) return;

        var originalHTML = button.innerHTML;

        // Показываем загрузку
        button.innerHTML = '<span class="spinner"></span>';
        button.disabled = true;

        fetch('/post-like', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'post_id=' + postId
        })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                if (data.success) {
                    // Меняем иконку
                    if (data.is_liked) {
                        button.innerHTML = '<i class="fas fa-heart" style="color: #ff4757;"></i>';
                    } else {
                        button.innerHTML = '<i class="far fa-heart"></i>';
                    }
                } else {
                    button.innerHTML = originalHTML;
                    if (data.message && data.message.indexOf('войти') === -1) {
                        alert(data.message);
                    }
                }
            })
            .catch(function(error) {
                console.error('Like error:', error);
                button.innerHTML = originalHTML;
                alert('Ошибка сети');
            })
            .finally(function() {
                button.disabled = false;
            });
    }

    // Вешаем обработчики на кнопки лайков
    var likeButtons = document.querySelectorAll('.like-btn');
    likeButtons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            var postId = this.getAttribute('data-post-id');
            if (postId) {
                toggleLike(postId, this);
            }
        });
    });

    // Анимация для кнопок
    var buttons = document.querySelectorAll('.btn, .view-all-btn, .read-btn');
    buttons.forEach(function(button) {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });

        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});