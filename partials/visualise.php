<script>
    function displayLineChart() {
        var test19 = [<?php include('server.php') ?>];
        var date = [];
        var k = test19.length;
        for (var i = 0; i <= k; i++) {
            date.push(i);
        }
        var data = {
            labels: date,
            datasets: [{
                label: "Famille A",
                fillColor: "lighblue",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: test19,
            }, ]
        };
        var ctx = document.getElementById("lineChart").getContext("2d");
        var options = {};
        var lineChart = new Chart(ctx).Line(data, options);
    }

</script>

<button onclick="displayLineChart()" name="graph" >Click to print the chart</button>
<canvas id="lineChart" height="440" width="1000"></canvas>
