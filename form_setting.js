$("#grd_translate_offers").on("change", "input[name*='check']", function () {
  $("#grd_translate_offers input[name*='check']").prop("checked", false);
  $(this).prop("checked", true);
});

$("#sbt_register").on("click", function (e) {
  var grid = $("#grd_translate_offers");
  var rows = grid.getNumberRows();
  var isEmpty = true;

  for (var i = 1; i <= rows; i++) {
    var checkbox = $("#grd_translate_offers").getValue(i, 4);
    var translator = $("#grd_translate_offers").getValue(i, 1);
    if (checkbox === "1" && translator.trim() !== "") {
      isEmpty = false;
      break;
    }
  }

  if (isEmpty) {
    e.preventDefault();
    alert("قسمتی را انتخاب کنید که مقدار داشته باشد");
  }
});
