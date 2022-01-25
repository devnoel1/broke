@extends('layouts.front')

@section('main-contentn')
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-1-2@m uk-text-center">
                <p class="uk-text-lead uk-text-muted uk-margin-remove-bottom uk-text-center">Frequent question</p>
                <h2 class="uk-margin-small-top uk-text-center">Do you have any question</h2>
            </div>
            <div class="uk-width-1-1@m">
                <div class="uk-grid uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
                    <div>
                        <ul class="in-faq-2" data-uk-accordion>
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                    What is the minimu amount i can invest
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>For the Basic plan the minimum amount is 250 USD, for the Premium plan it’s 1000 USD and for the Ultimate plan it’s 10,000 USD. Anything below that will be considered a donation.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-clearfix">
                                       How can i make an investment?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>
                                        To make an investment with us simply choose the investment plan or click on register and you will be redirected to the registration page. After you have completed registration, navigate to account funding section to deposit money into your account. After you have successfully funded your account, purchase any of our investment plans and wait for your daily or hourly profits.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        My deposite is taking too long to reflect on my dashboard
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                   <p>
                                    If your deposit did not reflect on your account within 24hrs, please kindly contact us.
                                   </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="in-faq-2" data-uk-accordion>

                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        How do you generate such outrageous returns?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>
                                        Through a method called “pump and dump.” It’s quite simple to understand without using financial terms. We are part of a private group of crypto traders and we artificially increase the price of an bitcoin that will bring us profit. A “pump and dump” is the LEGAL ACT of an investor or group of investors promoting a stock they hold and selling once the stock price has risen. We start buying large volumes of a coin with low trading volume. Let’s say that the trading volume is 100.000.000 PACcoins per day. Our group starts buying the coin, placing a huge buy wall of, for example, 50.000.000 PACcoins. Since there is not enough liquidity (i.e. not enough people that are willing to sell the coin at that price), we start to push the price up with the wall. Other traders are soon aware of the “trending” coin, as it has a day-to-day price increase of, let’s say, 50%. This increase in price attracts other investors looking to make a profit. That way, the demand slowly turns into reality, as more and more people want to buy the coin. When the price is high enough, we start selling the large amount of coins we bought earlier. This results in an incredible large profit for us, from 200% to 250% each time we “pump”, also increasing the overall price of the coin we choose to bump.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        Do you have referral programs?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                  <p>
                                    Free Money? Sure, why not! If you’re bringing in friends/family you can get up to 10% more to your return per each plan your referral invest. The payment is made instantly to your account balance after the investment cycle has been completed. For more information, please visit our Referrals Section.
                                  </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
