$(function() {
    fetchAllDepartment();
});

fetchAllDepartment = () => {
  var tips = $("#department");
  tips.html("<img src='assets/img/loader.gif' />");
  $.post(
    "api/api.php?action=fetchAllDepartment",
    { },
    (data, status) => {
      if (status == "success") {
        try {
          var departments = JSON.parse(data);
          let htmlContent = "";
          departments.map((department, i) => {
            const { id, name, details } = department;
            htmlContent += `<option value="${id}">${name}</option>`;
          });
          tips.html(htmlContent);
          loadFromCookie();
        } catch (error) {
          toastr.error(error);
        }
      } else {
        toastr.success(data);
      }
    }
  );
};
loadFromCookie = () => {
  const storedCookie = getCookie("form-data");
  const values = !storedCookie ? [] : storedCookie.split("|");
  if (values.length > 0) {
    values.map((value, i) => {
      switch (i) {
        case 0:
          // Date
          $("#date").val(value);
          break;
        case 1:
          // Department
          $("#department option:contains(" + value + ")").prop(
            "selected",
            true
          );
          break;
        case 2:
          // Name
          $("#name").val(value);
          break;
        case 3:
          // Reference
          $("#reference").val(value);
          break;
        case 4:
          // Amount
          $("#amount").val(value);
          break;
        default:
          // Money Denominations
          const money_denominations = JSON.parse(value);
          const values = [
            50,
            20,
            10,
            5,
            2,
            1,
            0.5,
            0.2,
            0.1,
            0.05,
            0.02,
            0.01,
            parseFloat($("#amount").val()),
          ];
          money_denominations.map((md, j) => {
            const key = Object.keys(md)[0],
              val = parseInt(Object.values(md)[0]);
            $("#" + key).val(val);
            $("#" + key + "Total").html(`£${(val * values[j]).toFixed(2)}`);
          });
          updateTotal();
      }
    });
    toastr.success("Form data loaded!");
  }
}