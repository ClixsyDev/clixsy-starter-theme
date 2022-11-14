export const litifyCall = () => {
    document.addEventListener(
      'wpcf7mailsent',
      function (event) {
        var inputs = event.detail.inputs;
        let fullData = {};
        for (var i = 0; i < inputs.length; i++) {
          fullData[inputs[i].name] = inputs[i].value
        }
        async function litifyCallAsync() {
          let data = {
            method: 'POST',
            headers: {
              'Content-type': 'application/json; charset=UTF-8',
            },
            body: JSON.stringify(fullData),
          };
          let response = await fetch(ajax_url.ajaxurl + '?action=litify_hook', data);
          let serverResponse = await response.text();
          console.log(serverResponse);
        }
        litifyCallAsync();
      },
      false,
    );
  };
  