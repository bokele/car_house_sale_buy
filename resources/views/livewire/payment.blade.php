@extends('layouts.app')

@section('content')
<section class="pb-20 relative block bg-gray-900">
    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px; transform: translateZ(0px);">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
            version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
    <div class="container mx-auto px-4 ">
        <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
                <h2 class="text-4xl font-semibold text-white">Summary of your order</h2>

            </div>
        </div>
        <div class="flex flex-row flex-wrap flex-1 flex-grow content-start pl-16">





            <!--Graph Content -->
            <div id="main-content" class="w-full flex-1">

                <div class="flex flex-1 flex-wrap">

                    <div class="w-full  p-6 xl:max-w-6xl">

                        <!-- Display a payment form -->
                        <form id="payment-form" class="form-payment" method="post" action="">
                            @csrf
                            <div id="card-element">
                                <!--Stripe.js injects the Card Element-->
                            </div>
                            <button id="submit">
                                <div class="spinner hidden" id="spinner"></div>
                                <span id="button-text">Pay</span>
                            </button>
                            <p id="card-error" role="alert"></p>
                            <p class="result-message hidden">
                                Payment succeeded, see the result in your
                                <a href="" target="_blank">Stripe dashboard.</a> Refresh the page to pay again.
                            </p>
                        </form>


                    </div>



                </div>

            </div>
            <!--Dash Content -->
            <div id="dash-content" class="bg-gray-200 py-6 lg:py-0 w-full lg:max-w-sm flex flex-wrap content-start">
                <div class="w-1/2 lg:w-full">
                    <div
                        class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                        <div class="flex flex-col items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-3 bg-gray-300"><i
                                        class="fa  fa-fw fa-truck fa-3x text-purple-500"></i>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-2xl">${{number_format($car_sold->max_price,2)}}
                                </h3>
                                <h3 class="font-bold text-purple-500 uppercase text-3xl">
                                    {{$car_sold->car->model->brand}}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 lg:w-full">
                    <div
                        class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                        <div class="flex flex-col items-center">

                            <div class="flex-1">
                                <h3 class="font-bold text-xl text-purple-500">Model: {{$car_sold->car->model->model}}
                                    </span></h3>
                                <h5 class="font-bold text-gray-500">Type: {{$car_sold->car->model->vehicle_type}}</h5>
                                <h5 class="font-bold text-gray-500">Fabrication year:{{$car_sold->car->model->year}}
                                </h5>
                                <h5 class="font-bold text-gray-500">Mileage: {{$car_sold->car->mileage}}</h5>
                                <h5 class="font-bold text-gray-500">Fuel: {{$car_sold->car->vehicle_fuel_type}}</h5>
                                <h5 class="font-bold text-gray-500">Gear Box: {{$car_sold->car->vehicle_gear_box_type}}
                                </h5>
                                <h5 class="font-bold text-gray-500">Seat Number: {{$car_sold->car->vehicle_seat_count}}
                                </h5>
                                <h5 class="font-bold text-gray-500">Door Number: {{$car_sold->car->vehicle_door_count}}
                                </h5>
                                <h5 class="font-bold text-gray-500">Color:<button class="ring-0"
                                        style="background-color: {{$car_sold->car->color}};">Color</button>
                                </h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('extra-javascript')


<script src="https://js.stripe.com/v3/"></script>

<script type="text/javascript">
    // A reference to Stripe.js initialized with a fake API key.
// Sign in to see examples pre-filled with your key.
var stripe = Stripe("pk_test_PbsOHNLtBlPq9n5YZbLicaTC00Erz270A6");
// The items the customer wants to buy
var elements = stripe.elements();
var style = {
base: {
color: "#32325d",
fontFamily: 'Arial, sans-serif',
fontSmoothing: "antialiased",
fontSize: "16px",
"::placeholder": {
color: "#32325d"
}
},
invalid: {
fontFamily: 'Arial, sans-serif',
color: "#fa755a",
iconColor: "#fa755a"
}
};
var card = elements.create("card", { style: style });
// Stripe injects an iframe into the DOM
card.mount("#card-element");
card.on("change", function (event) {
// Disable the Pay button if there are no card details in the Element
document.querySelector("button").disabled = event.empty;
document.querySelector("#card-error").textContent = event.error ? event.error.message : "";
});
var form = document.getElementById("payment-form");
form.addEventListener("submit", function(event) {
event.preventDefault();



// Complete payment when the submit button is clicked
payWithCard(stripe, card, '{{ $client_secret}} ');
document.querySelector("button").disabled = true;
});

