<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Prasadam Attendance</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="./style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    
</style>
</head>
<body>
<?php require "./requires/navbar.php"; ?>
<div class="container mt-5">
    <h2>Prasadam Attendance</h2>
    <form id="prasadamForm">
        <div class="form-group">
            <label for="date">Select Date:</label>
            <input type="date" id="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="session">Select Session:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="session" id="morning" value="Morning" required>
                <label class="form-check-label" for="morning">Morning</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="session" id="evening" value="Evening" required>
                <label class="form-check-label" for="evening">Evening</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Show Names</button>
    </form>
    <div id="result" class="mt-4"></div>
</div>
<script>
document.getElementById('prasadamForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var date = document.getElementById('date').value;
    var session = document.querySelector('input[name="session"]:checked').value;
    
    // Hardcoded data for demonstration purposes
    var data = {
        "2024-05-26": {
            "Morning": ["Devotee 1", "Devotee 2"],
            "Evening": ["Devotee 3", "Devotee 4"]
        },
        "2024-05-27": {
            "Morning": ["Devotee 5", "Devotee 6"],
            "Evening": ["Devotee 7", "Devotee 8"]
        }
    };

    var resultDiv = document.getElementById('result');
    resultDiv.innerHTML = ''; // Clear previous results

    if (data[date] && data[date][session]) {
        var names = data[date][session];
        var list = '<ul>';
        names.forEach(function(name) {
            list += '<li>' + name + '</li>';
        });
        list += '</ul>';
        resultDiv.innerHTML = '<h3>Names of Devotees who had Prasadam (' + session + '):</h3>' + list;
    } else {
        resultDiv.innerHTML = '<h3>No records found for the selected date and session.</h3>';
    }
});
</script>
</body>
</html>
