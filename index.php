<?php include './requires/header.php';
include './requires/navbar.php';
?>
<!-- Table starts here -->
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
                    <input type="text" id="searchInput" class="form-control" placeholder="Search by name or email">
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Chanting</th>
                        <th>Attendance</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="devoteeTable">
                    <!-- Sample data row -->
                    <tr>
                        <td>1</td>
                        <td><a href="#">Apil Neupane</a></td>
                        <td>2054-02-27</td>
                        <td>Bharatpur-12</td>
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
                        <td>Kshetrapur-2</td>
                        <td>madanrana@gmail.com</td>
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
                        <td>mr.harisapkota@gmail.com</td>
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

<?php include './requires/footer.php'; ?>
</body>

</html>