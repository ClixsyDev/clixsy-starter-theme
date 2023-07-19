import IMask from 'imask';
import { getElement, getElements, ifSelectorExist } from './utils';

export const cf7MaskTelValidation = () => {
  let forms = getElements('form');
  
  if (ifSelectorExist(forms)) {
    Array.from(forms).forEach(form => {
      let maskedPhoneInputs = getElements('.masked_phone', form);
      let phoneMasks = new Map();

      if (ifSelectorExist(maskedPhoneInputs)) {
        Array.from(maskedPhoneInputs).forEach(element => {
          let mask = IMask(element, {
            mask: '(000) 000-0000',
            prepare: (value, masked) => {
              // Remove any non-numeric characters
              let onlyNums = value.replace(/\D/g,'');
              return onlyNums;
            },
            lazy: false,
            placeholderChar: '_'
          });

          // Event listener for user input
          element.addEventListener('input', () => {
            if (!mask.masked.isComplete) { // Check if input value is complete
              element.style.border = ''; // Reset border if valid
            } else {
              let phoneValue = mask.unmaskedValue;
              if (phoneValue.startsWith('0') || phoneValue.startsWith('1')) {
                element.style.border = '2px solid red'; // Add red border if the first digit is 0 or 1
              } else {
                element.style.border = ''; // Reset border if valid
              }
            }
          });

          phoneMasks.set(element.name, mask); // store the mask with the input's name
        });

        let submitButton = getElement('.btn_form', form);
        if (submitButton) {
          submitButton.addEventListener('click', function (event) {
            let phoneInvalid = Array.from(maskedPhoneInputs).some(input => {
              let mask = phoneMasks.get(input.name); // get the mask for this input
              if (mask && !mask.masked.isComplete) { // Check if input value is complete
                input.classList.add('invalid-phone-number')
                input.style.border = '2px solid red'; // Add red border
                return true;
              } else {
                let phoneValue = mask.unmaskedValue;
                if (phoneValue.startsWith('0') || phoneValue.startsWith('1')) {
                  input.classList.add('invalid-phone-number')
                  input.style.border = '2px solid red'; // Add red border
                  return true;
                } else {
                  input.style.border = ''; // Reset border
                  input.classList.remove('invalid-phone-number')
                  return false;
                }
              }
            });

            if (phoneInvalid) {
              event.preventDefault(); // Prevent form from submitting
              return false;
            }
          });
        }
      }
    });
  }
}
