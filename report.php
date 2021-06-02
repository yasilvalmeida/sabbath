<!DOCTYPE html>
<html>

<head>
  <title>Sabbath School Report</title>
  <?php
  require("cmp/head.php");
  if (!isset($_GET['id'])) {
    header('Location: index.php');
  } else {
    $id = $_GET['id'];
    echo "<input id='id' type='hidden' value='" . $id . "' />";
  }
  ?>
</head>

<body id="page-top">
  <div id="wrapper">
    <div class="d-flex flex-column" id="content-wrapper">
      <div id="content">
        <div class="container-fluid">
          <div><br></div>
          <div class="d-sm-flex justify-content-between align-items-center mb-1">
            <h2 class="text-dark mb-0">Sabbath School Report</h2>
          </div>
          <div class="d-sm-flex justify-content-between align-items-center mb-2">
            <div class="row">
              <div id="buttons-top" class="col-12">
                <a href="index.php" class="btn btn-success">Done</a>
                <a href="javascript:remove()" class="btn btn-danger">Delete</a>
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
                        <form class="needs-validation" novalidate>
                          <div class="form-row">
                            <div id="dateContent" class="col-6 mb-3">
                              <label for="date">Date:</label>
                              <input type="text" class="form-control" id="date" disabled>
                            </div>
                            <div id="departmentContent" class="col-4 mb-3">
                              <label for="department">Department:</label>
                              <input type="text" class="form-control" id="department" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-12">
                              <h5>Cheque details</h5>
                            </div>
                          </div>
                          <div class="form-row">
                            <div id="nameContent" class="col-md-6 mb-3">
                              <label for="name">Name: </label>
                              <input type="text" class="form-control" id="name" disabled>
                            </div>
                            <div id="referenceContent" class="col-md-3 mb-3">
                              <label for="reference">Reference: </label>
                              <input type="text" class="form-control" id="reference" disabled>
                            </div>
                            <div id="amountContent" class="col-md-3 mb-3">
                              <label for="amount">Amount: </label>
                              <input type="text" class="form-control" id="amount" disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-12">
                              <h5>Money Denomination</h5>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-12 d-flex justify-content-center">
                              <table id="moneyDenominationContent">
                                <tr>
                                  <td>
                                    <label>£50: </label>
                                  </td>
                                  <td>
                                    <input id="P50" type="number" min="0" value="0" class="form-control" disabled style="background-image: none; text-align: right;">
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
                                    <input id="P20" type="number" min="0" value="0" class="form-control" disabled style="background-image: none; text-align: right;">
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
                                    <input id="P10" type="number" min="0" value="0" class="form-control" disabled style="background-image: none; text-align: right;">
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
                                    <input id="P5" type="number" min="0" value="0" class="form-control" disabled style="background-image: none; text-align: right;">
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
                                    <input id="P2" type="number" min="0" value="0" class="form-control" disabled style="background-image: none; text-align: right;">
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
                                    <input id="P1" type="number" min="0" value="0" class="form-control" disabled style="background-image: none; text-align: right;">
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
                                    <input id="p50" type="number" min="0" value="0" class="form-control" disabled style="background-image: none; text-align: right;">
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
                                    <input id="p20" type="number" min="0" value="0" class="form-control" disabled style="background-image: none; text-align: right;">
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
                                    <input id="p10" type="number" min="0" value="0" class="form-control" disabled style="background-image: none; text-align: right;">
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
                                    <input id="p5" type="number" min="0" value="0" class="form-control" disabled style="background-image: none; text-align: right;">
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
                                    <input id="p2" type="number" min="0" value="0" class="form-control" disabled style="background-image: none; text-align: right;">
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
                                    <input id="p1" type="number" min="0" value="0" class="form-control" disabled style="background-image: none; text-align: right;">
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
                                    <input id="NC" type="number" min="0" value="0" class="form-control" disabled style="background-image: none; text-align: right;">
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
                <a href="index.php" class="btn btn-success">Done</a>
                <a href="javascript:remove()" class="btn btn-danger">Delete</a>
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
          <p>Are you sure that you need to delete this transaction?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="javascript:confirmRemove()" class="btn btn-danger">Delete</a>
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
    })();
    remove = () => {
      $('.modal').modal('show');
    }
    confirmRemove = () => {
      $('.modal').modal('hide');
      const tipsTop = $("#buttons-top"),
        tipsBotton = $("#buttons-botton")
      tipsTop.html("<img src='assets/img/loader.gif' />");
      tipsBotton.html("<img src='assets/img/loader.gif' />");
      $.post(
        "api/api.php?action=deleteTransaction", {
          id: $("#id").val()
        },
        (data, status) => {
          if (status == "success") {
            try {
              const htmlContent = '<a href="index.php" class="btn btn-success">Done</a><a href="javascript:remove()" class="btn btn-danger">Delete</a>';
              tipsTop.html(htmlContent);
              tipsBotton.html(htmlContent);
              data = JSON.parse(data);
              if (!isNaN(data.result)) {
                toastr.success('Transaction deleted!');
                setTimeout(() => {
                  window.location.href = "index.php";
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
  </script>
  <script src="assets/js/report.js"></script>
</body>

</html>