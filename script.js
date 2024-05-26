
    $(document).ready(function() {
        // Search functionality
        $('#searchInput').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#devoteeTable tr').filter(function() {
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
        if (count > 0) {
            countElement.text(count - 1);
        }
    }

    // footer
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('year').textContent = new Date().getFullYear();
      });
      


//script for prasadam form
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