/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************************!*\
  !*** ./resources/js/pages/slimscroll.init.js ***!
  \***********************************************/
/*
Author       : Dreamguys
Template Name: SmartHR - Bootstrap Admin Template
Version      : 3.6
*/
// Variables declarations
var $slimScrolls = $('.slimscroll'); // Sidebar Slimscroll

if ($slimScrolls.length > 0) {
  $slimScrolls.slimScroll({
    height: 'auto',
    width: '100%',
    position: 'right',
    size: '7px',
    color: '#ccc',
    wheelStep: 10,
    touchScrollStep: 100
  });
  var wHeight = $(window).height() - 60;
  $slimScrolls.height(wHeight);
  $('.sidebar .slimScrollDiv').height(wHeight);
  $(window).resize(function () {
    var rHeight = $(window).height() - 60;
    $slimScrolls.height(rHeight);
    $('.sidebar .slimScrollDiv').height(rHeight);
  });
}
/******/ })()
;