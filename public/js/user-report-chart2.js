
var chartStudentAges;

(function($) {
  $(document).ready(function() {
    var labels = Object.keys(alumniPerAge);
    var values = Object.values(alumniPerAge);

    const ctx = document.getElementById('userReport-chart2');
    chartStudentAges.ChartData(ctx, 'pie', labels, values);
  });

  chartStudentAges = {
    ChartData:function(ctx, type, labels, values) {
      new Chart(ctx, {
        type: type,
        data: {
          labels: labels,
          datasets: [{
            label: '# Students per Age',
            data: values,
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 159, 64, 0.2)',
              'rgba(255, 205, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
              'rgb(255, 99, 132)',
              'rgb(255, 159, 64)',
              'rgb(255, 205, 86)',
              'rgb(75, 192, 192)',
              'rgb(54, 162, 235)',
              'rgb(153, 102, 255)',
              'rgb(201, 203, 207)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          },
        },
      });
    }
  }
})(jQuery);



