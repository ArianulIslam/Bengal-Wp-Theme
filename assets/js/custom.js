window.addEventListener("load", () => {
  ("use strict");
  // NAVBAR AND OVERLAY SCRIPTS
  const navbarMenu = document.getElementById("menu");
  const burgerMenu = document.getElementById("burger");

  if (burgerMenu) {
    burgerMenu.addEventListener("click", () => {
      navbarMenu.classList.toggle("is-active");
    });
  }

  // Open and Hide Search Bar on Toggle Click
  const searchBlock = document.querySelector(".search-block");
  const searchToggle = document.querySelector(".search-toggle");
  const searchCancel = document.querySelector(".search-cancel");

  if (searchToggle && searchCancel) {
    searchToggle.addEventListener("click", () => {
      searchBlock.classList.toggle("is-open");
    });

    searchCancel.addEventListener("click", () => {
      searchBlock.classList.remove("is-open");
    });
  }

  // COUNTER SCRIPTS
  var counters = document.getElementsByClassName("count");
  var countersQuantity = counters.length;
  var counter = [];

  for (var i = 0; i < countersQuantity; i++) {
    counter[i] = parseInt(counters[i].innerHTML);
  }

  var count = function (start, value, id) {
    var localStart = start;
    setInterval(function () {
      if (localStart < value) {
        localStart++;
        counters[id].innerHTML = localStart;
      }
    }, 1);
  };

  for (var j = 0; j < countersQuantity; j++) {
    count(0, counter[j], j);
  }
});
