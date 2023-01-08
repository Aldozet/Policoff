const navicon = document.querySelector('.navicon');
const menu = document.querySelector('nav ul');

navicon.addEventListener('click', () => {
  menu.classList.toggle('open');
});