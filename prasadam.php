<?php include './requires/header.php';
include './requires/navbar.php';
?>
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
<?php include './requires/footer.php'; ?>
</body>
</html>
