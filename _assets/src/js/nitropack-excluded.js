import { aosAnimations } from "./aos-animations";
import { getElements, ifSelectorExist, ready } from "./utils";


const toggleAnimation = () => {
  const repeatAnimation = getElements('.repeat-animation');
  if (ifSelectorExist(repeatAnimation)) {
    Array.from(repeatAnimation).forEach(item => {
      setInterval(function () {
        item.classList.add('aos-animate');
        setTimeout(function () {
          item.classList.remove('aos-animate');
        }, 7000); // stay on screen for 7 seconds
      }, 8500); // trigger the same animation after 1.5 seconds
    });
  }
};

ready(() => {
  aosAnimations();
  toggleAnimation();
})