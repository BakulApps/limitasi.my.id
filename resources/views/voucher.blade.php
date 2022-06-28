<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <link rel="icon" href="{{asset('assets/frontend/img/logo.png')}}" type="image/png" sizes="16x16">
        <title>Voucher - INTERNET MURAH</title>
        <link rel="stylesheet" href="{{asset('assets/frontend/css/main.min.css')}}">
    </head>
    <body>
        <script type="text/javascript">
            var baseurl = '{{route('home')}}'
        </script>
        <div id="preloader">
            <div class="preloader-wrap">
                <img src="{{asset('assets/frontend/img/logo.png')}}" alt="logo" class="img-fluid" width="100px" />
                <div class="preloader">
                    <i>.</i>
                    <i>.</i>
                    <i>.</i>
                </div>
            </div>
        </div>
        <section class="page-header-section ptb-100 bg-image full-height" data-overlay="8">
            <div class="background-image-wraper" style="background: url({{asset('assets/frontend/img/hero-11.jpg')}}); opacity: 1;"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="login-signup-wrap p-5 gray-light-bg rounded shadow">
                            <div class="login-signup-header text-center">
                                <a href="{{route('home')}}"><img src="{{asset('assets/frontend/img/logo.png')}}" class="img-fluid mb-3" alt="Logo" width="100px"></a>
                                <h4 class="mb-5">INTERNET MURAH</h4>
                            </div>
                            <div class="other-login-signup my-3">
                                <div class="or-login-signup text-center">
                                    <strong>DAFTAR PAKET INTERNET</strong>
                                </div>
                            </div>
                            <ul class="list-inline text-center">
                                @php($color = ['info', 'danger', 'success', 'primary', 'secondary'])
                                @php($number = 0)
                                @foreach($items as $item)
                                    <li class="list-inline-item my-1">
                                        <button class="btn btn-{{$color[$number++]}} btn-voucher" value="{{$item->id}}"><i class="fa fa-wifi pr-1"></i> {{str_replace('Voucher', '', $item->name)}}</button>
                                    </li>
                                @endforeach
                            </ul>
                            <p class="text-center mb-0">Silahkan klik tombol paket diatas, pembayaran bisa melalui Dana, GoPay, ShoppePay dan Aplikasi QRIS lainnya secara otomatis.</p>
                            <div class="other-login-signup my-3">
                                <div class="or-login-signup text-center">
                                    <strong>DAFTAR HARGA PAKET</strong>
                                </div>
                            </div>
                            <div class="compare-pricing-table table-responsive-md">
                                <table class="table table-bordered bg-soft">
                                    <thead class="bg-soft">
                                    <tr class="gray-light-bg">
                                        <th class="bg-white color-primary border-bottom-0 h6 text-uppercase">PAKET</th>
                                        <th class="bg-white color-accent border-bottom-0 h6 text-uppercase">HARGA</th>
                                    </tr>
                                    </thead>
                                    <tbody class="compare-content-body">
                                    <tr>
                                        <td>1 HARI</td>
                                        <td>Rp. 2.000</td>
                                    </tr>
                                    <tr>
                                        <td>3 HARI</td>
                                        <td>Rp. 5.000</td>
                                    </tr>
                                    <tr>
                                        <td>7 HARI</td>
                                        <td>Rp. 12.000</td>
                                    </tr>
                                    <tr>
                                        <td>15 HARI</td>
                                        <td>Rp. 28.000</td>
                                    </tr>
                                    <tr>
                                        <td>30 HARI</td>
                                        <td>Rp. 55.000</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="other-login-signup my-3">
                                <div class="or-login-signup text-center">
                                    <strong> INFORMASI PEMBAYARAN</strong>
                                </div>
                            </div>
                            <div class="login-signup-form">
                                <div class="form-group">
                                    <label for="reference" class="pb-1">Nomor Referensi</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-shopping-cart"></span>
                                        </div>
                                        <input type="text" id="reference" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="amount" class="pb-1">Jumlah Pembayaran</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-credit-card"></span>
                                        </div>
                                        <input type="text" id="amount" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="pb-1">Batas Pembayaran</label>
                                    <h4 class="font-weight-bold text-danger" id="expired_time"></h4>
                                </div>
                                <div class="form-group text-center">
                                    <img id="qrcode-payment" src="" alt="QRCode">
                                    <label class="pb-1 font-italic">* Scan untuk pembayaran</label>
                                </div>
                                <div class="other-login-signup my-3">
                                    <div class="or-login-signup text-center">
                                        <strong>PEMBAYARAN VIA QRIS (DANA)</strong>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <p class="pb-1">
                                        - Masuk ke aplikasi dompet digital Anda yang telah mendukung QRIS.<br/>
                                        - Pindai/Scan QR Code yang tersedia.<br/>
                                        - Akan muncul detail transaksi. Pastikan data transaksi sudah sesuai.<br/>
                                        - Transaksi selesai. Simpan bukti pembayaran Anda.<br/>
                                    </p>
                                </div>
                                <div class="other-login-signup my-3">
                                    <div class="or-login-signup text-center">
                                        <strong>PEMBAYARAN VIA QRIS (Mobile)</strong>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <p class="pb-1">
                                        - Download QR Code pada invoice.<br/>
                                        - Masuk ke aplikasi dompet digital Anda yang telah mendukung QRIS.<br/>
                                        - Upload QR Code yang telah di download tadi.<br/>
                                        - Akan muncul detail transaksi. Pastikan data transaksi sudah sesuai.<br/>
                                        - Selesaikan proses pembayaran Anda.<br/>
                                        - Transaksi selesai. Simpan bukti pembayaran Anda.<br/>
                                    </p>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-primary" value="btn-back"><i class="fa fa-backward pr-1"></i> Kembali</button>
                                    <button class="btn btn-info" value="info-payment"><i class="fa fa-info-circle pr-1"></i> PETUNJUK PEMBAYARAN</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="copyright-wrap small-text text-center mt-5 text-white">
                            <p class="mb-0">&copy; Limitless Com, All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
            <span class="fas fa-hand-point-up"></span>
        </div>
        <script src="{{asset('assets/frontend/js/vendors/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/vendors/popper.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/vendors/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/vendors/bootstrap-slider.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/vendors/jquery.easing.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/vendors/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/vendors/countdown.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/vendors/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/vendors/jquery.rcounterup.js')}}"></script>
        <script src="{{asset('assets/frontend/js/vendors/magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/vendors/validator.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/vendors/hs.megamenu.js')}}"></script>
        <script src="{{asset('assets/frontend/js/app.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/voucher.js')}}"></script>
    </body>

</html>
