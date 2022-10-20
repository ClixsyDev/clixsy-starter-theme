// Main Menu
import { getElement, off } from './utils';

export default function headerInit() {
  const header = getElement('header');
  let isSticked = false;
  document.addEventListener('scroll', e => {
    console.log('scroll;')
    console.log(window.scrollY);
    if (!isSticked && window.scrollY >= 60) {
        header.classList.add('sticked');
        isSticked = true;
    }
        
    if (isSticked && window.scrollY <= 60) {
        header.classList.remove('sticked');
        isSticked = false;
    }
  });
}
