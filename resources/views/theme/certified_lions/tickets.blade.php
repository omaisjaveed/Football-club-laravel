@extends('theme.certified_lions.website')

@section('content')
<style>
    /* Modal Custom Styling */
    .modal-header {
        border-bottom: none;
        border-radius: 0.5rem 0.5rem 0 0;
    }

    .modal-content {
        border-radius: 0.5rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        overflow: hidden;
    }

    .modal-body {
        padding: 2rem;
    }

    #ticketForm .form-control {
        padding: 0.8rem 1.5rem;
        border: 2px solid #ced4da;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    #ticketForm .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn-primary {
        background: linear-gradient(135deg, #007bff, #0056b3);
        border: none;
        transition: background 0.3s, transform 0.2s;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #0056b3, #003d80);
        transform: translateY(-2px);
    }

    .btn-close:hover {
        opacity: 0.8;
    }

    .text-success {
        font-size: 1.25rem;
    }

    div#ticketModal .modal-body {
        height: auto;
        margin: 50px 0 0;
        overflow: visible;
    }

    div#ticketModal .modal-content {
        padding: 30px 30px;
    }

    div#ticketModal h5#ticketModalLabel {
        padding: 10px;
        border-radius: 7px !important;
        background-color: #dfba76;
        margin: auto;
        display: block;
    }

    div#ticketModal .modal-header {
        border-radius: 13px;
        text-align: center;
    }

    div#ticketModal .modal-header {
        border-radius: 13px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        left: 0;
        margin: 10px 0 0;
    }

    div#ticketModal button.btn-close {
        position: absolute;
        right: 13px;
        display: inline-block;
        color: #000 !important;
        z-index: 9999;
    }

    div#ticketModal .modal-dialog {
        max-width: 410px;
        margin: 30px auto;
    }

    div#ticketModal label {
        font-size: 15px;
    }

    .pricing {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 4px dotted #dfba76;
        padding: 14px;
    }

    .form-border {
        border: 4px dotted #dfba76;
        !;
        padding: 14px;
        margin: 12px 0 30px;
    }

    #ticketForm .form-control {
        font-size: 14px;
    }

    /*div#ticketModal .modal-body::-webkit-scrollbar-thumb {*/
    /*    background-color: #dfba76;*/
    /*    border-radius: 10px;*/
    /*}*/

    /*div#ticketModal .modal-body::-webkit-scrollbar {*/A
    /*    background-color: grey;*/
    /*    border-radius: 5px;*/
    /*    width: 10px;*/
    /*}*/
    .form-btn {
        text-align: right;
    }

    .form-btn button {
        color: #000;
    }
</style>
<section class="ticket-banner">
    <div class="container">
        <div class="ticket-banner-txt">
            <h2>Register now</h2>
            <p>or complete your profile to buy your tickets</p>
        </div>
    </div>
</section>

<div class="masl-tabs">
    <div class="container-fluid">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="masl2-tab" data-bs-toggle="tab" data-bs-target="#masl2-tab-pane" type="button" role="tab" aria-controls="masl2-tab-pane" aria-selected="true">MASL2</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="masl3-tab" data-bs-toggle="tab" data-bs-target="#masl3-tab-pane" type="button" role="tab" aria-controls="masl3-tab-pane" aria-selected="false">MASL3</button>
            </li>
        </ul>
    </div>
