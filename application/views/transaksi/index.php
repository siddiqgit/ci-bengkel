<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Transaksi</h3>
                    <p class="text-subtitle text-muted">Data Transaksi</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>home">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Transaksi
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
                                <h4>Transaki Pemasukan & pengeluaran</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="table1">
                                        <br>
                                        <thead>
                                            <tr>
                                                <th width="1" rowspan="2" class="text-center">NO</th>
                                                <th width="10%" rowspan="2" class="text-center">TANGGAL</th>
                                                <th rowspan="2" class="text-center">KATEGORI</th>
                                                <th rowspan="2" class="text-center">KETERANGAN</th>
                                                <th colspan="2" class="text-center">JENIS</th>
                                                <th rowspan="2" width="12%" class="text-center">OPSI</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">PEMASUKAN</th>
                                                <th class="text-center">PENGELUARAN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-bold-500 text-center">1</td>
                                                <td class="text-center">20-03-2021</td>
                                                <td class="text-bold-500">Keluarga</td>
                                                <td class="text-bold-500">Biaya Makan</td>
                                                <td class="text-bold-500">0</td>
                                                <td class="text-bold-500">1,500,000</td>
                                                <td class="text-center">
                                                    <span class="badge bg-primary"><i class="bi bi-pencil-fill"></i></span>
                                                    <span class="badge bg-success"><i class="bi bi-eye-fill"></i></span>
                                                    <span class="badge bg-danger"><i class="bi bi-trash-fill"></i></span>
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