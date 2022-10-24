import mainMenu from './menu';
import headerInit from './header';
import { getElement, ifSelectorExist, ready } from './utils';
import testimonialSlider from './sliders';
import { formEntry } from './form_entry';
import { hoverOnButton } from './button-hover';

ready(() => {
  mainMenu();
  headerInit();
  formEntry();
  hoverOnButton();
  faqOpen();
  btnMore();
  btnMoreEducation();
});
let faqOpen = () => {
  let faqItem = document.querySelectorAll('.faq-block');

  Array.from(faqItem).forEach((e) => {
    e.addEventListener('click', () => {
      let hiddenPart = e.querySelector('.hidden-part');
      let title = e.querySelector('.title-faq');
      let moreBtn = getElement('.faq-without-image__btn');

      if (ifSelectorExist(moreBtn)) {
        moreBtn.addEventListener('click', () => {
          let hiddenImage = getElement('.hidden_faq_without_image');
          moreBtn.textContent = '- show less';
          if (moreBtn.classList.contains('clicked')) {
            hiddenImage.classList.add('hidden');
            moreBtn.textContent = '+ show more...';
            moreBtn.classList.remove('clicked');
          } else {
            if (ifSelectorExist(hiddenImage)) {
              moreBtn.classList.add('clicked');
              hiddenImage.classList.remove('hidden');
            }
          }
        });
      }
      Array.from(faqItem).forEach((e) => {
        if (!e.querySelector('.hidden-part').classList.contains('hidden') && e.querySelector('.hidden-part').classList.contains('opened')) {
          e.querySelector('.hidden-part').classList.add('hidden');
          e.querySelector('.title-faq').classList.remove('open-faq');
        }
      });

      if (hiddenPart.classList.contains('hidden')) {
        hiddenPart.classList.remove('hidden');
        hiddenPart.classList.add('opened');
        title.classList.add('open-faq');
      } else {
        hiddenPart.classList.add('hidden');
        hiddenPart.classList.remove('opened');
        title.classList.remove('open-faq');
      }
    });
  });
};

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
