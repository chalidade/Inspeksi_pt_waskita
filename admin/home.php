<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-8 pb-10 header-text">
      <h3>Home</h3>
      <p> Overview </p>
    </div>
  </div>
  <div class="row" style="margin-top:30px; padding:10px">
    <canvas id="pie-chart" width="800" height="450"></canvas>
    <p class="container" style="margin-top:20px;text-align:center">Dari inspeksi yang telah dilakukan Overhead Crane 85% dalam keadaan baik dan layak untuk dioperasikan</p>

    <canvas id="line-chart" width="800" height="450"></canvas>
    <hr>
  </div>
</div>
</div>
</section>
<!-- End service Area -->
<script type="text/javascript">
new Chart(document.getElementById("pie-chart"), {
type: 'pie',
data: {
  labels: ["Baik", "Buruk"],
  datasets: [{
    label: "Population (millions)",
    backgroundColor: ["#3e95cd", "#8e5ea2"],
    data: [85,15]
  }]
},
options: {
  title: {
    display: true,
    text: 'Data Overhead Crane'
  }
}
});

new Chart(document.getElementById("line-chart"), {
type: 'line',
data: {
labels: [2005,2006,2007,2008,2009,2010,2011,2012,2013,2014],
datasets: [{
    data: [86,114,106,106,107,111,133,221,783,2478],
    label: "Kecelakaan",
    borderColor: "#3e95cd",
    fill: false
  }
  //, {
  //   data: [282,350,411,502,635,809,947,1402,3700,5267],
  //   label: "Asia",
  //   borderColor: "#8e5ea2",
  //   fill: false
  // }
]
},
options: {
title: {
  display: true,
  text: 'Data Laporan Kecelakaan Tahunan'
}
}
});

</script>
