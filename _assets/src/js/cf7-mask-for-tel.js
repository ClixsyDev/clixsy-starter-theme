import IMask from 'imask';
import { getElement, getElements, ifSelectorExist } from './utils';

export const cf7MaskTelValidation = () => {
  let maskedPhoneInputs = getElements('.masked_phone');
  let phoneMasks = new Map();

  if (ifSelectorExist(maskedPhoneInputs)) {
    Array.from(maskedPhoneInputs).forEach(element => {
      let mask = IMask(element, {
        mask: '(000) 000-0000',
        prepare: (value, masked) => {
          // Remove any non-numeric characters
          let onlyNums = value.replace(/\D/g, '');
          // If it starts with 0 or 1, remove that character
          if (onlyNums.startsWith('0') || onlyNums.startsWith('1')) {
            onlyNums = onlyNums.substring(1);
          }
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
          element.style.border = ''; // Reset border if valid
        }
      });

      phoneMasks.set(element.name, mask); // store the mask with the input's name
    });

    let submitButtons = getElements('.btn_form');
    if (ifSelectorExist(submitButtons)) {
      Array.from(submitButtons).forEach(button => {
        button.addEventListener('click', function (event) {
          let form = button.closest('form'); // get the form containing the button
          let phoneInvalid = Array.from(maskedPhoneInputs).some(input => {
            let mask = phoneMasks.get(input.name); // get the mask for this input
            if (mask && !mask.masked.isComplete) { // Check if input value is complete
              input.classList.add('invalid-phone-number')
              input.style.border = '2px solid red'; // Add red border
              return true;
            } else {
              input.style.border = ''; // Reset border
              input.classList.remove('invalid-phone-number')
              return false;
            }
          });

          let checkIfFormHasInvalidPhoneNumber = getElement('input.invalid-phone-number', form)
          console.log('form tag == ', form);
          if (ifSelectorExist(checkIfFormHasInvalidPhoneNumber)) {

            if (phoneInvalid) {
              event.preventDefault(); // Prevent form from submitting
              return false;
            }
          }
        });
      });
    }
  }
}
