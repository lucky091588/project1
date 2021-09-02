import $ from 'jquery';

module.exports = {
    STATE_CLASS: {
      ACTIVE: 'is-active',
      FIXED: 'is-fixed',
      OPEN: 'is-open',
      LOCK: 'is-locked',
      STICK: 'is-stick',
      COLLAPSE: 'is-collapse',
      LOCK: 'is-lock',
      DISABLE: 'is-disable',
      EXPAND: 'is-expand',
      ACTIVE: 'is-active',
      SCROLLED: 'is-scrolled'
    },
    BREAK_POINT: 980,
    DURATION: 2000,
    $window: $(window),
    $document: $(document),
    $htmlBody: $('html, body'),
    $html: $('html'),
    $body: $('body')
};
