import { getElements, ifSelectorExist, getElement } from "./utils";

export const cf7Events = () => {

  // setup page id to the form

  let containerPostFields = getElements('input[name="post_id"]');
  
  if (ifSelectorExist(containerPostFields)) {
    Array.from(containerPostFields).forEach(input => {
      input.value = ajax_url.page_id;
    })
  }

  var wpcf7Elm = getElements('.wpcf7');
  if (ifSelectorExist(wpcf7Elm)) {
    Array.from(wpcf7Elm).forEach(item => {
      item.addEventListener("submit", (event) => {
        let formSpinner = getElement('.wpcf7-spinner', event.target);
        let submitButton = getElement('button', event.target);

        submitButton.disabled = true;

        let submitButtonSpans = getElements('span', submitButton);
        // if (ifSelectorExist(submitButtonSpans)) {
        //   Array.from(submitButtonSpans).forEach(span => {
        //     span.classList.add('!opacity-50');
        //   })
        // }

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

    // let submitButtonSpans = getElements('span', submitButton);
    // if (ifSelectorExist(submitButtonSpans)) {
    //   Array.from(submitButtonSpans).forEach(span => {
    //     span.classList.remove('!opacity-50');
    //   })
    // }

    submitButton.disabled = false;


    if (ifSelectorExist(formSpinner)) {
      formSpinner.classList.remove('active');
    }
  }
}