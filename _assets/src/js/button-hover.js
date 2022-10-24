import { getElements, ifSelectorExist } from "./utils";


export const hoverOnButton = () => {
    let constBtns = getElements('.btn.no-text');
    if (ifSelectorExist(constBtns) && constBtns.length > 0) {
      Array.from(constBtns).forEach((item) => {
        item.addEventListener('mouseover', () => {
          let btnFadeIn = item.querySelector('.btn-fade-in');
          if (ifSelectorExist(btnFadeIn)) {
            btnFadeIn.classList.add('opacity-100');
            btnFadeIn.classList.remove('opacity-0');
            btnFadeIn.style.width = '28px';
            btnFadeIn.style.marginLeft = '8px';
          }
        });
  
        item.addEventListener('mouseout', () => {
          let btnFadeIn = item.querySelector('.btn-fade-in');
  
          if (ifSelectorExist(btnFadeIn)) {
            btnFadeIn.classList.remove('opacity-100');
            btnFadeIn.classList.add('opacity-0');
            btnFadeIn.style.width = '0px';
            btnFadeIn.style.marginLeft = '0px';
          }
        });
      });
    }
  };