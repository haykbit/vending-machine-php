$(document).ready(function () {
  //SET SELECTOR TO INPUT
  $(".fbutton").click(function (event) {
    $("#selector-input").val(event.target.value);
  });

  //COUNT BUTTON
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

  //VENDING DOOR TOGGLE
  $(".vending-door").click(function () {
    $(this).css("background-image", "url()");
    $(this).css("background-color", "#171717");
    $("#change-text").empty();
  });

  //BUTTON RESTART
  $("#restart").click(function () {
    $("#selector-input").val("");
    $("#coins-input").val("");
  });
});
