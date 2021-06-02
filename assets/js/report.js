$(function() {
  fetchTransaction();
});


fetchTransaction = () => {
  $("#dateContent").html("<img src='assets/img/loader.gif' />");
  $("#departmentContent").html("<img src='assets/img/loader.gif' />");
  $("#nameContent").html("<img src='assets/img/loader.gif' />");
  $("#referenceContent").html("<img src='assets/img/loader.gif' />");
  $("#amountContent").html("<img src='assets/img/loader.gif' />");
  $("#moneyDenominationContent").html("<img src='assets/img/loader.gif' />");
  $.post("api/api.php?action=fetchTransaction", { id: $("#id").val() }, (data, status) => {
    if (status == "success") {
      try {
        const result = JSON.parse(data);
        const transaction = result.data[0];
        if (!transaction) {
          alert("Transaction not found for this ID");
          window.location.href = "index.php";
        }
        const { date, t_department_name, name, reference, amount, money_denomination } = transaction;
        let md_json = JSON.parse(money_denomination);
        $("#dateContent").html('<label for="date">Date:</label><input type="text" class="form-control" id="date" disabled>');
        $("#departmentContent").html('<label for="department">Department:</label><input type="text" class="form-control" id="department" disabled>');
        $("#nameContent").html('<label for="name">Name: </label><input type="text" class="form-control" id="name" disabled>');
        $("#referenceContent").html('<label for="reference">Reference: </label><input type="text" class="form-control" id="reference" disabled>');
        $("#amountContent").html('<label for="amount">Amount: </label><input type="text" class="form-control" id="amount" disabled>');
        $("#date").val(date.split(' ')[0]);
        $("#department").val(t_department_name);
        $("#name").val(name);
        $("#reference").val(reference);
        $("#amount").val(amount);
        let htmlContent = '';
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
          parseFloat(amount),
        ];
        let total = 0;
        md_json.map((md, i) => {
          const key = Object.keys(md)[0],
            val = parseInt(Object.values(md)[0]);
          if (val > 0) {
            if (i !== md_json.length - 1) {
              htmlContent += `
                          <tr>
                            <td></td>
                            <td>
                              <label>£${values[i]}</label>
                            </td>
                            <td>
                              <label> x </label>
                            </td>
                            <td>
                              <label>${val}</label>
                            </td>
                            <td>
                              <label> = </label>
                            </td>
                            <td>
                              <label>£${(
                val * values[i]
              ).toFixed(2)}</label>
                            </td>
                          </tr>
                          `;
            }
            else {
              htmlContent += `
                          <tr>
                            <td>
                              <label>Cheques Total: </label>
                            </td>
                            <td>
                              <label>£${values[i]}</label>
                            </td>
                            <td>
                              <label> x </label>
                            </td>
                            <td>
                              <label>${val}</label>
                            </td>
                            <td>
                              <label> = </label>
                            </td>
                            <td>
                              <label>£${(
                val * values[i]
              ).toFixed(2)}</label>
                            </td>
                          </tr>
                          `;
            }
            total += val * values[i];
          }
        });
        htmlContent += `
                        <tr>
                          <td>
                            <label>Total: </label>
                          </td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <label> = </label>
                          </td>
                          <td>
                            <label>£${(total).toFixed(2)}</label>
                          </td>
                        </tr>
                        `;
        $("#moneyDenominationContent").html(htmlContent);
      } catch (error) {
        toastr.error(error);
      }
    } else {
      toastr.success(data);
    }
  });
};