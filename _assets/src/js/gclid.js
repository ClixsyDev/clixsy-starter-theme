import { getElement, getElements, ifSelectorExist } from './utils';

export const gclid = () => {
  function getParam(p) {
    var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
    return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
  }

  function getExpiryRecord(value) {
    var expiryPeriod = 90 * 24 * 60 * 60 * 1000; // 90 days

    var expiryDate = new Date().getTime() + expiryPeriod;
    return {
      value: value,
      expiryDate: expiryDate,
    };
  }

  function addGclid() {
    var gclidParam = getParam('gclid');

    var gclidRecord = null;

    var gclsrcParam = getParam('gclsrc');
    var isGclsrcValid = !gclsrcParam || gclsrcParam.indexOf('aw') !== -1;

    if (gclidParam && isGclsrcValid) {
      gclidRecord = getExpiryRecord(gclidParam);
      localStorage.setItem('gclid', JSON.stringify(gclidRecord));
    }

    var gclid = gclidRecord || JSON.parse(localStorage.getItem('gclid'));
    var isGclidValid = gclid && new Date().getTime() < gclid.expiryDate;

    if (isGclidValid) {
      let formsSelector = getElements('.wpcf7-form');
      if (ifSelectorExist(formsSelector)) {
        Array.from(formsSelector).forEach((item) => {
          let itemSelector1 = getElement('.gclid_field', item);
          if (ifSelectorExist(itemSelector1)) {
            itemSelector1.value = gclid.value;
          }

          let itemSelector2 = getElement('.clixsy', item);
          if (ifSelectorExist(itemSelector2)) {
            itemSelector2.value = gclid.value;
          }
        });
      }
    }
  }

  window.addEventListener('load', addGclid);
};
