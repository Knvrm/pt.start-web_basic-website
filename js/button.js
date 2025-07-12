document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.getElementById('toggleImageBtn');
    const imageContainer = document.getElementById('dynamicImageContainer');
    
    toggleBtn.addEventListener('click', function() {
        // Переключаем видимость изображения
        imageContainer.classList.toggle('d-none');
        
        // Анимация появления/исчезновения
        if (!imageContainer.classList.contains('d-none')) {
            imageContainer.style.opacity = 0;
            imageContainer.style.transition = 'opacity 0.5s ease';
            setTimeout(() => {
                imageContainer.style.opacity = 1;
            }, 10);
        }
        
        // Изменяем текст кнопки
        const isHidden = imageContainer.classList.contains('d-none');
        toggleBtn.textContent = isHidden ? 'Показать изображение' : 'Скрыть изображение';
    });
});