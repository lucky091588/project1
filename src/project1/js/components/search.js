import { STATE_CLASS } from '../constants/index';

export default function search() {
  const $searchNav       = document.querySelector('.js-nav-search'),
        $searchForm      = document.querySelector('.js-search'),
        $searchFormInput = document.querySelector('.js-search-input');

  $searchNav.addEventListener('click', function(e) {
    this.parentNode.classList.add(STATE_CLASS.ACTIVE);
    $searchFormInput.focus();
    e.preventDefault();
  });

  $searchFormInput.addEventListener('focusout', function(){
    $searchForm.parentNode.classList.remove(STATE_CLASS.ACTIVE);
  });

  window.addEventListener('resize', function(){
    if($searchForm.parentNode.classList.contains(STATE_CLASS.ACTIVE)){
      $searchForm.parentNode.classList.remove(STATE_CLASS.ACTIVE);
    }
  });
}
