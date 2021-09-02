import { STATE_CLASS } from '../constants/index';

export default function scroll() {
  // When the user scrolls the page, execute myFunction
  window.onscroll = () => {scrollFunction()};

  // Get the header
  let headerHome = document.querySelector(".js-header-home");
  let sticky = 10;

  function scrollFunction() {
    if (window.pageYOffset >= sticky) {
      headerHome.classList.add(STATE_CLASS.STICK);
    } else {
      headerHome.classList.remove(STATE_CLASS.STICK);
    }
  }

}
