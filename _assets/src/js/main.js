import mainMenu from './menu';
import { getElement, ifSelectorExist, ready } from './utils';
import testimonialSlider from './sliders';
import { formEntry } from './form_entry';


ready(() => {
  mainMenu();

  formEntry();
});
let faqOpen = () => {
  let faqItem = document.querySelectorAll('.faq-block');

  Array.from(faqItem).forEach((e) => {
    e.addEventListener('click', () => {
      let hiddenPart = e.querySelector('.hidden-part');
      let title = e.querySelector('.title-faq');

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
faqOpen();

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
btnMore();

let btnMoreEducation = () => {
  let hiddenBlock = document.querySelector('.hidden-text-education');
  let btn = document.querySelector('.more-btn-education');

  if (ifSelectorExist(btn) && ifSelectorExist(hiddenBlock)) {
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
btnMoreEducation();
