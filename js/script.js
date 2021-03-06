// Generated by CoffeeScript 1.7.1
var DropDown;

DropDown = void 0;

$(window).scroll(function() {
  if ($(".navbar").offset().top > 300) {
    $(".navbar-fixed-top").addClass("top-nav-collapse");
  } else {
    $(".navbar-fixed-top").removeClass("top-nav-collapse");
  }
});

$(function() {
  $("#view-more-link,.page-scroll a,.cta-scroll").bind("click", function(e) {
    var t;
    t = void 0;
    t = void 0;
    t = $(this);
    $("html, body").stop().animate({
      scrollTop: $(t.attr("href")).offset().top + ($(window).width() < 480 ? -20 : 20)
    }, 1500, "easeInOutExpo");
    e.preventDefault();
  });
});

DropDown = function(el) {
  this.dd = el;
  this.placeholder = this.dd.children("h4");
  this.opts = this.dd.find("ul.dropdown > li");
  this.val = "";
  this.index = -1;
  this.initEvents();
};

DropDown.prototype = {
  initEvents: function() {
    var obj;
    obj = void 0;
    obj = this;
    obj.dd.on("click", function(event) {
      $(this).toggleClass("active");
      return false;
    });
    obj.opts.on("click", function() {
      var navigate_link, opt;
      console.log("lawl");
      opt = void 0;
      opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      navigate_link = $('.dropdown').find('li').find('a').eq(obj.index).attr('href');
      $('#section-navigator').attr('href', navigate_link);
      obj.placeholder.text(obj.val);
    });
  },
  getValue: function() {
    return this.val;
  },
  getIndex: function() {
    return this.index;
  }
};

$(function() {
  var dd;
  dd = void 0;
  dd = new DropDown($("#dd"));
  $(document).click(function() {
    $(".selectfield-dropdown").removeClass("active");
  });
});

$('#subscribe-form').submit(function() {
  var data, form, url;
  $('form').fadeOut(500).delay(100);
  $('.subscribe-thanks').fadeIn(1500);
  form = $(this);
  url = $(this).attr('action');
  data = $(this).serialize();
  $.ajax({
    type: "GET",
    url: url,
    dataType: 'json',
    contentType: "application/json; charset=utf-8",
    data: data
  });
  return false;
});

$(function() {
  var email_field, valid_email;
  email_field = $('#MERGE0');
  valid_email = function(email) {
    var email_regex;
    email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return String(email).match(email_regex);
  };
  return email_field.on("input", function() {
    if (valid_email(email_field.val())) {
      email_field.removeClass("error-field");
      $('#subscribe-form-btn').removeAttr('disabled');
      return $('#subscribe-form-btn').removeClass('disabled-btn');
    } else {
      email_field.addClass("error-field");
      $('#subscribe-form-btn').attr('disabled', 'disabled');
      return $('#subscribe-form-btn').addClass('disabled-btn');
    }
  });
});

$(".carousel").carousel({
  pause: true,
  interval: false
});

$(window).resize(function() {
  if ($(window).width() < 480) {
    return $(".navbar-nav").on("click", "li a", function() {
      $(".navbar-collapse").collapse("hide");
    });
  }
});

$(function() {
  if ($(window).width() < 480) {
    return $(".navbar-nav").on("click", "li a", function() {
      $(".navbar-collapse").collapse("hide");
    });
  }
});

$(".dropdown").bind("mousewheel DOMMouseScroll", function(e) {
  var delta, e0;
  e0 = e.originalEvent;
  delta = e0.wheelDelta || -e0.detail;
  this.scrollTop += (delta < 0 ? 1 : -1) * 30;
  e.preventDefault();
});
