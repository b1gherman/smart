<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <!--<img src="<?= $assetDir ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
        <span class="brand-text font-weight-light"><i class="fas fa-align-center"> SMART PPI</i></span><br>
        <!-- <span class="brand-text font-weight-light">Sistem Manajemen Arsip dan Persuratan</span> -->
    </a>
    

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= $assetDir ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <!-- <a href="#" class="d-block"><?php // echo \Yii::$app->user->id; ?></a>-->
                <a href="#" class="d-block">User&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo \Yii::$app->inventori->getUser(\Yii::$app->user->id); ?></a> 
                <a href="#" class="d-block">Group : <?php echo \Yii::$app->inventori->getRole(\Yii::$app->user->id); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            $items = mdm\admin\components\MenuHelper::getAssignedMenu(Yii::$app->user->id);
//            echo \hail812\adminlte\widgets\Menu::widget([
//                'items' => [
//                    ['label' => 'Dashboard', 'icon' => 'th', 'url' => yii\helpers\Url::to(['site/index'])],
//                    [
//                        'label' => 'Inventori',
//                        'items' => [
//                            ['label' => 'Barang (Masuk)', 'iconStyle' => 'far', 'url' => yii\helpers\Url::to(['barangmasuk/index'])],
//                            ['label' => 'Permintaan Barang', 'iconStyle' => 'far', 'url' => yii\helpers\Url::to(['permintaan/index'])],
//                            ['label' => 'Barang (Keluar)', 'iconStyle' => 'far', 'url' => yii\helpers\Url::to(['barangkeluar/index'])],
//                        ]
//                    ],
//                    [
//                        'label' => 'Stok',
//                        'items' => [
//                            ['label' => 'Stok Barang', 'iconStyle' => 'far', 'url' => yii\helpers\Url::to(['barangstok/index'])],
//                            ['label' => 'Stok Expire', 'iconStyle' => 'far', 'url' => yii\helpers\Url::to(['barangstokexpire/index'])],
//                            ['label' => 'Kartu Stok', 'iconStyle' => 'far', 'url' => yii\helpers\Url::to(['stok/index'])],
//                        ]
//                    ],
//                    [
//                        'label' => 'Akses',
//                        'items' => [
//                            ['label' => 'Pengguna', 'iconStyle' => 'far', 'url' => yii\helpers\Url::to(['user/index'])]
//                        ]
//                    ],
//                    [
//                        'label' => 'Referensi',
//                        'items' => [
//                            ['label' => 'Barang', 'iconStyle' => 'far', 'url' => yii\helpers\Url::to(['barang/index'])],
//                            ['label' => 'Bagian', 'iconStyle' => 'far', 'url' => yii\helpers\Url::to(['bagian/index'])],
//                            ['label' => 'Jenis Barang', 'iconStyle' => 'far', 'url' => yii\helpers\Url::to(['jenis/index'])],
//                            ['label' => 'Kategori Barang', 'iconStyle' => 'far', 'url' => yii\helpers\Url::to(['kategori/index'])],
//                            ['label' => 'Satuan Barang', 'iconStyle' => 'far', 'url' => yii\helpers\Url::to(['satuan/index'])],
//                            ['label' => 'Supplier', 'iconStyle' => 'far', 'url' => yii\helpers\Url::to(['supplier/index'])],
//                        ]
//                    ],
//                ],
//            ]);
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => $items
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>