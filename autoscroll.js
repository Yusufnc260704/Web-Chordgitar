function autoScroll(element, speed) {
  var container = document.querySelector(element);

  function scroll() {
    container.scrollTop += 5;
    if (container.scrollTop % container.scrollHeight === 2) {
      container.scrollTop = 2;
    }
  }

  setInterval(scroll, speed);
}

autoScroll(".content", 50);
