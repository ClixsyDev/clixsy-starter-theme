import Glide from '@glidejs/glide';
import { getElements } from './utils';
import Marquee from 'vanilla-marquee';

const testmonialsSlider = '.testmonialsSlider';
if (document.querySelector(testmonialsSlider) != undefined && document.querySelector(testmonialsSlider) != null) {
  Array.from(getElements(testmonialsSlider)).forEach((item) => {
    new Glide(item, {
      perView: 1,
      type: 'slider',
      autoplay: 3500,
      breakpoints: {},
    }).mount();
  });
}

const awardsSlider = '.awardsSlider';
if (document.querySelector(awardsSlider) != undefined && document.querySelector(awardsSlider) != null) {
  Array.from(getElements(awardsSlider)).forEach((item) => {
    new Glide(item, {
      perView: 5.2,
      type: 'carousel',
      autoplay: 2500,
      breakpoints: {
        1024: {
          perView: 4.5,
        },
        768: {
          perView: 3.5,
        },
        540: {
          perView: 2.5,
        },
      },
    }).mount();
  });
}

const awardsSlider2 = '.awards_slider';
if (document.querySelector(awardsSlider2) != undefined && document.querySelector(awardsSlider2) != null) {
  Array.from(getElements(awardsSlider2)).forEach((item) => {
    new Glide(item, {
      perView: 8,
      type: 'carousel',
      autoplay: 3000,
      breakpoints: {
        1100: {
          perView: 5,
        },
        768: {
          perView: 3,
        },
      },
    }).mount();
  });
}

const lifeSlider = '.lifeSlider';
if (document.querySelector(lifeSlider) != undefined && document.querySelector(lifeSlider) != null) {
  Array.from(getElements(lifeSlider)).forEach((item) => {
    new Glide(lifeSlider, {
      perView: 1,
      type: 'carousel',
      breakpoints: {},
    }).mount();
  });
}

const verdictsSlider = '.verdicts_slider';
if (document.querySelector(verdictsSlider) != undefined && document.querySelector(verdictsSlider) != null) {
  Array.from(getElements(verdictsSlider)).forEach((item) => {
    new Glide(item, {
      perView: 4,
      type: 'carousel',
      autoplay: 3000,
      breakpoints: {
        1100: {
          perView: 3,
        },
        768: {
          perView: 2,
        },
        640: {
          perView: 1,
        },
      },
    }).mount();
  });
}

const memorableSlider = '.memorableSlider';
if (document.querySelector(memorableSlider) != undefined && document.querySelector(memorableSlider) != null) {
  Array.from(getElements(memorableSlider)).forEach((item) => {
    new Glide(item, {
      perView: 1,
      type: 'slider',
      breakpoints: {},
    }).mount();
  });
}

const grSlider = '.google_reviews_slider';
if (document.querySelector(grSlider) != undefined && document.querySelector(grSlider) != null) {
  Array.from(getElements(grSlider)).forEach((item) => {
    new Glide(item, {
      perView: 3,
      type: 'carousel',
      autoplay: 3000,
      breakpoints: {
        1100: {
          perView: 2,
        },
        768: {
          perView: 1,
        },
      },
    }).mount();
  });
}

const awardsSliderAbout = '.awardsSliderAbout';
if (document.querySelector(awardsSliderAbout) != undefined && document.querySelector(awardsSliderAbout) != null) {
  Array.from(getElements(awardsSliderAbout)).forEach((item) => {
    new Glide(item, {
      perView: 8,
      type: 'carousel',
      autoplay: 2500,
      breakpoints: {
        540: {
          perView: 4.5,
        },
      },
    }).mount();
  });
}

const communitySliderAbout = '.communitySliderAbout';
if (document.querySelector(communitySliderAbout) != undefined && document.querySelector(communitySliderAbout) != null) {
  Array.from(getElements(communitySliderAbout)).forEach((item) => {
    new Glide(item, {
      perView: 2,
      type: 'carousel',
      breakpoints: {
        540: {
          perView: 1,
        },
      },
    }).mount();
  });
}


const marqueEl1 = document.getElementById('marquee');
if (document.body.contains(marqueEl1)) {
  const marqueOne = new Marquee(marqueEl1, {
    css3easing: 'linear',
    speed: window.innerWidth < 768 ? 60 : 100,
    gap: 100,
    delayBeforeStart: 0,
    direction: 'left',
    duplicated: true,
    duration: 5000,
    startVisible: true,
  });
  marqueOne.resume();
}