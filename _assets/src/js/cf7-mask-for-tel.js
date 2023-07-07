import IMask from 'imask';
import { getElements, ifSelectorExist } from './utils';
// https://github.com/uNmAnNeR/imaskjs
export const cf7MaskTelValidation = () => {

  let maskedPhoneInputs = getElements('.masked_phone');
  if (ifSelectorExist(maskedPhoneInputs)) {

    Array.from(maskedPhoneInputs).forEach(element => {
      var phoneMask = IMask(element, {
        mask: '(000) 000-0000',
        lazy: true,  // make placeholder always visible
        placeholderChar: '_'     // defaults to '_'
      });
    })

  }
}