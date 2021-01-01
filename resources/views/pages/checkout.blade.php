@extends('layouts.checkout')

@section('title', 'checkout')
@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details mb-3">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>

                        @endif
                        <h1>Siapa yang berlibur?</h1>
                        <p>Liburan ke {{$item->travel_package->title}}, {{$item->travel_package->location}}</p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td scope="col">Gambar</td>
                                        <td scope="col">Nama</td>
                                        <td scope="col">Asal negara</td>
                                        <td scope="col">Visa</td>
                                        <td scope="col">Passport</td>
                                        <td scope="col"></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($item->details as $detail)
                                    <tr>
                                        <td>
                                            <img src="https://ui-avatars.com/api/?name={{$detail->username}}" alt=""
                                                height="60" class="rounded-circle" />
                                        </td>
                                        <td class="align-middle">{{$detail->username}}</td>
                                        <td class="align-middle">{{$detail->nationality}}</td>
                                        <td class="align-middle">{{$detail->is_visa ? '30 Days' : 'N/A'}}</td>
                                        <td class="align-middle">
                                            {{\Carbon\Carbon::createFromDate($detail->doe_passport)> \Carbon\Carbon::now() ? 'aktif' : 'Tidak aktif'
                                            }}</td>
                                        <td class="align-middle">
                                            <a href="{{route('checkout-remove', $detail->id) }}">
                                                <img src="{{url('assets/images/ic_remove.png')}}" alt="" />
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            Tidak ada data
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form class="form-inline" method="POST" action="{{route('checkout-create', $item->id)}}">
                                @csrf
                                <label class="sr-only" for="username">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" name="username" id="username"
                                    placeholder="Username" required />

                                <label class="sr-only" for="nationality">Asal Negara</label>
                                <input type="text" name="nationality" class="form-control mb-2 mr-sm-2" id="nationality"
                                    required style="width:50px" placeholder="Nationality" />

                                <label class="sr-only" class="mr-2" for="is_visa">Visa</label>
                                <select class="custom-select mb-2 mr-sm-2" required name="is_visa" id="is_visa">
                                    <option selected value="">VISA</option>
                                    <option value="1">30 Days</option>
                                    <option value="0">N/A</option>
                                </select>

                                <label class="sr-only" for="doe_passport">Expired Passport</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" class="form-control datepicker" name="doe_passport" required
                                        id="doe_passport" placeholder="DOE Passport" style="width: 120px" />
                                </div>

                                <button type="submit" class="btn btn-add-now mb-2 px-4">
                                    Tambahkan
                                </button>
                            </form>
                            <h3 class="mt-2 mb-0">Catatan</h3>
                            <p class="disclaimer mb-0">
                                Kamu hanya bisa menambahkan pengguna yang sudah terdaftar di website ini.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Information</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Jumlah Orang</th>
                                <td width="50%" class="text-right">{{$item->details->count()}} Orang</td>
                            </tr>
                            <tr>
                                <th width="50%">Penambahan Visa</th>
                                <td width="50%" class="text-right">Rp{{$item->additional_visa}}</td>
                            </tr>
                            <tr>
                                <th width="50%">Harga liburan</th>
                                <td width="50%" class="text-right">Rp {{$item->travel_package->price}} / Orang</td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right">Rp {{$item->transaction_total}}</td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique)</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue">Rp{{$item->transaction_total}},</span><span
                                        class="text-orange">{{mt_rand(0,99)}}</span>
                                </td>
                            </tr>
                        </table>

                        <hr />
                        <h2>Payment Instructions</h2>
                        <p class="payment-instructions">
                            Please complete your payment before to continue the wonderful trip
                        </p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="{{url('assets/images/ic_bank.png')}}" alt="" class="bank-image" />
                                <div class="description">
                                    <h3>PT ID</h3>
                                    <p>
                                        0999 6969 9090
                                        <br />
                                        Bank Asia
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bank-item">
                                <img src="{{url('assets/images/ic_bank.png')}}" alt="" class="bank-image" />
                                <div class="description">
                                    <h3>PT ID</h3>
                                    <p>
                                        0890 9000 9000
                                        <br />
                                        Bank
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="{{route('checkout-success', $item->id)}}"
                            class="btn btn-block btn-join-now mt-3 py-2">I Have Made
                            Payment</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{route('detail', $item->travel_package->slug)}}" class="text-muted">Cancel Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@push('prepend-style')
<link rel="stylesheet" href="{{url('assets/libraries/gijgo/css/gijgo.min.css')}}" />
@endpush
@push('prepend-script')
<script src="{{url('assets/libraries/gijgo/js/gijgo.min.js')}}"></script>
<script>
    $(document).ready(function () {
				$(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                uiLibrary: "bootstrap4",
                icons: {
                rightIcon: '<img src="{{url('assets/images/ic_date.png')}}" alt="" />'
                }
                });
    });
</script>
@endpush
