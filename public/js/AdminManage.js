$(document).ready(function () {
  //
  $("#nav-main-icon").on("click", function () {
    $(".wrapper").toggleClass("active");
  });

  $(".sb-sidenav-menu ul li").each(function () {
    $(this).on("click", function () {
      $(".sb-sidenav-menu ul li.active").removeClass("active");
      $(this).toggleClass("active");
    });
  });
  var a;
  $(".sb-sidenav-menu ul li").each(function () {
    $(this).on("click", function () {
      a = $(".sb-sidenav-menu ul li.active a").attr("id");
      console.log(a);
      $(".content").load("./mvc/views/pages/" + a + ".php");
    });
  });
  // lich su kham

  // $(".sb-sidenav-menu ul li " + a).on("click", function () {
  //   $(".content").load("./mvc/views/pages/" + a + ".php");
  // });
});
