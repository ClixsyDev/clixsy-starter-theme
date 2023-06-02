import { getElements, ifSelectorExist, getElement } from "./utils";

export const cf7Events = () => {
  var wpcf7Elm = getElements('.wpcf7');
  if (ifSelectorExist(wpcf7Elm)) {
    Array.from(wpcf7Elm).forEach(item => {


      item.addEventListener("submit", (event) => {
        let formSpinner = getElement('.wpcf7-spinner', event.target);
        let submitButton = getElement('button', event.target);

        submitButton.disabled = true;

        let submitButtonSpans = getElements('span', submitButton);
        if (ifSelectorExist(submitButtonSpans)) {
          Array.from(submitButtonSpans).forEach(span => {
            span.classList.add('hidden');
          })
        }

        if (ifSelectorExist(formSpinner)) {
          formSpinner.classList.add('active');
        }
      });


      document.addEventListener('wpcf7invalid', function (event) {
        unblockBtn(event.target);

      }, false);

      document.addEventListener('wpcf7spam', function (event) {
        unblockBtn(event.target);
      }, false);

      document.addEventListener('wpcf7mailsent', function (event) {
        unblockBtn(event.target);
      }, false);

      document.addEventListener('wpcf7mailfailed', function (event) {
        unblockBtn(event.target);
      }, false);


    })



  }

  let unblockBtn = (form) => {
    let submitButton = getElement('button', form);
    let formSpinner = getElement('.wpcf7-spinner', form);

    let submitButtonSpans = getElements('span', submitButton);
    if (ifSelectorExist(submitButtonSpans)) {
      Array.from(submitButtonSpans).forEach(span => {
        span.classList.remove('hidden');
      })
    }

    submitButton.disabled = false;


    if (ifSelectorExist(formSpinner)) {
      formSpinner.classList.remove('active');
    }
  }
}