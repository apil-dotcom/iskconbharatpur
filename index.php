<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Iskcon Devotees Management</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>

</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-white">
  <a class="navbar-brand" href="#">
    <img src="iskcon-logo.png" alt="ISKCON Logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="prasadam.php">Prasadam</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="classes.php">Classes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Aarati</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sewa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Iskcon <b>Management</b></h2>
                    </div>
                    <div class="col-sm-7">
                        <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Devotee</span></a>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <!-- Search input area -->
                    <input type="text" id="searchInput" class="form-control" placeholder="Search for names..">
                </div>
            </div>
            <table class="table table-striped table-hover" id="userTable">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Chanting Round</th>
                        <th>Attendance</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#">Anil Gurung</a></td>
                        <td>2056-02-27</td>
                        <td>Chitwan</td>
                        <td>apilneupane19@gmail.com</td>
                        <td>5</td>
                        <td>
                        <button class="btn btn-danger btn-attendance" onclick="decreaseAttendance(this)">-</button>
                            <span class="attendance-count">0</span>
                            <button class="btn btn-success btn-attendance" onclick="increaseAttendance(this)">+</button>
                        </td>
                        <td>
                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="#">Madan Rana</a></td>
                        <td>2056-02-27</td>                        
                        <td>Bharatpur-12</td>
                        <td>Bharatpur-12</td>
                        <td>10</td>
                        <td>
                        <button class="btn btn-danger btn-attendance" onclick="decreaseAttendance(this)">-</button>
                            <span class="attendance-count">0</span>
                            <button class="btn btn-success btn-attendance" onclick="increaseAttendance(this)">+</button>
                        </td>
                        <td>
                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="#">Hari Sapkota</a></td>
                        <td>2059-02-27</td>                        
                        <td>Gaindakot-7</td>
                        <td>Gaindakot-7</td>
                        <td>1</td>
                        <td>
                        <button class="btn btn-danger btn-attendance" onclick="decreaseAttendance(this)">-</button>
                            <span class="attendance-count">0</span>
                            <button class="btn btn-success btn-attendance" onclick="increaseAttendance(this)">+</button>
                        </td>
                        <td>
                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><a href="#">Apil Neupane</a></td>
                        <td>2059-02-27</td>                        
                        <td>Bharatpur-7</td>
                        <td>Bharatpur-7</td>
                        <td>10</td>
                        <td>
                            <button class="btn btn-danger btn-attendance" onclick="decreaseAttendance(this)">-</button>
                            <span class="attendance-count">0</span>
                            <button class="btn btn-success btn-attendance" onclick="increaseAttendance(this)">+</button>
                        </td>
                        <td>
                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>10</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>     

<script src="script.js"></script>
</body>
</html>
