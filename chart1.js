var options = {
  series: [{
  name: 'Instagram Post Count',
  type: 'column',
  data: ['1', '1', '1', '2', '1', '2']
}, {
  name: 'Avg Likes',
  type: 'line',
  data: [200, 230, 900, 190, 150, 230]
},{
  name: 'Total Likes',
  type: 'line',
  data: [200, 230, 900, 800, 150, 230]
}],
  chart: {
  height: '100%',
  type: 'line',
},
stroke: {
  width: [0, 4, 4],
  curve: 'smooth'
},
dataLabels: {
  enabled: true,
  enabledOnSeries: [1]
},
labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001'],
xaxis: {
  type: 'datetime'
},
yaxis: [{
  title: {
    // text: 'Instagram Post',
  },

}, {
  opposite: true
}]
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();