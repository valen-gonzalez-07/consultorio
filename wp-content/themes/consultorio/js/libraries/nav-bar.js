

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.main-header');
    const triggerScroll = 150;

    window.addEventListener('scroll', () => {
        if (window.innerWidth <= 768) return; 
        
        if (window.scrollY > triggerScroll) {
            header.classList.add('show');
        } else {
            header.classList.remove('show');
        }
    });
});


document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    const body = document.body;

    hamburger.addEventListener('click', () => {
        const isOpen = navLinks.classList.toggle('open');
        hamburger.classList.toggle('active');

        if (isOpen) {
            body.classList.add('no-scroll');
        } else {
            body.classList.remove('no-scroll');
        }
    });

    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('open');
            hamburger.classList.remove('active');
            body.classList.remove('no-scroll');
        });
    });
});



console.log('Nav Bar JS cargado correctamente.');
