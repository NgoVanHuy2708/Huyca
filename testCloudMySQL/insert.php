<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
<script src="//oss.maxcdn.com/momentjs/2.8.2/moment.min.js"></script>
<script src="/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<style type="text/css">
/* Override feedback icon position */
#meetingForm .dateContainer .form-control-feedback {
    top: 0;
    right: -15px;
}
</style>

<script>
$(document).ready(function() {
    $('#datetimePicker').datetimepicker();

    $('#meetingForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            meeting: {
                validators: {
                    date: {
                        format: 'MM/DD/YYYY h:m A',
                        message: 'The value is not a valid date'
                    }
                }
            }
        }
    });

    $('#datetimePicker').on('dp.change dp.show', function(e) {
        $('#meetingForm').bootstrapValidator('revalidateField', 'meeting');
    });
});
</script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Thêm</title>
  </head>
  <body>
    <center><h1>Insert</h1></center>
    <form id="meetingForm" action="insert_customer.php" method="post">
    <center>
    <div class="form-group">
        <label class="col-sm-3 control-label">Name</label>
        <div class="col-sm-6 dateContainer">
            <div class="input-group date" id="dsadsa">
                <input type="text" class="form-control" name="txtFull_Name" required placeholder="Enter Name" />
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
    </div>

  <div class="form-group">
        <label class="col-sm-3 control-label">Date Of Birth</label>
        <div class="col-sm-6 dateContainer">
            <div class="input-group date" id="datetimePicker">
                <input type="text" class="form-control" name="txtDOB" placeholder="MM/DD/YYYY h:m A" />
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </center>
</form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>






