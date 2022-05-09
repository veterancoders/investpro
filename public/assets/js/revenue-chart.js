var options = {
  series: [
    {
      name: "Desktops",
      data: [50, 250, 100, 350, 100, 450],
    },
  ],
  chart: {
    height: 450,
    type: "line",
    zoom: {
      enabled: false,
    },
    toolbar: {
        show: false
    },
    foreColor: '#fff'
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: "straight",
    width: 2,
    colors: "#fff"
  },

  xaxis: {
    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
  },
};

var chart = new ApexCharts(document.querySelector("#revChart"), options);
chart.render();
