google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawBarRegisteredUsers);

function drawBarRegisteredUsers() {
var data = new google.visualization.arrayToDataTable(totalRegisteredUser);

var options = {
    legend: { position: 'none' },
    axes: {
        x: {
            0: { side: 'top', label: 'Courses'}
        },
        y: {
            0: { side: 'top', label: 'Number of Registered Students'}
        }
    },
    bar: { groupWidth: "100%" }
};

var chart = new google.charts.Bar(document.getElementById('registered-user-bar'));
chart.draw(data, options);
};
