(function ($) {
  "use strict";
  $(document).ready(function () {
    // SEARCH BAR START
    $("#search-button").on("click", function (e) {
      if ($("#search-input-container").hasClass("hdn")) {
        e.preventDefault();
        $("#search-input-container").removeClass("hdn");
        return false;
      }
    });

    $("#hide-search-input-container").on("click", function (e) {
      e.preventDefault();
      $("#search-input-container").addClass("hdn");
      return false;
    });

    // DROPDOWN START
    $(function () {
      var dd1 = new dropDown($("#myDropdown"));

      $(document).click(function () {
        $(".wrapper-dropdown").removeClass("active");
      });
    });

    function dropDown(el) {
      this.dd = el;
      this.placeholder = this.dd.children("span");
      this.opts = this.dd.find("ul.dropdown > li");
      this.val = "";
      this.index = -1;
      this.initEvents();
    }
    dropDown.prototype = {
      initEvents: function () {
        var obj = this;

        obj.dd.on("click", function () {
          $(this).toggleClass("active");
          return false;
        });

        obj.opts.on("click", function () {
          var opt = $(this);
          obj.val = opt.text();
          obj.index = opt.index();
          obj.placeholder.text(obj.val);
        });
      },
    };

    // DROPDOWN END
  });
})(jQuery);
