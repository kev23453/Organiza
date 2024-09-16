const msg = document.querySelector('.msg');

setTimeout(() => {
    msg.style.opacity = 0;
    msg.style.transition = "0.2s ease all";
}, 2000);