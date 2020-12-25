
<div class="container-fluid" role="main">
	<div class="page-wrapper">
		<!-- User Widgets -->
		<div class="row page-titles">
			<div class="col-md-12 col-8 align-self-center">
				<h3 class="text-themecolor">
				Dashboard </h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php site_url('home'); ?>">Home</a></li>
					<li class="breadcrumb-item active">Dashboard</li>
				</ol>
			</div>

		</div>
		<div class="x_panel">
			<div class="row">
				<div class="col-md-8">
					<div class="x_tittle">
						<H3><u>Arsip Per Unit</u></H3>
					</div>
					<canvas id="myChart" width="20" height="20"></canvas>
				</div>

				<div class="col-md-4">
					<div class="x_tittle">
						<H3><u>Arsip Masuk/Keluar</u></H3>
					</div>		
					<canvas id="myChrot" width="20" height="20"></canvas> 
					<div class="x_tittle">
						<H3><u>Arsip Per Arsiparis</u></H3>
					</div>
					<canvas id="myChrut" width="20" height="20"></canvas> 
				</div>
			</div>
		</div>
		<div class="x_panel">
			<div class="row">
				<div class="col-md-12">
					<div class="x_tittle">
						<H3><u>Peminjaman Per Tahun</u></H3>
					</div>
					<canvas id="myEx" width="20" height="20"></canvas>
				</div>


			</div>
		</div>
	</div>
</div>


<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: [
			<?php foreach ($this->m_arsip->getAllC() as $key) {
				echo "'".$key->unit."'".",";
			} ?>
			],
			datasets: [{
				label: '# of Votes',
				data: [			<?php foreach ($this->m_arsip->getAllC() as $key) {
					echo $key->id.",";
				} ?>],
				backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
				'rgba(153, 102, 255, 0.2)',
				'rgba(255, 159, 64, 0.2)'
				],
				fill: false,
				borderColor: 'blue',
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});

	var ctr = document.getElementById("myChrot").getContext('2d');
	var myChrot = new Chart(ctr, {
		type: 'pie',
		data: {
			labels: [
			<?php foreach ($this->m_arsip->getAllMK() as $key) {
				echo "'".$key->jenissurat."'".",";
			} ?>
			],
			datasets: [{
				label: '# of Votes',
				data: [			<?php foreach ($this->m_arsip->getAllMK() as $key) {
					echo $key->id.",";
				} ?>],
				backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
				'rgba(153, 102, 255, 0.2)',
				'rgba(255, 159, 64, 0.2)'
				],
				borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)',
				'rgba(255, 159, 64, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
	var cth = document.getElementById("myChrut").getContext('2d');
	var myChrut = new Chart(cth, {
		type: 'pie',
		data: {
			labels: [
			<?php foreach ($this->m_arsip->getAllArsiparis() as $key) {
				echo "'".$key->arsiparis."'".",";
			} ?>
			],
			datasets: [{
				label: '# of Votes',
				data: [			<?php foreach ($this->m_arsip->getAllArsiparis() as $key) {
					echo $key->id.",";
				} ?>],
				backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
				'rgba(153, 102, 255, 0.2)',
				'rgba(255, 159, 64, 0.2)'
				],
				borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)',
				'rgba(255, 159, 64, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});

	var ctk = document.getElementById("myEx").getContext('2d');
	var myEx = new Chart(ctk, {
		type: 'pie',
		data: {
			labels: [
			<?php foreach ($this->m_arsip->getAllPeminjam() as $key) {
				if ($key->bulan == "1") {
					$l = "Januari";
				}
				if ($key->bulan == "2") {
					$l = "Februari";
				}
				if ($key->bulan == "3") {
					$l = "Maret";
				}
				if ($key->bulan == "4") {
					$l = "April";
				}
				if ($key->bulan == "5") {
					$l = "Mei";
				}
				if ($key->bulan == "6") {
					$l = "Juni";
				}
				if ($key->bulan == "7") {
					$l = "Juli";
				}
				if ($key->bulan == "8") {
					$l = "Agustus";
				}
				if ($key->bulan == "9") {
					$l = "September";
				}
				if ($key->bulan == "10") {
					$l = "Oktober";
				}
				if ($key->bulan == "11") {
					$l = "November";
				}
				if ($key->bulan == "12") {
					$l = "Desember";
				}
				echo "'".$l."'".",";
			} ?>
			],
			datasets: [{
				label: '# of Votes',
				data: [			<?php foreach ($this->m_arsip->getAllPeminjam() as $key) {
					echo $key->id.",";
				} ?>],
				backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
				'rgba(153, 102, 255, 0.2)',
				'rgba(255, 159, 64, 0.2)'
				],
				borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)',
				'rgba(255, 159, 64, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>