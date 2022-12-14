<!DOCTYPE html>
<html lang="en">
<head>
    <title>ELMO NLG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>State of the ORG</h2>
    <i class="fas fa-download" style="font-size:60px;color:lightblue;text-shadow:2px 2px 4px #000000;"></i>
    <form>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/avg_time_to_hire.PNG') }}" alt="Average Time to Hire" width="500" height="300">
            </div>
            <div class="form-group col-md-6">
                <label for="text1">Average Time to Hire</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" >{{ $avgTimeToHireMsg }}</textarea>
                <button class="btn-primary" style="margin-top: 10px;">Save</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/absence.PNG') }}" alt="Leavers" width="500" height="300">
            </div>
            <div class="form-group col-md-6">
                <label for="text2">Leavers</label>
                <textarea class="form-control" id="exampleFormControlTextarea2" rows="4">{{ $absenceMsg }}</textarea>
                <button class="btn-primary" style="margin-top: 10px;">Save</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/position_cost.PNG') }}" alt="Average Position Cost" width="500" height="300">
            </div>
            <div class="form-group col-md-6">
                <label for="text3">Average Position Cost</label>
                <textarea class="form-control" id="exampleFormControlTextarea3" rows="4">{{ $positionCostMsg }}</textarea>
                <button class="btn-primary" style="margin-top: 10px;">Save</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
