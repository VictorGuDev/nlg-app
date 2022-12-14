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
                <img src="{{ asset('images/avg_time_to_hire.PNG') }}" alt="Picture 1" width="500" height="300">
            </div>
            <div class="form-group col-md-6">
                <label for="text1">Text 1</label>
                <input type="text" class="form-control" id="text1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/absence.PNG') }}" alt="Picture 2" width="500" height="300">
            </div>
            <div class="form-group col-md-6">
                <label for="text2">Text 2</label>
                <input type="text" class="form-control" id="text2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/position_cost.PNG') }}" alt="Picture 3" width="500" height="300">
            </div>
            <div class="form-group col-md-6">
                <label for="text3">Text 1</label>
                <input type="text" class="form-control" id="text3">
            </div>
        </div>
        <button class="btn-primary">Save</button>
    </form>
</div>
</body>
</html>
