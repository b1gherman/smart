<?php
/* @var $this yii\web\View */

$this->title = 'Dashboard';
?>

<div class="site-index">


    <div class="body-content">

        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4><?php echo 'PNS   : ' . Yii::$app->sikerma->getPNS() ?></h4>
                        <h4><?php echo 'CPNS  : ' . Yii::$app->sikerma->getCPNS() ?></h4>
                        <p>Jumlah PNS dan CPNS</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <!--<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4><?php echo 'Laki-laki   : ' . Yii::$app->sikerma->getLaki() ?></h4>
                        <h4><?php echo 'Perempuan  : ' . Yii::$app->sikerma->getPerempuan() ?></h4>

                        <p>Jenis Kelamin</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <!--<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <table border="0">
                            <tbody>
                                <?php
                                $datatingkat = Yii::$app->sikerma->getTingkatan();
                                foreach ($datatingkat as $value) {
                                    if ($value['jumlah'] != 0) {
                                        echo '<tr>';
                                        echo '<td>' . $value['nama'] . "</td>";
                                        echo '<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;' . $value['jumlah'] . "</td>";
                                        echo '</tr>';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <!--<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <table border="0">
                            <tbody>
                                <?php
                                $datatingkat = Yii::$app->sikerma->getJumlahGol();
                                foreach ($datatingkat as $value) {
                                    if ($value['jumlah'] != 0) {
                                        echo '<tr>';
                                        echo '<td>' . $value['nama'] . "</td>";
                                        echo '<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;' . $value['jumlah'] . "</td>";
                                        echo '</tr>';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <!--<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-6">
                <div class="card card-gray">
                    <div class="card-header">
                        <h3 class="card-title">PNS dan CPNS</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        echo \practically\chartjs\Chart::widget([
                            'type' => \practically\chartjs\Chart::TYPE_DOUGHNUT,
                            'datasets' => [
                                [
                                    'data' => [
                                        'PNS' => Yii::$app->sikerma->getPNS(),
                                        'CPNS' => Yii::$app->sikerma->getCPNS(),
                                    ]
                                ]
                            ]
                        ]);
                        ?>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-6">
                <div class="card card-gray">
                    <div class="card-header">
                        <h3 class="card-title">Laki-laki dan Perempuan</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        echo \practically\chartjs\Chart::widget([
                            'type' => \practically\chartjs\Chart::TYPE_DOUGHNUT,
                            'datasets' => [
                                [
                                    'data' => [
                                        'Laki-laki' => Yii::$app->sikerma->getLaki(),
                                        'Perempuan' => Yii::$app->sikerma->getPerempuan(),
                                    ]
                                ]
                            ]
                        ]);
                        ?>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!--            <div class="col-8">
                            <div class="card card-gray">
                                <div class="card-header">
                                    <h3 class="card-title">Distribusi Barang</h3>
                                </div>
                                <div class="card-body">
            <?php
            echo \practically\chartjs\Chart::widget([
                'type' => \practically\chartjs\Chart::TYPE_LINE,
                'datasets' => [
                    [
                        'data' => [65, 59, 80, 81, 56, 55, 40],
                        'label' => 'Umum'
                    ],
                    [
                        'data' => [66, 99, 22, 33, 99, 78, 40],
                        'label' => 'Dokter A'
                    ],
                    [
                        'data' => [66, 99, 22, 33, 99, 78, 40],
                        'label' => 'Klinik B'
                    ],
                ],
                'labels' => ['2016', '2017', '2018', '2019', '2020', '2021'],
                'clientOptions' => [
                    'title' => [
                        'display' => true,
                        'text' => 'My New Title',
                    ],
                    'legend' => [
                        'display' => true,
                    ],
                ]
            ]);
            ?>
                                </div>
                                 /.card-body 
                            </div>
                        </div>-->
        </div>


    </div>
</div>