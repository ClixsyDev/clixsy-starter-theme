export const gaEventsCF7 = () => {
  document.addEventListener('wpcf7mailsent', event => {
    console.log('event from wpcf7mailsent  == ', event);
    window.dataLayer.push({
      "event": "conversion",
      "email": event.detail.inputs[4].value,
      "phone_number": event.detail.inputs[3].value,
    });
  })
}