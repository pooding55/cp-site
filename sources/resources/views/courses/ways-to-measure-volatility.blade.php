@extends('templates.base')

@section('content')
    <section class="basic">
        <div class="container" id="app">
            <h1>How to Measure Volatility</h1>

            <div class="post-content lesson-content">


                <p><strong>Volatility</strong> is something that we can use when looking for good breakout trade opportunities.</p>
                <p>Volatility measures the overall price fluctuations over a certain time and this information can be used to detect
                    potential breakouts.</p>
                <p>There are a few indicators that can help you gauge a pair’s current volatility.</p>
                <p>
                    Using these indicators can help you tremendously when looking for breakout opportunities. </p>
                <h2>1. Moving Average</h2>
                <p><strong>Moving averages</strong> are probably the most common indicator used by forex traders and although it is
                    a simple tool, it provides invaluable data.</p>
                <!--sse-->
                <p>Simply put, moving averages measures the average movement of the market for an X amount of time, where X is
                    whatever you want it to be.</p><!--/sse-->
                <p> For example, if you applied a <strong>20 SMA</strong> to a daily chart, it would show you the average movement
                    for the past 20 days. </p>
                <p>There are other types of moving averages such as exponential and weighted, but for the purpose of this lesson, we
                    won’t go too much into detail on them.</p>
                <p>For more information on moving averages or if you just need to refresh yourself on them, check out our lesson on
                    moving averages .</p>
                <p> <img class="aligncenter lazyload" title="Use moving averages to measure price volatility." src="{{ Storage::url('images/grade13-moving-averages2.png') }}" alt="Use moving averages to measure price volatility." width="525" height="285" loading="lazy"> </p>
                <h2>2. Bollinger Bands</h2>
                <p><strong>Bollinger Bands</strong> are excellent tools for measuring volatility because that is exactly what it was
                    designed to do.</p>
                <p> Bollinger
                    Bands  are basically 2 lines that are plotted 2 standard deviations above and below a moving average for
                    an X amount of time, where X is whatever you want it to be.</p>
                <!--sse-->
                <p> So if we set it at 20, we would have a 20 SMA and two other lines. </p><!--/sse-->
                <p>One line would be plotted +2 standard deviations above it and the other line would be plotted -2 standard
                    deviations below.</p>
                <!--sse-->
                <p>When the bands c<strong>ontract</strong>, it tells us that volatility is LOW.</p><!--/sse-->
                <p>When the bands <strong>widen</strong>, it tells us that volatility is HIGH.</p>
                <p>For a more thorough explanation, check out our  Bollinger Bands&nbsp;lesson .</p>
                <!--sse-->
                <p> <img class="aligncenter lazyload" title="Use Bollinger bands to measure price volatility." src="{{ Storage::url('images/grade13-bollinger-bands-2.png') }}" alt="Use Bollinger bands to measure price volatility." width="525" height="285" loading="lazy"> </p><!--/sse-->
                <h2>3. Average True Range (ATR)</h2>
                <!--sse-->
                <p>Last on the list is the <strong>Average True Range</strong>, also known as ATR.</p><!--/sse-->
                <p>The  ATR  is an excellent tool for measuring volatility because it tells us the
                    average trading range of the market for X amount of time, where X is whatever you want it to be.</p>
                <p>Basically, ATR takes the currency pair’s <strong>range</strong>, which is the distance between the high and low
                    in the time frame under study, and then plots that measurement as a moving average</p>
                <p>So if you set ATR to “<strong>20</strong>” on a daily chart, it would show you the average trading range for the
                    <strong>past 20 days</strong>.</p>
                <p> <img class="aligncenter lazyload" title="Use ATR to measure price volatility." src="{{ Storage::url('images/grade13-average-true-range2.png') }}" alt="Use ATR to measure price volatility." width="525" height="285" loading="lazy"> </p>
                <p>When ATR is <strong>falling</strong>, it is an indication that volatility is decreasing.</p>
                <p>When ATR is <strong>rising,</strong> it is an indication that volatility has been on the rise.</p>
                <p>Just remember that that ATR is a<strong> volatility indicator</strong>, NOT a directional indicator.</p>
                <p>It’s s best used as a technical indicator to help confirm the market’s enthusiasm (or lack of) for  range
                    breakouts.</p>
                <p>To learn more about ATR, check out our Forepedia page on ATR.</p>


            </div>


        </div>
    </section>
@endsection



