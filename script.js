$(document).ready(function(){
    // Search functionality
    $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('#userTable tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

// Increase attendance count
function increaseAttendance(button) {
    var countElement = $(button).siblings('.attendance-count');
    var count = parseInt(countElement.text());
    countElement.text(count + 1);
}

// Decrease attendance count
function decreaseAttendance(button) {
    var countElement = $(button).siblings('.attendance-count');
    var count = parseInt(countElement.text());
    if(count > 0) {
        countElement.text(count - 1);
    }
}