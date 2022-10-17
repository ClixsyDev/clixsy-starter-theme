import mainMenu from './menu';
import { getElement, ifSelectorExist, ready } from './utils';
import testimonialSlider from './sliders';
import Marquee from 'vanilla-marquee';

ready(() => {
  mainMenu();
});

let faqOpen = () => {
  let faqItem = document.querySelectorAll('.faq-block');

  Array.from(faqItem).forEach((e) => {
    e.addEventListener('click', () => {
      let hiddenPart = e.querySelector('.hidden-part');
      let title = e.querySelector('.title-faq');

      Array.from(faqItem).forEach((e) => {
        if (!e.querySelector('.hidden-part').classList.contains('hidden') && !e.querySelector('.hidden-part').classList.contains('opened')) {
          e.querySelector('.hidden-part').classList.add('hidden');
        }
      });

      if (hiddenPart.classList.contains('hidden')) {
        hiddenPart.classList.remove('hidden');
        hiddenPart.classList.add('opened');

        title.classList.add('open-faq');
      } else {
        hiddenPart.classList.add('hidden');
        title.classList.remove('open-faq');
        hiddenPart.classList.remove('opened');
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

const marqueEl1 = document.getElementById('marquee');
if (document.body.contains(marqueEl1)) {
  const marqueOne = new Marquee(marqueEl1, {
    css3easing: 'linear',
    speed: window.innerWidth < 768 ? 60 : 100,
    gap: 100,
    delayBeforeStart: 0,
    direction: 'left',
    duplicated: true,
    duration: 5000,
    startVisible: true,
  });
  marqueOne.resume();
}
