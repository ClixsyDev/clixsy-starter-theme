import { getElement, ifSelectorExist } from './utils';

export const refferalForm = () => {
    const addSFieldsButton = getElement('#add-field-button')
    let count = 1;

    if (ifSelectorExist(addSFieldsButton)) {
        addSFieldsButton.addEventListener('click', function() {
            count++;
            const addButton = this;
            const form = getElement('.wpcf7-form');
            if (ifSelectorExist(form)) {
                const newField = document.createElement('div');
                newField.innerHTML = 
                    `<div class="fields">
                        <label for="" class="">
                            <span class="wpcf7-form-control-wrap" data-name="person_first_name_${count}"><input type="text" name="person_first_name_${count}" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input" aria-required="true" aria-invalid="false" placeholder="First Initial"></span>
                        </label>
                        <label for="" class="">
                            <span class="wpcf7-form-control-wrap" data-name="person_last_name_${count}"><input type="text" name="person_last_name_${count}" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Last Name"></span>
                        </label>
                    </div>`;
                form.insertBefore(newField, addButton);   
            }

            if (count == 3) {
                addSFieldsButton.remove();
            }
        });   
    }
};    