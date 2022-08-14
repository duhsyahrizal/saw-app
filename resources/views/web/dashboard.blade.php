@extends('layout.main')

@section('main-page')
<!-- ============================================================== -->
<!-- Container fluid scss in scafholding.scss -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Sales Summery -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col l3 m6 s12">
            <div class="card danger-gradient card-hover">
                <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <h2 class="white-text m-b-5">0</h2>
                            <h7 class="white-text op-5 light-blue-text">Data Nasabah</h7>
                        </div>
                        <div class="ml-auto">
                            <span class="white-text display-6"><i class="material-icons">account_circle</i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l3 m6 s12">
            <div class="card info-gradient card-hover">
                <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <h2 class="white-text m-b-5">0</h2>
                            <h6 class="white-text op-5">Riwayat Transaksi</h6>
                        </div>
                        <div class="ml-auto">
                            <span class="white-text display-6"><i class="material-icons">receipt</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col l3 m6 s12">
            <div class="card success-gradient card-hover">
                <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <h2 class="white-text m-b-5">0</h2>
                            <h6 class="white-text op-5 text-darken-2">Hasil Pengajuan</h6>
                        </div>
                        <div class="ml-auto">
                            <span class="white-text display-6"><i class="material-icons">equalizer</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col l3 m6 s12">
            <div class="card warning-gradient card-hover">
                <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <h2 class="white-text m-b-5">0</h2>
                            <h8 class="white-text op-5">Pembayaran Selesai</h8>
                        </div>
                        <div class="ml-auto">
                            <span class="white-text display-6"><i class="material-icons">attach_money</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection