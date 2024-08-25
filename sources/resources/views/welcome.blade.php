@extends('templates.base')

@section('content')
    <section class="hero image">
        <div class="container">
            <h1 style="max-width: 900px;"> Master the famous Alpha method, trusted by investors worldwide. </h1>
            <p>Our step-by-step course with expert trainers will guide you to trading success. </p>
            <p>Click below to begin your journey. </p>
            <div class="mobile">
                <ul id="menu-um-nav-1" class="students">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2200">
                        <a class="scrolll" href="#">Student Login</a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-783">
                        <a href="packages.php" aria-current="page">Buy Package</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="process" class="courses">
        <div class="container" style="overflow: visible;">
            <div class="row">
                <h2>Welcome to A1Trend Academy</h2>
                <p class="general-text">At A1Trend Academy, we specialize in empowering investors with the tools and knowledge to optimize their portfolios through active management. Our focus is on helping investors generate alpha—the measure of performance that indicates how well a portfolio performs relative to a benchmark. By leveraging diversified portfolios, our strategy is designed to minimize unsystematic risk, allowing you to harness the full potential of your investments.</p>
                <p class="general-text">For beginner investors, this approach offers several key benefits:</p>
                <p class="general-text">
                <ul>
                    <li class="general-text">Hands-On Learning: You will learn how to manage portfolios actively, seeking opportunities to outperform the market, instead of passively following it.</li>
                    <li class="general-text">Risk Management: Diversification reduces exposure to specific risks, helping you protect your investments from unforeseen market swings.</li>
                    <li class="general-text">Personalized Growth: As you progress, you'll gain the skills needed to not only maintain a steady return but also to potentially add value by identifying where the market presents opportunities.</li>
                </ul>
                </p>
                <p class="general-text">At A1Trend Academy, we believe in equipping you with the knowledge to make informed decisions and confidently navigate the markets. Whether you're starting with limited experience or looking to refine your strategy, our courses are designed to guide you towards achieving success.</p>
            </div>
        </div>
    </section>
    <section class="courses">
        <div class="container" style="overflow: visible;">
            <h2>A1Trend Academy – Leading the way in Canada’s expanding investment education</h2>
            <div class="row why-tt">
                <div>
                    <p class="general-text">A1Trend Academy has established itself as a go-to destination for investors in the UK, and its popularity continues to soar. One of the key reasons for its success is its focus on the alpha method, which is particularly appealing in the UK's dynamic financial landscape. British investors are drawn to the method because it offers a way to actively outperform market benchmarks through diversified portfolio management. With the rise of digital trading platforms and a growing appetite for smarter investment strategies, the demand for structured education in alpha generation has skyrocketed. The method’s proven track record in maximizing returns while minimizing risk makes it a favoured approach for both novice and experienced investors.</p>
                    <p class="general-text">Now, A1Trend is expanding its reach to Canada, where the investment landscape is ripe for innovation. Canadians are increasingly looking for ways to enhance their financial strategies amid a changing economy, and A1Trend’s emphasis on education and alpha generation offers a timely solution. The Canadian market is also seeing a shift towards more sophisticated investment tactics, with an increasing number of investors eager to learn how to actively manage their portfolios and seek alpha returns. A1Trend’s expansion into Canada is driven by this demand, as well as the country's growing fintech sector, which mirrors the UK's enthusiasm for advanced financial education and tools. With these factors in mind, A1Trend’s method is expected to resonate strongly with Canadian investors, offering them the insights and strategies to thrive in today’s markets.</p>
                </div>
                <img src="{{ Storage::url('images/learning.webp') }}" alt="templates" id="learning-image" class="templates">
            </div>
        </div>
    </section>
    <section id="courses" class="resources primary">
        <div class="container" style="overflow: visible;">
            <h2>Examples of Courses</h2>
            <div class="resources__wrapper row cards" style="margin-bottom: 3rem;">
                <div class="resources__wrapper-card card-2 bg1">
                    <a href="how-forex-brokers-work.php">
                        <img src="{{ Storage::url('images/course11.png') }}" alt="How Do Forex Brokers Work?">
                        <div class="list">
                            <p class="title">How Do Forex Brokers Work?</p>
                            <p class="secont-t">How do forex brokers work? Here’s a story that helps explain what forex brokers actually do.</p>
                        </div>
                    </a>
                </div>
                <div class="resources__wrapper-card card-2 bg2">
                    <a href="what-is-forex.php">
                        <img src="{{ Storage::url('images/course22.png') }}" alt="What is Forex?">
                        <div class="list">
                            <p class="title">What is Forex?</p>
                            <p class="secont-t">Learn about this massively huge financial market where fiat currencies are traded.</p>
                        </div>
                    </a>
                </div>
                <div class="resources__wrapper-card card-2 bg3">
                    <a href="chart-patterns-schmatterns.php">
                        <img src="{{ Storage::url('images/course33.png') }}" alt="How to Trade Chart Patterns">
                        <div class="list">
                            <p class="title">How to Trade Chart Patterns</p>
                            <p class="secont-t">Chart patterns are like that funny feeling you get in your tummy right before you let a fart explode. Here’s why!</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="resources__wrapper row cards">
                <div class="resources__wrapper-card card-2 bg4">
                    <a href="relative-strength-index.php">
                        <img src="{{ Storage::url('images/course44.png') }}" alt="How to Use RSI (Relative Strength Index)">
                        <div class="list">
                            <p class="title">How to Use RSI (Relative Strength Index)</p>
                            <p class="secont-t">If you find that Stochastic isn’t your cup of tea, then you might want to take a look at the good ol’ RSI.</p>
                        </div>
                    </a>
                </div>
                <div class="resources__wrapper-card card-2 bg5">
                    <a href="ways-to-measure-volatility.php">
                        <img src="{{ Storage::url('images/course55.png') }}" alt="How to Measure Volatility">
                        <div class="list">
                            <p class="title">How to Measure Volatility</p>
                            <p class="secont-t">As you’ll come to learn, the world of forex is full of tools to help us find breakout trade opportunities.</p>
                        </div>
                    </a>
                </div>
                <div class="resources__wrapper-card card-2 bg6">
                    <a href="make-money-trading-forex.php">
                        <img src="{{ Storage::url('images/course66.png') }}" alt="How to Make Money Trading Forex">
                        <div class="list">
                            <p class="title">How to Make Money Trading Forex</p>
                            <p class="secont-t">What is forex trading? How does forex trading work? What you need to know on how to get started in trading forex.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="courses">
        <div class="container" style="overflow: visible;">
            <div class="row why-tt">
                <div>
                    <h2>What is A1Trend Academy?</h2>
                    <div class="m-points">
                        <img src="{{ Storage::url('images/expert.svg') }}" alt="" style="min-width: 100px;">
                        <p>User-Friendly Platform: Accessible from any PC, tablet, or smartphone, A1Trend Academy's courses are designed for convenience, allowing you to learn at your own pace, anywhere and anytime.</p>
                    </div>
                    <div class="m-points">
                        <img src="{{ Storage::url('images/on-demand.svg') }}" alt="" style="min-width: 100px;">
                        <p> Expert Guidance on the Alpha Method: With dedicated trainers, A1Trend Academy offers step-by-step instructions on mastering the Alpha method, a strategy used by successful investors worldwide to generate high returns while minimizing unsystematic risk.</p>
                    </div>
                    <div class="m-points">
                        <img src="{{ Storage::url('images/focused-on-finance.svg') }}" alt="" style="min-width: 100px;">
                        <p>Comprehensive Learning Resources: The academy provides diverse educational materials, catering to both beginners and advanced traders, ensuring that users have the tools and knowledge to excel in today's dynamic markets.</p>
                    </div>
                </div>
                <img src="{{ Storage::url('images/pick3.webp') }}" alt="templates" class="templates">
            </div>
        </div>
    </section>
    <section class="courses">
        <div class="row form-section">
            <div class="form-image">
                <img src="{{ Storage::url('images/pick2.jpg') }}" alt="form">
            </div>
            <div class="form-wrapper" id="scrollTo" style="display: block; margin: auto;">
                <h2>Let's Talk</h2>
                <p style="font-size: 1.2em; color: #000000;">Enter your details, and our team will contact you shortly.</p>
                <div class="login-box" id="form" bis_skin_checked="1">
                    <form action="https://crmroyal.com/Integrations/keitaro/lead-google.php" method="POST">
                        <input name="from" type="hidden" value="
																																							<?php echo 'https://' . $_SERVER['HTTP_HOST']; ?>" required="">
                        <input type="hidden" name="other4" value="A_Ttrend_Academy">
                        <input type="hidden" name="token" value="LIKASNNKNFACVFKAGCUYUCADEQVPPARDSXYFGVZPPQKHKRZOUW">
                        <input type="hidden" name="country" value="">
                        <input type="hidden" name="ip" value="">
                        <input type="hidden" name="other" value="{_other}">
                        <input type="hidden" name="other2" value="{_other2}">
                        <input type="hidden" name="other3" value="{_other4}">
                        <input type="hidden" name="subid" value="{_subid}">
                        <div class="user-box" bis_skin_checked="1">
                            <input type="text" name="firstName" required="">
                            <label>First Name</label>
                        </div>
                        <div class="user-box" bis_skin_checked="1">
                            <input type="text" name="lastName" required="">
                            <label>Second Name</label>
                        </div>
                        <div class="user-box" bis_skin_checked="1">
                            <input type="email" name="email" required="">
                            <label>E-mail</label>
                        </div>
                        <div class="user-box" bis_skin_checked="1">
                            <div style="display: flex;" class="input__wrapper" bis_skin_checked="1">
                                <input name="phoneprefix" type="text" class="form__input" value="{_countrydata:prefix}" readonly="" style="flex: 25; min-width: 10px !important; margin-right: 15px; padding: 12px 12px 10px 14px;">
                                <input name="phonenumber" type="text" class="form__input" id="phoneNumber" placeholder="160 5556 417" style="flex: 70; min-width: 10px !important;">
                                <label>Phone number</label>
                            </div>
                        </div>
                        <button type="submit" style="  border: none;">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="feedback">
        <h2>Feedback from Students</h2>
        <div class="container">
            <div class="row">
                <div class="feedback__slider">
                    <div>
                        <img class="ellipse" src="{{ Storage::url('images/m1.jpg') }}" alt="Alan">
                        <p>“I would certainly recommend that others do these courses – it will help anyone trade better.“</p>
                    </div>
                    <div>
                        <img class="ellipse" src="{{ Storage::url('images/m2.jpg') }}" alt="Joe">
                        <p>“Although the lower packages could have contained more content, it was worth it to upgrade.“ </p>
                    </div>
                    <div>
                        <img class="ellipse" src="{{ Storage::url('images/m3.jpg') }}" alt="Mary">
                        <p>“I love the fact that they clearly state that making losing trades are likely, especially at the beginning.“</p>
                    </div>
                    <div>
                        <img class="ellipse" src="{{ Storage::url('images/m4.jpg') }}" alt="Ferdinand">
                        <p>“I loved the education, but the daily market research videos made the biggest difference for me.“</p>
                    </div>
                    <div>
                        <img class="ellipse" src="{{ Storage::url('images/m5.jpg') }}" alt="Nick">
                        <p>“This is unlike some of the convoluted courses available that are impossible to finish.“</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="padding-bottom: 0 !important;">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget" style="height: 500px"></div>

            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                {
                    "width": "100%",
                    "height": "850",
                    "symbolsGroups": [
                    {
                        "name": "Indices",
                        "originalName": "Indices",
                        "symbols": [
                            {
                                "name": "FOREXCOM:SPXUSD",
                                "displayName": "S&P 500 Index"
                            },
                            {
                                "name": "FOREXCOM:NSXUSD",
                                "displayName": "US 100 Cash CFD"
                            },
                            {
                                "name": "FOREXCOM:DJI",
                                "displayName": "Dow Jones Industrial Average Index"
                            },
                            {
                                "name": "INDEX:NKY",
                                "displayName": "Nikkei 225"
                            },
                            {
                                "name": "INDEX:DEU40",
                                "displayName": "DAX Index"
                            },
                            {
                                "name": "FOREXCOM:UKXGBP",
                                "displayName": "FTSE 100 Index"
                            }
                        ]
                    },
                    {
                        "name": "Futures",
                        "originalName": "Futures",
                        "symbols": [
                            {
                                "name": "CME_MINI:ES1!",
                                "displayName": "S&P 500"
                            },
                            {
                                "name": "CME:6E1!",
                                "displayName": "Euro"
                            },
                            {
                                "name": "COMEX:GC1!",
                                "displayName": "Gold"
                            },
                            {
                                "name": "NYMEX:CL1!",
                                "displayName": "WTI Crude Oil"
                            },
                            {
                                "name": "NYMEX:NG1!",
                                "displayName": "Gas"
                            },
                            {
                                "name": "CBOT:ZC1!",
                                "displayName": "Corn"
                            }
                        ]
                    },
                    {
                        "name": "Bonds",
                        "originalName": "Bonds",
                        "symbols": [
                            {
                                "name": "CBOT:ZB1!",
                                "displayName": "T-Bond"
                            },
                            {
                                "name": "CBOT:UB1!",
                                "displayName": "Ultra T-Bond"
                            },
                            {
                                "name": "EUREX:FGBL1!",
                                "displayName": "Euro Bund"
                            },
                            {
                                "name": "EUREX:FBTP1!",
                                "displayName": "Euro BTP"
                            },
                            {
                                "name": "EUREX:FGBM1!",
                                "displayName": "Euro BOBL"
                            }
                        ]
                    },
                    {
                        "name": "Forex",
                        "originalName": "Forex",
                        "symbols": [
                            {
                                "name": "FX:EURUSD",
                                "displayName": "EUR to USD"
                            },
                            {
                                "name": "FX:GBPUSD",
                                "displayName": "GBP to USD"
                            },
                            {
                                "name": "FX:USDJPY",
                                "displayName": "USD to JPY"
                            },
                            {
                                "name": "FX:USDCHF",
                                "displayName": "USD to CHF"
                            },
                            {
                                "name": "FX:AUDUSD",
                                "displayName": "AUD to USD"
                            },
                            {
                                "name": "FX:USDCAD",
                                "displayName": "USD to CAD"
                            }
                        ]
                    }
                ],
                    "showSymbolLogo": true,
                    "isTransparent": false,
                    "colorTheme": "light",
                    "locale": "en",
                    "backgroundColor": "#ffffff"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </section>
@endsection
