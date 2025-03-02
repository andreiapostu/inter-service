const mobileMenuButton = document.getElementById('mobile-menu-button');
const closeMenuButton = document.getElementById('close-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
const mobileMenuLinks = document.querySelectorAll('#mobile-menu a');

function openMobileMenu() {
    mobileMenu.classList.remove('translate-x-full');
    mobileMenu.classList.add('translate-x-0');
    
    mobileMenuOverlay.classList.remove('hidden');
    
    setTimeout(() => {
        mobileMenuOverlay.style.opacity = 1;
    }, 10);
}

function closeMobileMenu() {
    mobileMenu.classList.remove('translate-x-0');
    mobileMenu.classList.add('translate-x-full');

    mobileMenuOverlay.style.opacity = 0;

    mobileMenuOverlay.addEventListener('transitionend', function onTransitionEnd() {
        mobileMenuOverlay.classList.add('hidden');
        mobileMenuOverlay.removeEventListener('transitionend', onTransitionEnd);
    });
}

mobileMenuLinks.forEach(link => {
    link.addEventListener('click', closeMobileMenu);
});

mobileMenuButton.addEventListener('click', openMobileMenu);
closeMenuButton.addEventListener('click', closeMobileMenu);
mobileMenuOverlay.addEventListener('click', closeMobileMenu);
