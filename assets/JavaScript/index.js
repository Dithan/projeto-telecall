function menuShow() {
  let menuMobile = document.querySelector('.mobile-menu');
  if (menuMobile.classList.contains('open')) {
    menuMobile.classList.remove('open');
  } else {
    menuMobile.classList.add('open');
  }

  let hamburguer = document.querySelector('#hamburguer');
  hamburguer.classList.toggle('ativo');
}
