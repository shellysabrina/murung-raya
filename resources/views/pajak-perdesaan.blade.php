<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/pajak-perdesaan.css">
<div class="container">
    <div class=" text-center mt-5">

        {{--kertas form--}}
    </div>
    <div class="row ">
        <div class="col-lg-10 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">

                    <div class="container">
                        <h3>Edit Data</h3>
                        <form id="contact-form" role="form">
                            <div class="controls">
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">No. Formulir :</label>
                                            <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Badan Pendapatan Daerah :</label>
                                            <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h6>Jenis Transaksi :</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <input type="checkbox" name="keperluan[]" value="Perekaman Data"> Perekaman Data<br>
                                    </div>
                                    <div class="col-4">
                                        <input type="checkbox" name="keperluan[]" value="Pemutakhiran Data"> Pemutakhiran Data<br>
                                    </div>
                                    <div class="col-4">
                                        <input type="checkbox" name="keperluan[]" value="Penghapusan Data"> Penghapusan Data<br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h6>NOP :</h6>
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">Prov:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">Kota/Kab:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Kec:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Kel:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Blok:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">No.Urut:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">Kode:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h6>NOP Bersama:</h6>
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">Prov:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">Kota/Kab:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Kec:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Kel:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Blok:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">No.Urut:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">Kode:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                </div>
                                <br>
                                <h7>INFORMASI TAMBAHAN UNTUK DATA BARU</h7>
                                <div class="row">
                                    <div class="col-12">
                                        <h6>NOP Asal:</h6>
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">Prov:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">Kota/Kab:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Kec:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Kel:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Blok:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">No.Urut:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">Kode:</label>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_name">NOP SPPT Lama :</label>
                                            <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                </div>
                                <h7>DATA LETAK OBJEK PAJAK</h7>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_name">Nama Jalan:</label>
                                            <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_name">Blok/Kav/No:</label>
                                            <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_name">Kelurahan:</label>
                                            <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_name">RT/RW:</label>
                                            <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_name">Kecamtan:</label>
                                            <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                </div>
                                <h7>DATA SUBJEK PAJAK</h7>
                                <div class="row">
                                    <div class="col-12">
                                        <h6>Status :</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <input type="checkbox" name="keperluan[]" value="Pemilik"> Pemilik<br>
                                    </div>
                                    <div class="col-2">
                                        <input type="checkbox" name="keperluan[]" value="Penyewa"> Penyewa<br>
                                    </div>
                                    <div class="col-2">
                                        <input type="checkbox" name="keperluan[]" value="Pengelola"> Pengelola<br>
                                    </div>
                                    <div class="col-2">
                                        <input type="checkbox" name="keperluan[]" value="Pemakai"> Pemakai<br>
                                    </div>
                                    <div class="col-2">
                                        <input type="checkbox" name="keperluan[]" value="Sengketa"> Sengketa<br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h6>Pekerjaan :</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <input type="checkbox" name="keperluan[]" value="Perekaman Data"> PNS*<br>
                                    </div>
                                    <div class="col-2">
                                        <input type="checkbox" name="keperluan[]" value="Pemutakhiran Data"> TNI/POLRI*<br>
                                    </div>
                                    <div class="col-2">
                                        <input type="checkbox" name="keperluan[]" value="Penghapusan Data">PENSIUNAN*<br>
                                    </div>
                                    <div class="col-2">
                                        <input type="checkbox" name="keperluan[]" value="Penghapusan Data"> BIDAN<br>
                                    </div>
                                    <div class="col-2">
                                        <input type="checkbox" name="keperluan[]" value="Penghapusan Data"> LAINNYA<br>
                                    </div>
                                </div>
                                <h6>*yang penghasilannya semata-mata berasal dari gaji/uang pensiunan</h6>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_name">Nama Subjek Pajak:</label>
                                            <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_name">NPWP:</label>
                                            <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                </div>





                            </div>


                            <br>
                            <div class="col-md-12">

                                <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " value="Send Message">

                            </div>

                    </div>


                </div>
                </form>
            </div>
        </div>


    </div>