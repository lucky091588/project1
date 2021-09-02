import $ from 'jquery';

export default function radioField() {

  const $span = $('.mwform-radio-field');

  if($span.length) {
    $span.replaceWith(function() {
      return $('<div/>', {
        class: this.className,
        html: this.innerHTML
      });
    });
  }

}
