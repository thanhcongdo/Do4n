
<?php 
include('sidebaradmin.php');
?>   
<!DOCTYPE html>
<html lang="en-US">
<body>



<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Ghế', 'Hours per Day'],
  ['Bàn', 8],
  ['Đồ Làm Bếp', 2],
  ['Đồ Điện Tử', 4],
  ['Đồ Làm Vườn', 2],
  ['Đồ Khác', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Thống kê mua hàng', 'width':1800, 'height':900};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>
<style>
    body{
        margin-left: 15%;
    }
</style>
