import {mainMenu, dropdownMenu} from './menu';
import headerInit from './header';
import { getElement, getElements, ifSelectorExist, ready } from './utils';
import testimonialSlider from './sliders';
import { formEntry } from './form_entry';
import { hoverOnButton } from './button-hover';

ready(() => {
  mainMenu();
  dropdownMenu();
  headerInit();
  formEntry();
  hoverOnButton();
  btnMore();
  btnMoreEducation();
  initFAQ();

});


/* FAQ start */
const initFAQ = () => {
  const acc = getElements('.faq__header')
  if (acc && acc.length) {
    for (let i = 0; i < acc.length; i++) {
      acc[i].addEventListener('click', function () {
        if (this.parentNode.classList.contains('faq__position__active')) {
          this.nextElementSibling.style.maxHeight = null
          this.parentNode.classList.remove('faq__position__active')
        } else {
          for (let j = 0; j < acc.length; j++) {
            acc[j].parentNode.classList.remove('faq__position__active')
            acc[j].nextElementSibling.style.maxHeight = null
          }
          this.parentNode.classList.add('faq__position__active')
          const panel = this.nextElementSibling
          panel.style.maxHeight = panel.scrollHeight + 'px'
        }
      })
    }
  }
    let moreBtn = getElement('.faq-without-image__btn');
  if (ifSelectorExist(moreBtn)) {
    moreBtn.addEventListener('click', () => {
      let hiddenFaqImageLeft = getElement('.hidden_faq_image_left');
      moreBtn.textContent = '- show less';
      if (moreBtn.classList.contains('clicked')) {
        hiddenFaqImageLeft.classList.add('hidden');
        moreBtn.textContent = '+ show more...';
        moreBtn.classList.remove('clicked');
      } else {
        if (ifSelectorExist(hiddenFaqImageLeft)) {
          moreBtn.classList.add('clicked');
          hiddenFaqImageLeft.classList.remove('hidden');
        }
      }
    });
  }
}
/* FAQ end */


let btnMore = () => {
  let hiddenBlock = document.querySelector('.hidden-text');
  let btn = document.querySelector('.more-btn');
  let faqMore = () => {
    let hiddenBlock = document.querySelector('.hidden-faqs');
    let btn = document.querySelector('.more-btn-faq');
    if (btn) {
      btn.addEventListener('click', () => {
        hiddenBlock.classList.toggle('hidden');
        event.preventDefault();

        if (hiddenBlock.classList.contains('hidden')) {
          btn.textContent = 'read more...';
        } else {
          btn.textContent = 'show less...';
        }
      });
    }
  };
};

let btnMoreEducation = () => {
  let hiddenBlock = document.querySelector('.hidden-text-education');
  let btn = document.querySelector('.more-btn-education');

  if (ifSelectorExist(btn) && ifSelectorExist(hiddenBlock)) {
    btn.addEventListener('click', (event) => {
      hiddenBlock.classList.toggle('hidden');
      event.preventDefault();

      if (hiddenBlock.classList.contains('hidden')) {
        btn.textContent = 'read more...';
      } else {
        btn.textContent = 'show less...';
      }
    });
  }
};
btnMoreEducation();

const nextArrow = () => {
  const arrows = Array.from(document.querySelectorAll('[data-go-to]'));
  arrows.map(arrow => {
    arrow.addEventListener('click', e => {
      e.preventDefault();
      const selector = arrow.getAttribute('data-go-to');
      window.scrollTo({
        top: document.querySelector(selector).offsetTop - document.querySelector('header').offsetHeight,
        behavior: 'smooth',
      });
    });
  });
}
nextArrow();
