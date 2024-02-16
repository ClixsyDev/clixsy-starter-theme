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