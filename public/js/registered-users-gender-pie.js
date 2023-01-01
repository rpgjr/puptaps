google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable(totalRegisteredUserGender);

    var option = {
        title: "Percentage of Registered Students per Sex",
    };

    var chart = new google.visualization.PieChart(document.getElementById('registered-user-gender'));

    chart.draw(data, option);
}
