# Stripe PHP starter kit

## Getting started

To run any of the steps, you will first need to initialize the stripe submodule, which points to the stripe-php client library.  To do this, first clone this project, then run:

    git submodule init
    git submodule update

Then, sign up for a Stripe account at https://stripe.com and replace every instance of `<YOUR PUBLISHABLE STRIPE API KEY>` and `<YOUR SECRET STRIPE API KEY>` with your publishable and secret API keys found at [https://manage.stripe.com/#account/apikeys](https://manage.stripe.com/#account/apikeys).