import A11yDialog from 'a11y-dialog';
import { getElement, getElements, ifSelectorExist } from './utils';
export const modalDialog = () => {
  console.log('test');
  
  const dialogContainer = document.querySelector('#testimonialDialog');
  if (ifSelectorExist(dialogContainer)) {
    const videoReviewsDialog = new A11yDialog(dialogContainer);

    let fireTestimonialModalSelector = getElements('.fireTestimonialModal');
    if (ifSelectorExist(fireTestimonialModalSelector)) {
      console.log(fireTestimonialModalSelector);

      Array.from(fireTestimonialModalSelector).forEach((item) => {
        item.addEventListener('click', () => {
          let testimonialVideoIdSelector = getElement('#testimonialVideoIdSelector');
          if (ifSelectorExist(testimonialVideoIdSelector)) {
            let itemYtUrl = item.getAttribute('data-yt-url');
            testimonialVideoIdSelector.src = itemYtUrl;
          }
        });
      });
    }

    videoReviewsDialog.on('hide', function (dialogEl, event) {
      dialogEl.querySelector('iframe').contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
    });

    videoReviewsDialog.on('show', function (dialogEl, event) {
      dialogEl.querySelector('iframe').onload = () => {
        dialogEl.querySelector('iframe').contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
      };
    });
  }
};
