import mainMenu from './menu';
import {getElement, ready} from './utils';
import testimonialSlider from './sliders';

ready(() => {
    mainMenu();
});

let faqOpen = () => {
    let faqItem = document.getElementsByClassName("faq-block");
    Array.from(faqItem).forEach(e => {
        e.addEventListener('click', () => {
            let hiddenPart = e.querySelector(".hidden-part");
            let title = e.querySelector(".title-faq");

            hiddenPart.classList.toggle('visible');
            title.classList.toggle('open-faq');

            if ( hiddenPart.classList.contains('hidden') ) {
              hiddenPart.classList.remove("hidden");
              hiddenPart.classList.add("visible");
            } else {
              hiddenPart.classList.add("hidden");
              hiddenPart.classList.remove("visible");
            }
        })
    })
  };
faqOpen();

let btnMore = () => {
  let hiddenBlock = document.querySelector(".hidden-text");
  let btn = document.querySelector(".more-btn");
  
  btn.addEventListener('click', () => {
    hiddenBlock.classList.toggle('hidden');
    event.preventDefault();

    if (hiddenBlock.classList.contains('hidden')) {
      btn.textContent = '+more';
    } else {
      btn.textContent = 'less';
    }
  })

};
btnMore();

let btnMoreEducation = () => {
  let hiddenBlock = document.querySelector(".hidden-text-education");
  let btn = document.querySelector(".more-btn-education");
  
  btn.addEventListener('click', () => {
    hiddenBlock.classList.toggle('hidden');
    event.preventDefault();

    if (hiddenBlock.classList.contains('hidden')) {
      btn.textContent = '+more';
    } else {
      btn.textContent = 'less';
    }
  })

};
btnMoreEducation();