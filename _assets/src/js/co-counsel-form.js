import { getElements, ifSelectorExist } from './utils';

export let coCounselForm = () => {
    let forms = getElements('.co-counsel-form');
    
    if (ifSelectorExist(forms)) {
        Array.from(forms).forEach(element => {
            
            let disciplinaryActions = getElements('.trigger_input input[name="disciplinary_action"]')
            if (ifSelectorExist(disciplinaryActions)) {
                Array.from(disciplinaryActions).forEach(item => {
                    let hiddenInput = document.querySelector('.conditional_input_disciplinary')
                    if (ifSelectorExist(hiddenInput)) {
                        item.addEventListener('click', (e) => {
                            if (e.target.value === 'Yes') {
                                hiddenInput.classList.remove('hidden_label');
                            } else if (e.target.value === 'No') {
                                hiddenInput.classList.add('hidden_label');
                            }
                        })
                    }
                })
            }

            let staffed = getElements('.trigger_input input[name="staffed"]')
            if (ifSelectorExist(staffed)) {
                Array.from(staffed).forEach(item => {
                    let hiddenInput = document.querySelector('.conditional_input_staffed')
                    if (ifSelectorExist(hiddenInput)) {
                        item.addEventListener('click', (e) => {
                            if (e.target.value === 'No') {
                                hiddenInput.classList.remove('hidden_label');
                            } else if (e.target.value === 'Yes') {
                                hiddenInput.classList.add('hidden_label');
                            }
                        })
                    }
                })
            }
        })
    }
}

export const refferalForm = () => {
    const addSFieldsButton = document.querySelector('#add-field-button')

    if (ifSelectorExist(addSFieldsButton)) {
        addSFieldsButton.addEventListener('click', function() {
            const addButton = this;
            const form = document.querySelector('.wpcf7-form');
            if (ifSelectorExist(form)) {
                const newField = document.createElement('div');
                newField.innerHTML = 
                    `<div class="fields">
                        <label for="" class="">
                            <span class="wpcf7-form-control-wrap" data-name="person_first_name"><input type="text" name="person_first_name[]" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input" aria-required="true" aria-invalid="false" placeholder="First Initial"></span>
                        </label>
                        <label for="" class="">
                            <span class="wpcf7-form-control-wrap" data-name="person_last_name"><input type="text" name="person_last_name[]" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Last Name"></span>
                        </label>
                    </div>`;
                form.insertBefore(newField, addButton);   
            }
        });   
    }
};    