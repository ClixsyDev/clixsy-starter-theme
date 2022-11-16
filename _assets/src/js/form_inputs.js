

  export const coloredBorderOnFirstInput = () => {
    let formsSelector = document.querySelectorAll('form.wpcf7') ? Array.from(document.querySelectorAll('form.wpcf7')) : false;
    if (formsSelector.length > 0) {
      Array.from(formsSelector).forEach((item, index) => {
        let inputsInsideForm = item.querySelectorAll('.wpcf7-form-control');
        Array.from(inputsInsideForm).forEach((el, indx) => {
          if (indx == 0) {
            el.classList.add('border-yellow-input');
          }
        });
  
        Array.from(inputsInsideForm).forEach((el, indx) => {
          ['click', 'mouseenter', 'mouseleave'].forEach(function (evt) {
            el.addEventListener(
              evt, 
              () => {
                Array.from(inputsInsideForm).forEach((el, indx) => {
                  el.classList.remove('border-yellow-input');
                });
              },
              false,
            );
          });
        });
      });
    }
  };