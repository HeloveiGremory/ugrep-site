document.querySelectorAll('.presentation').forEach(div => {
    const url = div.style.backgroundImage.slice(5, -2); // убираем url("...")
    const img = new Image();
    img.src = url;

    img.onload = () => {
        const ratio = img.height / img.width;
        div.style.height = div.offsetWidth * ratio + 'px'; // высота = ширина * соотношение
    };

    // Если ресайз окна
    window.addEventListener('resize', () => {
        div.style.height = div.offsetWidth * (img.height / img.width) + 'px';
    });
});
