<div class="container-fluid my-5 pt-5">
    <!-- Dashboard Content -->
    <div class="main-content text-center">
        <h2 class="fw-bold">Selamat Datang di halaman Dashboard Admin sewamotormu</h2>
        <p>Ini adalah halaman dashboard tempat Anda dapat mengelola berbagai data.</p>

        <!-- Dashboard Cards/Widgets -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title">Data Motor</h3>
                        <p class="card-text">Total motor : <?php echo $jumlah_motor['jumlah_motor']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title">Data Sewa</h3>
                        <p class="card-text">Total sewa: <?php echo $jumlah_sewa['jumlah_sewa']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title">Data Customer</h3>
                        <p class="card-text">Total customer: <?php echo $jumlah_user['jumlah_user']; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- GRAFIK -->
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div id="grafik-user-jk" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div id="grafik-motor-status" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Navbar offset */
    body {
        margin-top: 70px; /* Sesuaikan dengan tinggi navbar */
        overflow-x: hidden; /* Hindari scroll horizontal */
    }

    .main-content {
        max-height: calc(100vh - 70px); /* Sesuaikan tinggi dengan navbar */
    }
</style>

<!-- GRAFIK USER JK -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
    (function (H) {
    H.seriesTypes.pie.prototype.animate = function (init) {
        const series = this,
            chart = series.chart,
            points = series.points,
            {
                animation
            } = series.options,
            {
                startAngleRad
            } = series;

        function fanAnimate(point, startAngleRad) {
            const graphic = point.graphic,
                args = point.shapeArgs;

            if (graphic && args) {

                graphic
                    // Set inital animation values
                    .attr({
                        start: startAngleRad,
                        end: startAngleRad,
                        opacity: 1
                    })
                    // Animate to the final position
                    .animate({
                        start: args.start,
                        end: args.end
                    }, {
                        duration: animation.duration / points.length
                    }, function () {
                        // On complete, start animating the next point
                        if (points[point.index + 1]) {
                            fanAnimate(points[point.index + 1], args.end);
                        }
                        // On the last point, fade in the data labels, then
                        // apply the inner size
                        if (point.index === series.points.length - 1) {
                            series.dataLabelsGroup.animate({
                                opacity: 1
                            },
                            void 0,
                            function () {
                                points.forEach(point => {
                                    point.opacity = 1;
                                });
                                series.update({
                                    enableMouseTracking: true
                                }, false);
                                chart.update({
                                    plotOptions: {
                                        pie: {
                                            innerSize: '40%',
                                            borderRadius: 8
                                        }
                                    }
                                });
                            });
                        }
                    });
            }
        }

        if (init) {
            // Hide points on init
            points.forEach(point => {
                point.opacity = 0;
            });
        } else {
            fanAnimate(points[0], startAngleRad);
        }
    };
}(Highcharts));

Highcharts.chart('grafik-user-jk', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Jumlah Customer Berdasarkan Jenis Kelamin'
    },
    tooltip: {
        headerFormat: '',
        pointFormat:
            '<span style="color:{point.color}">\u25cf</span> ' +
            '{point.name}: <b>{point.y}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            borderWidth: 2,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.percentage}%',
                distance: 20
            }
        }
    },
    series: [{
        // Disable mouse tracking on load, enable after custom animation
        enableMouseTracking: false,
        animation: {
            duration: 2000
        },
        colorByPoint: true,
        data: [
            <?php foreach ($jumlah_user_jk as $key => $value): ?>
            {
                name: '<?php echo $value['jenkel'] ?>',
                y: <?php echo $value['jumlah'] ?>
        },
        <?php endforeach ?>
    ]
    }]
});

</script>

<!-- GRAFIK MOTOR STATUS -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
    Highcharts.chart('grafik-motor-status', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Grafik Status Motor'
    },
    tooltip: {
        valueSuffix: ' unit'
    },
    plotOptions: {
        series: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: [{
                enabled: true,
                distance: 20
            }, {
                enabled: true,
                distance: -40,
                format: '{point.percentage:.1f}%',
                style: {
                    fontSize: '1.2em',
                    textOutline: 'none',
                    opacity: 0.7
                },
                filter: {
                    operator: '>',
                    property: 'percentage',
                    value: 10
                }
            }]
        }
    },
    series: [
        {
            name: 'Unit',
            colorByPoint: true,
            data: [
                <?php foreach ($jumlah_motor_status as $key => $value): ?>
            {
                name: '<?php echo $value['status'] ?>',
                y: <?php echo $value['jumlah'] ?>
        },
        <?php endforeach ?>
            ]
        }
    ]
});

</script>