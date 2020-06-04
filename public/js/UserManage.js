$(document).ready(function () {
  //
  $("#nav-main-icon").on("click", function () {
    $(".wrapper").toggleClass("active");
  });

  //dat lich
  var data_chuyennganh = [];
  var totalPoints = 0;
  $("#datlich .khoadt option").each(function () {
    $(this).on("click", function () {
      let idkhoa = this.value;
      //get list chuyen nganh

      $("#datlich .chuyennganh").load(
        "../Ajax/GetListSpeciality",
        {
          idkhoa: idkhoa,
          dbchuyennganh: "speciality",
        },
        function (data) {
          data = JSON.parse(data);
          let x = "  <h4><label class='' for=''>Chọn mục khám: </label></h4>";
          for (i in data) {
            x +=
              ' <div class="form-check ">' +
              `<input class="" name="" type="checkbox" id="chuyennganh_${i}" value="${data[i].Price}"> ` +
              `<label class="" for="chuyennganh_${i}">${data[i].Name} : ${data[i].Price} VND  </label>` +
              "</div>";
          }
          $("#datlich .chuyennganh").html(x);
          totalPoints = 0;
          AddEvenClick();
        }
      );

      // get list doctor
      $.post(
        "../Ajax/GetListDoctor",
        { idkhoa: idkhoa, dbbacsi: "doctor" },
        function (data) {
          data = JSON.parse(data);
          let x = "";
          for (i in data) {
            x +=
              "<option class='p-2' value='" +
              data[i].id +
              "' > " +
              data[i].Name +
              " </option>";
          }

          $("#datlich .bacsi").html(x);
        }
      );
      //
    });
  });

  // tinh tong tien

  function AddEvenClick() {
    $("#datlich .chuyennganh .form-check  input[type='checkbox']").each(
      function () {
        $(this).on("click", "", function () {
          if ($(this).is(":checked")) {
            totalPoints += parseInt($(this).val());
          } else {
            totalPoints -= parseInt($(this).val());
          }
          console.log(totalPoints);
          $("#datlich .total div input").val(totalPoints);
        });
      }
    );
  }

  AddEvenClick();
  const date = document.getElementById("date");
  var khung_gio = "";
  // get value moctime
  const moc_time = document.getElementsByClassName("time");

  for (var i in moc_time) {
    moc_time[i].onclick = function () {
      khung_gio = this.value;
    };
  }

  // btn dat lich
  $("#datlich .btndatlich").on("click", function () {
    if (!date.checkValidity()) {
      alert("Chọn hôm nay hoặc ngày mai");
      return;
    }
    if (khung_gio == "") {
      alert("Chưa chọn khung giờ");
      return;
    }

    console.log(khung_gio);
    console.log(date.value);

    $.post(
      "../datlich.php",
      { data_date: date.value, data_time: khung_gio },
      function (str) {
        alert(str);
        location.reload();
      }
    );
  });
});
