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
});
