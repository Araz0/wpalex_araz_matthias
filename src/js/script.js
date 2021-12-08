const button = document.getElementsByClassName('header__hamburger')[0];
const nav = document.getElementsByClassName('header__navigation')[0];
button.onclick = () => nav.classList.toggle('isOpen');
