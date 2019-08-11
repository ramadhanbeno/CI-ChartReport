<div class="pagebackground">
  <div class="container">
    <!-- engagement -->
    <div class="row pt-3">
      <div class="col-md-3" style="margin-right:-30px">
        <div class="card engagement">
          <div class="card-body">
            <h5>engagement</h5>
            <h3>70</h3>
            <p>this text</p>
          </div>
        </div>
      </div>
      <div class="col-md ">
        <div class="card division">
          <div class="card-body">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <div class="box">
                    <div class="chart" data-percent="86"></div>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="box">
                    <div class="chart" data-percent="86"></div>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="box">
                    <div class="chart" data-percent="86"></div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>





      </div>

    </div>




    <!-- Graph -->
    <div class="row pt-2  justify-content-center">
      <div class="col-sm data-background">
        <div class="card">
          <div class="card-body">
            <canvas id="myChart"></canvas>
          </div>
        </div>
      </div>
      <div class="col-sm data-background">
        <div class="card">
          <div class="card-body">
            <canvas id="myChart2"></canvas>
          </div>
        </div>
      </div>
    </div>
    <!-- end graph -->
  </div>
  <!-- end container -->
</div>

<script src="assets/js/chart.js"></script>
<!-- Vanilla JavaScript -->
<script src="assets/js/easypiechart.js"></script>

<!-- As a jQuery plugin -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="assets/js/jquery.easypiechart.js"></script>

<script>
  // jQuery
  $(function() {
    $('.chart').easyPieChart({
      // options here
    });
  });
</script>
</body>

</html>