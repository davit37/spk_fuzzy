<!-- Forms Section-->
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <!-- Basic Form-->

            <!-- Horizontal Form-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-close">
                        <div class="dropdown">
                            <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow">
                                <a href="#" class="dropdown-item remove">
                                    <i class="fa fa-"></i>data lengkap</a>
                                <a href="#" class="dropdown-item edit">
                                    <i class="fa fa-gear"></i>Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Form data barang</h3>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-body">

                                    <form class="form-horizontal"  action="#" autocomplete="off">
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Username</label>
                                            <div class="col-sm-9">
                                                <input id='kd_admin' type='hidden'>
                                                <input id="username" autocomplete="off" value="" type="text" placeholder="Username" class="form-control form-control-warning">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Password</label>
                                            <div class="col-sm-9">
                                                <input id="password" type="password" placeholder="Password" class="form-control form-control-warning">
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <label class="col-sm-3 form-control-label">Nama Admin</label>
                                            <div class="col-sm-9">
                                                <input id="namaAdmin" type="text" placeholder="Nama Admin" class="form-control form-control-success">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Tanggal Lahir</label>
                                            <div class="col-sm-9">
                                                <input id="tanggalLahir" class="form-control form-control-success" disabled>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Jenis Kelamin</label>
                                            <div class="col-sm-9 select">
                                                <select name="account" class="form-control" id="jenisKlamin">
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-9 offset-sm-3">
                                                <a id="simpan" triger="tambah" class="btn btn-primary">Simpan</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Admin</th>
                                                    <th>Tangal Lahir</th>
                                                    <th>Jenis Klamin</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableAdmin">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>