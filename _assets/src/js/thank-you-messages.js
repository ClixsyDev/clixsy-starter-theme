import { getElement, ifSelectorExist, slideDown, slideUp } from './utils';

export const sentNewMessage = (formContainerSelector) => {
  if (ifSelectorExist(document.querySelector(formContainerSelector))) {
    let submitButton = getElement('button', document.querySelector(formContainerSelector));
    submitButton.addEventListener('click', () => {
      document.addEventListener(
        'wpcf7mailsent',
        function (event) {
          let contactSucessSelector = getElement('.contacts__success', document.querySelector(formContainerSelector));
          let formSelector = event.target;
          let disclaimerSelector = getElement('.disclaimer', document.querySelector(formContainerSelector));
          let formResponseOutputSelector = getElement('.wpcf7-response-output', document.querySelector(formContainerSelector));
          if (contactSucessSelector !== null && contactSucessSelector !== undefined) {
            contactSucessSelector.style.display = 'flex';
            formSelector.style.display = 'none';
            formResponseOutputSelector.classList.toggle('hidden');
            if (ifSelectorExist(disclaimerSelector)) {
              disclaimerSelector.classList.add('hidden');
            }
          }
        },
        false,
      );

      const wpcf7Elm = document.querySelector('.wpcf7');

      wpcf7Elm.addEventListener(
        'wpcf7submit',
        function (event) {
          let acceptanceCheckbox = getElement('.wpcf7-acceptance input', document.querySelector(formContainerSelector));
          let acceptanceParent = getElement('.wpcf7-acceptance', document.querySelector(formContainerSelector));
          let disclaimerSelector = getElement('.disclaimer', document.querySelector(formContainerSelector));

          if (ifSelectorExist(acceptanceCheckbox)) {
            if (!acceptanceCheckbox.checked) {
              acceptanceParent.classList.add('acceptance-required');
              if (ifSelectorExist(disclaimerSelector)) {
                disclaimerSelector.classList.remove('hidden');
              }
            } else {
              acceptanceParent.classList.remove('acceptance-required');
              if (ifSelectorExist(disclaimerSelector)) {
                disclaimerSelector.classList.add('hidden');
              }
            }
          }
        },
        false,
      );

      let acceptanceParent = getElement('.wpcf7-acceptance', document.querySelector(formContainerSelector));
      if (ifSelectorExist(acceptanceParent)) {
        acceptanceParent.addEventListener('click', () => {
          acceptanceParent.classList.remove('acceptance-required');
        });
      }

      let sentNewButtonSelector = getElement('.reset-form', document.querySelector(formContainerSelector));
      if (ifSelectorExist(sentNewButtonSelector)) {
        sentNewButtonSelector.addEventListener('click', () => {
          let contactSucessSelector = getElement('.contacts__success', document.querySelector(formContainerSelector));
          let formSelector = getElement('.wpcf7-form', document.querySelector(formContainerSelector));
          let disclaimerSelector = getElement('.disclaimer', document.querySelector(formContainerSelector));

          if (ifSelectorExist(disclaimerSelector)) {
            disclaimerSelector.classList.toggle('hidden');
          }

          let formResponseOutputSelector = getElement('.wpcf7-response-output', document.querySelector(formContainerSelector));
          if (ifSelectorExist(formResponseOutputSelector)) {
            formResponseOutputSelector.classList.add('hidden');
          }
          if (ifSelectorExist(contactSucessSelector)) {
            slideUp(contactSucessSelector);
          }
          if (ifSelectorExist(formSelector)) {
            slideDown(formSelector);
          }
        });
      }
    });
  }
};
