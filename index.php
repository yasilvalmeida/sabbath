<!DOCTYPE html>
<html>

<head>
  <title>Sabbath School Entry</title>
  <?php
  require("cmp/head.php");
  ?>
</head>

<body id="page-top">
  <div id="wrapper">
    <div class="d-flex flex-column" id="content-wrapper">
      <div id="content">
        <div class="container-fluid">
          <div><br></div>
          <div class="d-sm-flex justify-content-between align-items-center mb-1">
            <h2 class="text-dark mb-0">Add New Transaction</h2>
          </div>
          <div class="d-sm-flex justify-content-between align-items-center mb-1">
            <p>Add the details to add new transaction using the form below.</p>
          </div>
          <div class="d-sm-flex justify-content-between align-items-center mb-2">
            <div class="row">
              <div id="buttons-top" class="col-12">
                <a href="javascript:submit()" class="btn btn-success">Submit Transaction</a>
                <a href="javascript:save()" class="btn btn-warning">Save</a>
                <a href="javascript:cancel()" class="btn btn-danger">Cancel</a>
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-12">
              <div class="card shadow border-left-success py-2">
                <div class="card-body">
                  <div class="row align-items-center no-gutters">
                    <div class="col mr-2">
                      <div class="text-dark font-weight-bold mb-0">
                        <h3>Transaction Details</h3>
                        <form class="needs-validation" novalidate>
                          <div class="form-row">
                            <div class="col-6 mb-3">
                              <label for="date">Date:</label>
                              <input type="date" class="form-control" id="date" placeholder="Transaction date" value="" required>
                              <div class="invalid-feedback">
                                Please choose a valid date.
                              </div>
                            </div>
                            <div class="col-4 mb-3">
                              <label for="department">Department:</label>
                              <select id="department" class="form-control" style="background-image: none;">
                                <option value="1">Department 1</option>
                                <option value="2">Department 2</option>
                                <option value="3">Department 3</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-12">
                              <h5>Cheque details</h5>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-md-6 mb-3">
                              <label for="name">Name: </label>
                              <input type="text" class="form-control" id="name" placeholder="Name" required>
                              <div class="invalid-feedback">
                                Please provide a valid name.
                              </div>
                            </div>
                            <div class="col-md-3 mb-3">
                              <label for="reference">Reference: </label>
                              <input type="text" class="form-control" id="reference" placeholder="Reference" required>
                              <div class="invalid-feedback">
                                Please provide a valid reference.
                              </div>
                            </div>
                            <div class="col-md-3 mb-3">
                              <label for="amount">Amount: </label>
                              <input type="text" class="form-control" id="amount" placeholder="Amount" required>
                              <div class="invalid-feedback">
                                Please provide a valid amount.
                              </div>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-12">
                              <h5>Money Denomination</h5>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-12 d-flex justify-content-center">
                              <table>
                                <tr>
                                  <td>
                                    <label>£50: </label>
                                  </td>
                                  <td>
                                    <input id="P50" type="number" min="0" value="0" class="form-control" style="background-image: none; text-align: right;">
                                  </td>
                                  <td>
                                    <label id="P50Total">£0.00</label>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>£20: </label>
                                  </td>
                                  <td>
                                    <input id="P20" type="number" min="0" value="0" class="form-control" style="background-image: none; text-align: right;">
                                  </td>
                                  <td>
                                    <label id="P20Total">£0.00</label>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>£10: </label>
                                  </td>
                                  <td>
                                    <input id="P10" type="number" min="0" value="0" class="form-control" style="background-image: none; text-align: right;">
                                  </td>
                                  <td>
                                    <label id="P10Total">£0.00</label>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>£5: </label>
                                  </td>
                                  <td>
                                    <input id="P5" type="number" min="0" value="0" class="form-control" style="background-image: none; text-align: right;">
                                  </td>
                                  <td>
                                    <label id="P5Total">£0.00</label>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>£2: </label>
                                  </td>
                                  <td>
                                    <input id="P2" type="number" min="0" value="0" class="form-control" style="background-image: none; text-align: right;">
                                  </td>
                                  <td>
                                    <label id="P2Total">£0.00</label>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>£1: </label>
                                  </td>
                                  <td>
                                    <input id="P1" type="number" min="0" value="0" class="form-control" style="background-image: none; text-align: right;">
                                  </td>
                                  <td>
                                    <label id="P1Total">£0.00</label>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>50p: </label>
                                  </td>
                                  <td>
                                    <input id="p50" type="number" min="0" value="0" class="form-control" style="background-image: none; text-align: right;">
                                  </td>
                                  <td>
                                    <label id="p50Total">£0.00</label>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>20p: </label>
                                  </td>
                                  <td>
                                    <input id="p20" type="number" min="0" value="0" class="form-control" style="background-image: none; text-align: right;">
                                  </td>
                                  <td>
                                    <label id="p20Total">£0.00</label>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>10p: </label>
                                  </td>
                                  <td>
                                    <input id="p10" type="number" min="0" value="0" class="form-control" style="background-image: none; text-align: right;">
                                  </td>
                                  <td>
                                    <label id="p10Total">£0.00</label>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>5p: </label>
                                  </td>
                                  <td>
                                    <input id="p5" type="number" min="0" value="0" class="form-control" style="background-image: none; text-align: right;">
                                  </td>
                                  <td>
                                    <label id="p5Total">£0.00</label>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>2p: </label>
                                  </td>
                                  <td>
                                    <input id="p2" type="number" min="0" value="0" class="form-control" style="background-image: none; text-align: right;">
                                  </td>
                                  <td>
                                    <label id="p2Total">£0.00</label>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>1p: </label>
                                  </td>
                                  <td>
                                    <input id="p1" type="number" min="0" value="0" class="form-control" style="background-image: none; text-align: right;">
                                  </td>
                                  <td>
                                    <label id="p1Total">£0.00</label>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>Number of Cheques: </label>
                                  </td>
                                  <td>
                                    <input id="NC" type="number" min="0" value="0" class="form-control" style="background-image: none; text-align: right;">
                                  </td>
                                  <td>
                                    <label id="NCTotal">£0.00</label>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>Total: </label>
                                  </td>
                                  <td></td>
                                  <td>
                                    <label id="total">£0.00</label>
                                  </td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-sm-flex justify-content-between align-items-center mb-2">
            <div class="row">
              <div id="buttons-botton" class="col-12">
                <a href="javascript:submit()" class="btn btn-success">Submit Transaction</a>
                <a href="javascript:save()" class="btn btn-warning">Save</a>
                <a href="javascript:cancel()" class="btn btn-danger">Cancel</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      require("cmp/footer.php");
      ?>
    </div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  </div>
  <div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure that you need to cancel, all cookie data will be erased?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="javascript:confirmCleanUp()" class="btn btn-danger">Delete</a>
        </div>
      </div>
    </div>
  </div>
  <?php
  require("cmp/script.php");
  ?>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    var forms;
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.classList.add('was-validated');
          /* form.addEventListener('click', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false); */
        });
      }, false);
      $("#P50").on("input", function() {
        const value = (parseInt($(this).val()) * 50).toFixed(2);
        $("#P50Total").html(`£${value}`);
        updateTotal();
      });
      $("#P20").on("input", function() {
        const value = (parseInt($(this).val()) * 20).toFixed(2);
        $("#P20Total").html(`£${value}`);
        updateTotal();
      });
      $("#P10").on("input", function() {
        const value = (parseInt($(this).val()) * 10).toFixed(2);
        $("#P10Total").html(`£${value}`);
        updateTotal();
      });
      $("#P5").on("input", function() {
        const value = (parseInt($(this).val()) * 5).toFixed(2);
        $("#P5Total").html(`£${value}`);
        updateTotal();
      });
      $("#P2").on("input", function() {
        const value = (parseInt($(this).val()) * 2).toFixed(2);
        $("#P2Total").html(`£${value}`);
        updateTotal();
      });
      $("#P1").on("input", function() {
        const value = (parseInt($(this).val()) * 1).toFixed(2);
        $("#P1Total").html(`£${value}`);
        updateTotal();
      });
      $("#p50").on("input", function() {
        const value = (parseInt($(this).val()) * 0.50).toFixed(2);
        $("#p50Total").html(`£${value}`);
        updateTotal();
      });
      $("#p20").on("input", function() {
        const value = (parseInt($(this).val()) * 0.20).toFixed(2);
        $("#p20Total").html(`£${value}`);
        updateTotal();
      });
      $("#p10").on("input", function() {
        const value = (parseInt($(this).val()) * 0.10).toFixed(2);
        $("#p10Total").html(`£${value}`);
        updateTotal();
      });
      $("#p5").on("input", function() {
        const value = (parseInt($(this).val()) * 0.05).toFixed(2);
        $("#p5Total").html(`£${value}`);
        updateTotal();
      });
      $("#p2").on("input", function() {
        const value = (parseInt($(this).val()) * 0.02).toFixed(2);
        $("#p2Total").html(`£${value}`);
        updateTotal();
      });
      $("#p1").on("input", function() {
        const value = (parseInt($(this).val()) * 0.01).toFixed(2);
        $("#p1Total").html(`£${value}`);
        updateTotal();
      });
      $("#NC").on("input", function() {
        const amount = $("#amount").val();
        if (!amount || isNaN(amount)) {
          $(this).val(0);
          alert("Please provide a valid amount.");
          return;
        }
        const value = (parseInt($(this).val()) * parseFloat(amount)).toFixed(2);
        $("#NCTotal").html(`£${value}`);
        updateTotal();
      });
    })();
    submit = () => {
      const date = $("#date").val(),
        departmentId = $("#department option:selected").val(),
        department = $("#department option:selected").text(),
        name = $("#name").val(),
        reference = $("#reference").val(),
        amount = $("#amount").val();
      if (!date) {
        alert("Please provide a valid date.");
        $("#date").focus();
        return;
      }
      if (!name) {
        alert("Please provide a valid name.");
        $("#name").focus();
        return;
      }
      if (!reference) {
        alert("Please provide a valid reference.");
        $("#reference").focus();
        return;
      }
      if (!amount) {
        alert("Please provide a valid amount.");
        $("#amount").focus();
        return;
      }
      const P50 = $("#P50").val(),
        P20 = $("#P20").val(),
        P10 = $("#P10").val(),
        P5 = $("#P5").val(),
        P2 = $("#P2").val(),
        P1 = $("#P1").val(),
        p50 = $("#p50").val(),
        p20 = $("#p20").val(),
        p10 = $("#p10").val(),
        p5 = $("#p5").val(),
        p2 = $("#p2").val(),
        p1 = $("#p1").val(),
        NC = $("#NC").val(),
        money_denomination = [{
            'P50': P50
          },
          {
            'P20': P20
          },
          {
            'P10': P10
          },
          {
            'P5': P5
          },
          {
            'P2': P2
          },
          {
            'P1': P1
          },
          {
            'p50': p50
          },
          {
            'p20': p20
          },
          {
            'p10': p10
          },
          {
            'p5': p5

          },
          {
            'p2': p2
          },
          {
            'p1': p1
          },
          {
            'NC': NC
          }
        ];

      var cookieName = 'form-data',
        cookieValueStored = delCookie(cookieName);
      const tipsTop = $("#buttons-top"),
        tipsBotton = $("#buttons-botton")
      tipsTop.html("<img src='assets/img/loader.gif' />");
      tipsBotton.html("<img src='assets/img/loader.gif' />");
      $.post(
        "api/api.php?action=insertTransaction", {
          date,
          departmentId,
          name,
          reference,
          amount,
          money_denomination: JSON.stringify(money_denomination)
        },
        (data, status) => {
          if (status == "success") {
            try {
              const htmlContent = '<a href="javascript:submit()" class="btn btn-success">Submit Transaction</a><a href="javascript:save()" class="btn btn-warning">Save</a><a href="javascript:cancel()" class="btn btn-danger">Cancel</a>';
              tipsTop.html(htmlContent);
              tipsBotton.html(htmlContent);
              data = JSON.parse(data);
              if (!isNaN(data.result)) {
                toastr.success('Transaction submitted!');
                setTimeout(() => {
                  window.location.href = "report.php?id=" + data.result;
                }, 1000);
              } else {
                toastr.error(data.result);
              }
            } catch (error) {
              toastr.error(error);
            }
          } else {
            toastr.success(data);
          }
        }
      );
    }
    save = () => {
      const date = $("#date").val(),
        department = $("#department option:selected").text(),
        name = $("#name").val(),
        reference = $("#reference").val(),
        amount = $("#amount").val() ? $("#amount").val(): 0;
      const P50 = $("#P50").val(),
        P20 = $("#P20").val(),
        P10 = $("#P10").val(),
        P5 = $("#P5").val(),
        P2 = $("#P2").val(),
        P1 = $("#P1").val(),
        p50 = $("#p50").val(),
        p20 = $("#p20").val(),
        p10 = $("#p10").val(),
        p5 = $("#p5").val(),
        p2 = $("#p2").val(),
        p1 = $("#p1").val(),
        NC = $("#NC").val(),
        money_denomination = [{
            'P50': P50
          },
          {
            'P20': P20
          },
          {
            'P10': P10
          },
          {
            'P5': P5
          },
          {
            'P2': P2
          },
          {
            'P1': P1
          },
          {
            'p50': p50
          },
          {
            'p20': p20
          },
          {
            'p10': p10
          },
          {
            'p5': p5

          },
          {
            'p2': p2
          },
          {
            'p1': p1
          },
          {
            'NC': NC
          }
        ];
      //console.log(money_denomination);
      var cookieName = 'form-data',
        cookieValueStored = getCookie(cookieName);
      // Check if this product was rated by some other client to add previous rating
      if (cookieValueStored) {
        delCookie(cookieName);
        setCookie(cookieName, `${date}|${department}|${name}|${reference}|${amount}|${JSON.stringify(money_denomination)}`);
      } else
        setCookie(cookieName, `${date}|${department}|${name}|${reference}|${amount}|${JSON.stringify(money_denomination)}`);
      toastr.success('Form data saved!');
    }
    cancel = () => {
      $('.modal').modal('show');
    }
    confirmCleanUp = () => {
      $('.modal').modal('hide');
      delCookie("form-data");
      location.reload();
    }
    updateTotal = (newValue) => {
      const P50 = $("#P50").val(),
        P20 = $("#P20").val(),
        P10 = $("#P10").val(),
        P5 = $("#P5").val(),
        P2 = $("#P2").val(),
        P1 = $("#P1").val(),
        p50 = $("#p50").val(),
        p20 = $("#p20").val(),
        p10 = $("#p10").val(),
        p5 = $("#p5").val(),
        p2 = $("#p2").val(),
        p1 = $("#p1").val(),
        amount = $("#amount").val(),
        NC = $("#NC").val();
      const total = (P50 * 50) + (P20 * 20) + (P10 * 10) + (P5 * 5) + (P2 * 2) + (P1 * 1) + (p50 * 0.50) + (p20 * 0.20) + (p10 * 0.10) + (p5 * 0.05) + (p2 * 0.02) + (p1 * 0.01) + (amount && !isNaN(amount) ? parseFloat(amount) * parseInt(NC) : 0);
      $("#total").html(`£${total.toFixed(2)}`);
    }
  </script>
  <script src="assets/js/index.js"></script>
</body>

</html>