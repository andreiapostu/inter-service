function adjustCallInfoFontSize() {
    const container = document.querySelector(".call-info");
    const items = container.querySelectorAll('.call-info-item');

    const containerWidth = container.offsetWidth;

    items.forEach((item) => {
        let fontSize = 400;
        item.style.fontSize = `${fontSize}px`;

        while (item.scrollWidth > containerWidth && fontSize > 10) {
            fontSize -= 1;
            item.style.fontSize = `${fontSize}px`;
        }

        if (item.id === "call-info-header")
            item.style.fontSize = `${fontSize * 0.8}px`;
    });
}

window.addEventListener('load', () => setTimeout(adjustCallInfoFontSize(), 300));
window.addEventListener('resize', () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(adjustCallInfoFontSize, 300); // Attendi 300ms prima di ricalcolare
});
