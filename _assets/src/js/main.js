import mainMenu from './menu';
import {getElement, ready} from './utils';
import testimonialSlider from './sliders';

ready(() => {
    mainMenu();
});

let faqOpen = () => {
    let faqItem = document.querySelectorAll(".faq-block");
 
    Array.from(faqItem).forEach(e => {
        e.addEventListener('click', () => {
            let hiddenPart = e.querySelector(".hidden-part");
            let title = e.querySelector(".title-faq");


            Array.from(faqItem).forEach(e => {
                if (!e.querySelector('.hidden-part').classList.contains('hidden') && !e.querySelector('.hidden-part').classList.contains('opened')) {
                    e.querySelector('.hidden-part').classList.add('hidden');
                }
            })

            if ( hiddenPart.classList.contains('hidden') ) {
              hiddenPart.classList.remove("hidden");
              hiddenPart.classList.add("opened");

              title.classList.add("open-faq");

            } else {
              hiddenPart.classList.add("hidden");
              title.classList.remove("open-faq");
              hiddenPart.classList.remove("opened");


            }
            
        })
    })
  };
faqOpen();

let btnMore = () => {
  let hiddenBlock = document.querySelector(".hidden-text");
  let btn = document.querySelector(".more-btn");
let faqMore = () => {
  let hiddenBlock = document.querySelector(".hidden-faqs");
  let btn = document.querySelector(".more-btn-faq");
  if(btn) {
    btn.addEventListener('click', () => {
      hiddenBlock.classList.toggle('hidden');
      event.preventDefault();
  
      if (hiddenBlock.classList.contains('hidden')) {
        btn.textContent = '+more';
      } else {
        btn.textContent = 'less';
      }
    })
  }
}
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
