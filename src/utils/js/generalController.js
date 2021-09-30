$(document).ready(function () {
  $(".fbutton").click(function (event) {
    $("#selector-input").val(event.target.value);
  });

  var total = 0;
  $(".cbutton").click(function (event) {
    var insertedCoin = event.target.value;
    if (insertedCoin == 1) {
      total += parseInt(insertedCoin);
    } else {
      total += parseFloat(insertedCoin);
    }
    console.log(total.toFixed(2));
    $("#coins-input").val(total.toFixed(2));
  });

  $(".vending-door").click(function () {
    $(this).css("background-image", "url()");
    $(this).css("background-color", "#171717");
  });

  $("#restart").click(function () {
    $("#selector-input").val("");
    $("#coins-input").val("");
  });
});
