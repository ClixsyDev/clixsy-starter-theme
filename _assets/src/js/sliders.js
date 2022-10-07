import Glide from '@glidejs/glide';

const testmonialsSlider = '.testmonialsSlider';
if (document.querySelector(testmonialsSlider) != undefined && document.querySelector(testmonialsSlider) != null) {
  new Glide(testmonialsSlider, {
    perView: 1,
    type: 'slider',
    autoplay: 3500,
    breakpoints: {
    }
  }).mount();
}

const awardsSlider = '.awardsSlider';
if (document.querySelector(awardsSlider) != undefined && document.querySelector(awardsSlider) != null) {
  new Glide(awardsSlider, {
    perView: 5.2,
    type: 'carousel',
    autoplay: 2500,
    breakpoints: {
    }
  }).mount();
}

const lifeSlider = '.lifeSlider';
if (document.querySelector(lifeSlider) != undefined && document.querySelector(lifeSlider) != null) {
  new Glide(lifeSlider, {
    perView: 1,
    type: 'slider',
    breakpoints: {
    }
  }).mount();
}

const memorableSlider = '.memorableSlider';
if (document.querySelector(memorableSlider) != undefined && document.querySelector(memorableSlider) != null) {
  new Glide(memorableSlider, {
    perView: 1,
    type: 'slider',
    breakpoints: {
    }
  }).mount();
}