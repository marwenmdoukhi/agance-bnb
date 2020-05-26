(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["app"],{

/***/ "./assets/css/app.scss":
/*!*****************************!*\
  !*** ./assets/css/app.scss ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./assets/js/ad_form_config.js":
/*!*************************************!*\
  !*** ./assets/js/ad_form_config.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// Ad Form Config Array Collection
$('#add_picture').click(function () {
  var pictures = $('#ad_pictures');
  var widgetsCounter = $('#widgets-counter');
  var index = +widgetsCounter.val();
  var template = pictures.data('prototype').replace(/__name__/g, index);
  widgetsCounter.val(index + 1);
  pictures.append(template);
  handleDeleteButtons();
});

function handleDeleteButtons() {
  $('button[data-action="delete"]').click(function () {
    var target = this.dataset.target;
    $(target).remove();
  });
}

function updateCounter() {
  var widgetsCounter = $('#widgets-counter');
  var count = +$('#ad_pictures div.form-group').length;
  widgetsCounter.val(count);
}

updateCounter();
handleDeleteButtons();

/***/ }),

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global) {/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// Include CSS
__webpack_require__(/*! ../css/app.scss */ "./assets/css/app.scss"); // Include JS


var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");

global.$ = global.jQuery = $;

__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");

__webpack_require__(/*! ./ad_form_config */ "./assets/js/ad_form_config.js");

__webpack_require__(/*! @fortawesome/fontawesome-free */ "./node_modules/@fortawesome/fontawesome-free/js/fontawesome.js");
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

/***/ })

},[["./assets/js/app.js","runtime","vendors~app"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvY3NzL2FwcC5zY3NzPzY2NWEiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2FkX2Zvcm1fY29uZmlnLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9hcHAuanMiXSwibmFtZXMiOlsiJCIsImNsaWNrIiwicGljdHVyZXMiLCJ3aWRnZXRzQ291bnRlciIsImluZGV4IiwidmFsIiwidGVtcGxhdGUiLCJkYXRhIiwicmVwbGFjZSIsImFwcGVuZCIsImhhbmRsZURlbGV0ZUJ1dHRvbnMiLCJ0YXJnZXQiLCJkYXRhc2V0IiwicmVtb3ZlIiwidXBkYXRlQ291bnRlciIsImNvdW50IiwibGVuZ3RoIiwicmVxdWlyZSIsImdsb2JhbCIsImpRdWVyeSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7O0FBQUEsdUM7Ozs7Ozs7Ozs7O0FDQUE7QUFDQUEsQ0FBQyxDQUFDLGNBQUQsQ0FBRCxDQUFrQkMsS0FBbEIsQ0FBd0IsWUFBVTtBQUM5QixNQUFNQyxRQUFRLEdBQUdGLENBQUMsQ0FBQyxjQUFELENBQWxCO0FBQ0EsTUFBTUcsY0FBYyxHQUFHSCxDQUFDLENBQUMsa0JBQUQsQ0FBeEI7QUFDQSxNQUFNSSxLQUFLLEdBQUcsQ0FBQ0QsY0FBYyxDQUFDRSxHQUFmLEVBQWY7QUFDQSxNQUFNQyxRQUFRLEdBQUdKLFFBQVEsQ0FBQ0ssSUFBVCxDQUFjLFdBQWQsRUFBMkJDLE9BQTNCLENBQW1DLFdBQW5DLEVBQWdESixLQUFoRCxDQUFqQjtBQUNBRCxnQkFBYyxDQUFDRSxHQUFmLENBQW1CRCxLQUFLLEdBQUcsQ0FBM0I7QUFDQUYsVUFBUSxDQUFDTyxNQUFULENBQWdCSCxRQUFoQjtBQUNBSSxxQkFBbUI7QUFDdEIsQ0FSRDs7QUFVQSxTQUFTQSxtQkFBVCxHQUErQjtBQUMzQlYsR0FBQyxDQUFDLDhCQUFELENBQUQsQ0FBa0NDLEtBQWxDLENBQXdDLFlBQVU7QUFDOUMsUUFBTVUsTUFBTSxHQUFHLEtBQUtDLE9BQUwsQ0FBYUQsTUFBNUI7QUFDQVgsS0FBQyxDQUFDVyxNQUFELENBQUQsQ0FBVUUsTUFBVjtBQUNILEdBSEQ7QUFJSDs7QUFFRCxTQUFTQyxhQUFULEdBQXlCO0FBQ3JCLE1BQU1YLGNBQWMsR0FBR0gsQ0FBQyxDQUFDLGtCQUFELENBQXhCO0FBQ0EsTUFBTWUsS0FBSyxHQUFHLENBQUNmLENBQUMsQ0FBQyw2QkFBRCxDQUFELENBQWlDZ0IsTUFBaEQ7QUFDQWIsZ0JBQWMsQ0FBQ0UsR0FBZixDQUFtQlUsS0FBbkI7QUFDSDs7QUFFREQsYUFBYTtBQUNiSixtQkFBbUIsRzs7Ozs7Ozs7Ozs7QUN6Qm5COzs7Ozs7QUFPQTtBQUNBTyxtQkFBTyxDQUFDLDhDQUFELENBQVAsQyxDQUVBOzs7QUFDQSxJQUFJakIsQ0FBQyxHQUFHaUIsbUJBQU8sQ0FBQyxvREFBRCxDQUFmOztBQUNBQyxNQUFNLENBQUNsQixDQUFQLEdBQVdrQixNQUFNLENBQUNDLE1BQVAsR0FBZ0JuQixDQUEzQjs7QUFFQWlCLG1CQUFPLENBQUMsZ0VBQUQsQ0FBUDs7QUFDQUEsbUJBQU8sQ0FBQyx1REFBRCxDQUFQOztBQUNBQSxtQkFBTyxDQUFDLHFHQUFELENBQVAsQyIsImZpbGUiOiJhcHAuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW4iLCIvLyBBZCBGb3JtIENvbmZpZyBBcnJheSBDb2xsZWN0aW9uXHJcbiQoJyNhZGRfcGljdHVyZScpLmNsaWNrKGZ1bmN0aW9uKCl7XHJcbiAgICBjb25zdCBwaWN0dXJlcyA9ICQoJyNhZF9waWN0dXJlcycpO1xyXG4gICAgY29uc3Qgd2lkZ2V0c0NvdW50ZXIgPSAkKCcjd2lkZ2V0cy1jb3VudGVyJyk7XHJcbiAgICBjb25zdCBpbmRleCA9ICt3aWRnZXRzQ291bnRlci52YWwoKTtcclxuICAgIGNvbnN0IHRlbXBsYXRlID0gcGljdHVyZXMuZGF0YSgncHJvdG90eXBlJykucmVwbGFjZSgvX19uYW1lX18vZywgaW5kZXgpO1xyXG4gICAgd2lkZ2V0c0NvdW50ZXIudmFsKGluZGV4ICsgMSk7XHJcbiAgICBwaWN0dXJlcy5hcHBlbmQodGVtcGxhdGUpO1xyXG4gICAgaGFuZGxlRGVsZXRlQnV0dG9ucygpO1xyXG59KTtcclxuXHJcbmZ1bmN0aW9uIGhhbmRsZURlbGV0ZUJ1dHRvbnMoKSB7XHJcbiAgICAkKCdidXR0b25bZGF0YS1hY3Rpb249XCJkZWxldGVcIl0nKS5jbGljayhmdW5jdGlvbigpe1xyXG4gICAgICAgIGNvbnN0IHRhcmdldCA9IHRoaXMuZGF0YXNldC50YXJnZXQ7XHJcbiAgICAgICAgJCh0YXJnZXQpLnJlbW92ZSgpO1xyXG4gICAgfSk7XHJcbn1cclxuXHJcbmZ1bmN0aW9uIHVwZGF0ZUNvdW50ZXIoKSB7XHJcbiAgICBjb25zdCB3aWRnZXRzQ291bnRlciA9ICQoJyN3aWRnZXRzLWNvdW50ZXInKTtcclxuICAgIGNvbnN0IGNvdW50ID0gKyQoJyNhZF9waWN0dXJlcyBkaXYuZm9ybS1ncm91cCcpLmxlbmd0aDtcclxuICAgIHdpZGdldHNDb3VudGVyLnZhbChjb3VudCk7XHJcbn1cclxuXHJcbnVwZGF0ZUNvdW50ZXIoKTtcclxuaGFuZGxlRGVsZXRlQnV0dG9ucygpO1xyXG5cclxuIiwiLypcclxuICogV2VsY29tZSB0byB5b3VyIGFwcCdzIG1haW4gSmF2YVNjcmlwdCBmaWxlIVxyXG4gKlxyXG4gKiBXZSByZWNvbW1lbmQgaW5jbHVkaW5nIHRoZSBidWlsdCB2ZXJzaW9uIG9mIHRoaXMgSmF2YVNjcmlwdCBmaWxlXHJcbiAqIChhbmQgaXRzIENTUyBmaWxlKSBpbiB5b3VyIGJhc2UgbGF5b3V0IChiYXNlLmh0bWwudHdpZykuXHJcbiAqL1xyXG5cclxuLy8gSW5jbHVkZSBDU1NcclxucmVxdWlyZSgnLi4vY3NzL2FwcC5zY3NzJyk7XHJcblxyXG4vLyBJbmNsdWRlIEpTXHJcbmxldCAkID0gcmVxdWlyZSgnanF1ZXJ5Jyk7XHJcbmdsb2JhbC4kID0gZ2xvYmFsLmpRdWVyeSA9ICQ7XHJcblxyXG5yZXF1aXJlKCdib290c3RyYXAnKTtcclxucmVxdWlyZSgnLi9hZF9mb3JtX2NvbmZpZycpO1xyXG5yZXF1aXJlKCdAZm9ydGF3ZXNvbWUvZm9udGF3ZXNvbWUtZnJlZScpOyJdLCJzb3VyY2VSb290IjoiIn0=