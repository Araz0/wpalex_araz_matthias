(() => {
  // src/js/script.js
  var button = document.getElementsByClassName("header__hamburger")[0];
  var nav = document.getElementsByClassName("header__navigation")[0];
  button.onclick = () => nav.classList.toggle("isOpen");
})();
