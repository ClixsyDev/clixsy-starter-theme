export const formEntry = (data) => {
  // Success entry
  document.addEventListener(
    'wpcf7mailsent',
    function (event) {
      var obj = event.detail.inputs;
      var result = Object.keys(obj).map((key) => [Number(key), obj[key]]);

      console.log('inputs = ', result);
      saveSuccessEntry(obj);
    },
    false,
  );
  async function saveSuccessEntry(inputsData) {
    let inputData = inputsData;
    let data = {
      method: 'POST',
      headers: {
        'Content-type': 'application/json; charset=UTF-8',
      },
      body: JSON.stringify(inputData),
    };
    let response = await fetch(ajax_url.ajaxurl + '?action=form_entry_sucess', data);
    // let serverResponse = await response.text();
  }


  //   Fail Entry
  document.addEventListener(
    'wpcf7mailfailed',
    function (event) {
      var obj = event.detail.inputs;
      var result = Object.keys(obj).map((key) => [Number(key), obj[key]]);

      saveFailEntry(obj);
    },
    false,
  );
  async function saveFailEntry(inputsData) {
    let inputData = inputsData;
    let data = {
      method: 'POST',
      headers: {
        'Content-type': 'application/json; charset=UTF-8',
      },
      body: JSON.stringify(inputData),
    };
    let response = await fetch(ajax_url.ajaxurl + '?action=form_entry_fail', data);
    // let serverResponse = await response.text();
  }

};
