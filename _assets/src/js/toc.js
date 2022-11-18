import { getElement, getElements, ifSelectorExist } from "./utils";


export const tocAnchor = () => {
    let tocLinks = getElements('.table_of_content a')
    if (ifSelectorExist(tocLinks)) {
        Array.from(tocLinks).forEach(item => {
            item.addEventListener('click', e => {
                e.preventDefault();
                const selector = item.getAttribute('href');
                const selectorItem = getElement(selector)
                selectorItem.style.backgroundColor = '#e3e3e3';
                selectorItem.style.transition = '0.5s all';
                setTimeout(() => {
                    selectorItem.style.backgroundColor = 'transparent';
                }, 700)
                window.scrollTo({
                  top: document.querySelector(selector).offsetTop - document.querySelector('header').offsetHeight,
                  behavior: 'smooth',
                });
              });
        })
    }
  };