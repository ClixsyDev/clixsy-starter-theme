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