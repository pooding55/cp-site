@extends('templates.base')

@section('content')
    <section class="basic">
        <div class="container" id="app">
            <h1>How Do Forex Brokers Work?</h1>

            <div class="post-content lesson-content">


                <p>Using a story, let’s learn how forex brokers work…</p>
                <p>Once upon a time, two frenemies, Batman and Spider-Man, were hanging out.</p>
                <p>They were lounging on the couch watching a movie, Justice League (Snyder’s Cut), but after a couple of hours,
                    their attention span started to drift.</p>
                <p>Even Batman began to get annoyed at watching himself as his character onscreen constantly growled in a low, deep
                    voice due to his bitterness of not having innate superpowers like the others.</p>
                <p><img loading="lazy" class="alignnone wp-image-204480 size-medium lazyload" src="{{ Storage::url('images/forex-traders-looking-at-screen.png') }}">
                </p>
                <p>All of a sudden, Spider-Man jumped to his feet and with excitement, and shouts:</p>
                <blockquote class="talk spiderman">
                    <p>Yo Bruce!</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>Call me Batman!</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>Whatever Bruce. Anyways, I have a fun idea!</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>Oooh!&nbsp; I like fun! What is it?</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>Let’s play a guessing game on whether the price of something will go up or down.</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>A guessing game? You spiders are so clever.</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>Dude I’m not a spider. I just acquired spider-related abilities after a bite from a radioactive spider.
                        There’s a difference. Just because I wear a spandex suit with a spider symbol doesn’t mean I’m actually a
                        spider.</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>Sure, whatever. My Batsuit is still better. It accentuates my nipples, and my absolutely chiseled set of abs.
                        Anyways, I’m interested. Not only am I wealthy, but I’m brilliant. My conjectures always turn out correct.
                        Please elaborate on the details of this game.</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>The game works like this: Try to guess if the GBP/USD exchange rate will go up or down. Let’s say the current
                        exchange rate is 1.4000. Do you think it will go up or down?</p>
                </blockquote>
                <p>Batman doesn’t trust spiders. He unlocks his Batphone and looks up the current GBP/USD exchange rate on Google
                    and confirms that it is 1.4000. He wants to make sure Spider-Man isn’t just pulling numbers out of his spider
                    butt.</p>
                <blockquote class="talk batman">
                    <p>I think it will go up.</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>Oh really? Let’s make a bet then.</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>What kind of bet? How will it work?</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>If GBP/USD goes up, I’ll pay YOU the difference between its price right now and whatever the price is when
                        you decide to close the bet. But if GBP/USD goes down, you’ll pay ME the difference. Payouts will be in
                        cash. Also, you can close the bet whenever you want. What do you say?</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>Let’s do it! I’ll take that bet.</p>
                </blockquote>
                <p>Batman is now long 1 unit of GBP/USD at 1.4000. This means that a 1 pip move equals $0.0001.</p>
                <p>One hour later, Spider-Man mentions to Batman that GBP/USD has risen to <strong>1.4100</strong>. It has gone up
                    <strong>100 pips</strong>.</p>
                <blockquote class="talk spiderman">
                    <p>Yo Dark Knight, the exchange rate has gone up 0.01 or 100 pips.</p>
                </blockquote>
                <!--sse-->
                <p>Batman checks his Batphone and lo and behold, GBP/USD has indeed risen to 1.4100.</p><!--/sse-->
                <blockquote class="talk batman">
                    <p>Not sure how long this price will hold up. I’m out. Let’s close the bet.</p>
                </blockquote>
                <p>At the start of the bet, GBP/USD was at $1.4000. And at the end of the bet, GBP/USD was at $1.41000. So the
                    difference is $0.01 or 1 cent.</p>
                <blockquote class="talk spiderman">
                    <p>Gosh darnit. My “spidey-sense” doesn’t seem to work on the forex market. Looks like I lost. Your payout is
                        $0.01. Don’t spend it all at once.</p>
                </blockquote>
                <p>Spider-Man tosses Batman a penny.</p>
                <p>Batman gladly accepts the money and after having some greedy thoughts, says:</p>
                <blockquote class="talk batman">
                    <p>All I made was $0.01 profit. That type of tiny profit might be good enough for a spider, but not for a bat.
                        If I had only made a bigger bet, I could’ve made a lot more money and become even wealthier.</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>Okay, Mr. Spoiled Bratman, let’s make the same bet. But this time, instead of betting 1 unit worth of
                        GBP/USD, let’s bet 10,000 units of GBP/USD!</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>But I’m not carrying £10,000 worth of dollars! My Batsuit is too tight. It’s like wearing black skinny jeans
                        that cover my entire sexy body.</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>Oh. And here I thought you were rich. How much money do you have on you?</p>
                </blockquote>
                <p>Batman checks his Batwallet.</p>
                <blockquote class="talk batman">
                    <p>I have $20. Excluding the penny that I just won from you.</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>No problem Batsy. How about we just pretend that I’ve loaned you the entire amount. This way, for every 1-pip
                        move, you’ll gain $1. This means if GBP/USD goes up 100 pips again, instead of making $0.01, you’ll make
                        $100!</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>I don’t trust dudes who wear tight black suits with capes so I’ll use your $20 as collateral to cover the
                        initial risk if the price falls and moves against you.</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>Think of it as a security deposit. If you win the bet, you’ll get it back.</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>If GBP/USD starts to fall, rather than pay up, you might decide to jump in your Batmobile and leave. I don’t
                        want to end up empty-handed so holding your $20 as collateral will protect me. If you try to leave without
                        paying, your $20 will be forfeited to me.</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>Also, if the price falls more than 20 pips, you don’t have any more cash to cover any losses beyond that, so
                        I’ll automatically close the bet and keep your $20.</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>As long as the price doesn’t fall below 20 pips, which is the value of your collateral ($20), the bet remains
                        open until you tell me to close it.</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>Okay. Sounds good. But what about you? Are you sure you can pay up this time if I win again?</p>
                </blockquote>
                <p>Spider-Man flashes an evil grin.</p>
                <blockquote class="talk spiderman">
                    <p>Of course. I’m an Avenger. You can trust me.</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>Fine.</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>Fantastic. Let’s begin!</p>
                </blockquote>
                <p>Batman checks his Batphone and verifies that the current GBP/USD exchange rate is 1.41000.</p>
                <blockquote class="talk batman">
                    <p>I’m betting that it’ll go up from 1.4100, its current price. Here’s my $20 to open the bet.</p>
                </blockquote>
                <p>Spider-Man suddenly senses GBP/USD will continue to rise so he tries to stall by pretending not to hear Batman.
                </p>
                <blockquote class="talk batman">
                    <p>Hello? Did you hear me? Unlike snakes, spiders aren’t deaf. Here’s my $20 to open the bet.</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>What was that? So you do want to open a bet? My price for GBP/USD has changed. It’s at 1.4150 now. You still
                        want to make the bet?</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>Dude, what the hell. I thought you said GBP/USD was at 1.4100. Now you change the price all of a sudden?</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>That’s my new price. So are you in? Better hurry, before I change my price again.</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>Fine. I’m in. I bet it’ll go up from 1.4150.</p>
                </blockquote>
                <p>Batman is now long 10,000 units of GBP/USD at 1.4150. A 1 pip move equals $1.</p>
                <p>A couple of hours later, Spider-Man announces that GBP/USD is now trading at 1.4350.</p>
                <p>GBP/USD has gone up by 200 pips.</p>
                <blockquote class="talk batman">
                    <p>I’d like to close the bet now.</p>
                </blockquote>
                <p>At the start of the bet, GBP/USD was at $1.4150. And at the end of the bet, GBP/USD was at $1.4350. So the
                    difference is $0.02 or 200 pips.</p>
                <p>But since the bet size is 10,000 units, Spider-Man’s payout to Batman is<strong> $200</strong> ($0.02 x 10,000).
                </p>
                <blockquote class="talk spiderman">
                    <p>Fothermucker! Looks like you won the bet again! It’s gone up by 200 pips, which means you won $200.</p>
                </blockquote>
                <p>With the imaginary “10,000 units” that Spider-Man conjured up, Batman has made $200.</p>
                <!--sse-->
                <p>Spider-Man pays him $200 out of his own pocket and also returns the original $20 (that was used as collateral).
                </p><!--/sse-->
                <p>With just $20, Batman won $200. A 10x return!</p>
                <blockquote class="talk batman">
                    <p>Let’s play again. I think GBP/USD will continue to….</p>
                </blockquote>
                <!--sse-->
                <p><img loading="lazy" class="alignnone size-full wp-image-204109 lazyload" src="{{ Storage::url('images/bat-signal.png') }}">
                </p><!--/sse-->
                <blockquote class="talk batman">
                    <p>Damnit. The Bat-Signal! BRB!</p>
                </blockquote>
                <!--sse-->
                <p>Twenty minutes later…</p><!--/sse-->
                <blockquote class="talk batman">
                    <p>Let’s play again. I think GBP/USD will continue to go up. But I want to increase my bet size to 100,000
                        units.</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>Oh we got a whale over here! Looks like someone wants to trade bigger. You sure you don’t want me to call you
                        Whaleman? Batwhale?</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>😑</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>Okay, I can increase my imaginary loan to you.</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>My price for GBP/USD is 1.4300. But this time, since your bet size is bigger, I’ll need $200 from you as
                        collateral.</p>
                </blockquote>
                <p>Batman hands Spider-Man the $200 he just won.</p>
                <p>Batman is now long 100,000 units of GBP/USD at 1.43000. This means that a 1 pip move now equals $10.</p>
                <!--sse-->
                <p>A couple of minutes later, GBP/USD has fallen to 1.4295, a drop of 5 pips.</p><!--/sse-->
                <blockquote class="talk spiderman">
                    <p>GBP/USD is now down 5 pips. That means you have an unrealized loss of $50 (5 pips x $10).</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>If you want, I can close out the bet now and take $50 from your collateral as payment and return the
                        remaining $150 to you.</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>Hell no! Don’t be a pest! I still believe GBP/USD will go up. The bet stays open!</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>Okaaay.</p>
                </blockquote>
                <p>Five minutes later, GBP/USD plummets.</p>
                <blockquote class="talk spiderman">
                    <p>The price of GBP/USD has quickly dropped to 1.4275. You’re now down 25 pips. This means you have an
                        unrealized loss of $250. Since your collateral ($200) isn’t enough to cover this loss, I’ve closed the bet
                        and your collateral is now mine. Thanks for the $200!</p>
                </blockquote>
                <!--sse-->
                <p>In this simple story, there’s a lot to unpack.</p><!--/sse-->
                <p>For example, notice how:</p>
                <ul style="font-size: 1em; color: #000;">
                    <li style="font-size: 1em; line-height: 1.2em;">Spider-Man literally creates a “guessing game” in his mind where you could make bets on the direction of the
                        price of <em>anything</em> and make money if your prediction is correct.</li>
                    <li style="font-size: 1em; line-height: 1.2em;">Spider-Man can make up any price he wants.</li>
                    <li style="font-size: 1em; line-height: 1.2em;">Spider-Man can move his price at any time even when Batman is about to open his bet.</li>
                    <li style="font-size: 1em; line-height: 1.2em;">Spider-Man can make up any bet size he wants regardless of whether Batman has enough money.</li>
                    <li style="font-size: 1em; line-height: 1.2em;">Spider-Man is always taking the other side of the bet. And nobody else!</li>
                </ul>
                <p>This story provides a lot of hints on how trading with a retail forex broker works.</p>
                <p>In case it wasn’t obvious, <strong>Batman is you, the trader</strong>. While <strong>Spider-Man is the forex
                        broker</strong>.</p>
                <p>Notice how Spider-Man or Batman didn’t actually own any British pounds. No actual quids were ever exchanged. They
                    were simply making dollar-denominated bets on the price fluctuations of GBP/USD.</p>
                <p>With retail forex trading, you don’t take ownership of the currencies.</p>
                <!--sse-->
                <p>You’re basically making a bet with your forex broker on whether the price of a currency pair will rise or fall.
                </p><!--/sse-->
                <p>The payout is the difference between the price when the bet was made and when the bet was closed.</p>
                <p>Either <strong>you or the broker</strong> will have to pay the difference depending on who ends up wrong.</p>
                <p>The risk here for you is that your forex broker defaults or doesn’t have the money to pay for any profits that
                    you’ve made.</p>
                <!--sse-->
                <p>Let’s return to the story and see how this could happen.</p><!--/sse-->
                <p>The next day, Batman and Spider-Man meet up for breakfast.</p>
                <p>After finishing their avocado toast topped with chopped almonds and a drizzle of smoked olive oil, Batman stares
                    deeply into Spider-Man’s eyes and says:</p>
                <blockquote class="talk batman">
                    <p>Let’s play that guessing game again. I think GBP/USD will go up today. My bet size will be 100,000 units.</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>Okay. My GBP/USD’s price is 1.4300. I’ll need $200 from you again as collateral.</p>
                </blockquote>
                <p>Batman hands Spider-Man $200.</p>
                <p>If you didn’t notice, Spider-Man magically created a 100,000 unit position size and required just $200 of
                    “margin”. This is an example of leveraged trading.</p>
                <p>One hour later, Batman asks for the current price of GBP/USD.</p>
                <blockquote class="talk spiderman">
                    <p>GBP/USD is now trading at 1.4600.</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>Booyah! GBP/USD has gone up 300 pips! At $10/pip, I’ve made $3,000 in profit! I’m gonna buy me a new Batboat.
                    </p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>Uh, congrats bro, but we have a problem.</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>What?</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>I can’t pay up. I don’t have the money.</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>What do you mean you don’t have the money?! But you took the bet!</p>
                </blockquote>
                <blockquote class="talk spiderman">
                    <p>I did. But I didn’t think I’d lose. The only money I have is the $200 you gave me as collateral. I can give
                        you back that.</p>
                </blockquote>
                <blockquote class="talk batman">
                    <p>WTF?! What about my $3,000 payout?!</p>
                </blockquote>
                <!--sse-->
                <p>Spider-Man looks up and points to the sky….</p><!--/sse-->
                <blockquote class="talk spiderman">
                    <p>Look at that! It’s the Bat-Signal!</p>
                </blockquote>
                <p>Batman looks up and sees nothing. When he looks back down, he discovers that Spider-Man is gone!</p>
                <p>In this scenario, the “house went bust”.</p>
                <p>Spider-Man took the opposite of Batman’s bet but didn’t have the capital to fulfill his obligation to Batman.</p>
                <p>This is known as “<strong>counterparty credit risk</strong>” (Can the other party of a transaction pay?).</p>
                <p>When you open a trade with your forex broker, you and the broker become <strong>counterparties</strong> of the
                    trade.</p>
                <!--sse-->
                <p>Just like Spider-Man, the broker takes the opposite side of your bet.</p><!--/sse-->
                <p>Are you sure it’s able to fulfill its obligation to you?</p>
                <p>While your broker makes sure that you can pay if it wins (and you lose), it’s also important that <strong>you
                        make sure that your broker can pay up if you win (and it loses)</strong>!</p>
                <p>Spider-Man also vanished without returning the $200 that was used as collateral so Batman also ended up losing
                    all of the funds that he gave to Ant-Man.</p>
                <p>Spider-Man ran (jumped?) away with Batman’s money never to be seen again until his next movie.</p>
                <p>Legitimate forex brokers would prefer to stay in business, rather than go bust or disappear with your
                    funds.&nbsp;Unlike shady Spider-Man, they do have ways to manage this risk.</p>
                <!--sse-->
                <p>In a later lesson, we’re going to look under the hood and explain to you what actually happens when a forex
                    broker executes your orders. You’ll learn how forex brokers manage their risk so they don’t go bust.</p>
                <!--/sse-->
                <p>But this is just one (of several) things to carefully consider when choosing your forex broker.</p>
                <p>In order to properly evaluate retail forex brokers, it’s important to know how a typical retail forex broker
                    operates so here’s what we’ll cover:</p>
                <h3>Who are you trading with?</h3>
                <p>Unlike Batman in the story above, you’re not going to know who you are trading with. And even if you did, that
                    doesn’t mean you should blindly trust them. Even Batman was duped by a fellow superhero, who was supposedly a
                    “good guy”.</p>
                <p>Your forex broker is a faceless corporate entity that requires you to send it money so you can open trades with
                    it.</p>
                <p>Are you sure they are who they say they are? Is it a legitimate company that really provides forex trading
                    services? Or is it a fake forex broker? How do you know the company won’t just take your money and disappear?
                </p>
                <p>Who are you really trading with? Is it a reputable broker?</p>
                <h3>What are you actually trading?</h3>
                <p>Notice how Spider-Man or Batman didn’t actually own any British pounds. No actual pounds were ever exchanged.
                    They were simply making dollar-denominated bets on the <strong>price fluctuations</strong> of GBP/USD.</p>
                <p>So if you’re not actually buying or selling, <em>what</em> are you trading?</p>
                <h3>Where are you actually trading?</h3>
                <p>Notice how Spider-Man created a “market” (to bet on the price direction of GBP/USD) for Batman with just his
                    imagination?</p>
                <p>Did you also notice how there were only two parties involved?</p>
                <p>Whenever Batman made a bet, Spider-Man did not go out into the “market” and search for another person to take the
                    opposite side of the bet.</p>
                <p>Spider-Man simply took the opposite side of ALL of Batman’s bets.</p>
                <p>As long as both agreed on the terms, real bets were made and were expected to be honored. Nobody else was
                    involved.</p>
                <!--sse-->
                <p>So if you’re not trading in the “market”, <em>where</em> are you trading?</p><!--/sse-->
                <h3>How do forex brokers manage their risk?</h3>
                <p>During the last bet made between Spider-Man and Batman, notice how the price of GBP/USD moved unfavorably against
                    Spider-Man and he ended up not having the money to pay.</p>
                <!--sse-->
                <p>Because Spider-Man is the sole person taking the opposite side of Batman’s bet, Batman should’ve made sure that
                    Spider-Man would be good for the money.</p><!--/sse-->
                <p>The same concern should be made with retail forex brokers since they operate in a similar fashion.</p>
                <!--sse-->
                <p>So if your forex broker is always taking the opposite side of your trades, how does it avoid the risk of going
                    bust? And taking your money down with it?</p><!--/sse-->
                <h3>Are the prices that your forex broker quotes you fair?</h3>
                <p>Notice how Spider-Man can quote any price he wants?</p>
                <p>Fortunately, Batman was smart enough to use his Batphone and reference a third-party data source (Google) to
                    verify if&nbsp;the price that Spider-Man was using was accurate.</p>
                <p>But what if he didn’t? Once the bet was made, Spider-Man could continue to make up prices in his favor. For
                    example, he could say that GBP/USD has fallen 500 pips (even though it hasn’t), and Batman would be forced to
                    bet at a loss.</p>
                <p>So if your forex broker is able to quote you any price it wants, how do you know that the prices you see on the
                    trading platform are fair? Where do the <em>prices</em> come from?</p>
                <h3>What is the quality of your forex broker’s order execution?</h3>
                <p>Notice how Batman wanted to open a bet when the starting price of GBP/USD was at 1.4100, but Spider-Man declined
                    and changed the price to 1.4150 instead?</p>
                <p>This is known as <strong>slippage</strong>.</p>
                <p>Slippage is the difference between the expected price of a trade and the price at which the trade is actually
                    executed.</p>
                <p>Slippage can occur for a number of different reasons and can work for and against a trader.</p>
                <p>In Batman’s case, he experienced <strong>negative slippage</strong>, which is when Spider-Man gave him a worse
                    price than expected. This results in a smaller profit or a larger loss.</p>
                <p>Being quoted a specific price, even if it’s accurate and fair, means NOTHING if your order can’t execute at said
                    price.</p>
                <!--sse-->
                <p>How can you determine the quality of its order execution? Where orders will be executed at your requested prices?
                </p><!--/sse-->
                <p>We will cover these topics in detail (and more) in the following lessons.</p>
                <blockquote class="talk ironman">
                    <p>Hello readers! Do not end up like Batman. Read all the Broker 101 lessons.&nbsp;👍</p>
                </blockquote>

            </div>


        </div>
    </section>
@endsection
