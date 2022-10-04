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