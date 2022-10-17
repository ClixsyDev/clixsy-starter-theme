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
      1024: {
        perView: 4.5,
      },
      768: {
        perView: 3.5,
      },
      540: {
        perView: 2.5,
      },
    }
  }).mount();
}

const awardsSlider2 = '.awards_slider';
if (document.querySelector(awardsSlider2) != undefined && document.querySelector(awardsSlider2) != null) {
  new Glide(awardsSlider2, {
    perView: 8,
    type: 'carousel',
    autoplay: 3000,
    breakpoints: {
      1100: {
        perView: 5
      },
      768: {
        perView: 3
      }
    }
  }).mount();
}

const lifeSlider = '.lifeSlider';
if (document.querySelector(lifeSlider) != undefined && document.querySelector(lifeSlider) != null) {
  new Glide(lifeSlider, {
    perView: 1,
    type: 'carousel',
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
      1100: {
        perView: 3
      },
      768: {
        perView: 2
      },
      640: {
        perView: 1
      }
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
const grSlider = '.google_reviews_slider';
if (document.querySelector(grSlider) != undefined && document.querySelector(grSlider) != null) {
  new Glide(grSlider, {
    perView: 3,
    type: 'carousel',
    autoplay: 3000,
    breakpoints: {
      1100: {
        perView: 2
      },
      768: {
        perView: 1
      }
    }
  }).mount();
}

const awardsSliderAbout = '.awardsSliderAbout';
if (document.querySelector(awardsSliderAbout) != undefined && document.querySelector(awardsSliderAbout) != null) {
  new Glide(awardsSliderAbout, {
    perView: 8,
    type: 'carousel',
    // autoplay: 2500,
    breakpoints: {
      540: {
        perView: 4.5,
      },
    }
  }).mount();
}

const communitySliderAbout = '.communitySliderAbout';
if (document.querySelector(communitySliderAbout) != undefined && document.querySelector(communitySliderAbout) != null) {
  new Glide(communitySliderAbout, {
    perView: 2,
    type: 'carousel',
    // autoplay: 2500,
    breakpoints: {
      540: {
        perView: 1,
      },
    }
  }).mount();
}