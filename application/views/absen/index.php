<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Absensi</h3>
                    <p class="text-subtitle text-muted">Catatan Kehadiran Karyawan</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>home">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Absen
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="row">
            <div class="col-12">
                <div class="row">

                </div>
                <div class="row" id="table-bordered">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Absensi</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="table1">
                                        <br>
                                        <thead>
                                            <tr>
                                                <th width="1" rowspan="2" class="text-center">NO</th>
                                                <th rowspan="1" class="text-center">NAMA</th>
                                                <th rowspan="1" class="text-center">LEVEL</th>
                                                <th rowspan="1" class="text-center">MASUK</th>
                                                <th rowspan="1" class="text-center">KELUAR</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-bold-500 text-center">1</td>
                                                <td class="text-bold-500">Siddiq</td>
                                                <td class="text-bold-500">Admin</td>
                                                <td class="text-bold-500">
                                                    <li class="d-inline-block me-2 mb-1">
                                                        <div class="form-check">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="form-check-input form-check-primary form-check-glow" name="customCheck" id="customColorCheck1">
                                                                <label class="form-check-label" for="customColorCheck1">08:00</label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </td>
                                                <td class="text-bold-500">
                                                    <li class="d-inline-block me-2 mb-1">
                                                        <div class="form-check">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="form-check-input form-check-primary form-check-glow" name="customCheck" id="customColorCheck1">
                                                                <label class="form-check-label" for="customColorCheck1">08:00</label>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>