</div>
<div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="masl2-tab-pane" role="tabpanel" aria-labelledby="masl2-tab" tabindex="0">

        <section class="tickets-booking">
            <div class="container-fluid">
                <div class="tickets-filter">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="booking">
                                <p>FEBRUARY 2025</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="filter-selector">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Filter By Month
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">September</a></li>
                                        <li><a class="dropdown-item" href="#">October</a></li>
                                        <li><a class="dropdown-item" href="#">November</a></li>
                                        <li><a class="dropdown-item" href="#">December</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tickets-per-person">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="gender-match">
                                <div class="ticket-1">
                                    <h4>SUNDAY,FEB 2 / HOME</h4>
                                    <h4>2:00PM CST</h4>
                                    <p>LETS PLAY INC</p>
                                </div>
                                <div class="gender">
                                    <p>MASL2</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="ticket-3">

                                <div class="logo-box-1">
                                    <img src="{{ asset('public/theme/certified_lions/images/chihuahua.png') }}" alt="">
                                    <p>Chihuahua Savage 2</p>
                                </div>

                                <div class="v-s">
                                    <p>VS</p>
                                </div>

                                <div class="logo-box-1">
                                    <img src="{{ asset('public/theme/certified_lions/images/logo-dark.png') }}" alt="">
                                    <p>Certified Lions FC</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="ticket-4">
                                <div class="red-txt">
                                    <p> <span>!</span> MATCH DETAILS</p>
                                </div>

                                <div class="detail-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#ticketModal" data-title="SUNDAY,FEB 2 / HOME" data-msl="2">BUY TICKETS</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="tickets-per-person">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="gender-match">
                                <div class="ticket-1">
                                    <h4>SATURDAY,FEB 15 / HOME</h4>
                                    <h4>8:00PM CST</h4>
                                    <p>LETS PLAY INC</p>
                                </div>
                                <div class="gender">
                                    <p>MASL2</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="ticket-3">

                                <div class="logo-box-1">
                                    <img src="{{ asset('public/theme/certified_lions/images/wichita-wings.png') }}" alt="">
                                    <p>Wichita Wings</p>
                                </div>

                                <div class="v-s">
                                    <p>VS</p>
                                </div>

                                <div class="logo-box-1">
                                    <img src="{{ asset('public/theme/certified_lions/images/logo-dark.png') }}" alt="">
                                    <p>Certified Lions FC</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="ticket-4">
                                <div class="red-txt">
                                    <p> <span>!</span> MATCH DETAILS</p>
                                </div>

                                <div class="detail-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#ticketModal" data-title="SATURDAY,FEB 15 / HOME" data-msl="2">BUY TICKETS</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="tickets-filter">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="booking">
                                <p>MARCH 2025</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tickets-per-person">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="gender-match">
                                <div class="ticket-1">
                                    <h4>SATURDAY,MAR 1 / HOME</h4>
                                    <h4>8:00PM CST</h4>
                                    <p>LETS PLAY INC</p>
                                </div>
                                <div class="gender">
                                    <p>MASL2</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="ticket-3">

                                <div class="logo-box-1">
                                    <img src="{{ asset('public/theme/certified_lions/images/mexico.png') }}" alt="">
                                    <p>New Mexico Runners</p>
                                </div>

                                <div class="v-s">
                                    <p>VS</p>
                                </div>

                                <div class="logo-box-1">
                                    <img src="{{ asset('public/theme/certified_lions/images/logo-dark.png') }}" alt="">
                                    <p>Certified Lions FC</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="ticket-4">
                                <div class="red-txt">
                                    <p> <span>!</span> MATCH DETAILS</p>
                                </div>

                                <div class="detail-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#ticketModal" data-title="SATURDAY,MAR 1 / HOME" data-msl="2">BUY TICKETS</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section>

    </div>

    <div class="tab-pane fade" id="masl3-tab-pane" role="tabpanel" aria-labelledby="masl3-tab" tabindex="0">

        <section class="tickets-booking-masl3">
            <div class="container-fluid">
                <div class="tickets-filter">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="booking">
                                <p>JANUARY 2025</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="filter-selector">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Filter By Month
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">September</a></li>
                                        <li><a class="dropdown-item" href="#">October</a></li>
                                        <li><a class="dropdown-item" href="#">November</a></li>
                                        <li><a class="dropdown-item" href="#">December</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tickets-per-person">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="gender-match">
                                <div class="ticket-1">
                                    <h4>SATURDAY,JAN 18 / HOME</h4>
                                    <h4>8:00PM CST</h4>
                                    <p>LETS PLAY INC</p>
                                </div>
                                <div class="gender">
                                    <p>MASL3</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="ticket-3">

                                <div class="logo-box-1">
                                    <img src="{{ asset('public/theme/certified_lions/images/wichita.png') }}" alt="">
                                    <p>Wichita Selection</p>
                                </div>

                                <div class="v-s">
                                    <p>VS</p>
                                </div>

                                <div class="logo-box-1">
                                    <img src="{{ asset('public/theme/certified_lions/images/logo-dark.png') }}" alt="">
                                    <p>Certified Lions FC</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="ticket-4">
                                <div class="red-txt">
                                    <p> <span>!</span> MATCH DETAILS</p>
                                </div>

                                <div class="detail-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#ticketModal" data-title="SATURDAY,JAN 18 / HOME" data-msl="3">BUY TICKETS</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="tickets-filter">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="booking">
                                <p>FEBRUARY 2025</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tickets-per-person">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="gender-match">
                                <div class="ticket-1">
                                    <h4>SATURDAY,FEB 1 / HOME</h4>
                                    <h4>8:00PM CST</h4>
                                    <p>LETS PLAY INC</p>
                                </div>
                                <div class="gender">
                                    <p>MASL3</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="ticket-3">

                                <div class="logo-box-1">
                                    <img src="{{ asset('public/theme/certified_lions/images/kansas.png') }}" alt="">
                                    <p>Kansas City Barilleros</p>
                                </div>

                                <div class="v-s">
                                    <p>VS</p>
                                </div>

                                <div class="logo-box-1">
                                    <img src="{{ asset('public/theme/certified_lions/images/logo-dark.png') }}" alt="">
                                    <p>Certified Lions FC</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="ticket-4">
                                <div class="red-txt">
                                    <p> <span>!</span> MATCH DETAILS</p>
                                </div>

                                <div class="detail-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#ticketModal" data-title="SATURDAY,FEB 1 / HOME" data-msl="3">BUY TICKETS</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="tickets-filter">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="booking">
                                <p>MARCH 2025</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tickets-per-person">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="gender-match">
                                <div class="ticket-1">
                                    <h4>SATURDAY,FEB 22 / HOME</h4>
                                    <h4>8:00PM CST</h4>
                                    <p>LETS PLAY INC</p>
                                </div>
                                <div class="gender">
                                    <p>MASL3</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="ticket-3">

                                <div class="logo-box-1">
                                    <img src="{{ asset('public/theme/certified_lions/images/wichita.png') }}" alt="">
                                    <p>Wichita Selection</p>
                                </div>

                                <div class="v-s">
                                    <p>VS</p>
                                </div>

                                <div class="logo-box-1">
                                    <img src="{{ asset('public/theme/certified_lions/images/logo-dark.png') }}" alt="">
                                    <p>Certified Lions FC</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="ticket-4">
                                <div class="red-txt">
                                    <p> <span>!</span> MATCH DETAILS</p>
                                </div>

                                <div class="detail-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#ticketModal" data-title="SATURDAY,FEB 22 / HOME" data-msl="3">BUY TICKETS</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="tickets-per-person">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="gender-match">
                                <div class="ticket-1">
                                    <h4>SUNDAY,MAR 2 / HOME</h4>
                                    <h4>2:00PM CST</h4>
                                    <p>LETS PLAY INC</p>
                                </div>
                                <div class="gender">
                                    <p>MASL3</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="ticket-3">

                                <div class="logo-box-1">
                                    <img src="{{ asset('public/theme/certified_lions/images/demize.png') }}" alt="">
                                    <p>Springfield Demize</p>
                                </div>

                                <div class="v-s">
                                    <p>VS</p>
                                </div>

                                <div class="logo-box-1">
                                    <img src="{{ asset('public/theme/certified_lions/images/logo-dark.png') }}" alt="">
                                    <p>Certified Lions FC</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="ticket-4">
                                <div class="red-txt">
                                    <p> <span>!</span> MATCH DETAILS</p>
                                </div>

                                <div class="detail-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#ticketModal" data-title="SUNDAY,MAR 2 / HOME" data-msl="3">BUY TICKETS</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

              

            </div>
        </section>

    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="ticketModal" tabindex="-1" aria-labelledby="ticketModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="ticketModalLabel">Buy Tickets</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form id="ticketForm">
                    <!-- Name Field -->
                    <div class="form-border">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control form-control-lg rounded-pill" id="name" name="name" placeholder="Enter your name" required>
                        </div>

                        <!-- Email Field -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control form-control-lg rounded-pill" id="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <!-- Phone Field -->
                        <div class="mb-3">
                            <label for="phone" class="form-label fw-bold">Phone</label>
                            <input type="text" class="form-control form-control-lg rounded-pill" id="phone" name="phone" placeholder="Enter your phone number" required>
                        </div>
                    </div>

                    <!-- Price Display -->
                    <div class="mb-3 pricing">
                        <p class="h5 fw-bold">Price: $250</p>
                    </div>

                    <!-- Price Display -->
                    <div class="mb-3 pricing">
                        <script src="https://js.stripe.com/v3/"></script>

                        <form action="{{ url('gateway/stripe_payment_authorize/') }}" method="post" id="payment-form">
                            @csrf
                            <div class="form-row">
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                            </div>

                            <!--<div class="form-row">-->
                            <!--    <button class="btn">{{ _lang('Pay Now') }}</button>-->
                            <!--</div>-->
                        </form>

                        <script>
                            // Create a Stripe client.
                            var stripe = Stripe("{{ get_option('stripe_publishable_key') }}");

                            // Create an instance of Elements.
                            var elements = stripe.elements();

                            // Custom styling can be passed to options when creating an Element.
                            // (Note that this demo uses a wider set of styles than the guide below.)
                            var style = {
                                base: {
                                    color: '#32325d',
                                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                                    fontSmoothing: 'antialiased',
                                    fontSize: '16px',
                                    '::placeholder': {
                                        color: '#aab7c4'
                                    }
                                },
                                invalid: {
                                    color: '#fa755a',
                                    iconColor: '#fa755a'
                                }
                            };

                            // Create an instance of the card Element.
                            var card = elements.create('card', {
                                style: style
                            });

                            // Add an instance of the card Element into the `card-element` <div>.
                            card.mount('#card-element');

                            // Handle real-time validation errors from the card Element.
                            card.on('change', function(event) {
                                var displayError = document.getElementById('card-errors');
                                if (event.error) {
                                    displayError.textContent = event.error.message;
                                } else {
                                    displayError.textContent = '';
                                }
                            });

                            // Handle form submission.
                            var form = document.getElementById('payment-form');
                            form.addEventListener('submit', function(event) {
                                event.preventDefault();

                                stripe.createToken(card).then(function(result) {
                                    if (result.error) {
                                        // Inform the user if there was an error.
                                        var errorElement = document.getElementById('card-errors');
                                        errorElement.textContent = result.error.message;
                                    } else {
                                        // Send the token to your server.
                                        stripeTokenHandler(result.token);
                                    }
                                });
                            });

                            // Submit the form with the token ID.
                            function stripeTokenHandler(token) {
                                // Insert the token ID into the form so it gets submitted to the server
                                var form = document.getElementById('payment-form');
                                var hiddenInput = document.createElement('input');
                                hiddenInput.setAttribute('type', 'hidden');
                                hiddenInput.setAttribute('name', 'stripeToken');
                                hiddenInput.setAttribute('value', token.id);
                                form.appendChild(hiddenInput);

                                // Submit the form
                                form.submit();
                            }
                        </script>
                    </div>

                     <!--Submit Button -->
                    <div class="form-btn">
                        <button type="submit" class="btn rounded-pill">Pay Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    // Attach event listener to the modal when it's about to be shown
    const ticketModal = document.getElementById('ticketModal');

    ticketModal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        const button = event.relatedTarget;

        // Extract info from data attributes
        const title = button.getAttribute('data-title');
        const msl = button.getAttribute('data-msl');

        // Update modal title and optionally log MSL value
        const modalTitle = ticketModal.querySelector('.modal-title');
        modalTitle.textContent = `MSL: ${msl} - ${title}`;
    });
</script>
@endsection