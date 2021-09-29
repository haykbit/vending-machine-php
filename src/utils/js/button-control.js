$(document).ready(function () {
  $(".fbutton").click(function (event) {
    $("#selector-input").val(event.target.value);
  });
});
