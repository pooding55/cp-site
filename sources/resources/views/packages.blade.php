@extends('templates.base')

@section('content')
    <section id="packages" class="packages primary">
        <div class="container">
            <div class="row">
                <h2>Packages</h2>
                <div class="packages">

                    <div class="packages__item ">
                        <h3>Beginners</h3>
                        <div>
                            <p class="price sale">
                                <span>€</span>200
                            </p>
                            <p class="price"><span>€</span>
                                <del>250</del>
                            </p>
                        </div>
                        <div class="packages__item-info">
                            <ul>
                                <li>Trading Essentials Course</li>
                                <li class="ins">Technical Trading Course</li>
                                <li class="ins">Strategic Trading Course</li>
                                <li>eBooks</li>
                                <li class="ins">3 High-Probability Trading Setups</li>

                            </ul>
                            <ul>
                                <li class="ins">Economic Calendar</li>
                                <li class="ins">Cryptocurrency Calendar</li>
                                <li>Glossary</li>
                                <li class="ins">Daily Market News</li>
                                <li class="ins">Daily Market Research</li>
                                <li class="ins">Trading Signals</li>
                                <li class="ins">Market Scanners</li>
                            </ul>
                            <ul>
                                <li class="ins">Currency Strength Meter</li>
                                <li class="ins">Market Highlights TV</li>
                                <li class="ins">Trend Analysis</li>
                            </ul>
                            <ul>
                                <li>Access to live session with a dedicated trainer - up to 3 Modules</li>
                                <li>44 Videos</li>
                                <li>Knowledge Checks</li>
                                <li>Assignments</li>
                                <li class="ins">Lifetime Access</li>
                            </ul>
                        </div>
                        <div class="packages-btn-block">
                            <a class="btn-invert" href="{{ route('home') }}/#form">Buy Package</a>
                        </div>
                    </div>

                    <div class="packages__item ">
                        <h3>Intermediate</h3>
                        <div>
                            <p class="price sale">
                                <span>€</span>500
                            </p>
                            <p class="price"><span>€</span>
                                <del>600</del>
                            </p>
                        </div>
                        <div class="packages__item-info">
                            <ul>
                                <li>Trading Essentials Course</li>
                                <li>Technical Trading Course</li>
                                <li class="ins">Strategic Trading Course</li>
                                <li>eBooks</li>
                                <li class="ins">3 High-Probability Trading Setups</li>

                            </ul>
                            <ul>
                                <li>Economic Calendar</li>
                                <li>Cryptocurrency Calendar</li>
                                <li>Glossary</li>
                                <li class="ins">Daily Market News</li>
                                <li class="ins">Daily Market Research</li>
                                <li class="ins">Trading Signals</li>
                                <li class="ins">Market Scanners</li>
                            </ul>
                            <ul>
                                <li>Currency Strength Meter</li>
                                <li class="ins">Market Highlights TV</li>
                                <li class="ins">Trend Analysis</li>
                            </ul>
                            <ul>
                                <li>Access to live session with a dedicated trainer - up to 6 Modules</li>
                                <li>72 Videos</li>
                                <li>Knowledge Checks</li>
                                <li>Assignments</li>
                                <li class="ins">Lifetime Access</li>
                            </ul>
                        </div>
                        <div class="packages-btn-block">
                            <a class="btn-invert" href="{{ route('home') }}/#form">Buy
                                Package</a>
                        </div>
                    </div>


                    <div class="chosen packages__item ">
                        <div class="badge">Most Popular</div>
                        <h3>Advanced</h3>
                        <div>
                            <p class="price sale">
                                <span>€</span>1000
                            </p>
                            <p class="price"><span>€</span>
                                <del>1200</del>
                            </p>
                        </div>
                        <div class="packages__item-info">
                            <ul>
                                <li>Trading Essentials Course</li>
                                <li>Technical Trading Course</li>
                                <li>Strategic Trading Course</li>
                                <li>eBooks</li>
                                <li class="ins">3 High-Probability Trading Setups</li>

                            </ul>
                            <ul>
                                <li>Economic Calendar</li>
                                <li>Cryptocurrency Calendar</li>
                                <li>Glossary</li>
                                <li>Daily Market News</li>
                                <li class="ins">Daily Market Research</li>
                                <li class="ins">Trading Signals</li>
                                <li class="ins">Market Scanners</li>
                            </ul>
                            <ul>
                                <li>Currency Strength Meter</li>
                                <li class="ins">Market Highlights TV</li>
                                <li>Trend Analysis</li>
                            </ul>
                            <ul>
                                <li>Access to live session with a dedicated trainer - up to 9 Modules</li>
                                <li>123 Videos</li>
                                <li>Knowledge Checks</li>
                                <li>Assignments</li>
                                <li>Lifetime Access</li>
                            </ul>
                        </div>
                        <div class="packages-btn-block">
                            <a class="btn-invert" href="{{ route('home') }}/#form">Buy Package</a>
                        </div>
                    </div>

                    <div class="packages__item ">
                        <h3>Premium</h3>
                        <div>
                            <p class="price sale">
                                <span>€</span>3000
                            </p>
                            <p class="price"><span>€</span>
                                <del>6000</del>
                            </p>
                        </div>
                        <div class="packages__item-info">
                            <ul>
                                <li>Trading Essentials Course</li>
                                <li>Technical Trading Course</li>
                                <li>Strategic Trading Course</li>
                                <li>eBooks</li>
                                <li>3 High-Probability Trading Setups</li>

                            </ul>
                            <ul>
                                <li>Economic Calendar</li>
                                <li>Cryptocurrency Calendar</li>
                                <li>Glossary</li>
                                <li>Daily Market News</li>
                                <li>Daily Market Research</li>
                                <li>Trading Signals</li>
                                <li>Market Scanners</li>
                            </ul>
                            <ul>
                                <li>Currency Strength Meter</li>
                                <li>Market Highlights TV</li>
                                <li>Trend Analysis</li>
                            </ul>
                            <ul>
                                <li>Access to live session with a dedicated trainer - up to 15 Modules</li>
                                <li>123 Videos</li>
                                <li>Knowledge Checks</li>
                                <li>Assignments</li>
                                <li>Lifetime Access</li>
                            </ul>
                        </div>
                        <div class="packages-btn-block">
                            <a class="btn-invert" href="{{ route('home') }}/#form">Buy
                                Package</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
