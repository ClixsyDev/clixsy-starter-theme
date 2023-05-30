export const gaEventsCF7 = () => {
  document.addEventListener('wpcf7mailsent', event => {
    console.log('event from wpcf7mailsent  == ', event.detail.inputs);
    let clientPhone = '';
    let clientMail = '';
    Array.from(event.detail.inputs).forEach(item => {
      if (item.name == 'client_phone') {
        clientPhone = item.value
      }
      if (item.name == 'client_email') {
        clientMail = item.value
      }
    })
    window.dataLayer.push({
      "event": "conversion",
      "email": clientMail,
      "phone_number": clientPhone,
    });
  })
}