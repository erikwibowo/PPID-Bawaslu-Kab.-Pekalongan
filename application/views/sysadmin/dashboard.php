<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3><?= $d1 ?></h3>

        <p>Informasi Berkala</p>
      </div>
      <div class="icon">
        <i class="ion ion-clock"></i>
      </div>
      <a href="<?= site_url('sysadmin/informasi') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3><?= $d2 ?></h3>

        <p>Informasi Setiap Saat</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-cog"></i>
      </div>
      <a href="<?= site_url('sysadmin/informasi') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3><?= $d3 ?></h3>

        <p>Informasi Serta Merta</p>
      </div>
      <div class="icon">
        <i class="ion ion-android-sync"></i>
      </div>
      <a href="<?= site_url('sysadmin/informasi') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3><?= $d4 ?></h3>

        <p>Informasi Dikecualikan</p>
      </div>
      <div class="icon">
        <i class="ion ion-android-warning"></i>
      </div>
      <a href="<?= site_url('sysadmin/informasi') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<h5 class="card-title">Rekap Data Informasi per Bulan</h5>
			<div class="card-tools">
				<select class="form-control select2" id="tahun" onchange="tahun()">
					<option <?= $this->input->get('tahun') == '2019' ? 'selected':'' ?> value="2019">2019</option>
					<option <?= $this->input->get('tahun') == '2020' ? 'selected':'' ?> value="2020">2020</option>
				</select>
				<script type="text/javascript">
					function tahun(){
						var tahun = document.getElementById("tahun").value;
						window.location = "<?= site_url('sysadmin?tahun=') ?>"+tahun;
					}
				</script>
			</div>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<canvas id="myChart" width="400" height="150"></canvas>
				</div>
				<!-- /.chart-responsive -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.card-footer -->
	</div>
</div>
</div>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun','Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'],
        datasets: [{
            label: 'Informasi Berkala',
            data: <?= json_encode($grafik->berkala) ?>,
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        },{
        	label: 'Informasi Berkala',
            data: <?= json_encode($grafik->saat) ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        },{
        	label: 'Informasi Berkala',
            data: <?= json_encode($grafik->serta) ?>,
            backgroundColor: 'rgba(255, 206, 86, 0.2)',
            borderColor: 'rgba(255, 206, 86, 1)',
            borderWidth: 1
        },{
        	label: 'Informasi Berkala',
            data: <?= json_encode($grafik->kecuali) ?>,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>