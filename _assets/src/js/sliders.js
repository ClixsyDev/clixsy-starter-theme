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
const awardsSlider = '.awards_slider';
if (document.querySelector(awardsSlider) != undefined && document.querySelector(awardsSlider) != null) {
  new Glide(awardsSlider, {
    perView: 8,
    type: 'carousel',
    autoplay: 3000,
    breakpoints: {
    }
  }).mount();
}

const verdictsSlider = '.verdicts_slider';
if (document.querySelector(verdictsSlider) != undefined && document.querySelector(verdictsSlider) != null) {
  new Glide(verdictsSlider, {
    perView: 4,
    type: 'carousel',
    autoplay: 3000,
    breakpoints: {
    }
  }).mount();
}

const grSlider = '.google_reviews_slider';
if (document.querySelector(grSlider) != undefined && document.querySelector(grSlider) != null) {
  new Glide(grSlider, {
    perView: 3,
    type: 'carousel',
    autoplay: 3000,
    breakpoints: {
    }
  }).mount();
}