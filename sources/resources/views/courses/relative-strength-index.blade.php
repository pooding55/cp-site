@extends('templates.base')

@section('content')
    <section class="basic">
        <div class="container" id="app">
            <h1>How to Use RSI (Relative Strength Index)</h1>

            <div class="post-content lesson-content">


                <p><strong>Relative Strength Index</strong>, or RSI, is a popular indicator developed by a technical analyst named
                    <a href="https://en.wikipedia.org/wiki/J._Welles_Wilder_Jr." target="_blank" rel="noopener noopener">J. Welles
                        Wilder</a>, that helps traders evaluate the strength of the current market.</p>
                <p>RSI is similar to  Stochastic  in that it identifies overbought and oversold conditions in the
                    market.</p>
                <p>
                    It is also scaled from <strong>0 to 100</strong>. </p>
                <p>Typically, readings <strong>of 30 or lower</strong> indicate oversold market conditions and an increase
                    in the <em>possibility of price strengthening </em>(going up).</p>
                <p>Some traders interpret that an oversold currency pair is an indication that the falling trend is likely to
                    reverse, which means it’s an opportunity to <strong>buy</strong>.</p>
                <!--sse-->
                <p>Readings  <strong>of 70 or higher </strong>  indicate overbought conditions and an increase in the <em>possibility of
                        price weakening</em> (going down).</p><!--/sse-->
                <p>Some traders interpret that an overbought currency pair is an indication that the rising trend is likely to
                    reverse, which means it’s an opportunity to <strong>sell</strong>.</p>
                <p><img loading="lazy" class="aligncenter lazyload" style="border: 1px solid #000000;" title="RSI used on Charts" src="{{ Storage::url('images/grade5-RSI-overbought-oversold.png') }}" alt="RSI used on Charts" width="268" height="347"></p>
                <p>In addition to the overbought and oversold indicators mentioned above, traders who use the  Relative Strength Index (RSI)  indicator also look for <strong>centerline
                        crossovers. </strong></p>
                <p>A movement from <strong>below the centerline (50) to above</strong> indicates a<em> rising trend.</em></p>
                <!--sse-->
                <p>A <strong>rising centerline crossover</strong> occurs when the RSI value crosses ABOVE the 50 line on the scale,
                    moving towards the 70 line. This indicates the market trend is <em>increasing in </em>strength, and is seen as a
                    <strong>bullish</strong> signal until the RSI approaches the 70 line.</p><!--/sse-->
                <p>A movement from <strong>above the centerline (50) to below</strong> indicates a <em>falling trend</em>.</p>
                <p>A <strong>falling centerline crossover</strong> occurs when the RSI value crosses BELOW the 50 line on the scale,
                    moving towards the 30 line. This indicates the market trend is <em>weakening in </em>strength, and is seen
                    as a <strong>bearish</strong> signal until the RSI approaches the 30 line.</p>
                <h2>How to Trade Using RSI</h2>
                <p> RSI  can be used just like the Stochastic indicator.</p>
                <p>We can use it to pick potential tops and bottoms depending on whether the market is overbought or oversold.</p>
                <!--sse-->
                <p>Below is a 4-hour chart of EUR/USD.</p><!--/sse-->
                <p> <img loading="lazy" class="aligncenter lazyload" src="{{ Storage::url('images/grade5-rsi-oversold.png') }}" alt="Using RSI to pick tops and bottoms=" width="525" height="298"> </p>
                <!--sse-->
                <p>EUR/USD had been dropping the week, falling about 400 pips over the course of two weeks.</p><!--/sse-->
                <p>
                    On June 7, it was already trading below the 1.2000 handle. </p>
                <p>However, RSI dropped below 30, signaling that there might be no more sellers left in the market and that the move
                    could be over.</p>
                <p>Price then reversed and headed back up over the next couple of weeks.</p>
                <h2>Determining the Trend using RSI</h2>
                <p>
                    RSI is a very popular tool because it can also be used to confirm trend formations. </p>
                <p>If you think a trend is forming, take a quick look at the RSI and look at whether it is above or below 50.</p>
                <p>If you are looking at a possible UPTREND, then make sure the RSI is <strong>above 50</strong>.</p>
                <p>If you are looking at a possible DOWNTREND, then make sure the RSI is <strong>below 50</strong>.</p>
                <p><img loading="lazy" class="aligncenter lazyload" style="border: 1px solid #000000;" title="RSI goes below 50 on a downtrend" src="{{ Storage::url('images/grade5-RSI-cross-downtrend.png') }}" alt="RSI goes below 50 on a downtrend" width="268" height="370"></p>
                <!--sse-->
                <p>At the beginning of the chart above, we can see that a possible downtrend was forming.</p><!--/sse-->
                <p>To avoid fakeouts, we can wait for RSI to cross below 50 to confirm our trend.</p>
                <p>Sure enough, as RSI passes below 50, it is a good confirmation that a downtrend has actually formed.</p>

            </div>


        </div>
    </section>
@endsection



