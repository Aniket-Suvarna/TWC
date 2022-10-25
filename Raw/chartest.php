<!DOCTYPE HTML>
<html>
<head>
  <script>
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "payment"
      },
      data: [
      {
       type: "doughnut",
       dataPoints: [
       {  y: 53.37, indexLabel: "Android" },
       {  y: 35.0, indexLabel: "Apple iOS" },
       {  y: 7, indexLabel: "Blackberry" },
       {  y: 2, indexLabel: "Windows Phone" },
       {  y: 5, indexLabel: "Others" }
       ]
     }
     ]
   });

    chart.render();
  }
  </script>




  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></head>
  
  <body>
    <div id="chartContainer" style="height: 300px; width: 100%;">
    </div>
  </body>
 </html>