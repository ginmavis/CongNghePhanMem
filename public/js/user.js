$(document).ready(function () {
  //register
  $(".signup #phone").keyup(function () {
    var user = $(this).val();

    $.post("../Ajax/CheckExistsUser", { un: user }, function (data) {
      // $("#messageUn").html(data);
      if (data == "true") {
        $("#messageUn").html("Số điện thoại đã tồn tại");
        $("#messageUn").css({ color: "red" });
      }
      if (data == "false") {
        $("#messageUn").html("Số điện thoại hợp lệ");
        $("#messageUn").css({ color: "green" });
      }
    });
  });

  //
});
