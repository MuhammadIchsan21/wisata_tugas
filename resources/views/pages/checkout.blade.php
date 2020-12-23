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
                        <h1>Who is Going?</h1>
                        <p>Trip to Samboja, Kaltim, Indonesia</p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td scope="col">Picture</td>
                                        <td scope="col">Name</td>
                                        <td scope="col">Nationality</td>
                                        <td scope="col">Visa</td>
                                        <td scope="col">Passport</td>
                                        <td scope="col"></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{url('assets/images/ansel.jpg')}}" alt="" height="60" />
                                        </td>
                                        <td class="align-middle">Ansel</td>
                                        <td class="align-middle">ID</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <a href="#">
                                                <img src="{{url('assets/images/ic_remove.png')}}" alt="" />
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{url('assets/images/aku.jpg')}}" alt="" height="60" />
                                        </td>
                                        <td class="align-middle">Ichsan</td>
                                        <td class="align-middle">ID</td>
                                        <td class="align-middle">30 Days</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <a href="#">
                                                <img src="{{url('assets/images/ic_remove.png')}}" alt="" />
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form class="form-inline">
                                <label class="sr-only" for="inputUsername">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" id="inputUsername"
                                    placeholder="Username" />

                                <label class="sr-only" class="mr-2" for="inlineFormCustomSelectPref">Preference</label>
                                <select class="custom-select mb-2 mr-sm-2" id="inlineFormCustomSelectPref">
                                    <option selected value="">VISA</option>
                                    <option value="2">30 Days</option>
                                    <option value="3">N/A</option>
                                </select>

                                <label class="sr-only" for="doePassport">DOE Passport</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" class="form-control datepicker" id="doePassport"
                                        placeholder="DOE Passport" />
                                </div>

                                <button type="submit" class="btn btn-add-now mb-2 px-4">
                                    Add Now
                                </button>
                            </form>
                            <h3 class="mt-2 mb-0">Note</h3>
                            <p class="disclaimer mb-0">
                                You are only able to invite member that has registered in kacau.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Information</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Members</th>
                                <td width="50%" class="text-right">2 person</td>
                            </tr>
                            <tr>
                                <th width="50%">Additional Visa</th>
                                <td width="50%" class="text-right">$ 190,00</td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">$ 80,00 / person</td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right">$ 280,00</td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique)</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue">$ 279,</span><span class="text-orange">33</span>
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
                        <a href="{{route('checkout-success')}}" class="btn btn-block btn-join-now mt-3 py-2">I Have Made
                            Payment</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{route('detail')}}" class="text-muted">Cancel Booking</a>
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
                uiLibrary: "bootstrap4",
                icons: {
                rightIcon: '<img src="{{url('assets/images/ic_date.png')}}" alt="" />'
                }
                });
    });
</script>
@endpush
