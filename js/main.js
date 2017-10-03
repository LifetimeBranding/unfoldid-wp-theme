'use strict';

var unfoldid, u;

unfoldid = {
  init: function () {
    u = this;
    this.bindEvents();
  },
  bindEvents: function () {
    $('#unfoldid-logo').on('mouseenter', function () {
      $('#unfoldid-logo-button').addClass('d-inline');
    })
    $('#unfoldid-logo').on('mouseleave', function () {
      $('#unfoldid-logo-button').removeClass('d-inline');
    })
    $('.button__login').click(function () {
      $(location).attr('target', '_blank');
      $(location).attr('href', 'http://mystyle.timetoshiftyourstyle.com');
    })
    $('.button__booknow').on('click', function () {
      $('#book-now-modal').modal('toggle');
    });
    $('.button__booknow-lindensquare').on('click', function () {
      $(location).attr('target', '_blank');
      $(location).attr('href', 'http://shiftyourstyle.simplybook.me/sheduler/manage/event/30/unit/2');
    });
    $('.button__booknow-assemblyrow').on('click', function () {
      $(location).attr('target', '_blank');
      $(location).attr('href', 'http://shiftyourstyle.simplybook.me/sheduler/manage/event/31/unit/2');
    });
    $('#newsletter-subscribe-submit').click(function(){
      $('#newsletter-email-to').attr('disabled', true);
      $(this).text('Submitting');
    });
  }
}

$(function () {

  unfoldid.init();
  // Owl Carousel

    $('.sidemenu').fullpageMenu({
      openButton: "<i class=\"fa fa-bars fa-4x text-darkgray\"></i>",        // This option allows you to define the content of the open menu button. The default value is "Menu"
      closeButton: "<i class=\"fa fa-x fa-4x text-gold \">X</i>",    // This option allows you to define the content of the close menu button. The default value is "Close X"
      animationSpeed: 100,       // This option lets you control the speed of the animation of each navigation items. The option accepts milliseconds. The default value is 100.
      autoNumber: false,          // This option lets you enable/disable to automatic numbering on menu items. The default value is true.
      animation: "fadeInLeft"    // This option lets you define what type of animation you want. Available options are "fadeInLeft", "fadeInRight", "fadeInUp" and "fadeInDown". 
    });

    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

  })
