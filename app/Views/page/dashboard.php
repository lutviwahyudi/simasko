<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/assets/css/style.css">
    <link rel="shortcut icon" href="<?= base_url('assets/template') ?>/assets/images/favicon.png" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#sensorSuhu").load("<?= site_url('home/sensorSuhu'); ?>")
            }, 2000);
        });

        $(document).ready(function() {
            setInterval(function() {
                $("#sensorPh").load("<?= site_url('home/sensorPh'); ?>")
            }, 2000);
        });

        $(document).ready(function() {
            setInterval(function() {
                $("#status").load("<?= site_url('home/status'); ?>")
            }, 2000);
        });

        $(document).ready(function() {
            setInterval(function() {
                $("#kontrol").load("<?= site_url('home/kontrol'); ?>")
            }, 2000);
        });

        $(document).ready(function() {
            setInterval(function() {
                $("#pompa").load("<?= site_url('home/pompa'); ?>")
            }, 2000);
        });

        $(document).ready(function() {
            setInterval(function() {
                $("#waktu1").load("<?= site_url('home/waktu'); ?>")
            }, 2000);
        });

        $(document).ready(function() {
            setInterval(function() {
                $("#waktu2").load("<?= site_url('home/waktu'); ?>")
            }, 2000);
        });

        $(document).ready(function() {
            setInterval(function() {
                $("#waktu3").load("<?= site_url('home/waktu'); ?>")
            }, 2000);
        });

        $(document).ready(function() {
            setInterval(function() {
                $("#waktu4").load("<?= site_url('home/waktu'); ?>")
            }, 2000);
        });
    </script>
</head>

<body>
    <div class="container-scroller">
        <?php if (session()->getFlashdata('success')) : ?>
            <div id="alert" class="alert alert-success mx-auto" style="position: fixed; top: 10px; left:50%; z-index: 1050;">
                <?= session()->getFlashdata('success'); ?>
            </div>
        <?php elseif (session()->getFlashdata('error')) : ?>
            <div id="alert" class="alert alert-danger mx-auto" style="position: fixed; top: 10px; left:50%; z-index: 1050;">
                <?= session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <script>
            setTimeout(function() {
                var alert = document.getElementById('alert');
                if (alert) {
                    alert.style.display = 'none';
                }
            }, 5000);
        </script>
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?= base_url('home/dashboard') ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?= base_url('home/table') ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-table-large"></i>
                        </span>
                        <span class="menu-title">Tables</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('assets/template') ?>/assets/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <?php foreach ($user as $usr) : ?>
                                    <div class="navbar-profile">
                                        <img class="img-xs rounded-circle" src="" alt="">
                                        <p class="mb-0 d-none d-sm-block navbar-profile-name"><?= $usr['name'] ?></p>
                                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                    </div>
                                <?php endforeach; ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="<?= base_url('home/logout') ?>">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Log out</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-6 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Suhu Air</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h2 class="mb-0"><span id="sensorSuhu"></span></h2>
                                            </div>
                                            <h6 class="text-muted font-weight-normal"><span id="waktu1"></span></h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-water text-primary ml-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Kandungan Ph</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h2 class="mb-0"><span id="sensorPh"></span></h2>
                                            </div>
                                            <h6 class="text-muted font-weight-normal"><span id="waktu2"></span></h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-water text-danger ml-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Controls Suhu</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h2 class="mb-0"><span id="kontrol"></span></h2>
                                            </div>
                                            <h6 class="text-muted font-weight-normal"><span id="waktu3"></span></h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-settings text-success ml-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Pompa Aerator</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h2 class="mb-0"><span id="pompa"></span></h2>
                                            </div>
                                            <h6 class="text-muted font-weight-normal"><span id="waktu4"></span></h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-water-pump text-warning ml-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Data terbaru</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Suhu Air</th>
                                                    <th>Ph Air</th>
                                                    <th>Waktu</th>
                                                    <th>Controls suhu</th>
                                                    <th>Pompa Aerator</th>
                                                    <!-- <th>Status Air</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                usort($data, function ($a, $b) {
                                                    return strtotime($b['updated_at']) - strtotime($a['updated_at']);
                                                });
                                                $limitedData = array_slice($data, 0, 5);

                                                foreach ($limitedData as $index => $tb) : ?>
                                                    <tr>
                                                        <td><?= $index + 1; ?></td>
                                                        <td><?= $tb['suhu']; ?></td>
                                                        <td><?= $tb['ph']; ?></td>
                                                        <td><?= $tb['updated_at'] ?></td>
                                                        <td>
                                                            <?php
                                                            switch ($tb['kontrol']) {
                                                                case 'off':
                                                                    $badgeClass = 'badge-outline-danger';
                                                                    break;
                                                                case 'Pendingin On':
                                                                    $badgeClass = 'badge-outline-primary';
                                                                    break;
                                                                case 'Pemanas On':
                                                                    $badgeClass = 'badge-outline-warning';
                                                                    break;
                                                                default:
                                                                    $badgeClass = 'badge-outline-secondary';
                                                                    break;
                                                            }
                                                            ?>
                                                            <div class="badge <?= $badgeClass; ?>">
                                                                <?= ucfirst($tb['kontrol']); ?>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            switch ($tb['pompa']) {
                                                                case 'off':
                                                                    $badgeClass = 'badge-outline-danger';
                                                                    break;
                                                                case 'on':
                                                                    $badgeClass = 'badge-outline-primary';
                                                                    break;
                                                            }
                                                            ?>
                                                            <div class="badge <?= $badgeClass; ?>">
                                                                <?= ucfirst($tb['pompa']); ?>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Muhammad sabda@2024</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/template') ?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url('assets/template') ?>/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('assets/template') ?>/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="<?= base_url('assets/template') ?>/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="<?= base_url('assets/template') ?>/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url('assets/template') ?>/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/template') ?>/assets/js/off-canvas.js"></script>
    <script src="<?= base_url('assets/template') ?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url('assets/template') ?>/assets/js/misc.js"></script>
    <script src="<?= base_url('assets/template') ?>/assets/js/settings.js"></script>
    <script src="<?= base_url('assets/template') ?>/assets/js/todolist.js"></script>
    <script src="<?= base_url('assets/template') ?>/assets/js/dashboard.js"></script>
</body>

</html>