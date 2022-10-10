import mainMenu from './menu';
import {ready} from './utils'
  
ready(() => {
    mainMenu()
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