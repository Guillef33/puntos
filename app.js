// Data
const dataChartDataLabelsExample = {
  type: 'pie',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May'],
    datasets: [
      {
        label: 'Traffic',
        data: [30, 45, 62, 65, 61],
        backgroundColor: [
          'rgba(63, 81, 181, 0.5)',
          'rgba(77, 182, 172, 0.5)',
          'rgba(66, 133, 244, 0.5)',
          'rgba(156, 39, 176, 0.5)',
          'rgba(233, 30, 99, 0.5)',
        ],
      },
    ],
  },
};

// Options
const optionsChartDataLabelsExample = {
  dataLabelsPlugin: true,
  options: {
    plugins: {
      datalabels: {
        formatter: (value, ctx) => {
          let sum = 0;
          // Assign the data to the variable and format it according to your needs
          let dataArr = dataChartDataLabelsExample.data.datasets[0].data;
          dataArr.map((data) => {
            sum += data;
          });
          let percentage = ((value * 100) / sum).toFixed(2) + '%';
          return percentage;
        },
        color: 'white',
        labels: {
          title: {
            font: {
              size: '14',
            },
          },
        },
      },
    },
  },
};

new mdb.sChart(
  document.getElementById('chart-data-mdb-labels-example'),
  dataChartDataLabelsExample,
  optionsChartDataLabelsExample
);