// Calls stripe.confirmCardPayment
// If the card requires authentication Stripe shows a pop-up modal to
// prompt the user to enter authentication details without leaving your page.
var payWithCard = function(stripe, card, clientSecret) {
loading(true);
stripe
.confirmCardPayment(clientSecret, {
payment_method: {
card: card
}
})
.then(function(result) {
if (result.error) {
// Show error to your customer
showError(result.error.message);
} else {
// The payment succeeded!
orderComplete(result.paymentIntent.id);
$.ajax({
type:form.method,
url:form.action,
data:JSON.stringify({ paymentIntent: result.paymentIntent}),
dataType: 'json',
success:function(response) {
    // window.location.href = '/payment/success';
if(response.success == "succeeded") {
Swal.fire({
position: 'top-end',
icon: 'success',
title: 'Payment succeeded and order created!',
showConfirmButton: false,
toast: true,
timer: 1500
});
$('#cart_item_number').text(0);
}else{
    console.log(response);
}
}
});
}
});
};
/* ------- UI helpers ------- */
// Shows a success message when the payment is complete
var orderComplete = function(paymentIntentId) {
loading(false);
document
.querySelector(".result-message a")
.setAttribute(
"href",
"https://dashboard.stripe.com/test/payments/" + paymentIntentId
);
document.querySelector(".result-message").classList.remove("hidden");
document.querySelector("button").disabled = true;
};
// Show the customer the error from Stripe if their card fails to charge
var showError = function(errorMsgText) {
loading(false);
var errorMsg = document.querySelector("#card-error");
errorMsg.textContent = errorMsgText;
setTimeout(function() {
errorMsg.textContent = "";
}, 4000);
};
// Show a spinner on payment submission
var loading = function(isLoading) {
if (isLoading) {
// Disable the button and show a spinner
document.querySelector("button").disabled = true;
document.querySelector("#spinner").classList.remove("hidden");
document.querySelector("#button-text").classList.add("hidden");
} else {
document.querySelector("button").disabled = false;
document.querySelector("#spinner").classList.add("hidden");
document.querySelector("#button-text").classList.remove("hidden");
}
};
</script>
@endsection

@section('paymentcss')
<style>
    /* Variables */
    * {
        box-sizing: border-box;
    }

    .form-payment {
        width: auto;
        align-self: center;
        box-shadow: 0px 0px 0px 0.5px rgba(50, 50, 93, 0.1),
            0px 2px 5px 0px rgba(50, 50, 93, 0.1), 0px 1px 1.5px 0px rgba(0, 0, 0, 0.07);
        border-radius: 7px;
        padding: 40px;
    }

    .form-payment input {
        border-radius: 6px;
        margin-bottom: 6px;
        padding: 12px;
        border: 1px solid rgba(50, 50, 93, 0.1);
        height: 44px;
        font-size: 16px;
        width: 100%;
        background: rgb(199, 17, 17);
        color: red;
    }

    .result-message {
        line-height: 22px;
        font-size: 16px;
    }

    .result-message a {
        color: rgb(89, 111, 214);
        font-weight: 600;
        text-decoration: none;
    }

    .hidden {
        display: none;
    }

    #card-error {
        color: rgb(105, 115, 134);
        text-align: left;
        font-size: 13px;
        line-height: 17px;
        margin-top: 12px;
    }

    #card-element {
        border-radius: 4px 4px 0 0;
        padding: 12px;
        border: 1px solid rgba(50, 50, 93, 0.1);
        height: 44px;
        width: 100%;
        background: white;
    }

    #payment-request-button {
        margin-bottom: 32px;
    }

    /* Buttons and links */
    button {
        background: #6D28D9;
        color: #ffffff;
        font-family: Arial, sans-serif;
        border-radius: 0 0 4px 4px;
        border: 0;
        padding: 12px 16px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        display: block;
        transition: all 0.2s ease;
        box-shadow: 0px 4px 5.5px 0px rgba(0, 0, 0, 0.07);
        width: 100%;
    }

    button:hover {
        filter: contrast(115%);
    }

    button:disabled {
        opacity: 0.5;
        cursor: default;
    }

    /* spinner/processing state, errors */
    .spinner,
    .spinner:before,
    .spinner:after {
        border-radius: 50%;
    }

    .spinner {
        color: #ffffff;
        font-size: 22px;
        text-indent: -99999px;
        margin: 0px auto;
        position: relative;
        width: 20px;
        height: 20px;
        box-shadow: inset 0 0 0 2px;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
    }

    .spinner:before,
    .spinner:after {
        position: absolute;
        content: "";
    }

    .spinner:before {
        width: 10.4px;
        height: 20.4px;
        background: #5469d4;
        border-radius: 20.4px 0 0 20.4px;
        top: -0.2px;
        left: -0.2px;
        -webkit-transform-origin: 10.4px 10.2px;
        transform-origin: 10.4px 10.2px;
        -webkit-animation: loading 2s infinite ease 1.5s;
        animation: loading 2s infinite ease 1.5s;
    }

    .spinner:after {
        width: 10.4px;
        height: 10.2px;
        background: #5469d4;
        border-radius: 0 10.2px 10.2px 0;
        top: -0.1px;
        left: 10.2px;
        -webkit-transform-origin: 0px 10.2px;
        transform-origin: 0px 10.2px;
        -webkit-animation: loading 2s infinite ease;
        animation: loading 2s infinite ease;
    }

    @-webkit-keyframes loading {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes loading {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @media only screen and (max-width: 600px) {
        form {
            width: 80vw;
        }
    }
</style>

@endsection
