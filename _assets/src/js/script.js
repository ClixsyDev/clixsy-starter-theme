import lozad from 'lozad';
import { getElement, getElements, ifSelectorExist, slideDown, slideUp, slideToggle, documentReady } from './utils';
import mainMenu from './menu.js';
const observer = lozad();
observer.observe();

const StickyMenu = () => {
  window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 150);
  });
};

documentReady(() => {
  mainMenu();
  StickyMenu();
});
