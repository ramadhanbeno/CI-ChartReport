<div class="pagebackground">
  <div class="container">
    <!-- engagement -->
    <div class="row" style="padding-top:80px;">
      <div class="col-md-3" style="margin-right:-30px;">
        <div class="card engagement">
          <div class="card-body">
            <h5>engagement</h5>
            <h3><span class="counter">70</span></h3>
            <p>this text</p>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card division">
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-sm">
                  <div class="box">
                    <div class="chart" data-percent="80">
                      <h3><span class="counter">90</span>%</h3>
                      <h4>Category A</h4>
                    </div>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="box">
                    <div class="chart" data-percent="70">
                      <h3><span class="counter">70</span>%</h3>
                      <h4>Category B</h4>
                    </div>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="box">
                    <div class="chart" data-percent="50">
                      <h3><span class="counter">50</span>%</h3>
                      <h4>Category C</h4>
                    </div>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="box">
                    <div class="chart" data-percent="90">
                      <h3><span class="counter">90</span>%</h3>
                      <h4>Category D</h4>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- content2 -->
    <div class="row pt-2">
      <div class="col-sm">
        <div class="card">
          <div class="card-header text-center">
            Featured
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm">
                <h5>Special title treatment</h5>
                <p>With supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="col-sm">
                <h5>Special title treatment</h5>
                <p>With supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="col-sm">
                <h5>Special title treatment</h5>
                <p>With supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </div>
          <div class="card-footer text-muted">
            2 days ago
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="assets/js/jquery.easypiechart.js"></script>

<script>
  // countet-up
  $('.counter').counterUp({
    delay: 10,
    time: 2000
  });
  $('.counter').addClass('animated fadeInDownBig');
  $('h3').addClass('animated fadeIn');
  // jQuery easypiechart
  $(function() {
    $('.chart').easyPieChart({
      // options here
    });
  });
</script>
</body>

</html>