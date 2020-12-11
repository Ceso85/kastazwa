<?php
    include 'cachetanection.php';
    include 'indexcomments.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="cachetajoie.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <meta name="description" content="Room for Joy">
        <title>Cache_Ta_Joie_Room_for_Joy</title>
    </head>

    <!--- first choice of 5 living spaces --->

    <body>
        <script type="text/javascript" src="cachetajoie.js"></script>

        <header>
            <a href="#backhome"><img class="logo" src="images/Out of Shape ohne Titel.jpg" 
                width="80" height="auto"></a>
                
                <nav class="nave">
                    <!--- <a href="#waiting"><span>WAITING_ROOM</span></a> --->
                    <a href="#living"><span>LIVING_ROOM</span></a>
                    <a href="#screaming"><span>SCREAMING_ROOM</span></a>
                    <a href="#guest"><span>GUEST_ROOM</span></a>

                    <div class="storagebut">
                    <a href="#store"><span class="storage">STORAGE_ROOM</span></a>

                        <div class="storagebox">
                        <a href="#tracklisa"><span>IT_S_ALL_A_BIG_NOTHING_(2016)</span></a></br>
                            <a href="#tracklisb"><span>A_SHAPELESS_FIGURE_(2018)</span></a>
                        </div>
                    </div>
                </nav>

                
        </header>
        
    <!--- topic: home/waiting -->

            <a id="backhome"></a>
                <div class="home">

                    <audio autoplay id="Preview"><source src="images/Kastazwa- Out of Shape Preview.mp3" type="audio/mpeg"></audio>
                        <video muted max-width="100%" height="800px" autoplay loop src="images/Thessaloniki Full Moon.mp4" type="video/mp4"></video>

                            <script> var vid = document.getElementById("Preview");
                                vid.volume = 0.3;
                            </script>

                            <div class="homepic"></div>

                                <div class="waitingtxt">

                                    <h1>OUT OF SHAPE</h1>
                                        <h2>ka∫taʒɯa</h2>
                                            <h3>The New Ep</h3>
                                                <h3>Available Now</h3>

                            </div>
                </div>

    <!--- topic: living --->

        <div class="living">

            <!--- <a href="#store">
                <div class="lefta"></div></a> --->

            <a id="living"><div class="youvideo"><iframe width="800" height="408"
                src="https://www.youtube.com/embed/MKRwuOMUnnA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div></a>

                <div class="livingcont"></div>

                    <a target="_blank" rel="noopener noreferrer" href="https://music.amazon.de/artists/B07B262MZ3/kastazwa"><div class="amazon dsp"><img src="images/music-service_amazon.png" style="width:80%"></div></a>
                    <a target="_blank" rel="noopener noreferrer" href="https://itunes.apple.com/us/artist/kastazwa/1341925360"><div class="apple dsp"><img src="images/music-service_apple.png" style="width:90%"></div></a>
                    <a target="_blank" rel="noopener noreferrer" href="https://kastazwa.bandcamp.com/album/a-shapeless-figure"><div class="bandcamp dsp"><img src="images/music-service_bandcamp.png" style="width:90%"></div></a>
                    <a target="_blank" rel="noopener noreferrer" href="https://music.youtube.com/channel/UCSXQQDJUC0pUz1dEXD3AdNQ"><div class="youtubemusic dsp"><img src="images/music-service_youtubemusic.png" style="width:90%"></div></a>
                    <a target="_blank" rel="noopener noreferrer" href="https://soundcloud.com/kastazwa"><div class="soundcloud dsp"><img src="images/music-service_soundcloud.png" style="width:90%"></div></a>
                    <a target="_blank" rel="noopener noreferrer" href="https://open.spotify.com/artist/5IWttUmh1sIGt2BxqMEy9h"><div class="spotify dsp"><img src="images/music-service_spotify.png" style="width:130%"></div></a>

                <h4>JUST_SIT_AND_RELAX.</h4>

            <a href="#screaming"><div class="righta"></div></a>

        </div>

        <!--- topic: screaming --->

        <div class="screaming">

            <a href="#living">
                <div class="lefta"></div></a>

            <a id="screaming"></a>
                <?php
                    echo
                        "<form action='".setComments($conn)."' method='POST'>
                            <input type='hidden' name='cid' value='Anonymous'>
                            <textarea id='tx1' placeholder='Give me the words that tell me nothing.' name='word' rows='5' cols='90' maxlength='100'></textarea>
                            <textarea id='tx2' placeholder='Name' name='name' rows='3' cols='25'></textarea>
                            <textarea id='tx3' placeholder='Mail_Address' name='address' rows='3' cols='61'></textarea>
                            <button class='scream' type='submit' name='commentSubmit'>Scream it out!</button>
                        </form>";
                        getComments($conn);
                ?>

            <div class="comments"></div>
    
            <h4>SHOUT, SHOUT, LET_IT_ALL_OUT.</h4>

            <a href="#guest">
                <div class="righta"></div></a>

        </div>

        <!--- topic: guest --->

        <div class="guest">

            <a href="#screaming">
                <div class="lefta"></div></a>

                <a id="guest">
                <div class="pic1" data-aos="fade-down" data-aos-delay="1000" data-aos-duration="2000"><img src="images/Alte Rote Löwe.jpg" width="90%"></div>
                <div class="pic2" data-aos="fade-left"><img src="images/Alte Rote Löwe III.jpg" width="50%"></div> 
                <div class="pic3" data-aos="fade-right"><img src="images/Recording Leo Haus II.jpg" width="80%"></div>
                </a>

                    <h4>WE_COULD_BE_GREAT_ROOMMATES.</h4>

                <a href="#store">
                        <div class="righta"></div></a>

        </div>

         <!--- topic: storage room --->

        <div class="store" id="tracklisa">

            <a href="#guest">
                <div class="lefta"></div></a>

        <!--- It's all a big Nothing tracklist/lyrics --->

                <a id="store"><div class="tracklisa"></a>
                    <h3>IT'S ALL A BIG NOTHING (2016)</h3></br>

                    <ul>
                        <li class="walk">01. Walking on a Wire</li>

                        <div class="walkbox">
                            The moment when they told you are special</br>
                            is that when you realise you are not</br>
                            it works the same for everyone</br>
                            but I was there</br> 
                            to make you feel</br>
                            the one.</br>

                            I'll die like a rockstar</br>
                            because I don’t know</br> 
                            other ways to die.</br>

                            If I keep turning the page</br>
                            I will finish the book</br> 
                            before you come.</br>

                            We are walking on a wire</br>
                            that is about to bend</br> 
                            we know that somehow/sometime</br>
                            it was gonna come</br> 
                            the word</br>
                            the end.</br>

                            I'll die like a rockstar</br> 
                            because I don’t know</br> 
                            other ways to die.</br>

                            I'll die like a rockstar</br> 
                            because I don’t know</br> 
                            other ways to die.</br>

                            We'll die like the rockstars</br> 
                            because we don’t know</br> 
                            other ways to die.</br>
                        </div>


                        <li class="night">02. A Midsummer Night</br> (Helena came in Rhymes)</li>

                        <div class="nightbox">
                            We shared our women</br>				
                            we shared our shores</br>				
                            there was no other way</br>			
                            to reproduce.</br>				

                            Time had no shape</br>			
                            no weight, no mass</br>				
                            sometimes I talk to the clothes you dress.</br>		

                            I talk to the chair</br>				
                            you used to sit-on</br>				
                            because I was never able</br>			
                            to win your soul.</br>				

                            Another fruitless winter</br>
                            the flow of time</br>
                            the worst was gonna happen</br> 
                            we did not know why.</br>

                            Helena came in rhymes</br>
                            Helena came on time</br> 
                            Helena came alone</br>
                            I owe you a child.</br>

                            Before she came we had to pretend</br>
                            before the summer was going to an end</br>
                            pretend to find a way out of the wood</br>
                            pretend to reach Athens as soon as we could.</br>

                            It is a privilege</br> 
                            not to see you more</br>
                            I will no longer bring</br> 
                            the moonlight to your floor.</br>

                            Now I can put a lion</br> 
                            among your delicate angsts</br>
                            now I can set a scandal</br> 
                            on your sex.</br>

                            But then she came</br>
                            and we could not pretend</br>
                            suddenly the summer went to an end</br>
                            pretend to find a way out of the wood</br>
                            pretend to reach Athens as soon as we…</br>

                            And when she came</br> 
                            I could not resist</br>
                            I could not find a way</br>
                            through all the mist.</br>


                            And when she came</br> 
                            I could not resist</br>
                            I could not find a way</br>
                            through all the mist.</br>
                        </div>


                        <li class="big">03. It's all a Big Nothing</li>

                        <div class="bigbox">
                            Is it the way is gonna end?</br>
                            Music was another story</br>
                            when you began</br>
                            cause music was your life</br>
                            cause music was your soul</br>
                            cause music was your charm.</br>

                            You never say "never"</br>
                            but you have already</br>
                            said "never" twice.</br>

                            It's all a big nothing dude</br>
                            we have been told</br>
                            it's all a big nothing boy</br>
                            and now we begin to grow.</br>

                            Because with your last song</br> 
                            you have lost your smile</br>
                            because with your last song</br>
                            you have lost your touch</br>
                            because with your last song</br>
                            you have lost your charm.</br>

                            It's all a big nothing dude</br>
                            we have been told</br>
                            it's all a big nothing boy</br>
                            and now we begin to grow</br>
                            and now we begin to grow</br>
                            it's time we begin to grow.</br>
                        </div>


                        <li class="country">04. No Country for All Lovers</li>

                        <div class="countrybox">
                            They keep digging in hope to find</br>
                            despite the water despite</br>
                            to reach the real state of things</br>
                            and find out there is no means</br>
                            to an end</br>
                            to an end.</br>

                            And all the ideas they have got in their heads</br>
                            despite the love and the death</br>
                            a place where they will rest in peace</br>
                            because all good things come</br> 
                            to an end</br>
                            to an end</br>
                            to an end</br>
                            to an end.</br>

                            They believed in Santa</br>
                            they believed in God</br>
                            they used to fight</br> 
                            for human rights.</br>

                            "Don't say anything if there is</br> 
                            anything to say</br>
                            let me enjoy</br>
                            the end</br> 
                            the end</br> 
                            the end”.</br>
                        </div>


                        <li class="weather">05. Talk about the Weather</li>

                        <div class="weatherbox">
                            I want to see you every goddamn morning waking up</br>
                            I want to hear the whistleblower from my coffee cup</br>
                            I want to turn my back and see you on the other side</br>
                            I want to make sure you have nothing to fear</br>
                            and nothing to hide.</br>

                            We spent our time talking about the unemployment rate</br>
                            about the reason why behind every closed door</br>
                            there is an open gate.</br>

                            I want to talk about weather</br>
                            I want to talk about...</br>

                            I want to know the reason why</br>
                            it keeps raining heavily</br>
                            while we are signing on a bench</br>
                            our contract to eternity.</br>

                            I want to talk about the weather</br>
                            the weather</br>
                            the weather</br>
                            about the weather</br>
                            I want to talk about...</br>

                            I would tie you up</br>
                            I would lock you inside the house</br> 
                            I would throw the keys away</br>
                            So I know you can't go out.</br>
                        </div>

                    </ul>

            </div>
        </div>

        <!--- A Shapeless Figure tracklist/lyrics --->
            
        <div class="store" id="tracklisb">

                <div class="tracklisb">
                    <h3>A SHAPELESS FIGURE (2018)</h3></br>

                    <ul>
                        <li class="dream">01. The Dreamcatcher</li>
                        
                        <div class="dreambox">
                                It is too late to love me now</br>
                                sometimes I tend to rearrange</br>
                                all the furnitures</br>
                                mostly because I need</br>
                                a reset</br>
                                button.</br>

                                The city view from the top</br>
                                looks like a huge cemetery</br>
                                Nodoby has a real name</br>
                                around here.</br>

                                I will draw</br>
                                a picture in black and white</br>
                                of you</br>
                                trying to catch the life</br>
                                you have never had.</br>

                                The dreamcatcher</br>
                                swings</br>
                                on top of beds</br>
                                of people</br>
                                who never had</br>
                                Love.</br>
                                </div>
                                

                        <li class="still">02. Still Here</li>

                        <div class="stillbox">
                            Hello, it's me</br>
                            the park where you grew up</br>
                            The bench you carved</br>
                            the old couple</br>
                            passed away</br>
                            might have been some years ago 
                            or the other day.</br>

                            Hello, it's me</br>
                            the sky you never left me by</br>
                            I am grey, cause I</br>
                            carry the weight of the years.</br>

                            Hello, it's me</br>
                            the road you run</br>
                            you treat me like a whore</br>
                            but I'm still here</br>
                            And I get bigger</br>
                            if you do not</br>
                            do not turn back.</br>

                            Hello, we are</br>
                            the goddamn places</br>
                            where you use to work</br>
                            our walls smells like</br>
                            all the hours that you threw away</br>
                            might have been some years ago 
                            or today.</br>
                        </div>
                        

                        <li class="spring">03. Springtime Destroys (A White Sun Hat)</li>

                        <div class="springbox">
                            What I will be</br> 
                            You tell me</br>
                            Since I can’t choose</br>
                            Since I can’t be.</br>

                            I could not care</br>
                            so less</br>
                            you are charming when</br>
                            you hide</br>
                            from the sun</br>
                            that threads you like</br> 
                            a new syndrome.</br>

                            Leaves a tattoo</br>
                            that you do not want</br> 
                            a permanent mark</br>
                            an innocent scar</br>
                            a sudden shock.</br>


                            What I will be</br>
                            I tell you</br> 
                            Since I can chew</br>
                            Since I can be.</br>

                            This life is hard</br>
                            for everyone</br>
                            I have never had</br>
                            so much fun.</br>
                        </div>


                        <li class="roulette">04. Roulette</li>

                        <div class="roulettebox">
                            I am filling my room of corpses</br>
                            in a slow friday afternoon</br>
                            listen to say they say</br>
                            thinking about what they have done</br>
                            that is what I still have to do</br>
                            while the sun is on the third floor.</br>
                            
                            Normally here borns the first cold</br>
                            and the seasons start to die</br>
                            sometimes it is good it feels different</br>
                            otherwise just find a better place to play.</br>
                            
                            Silently silently or noisily</br>
                            A succession of black and red</br>
                            I need a number to start</br>
                            scared of misundertand myself</br>
                            Read and repeat it slowly</br>
                            cause it is the last one for a longtime</br>
                            In the meanwhile I just keep learning</br>
                            Try not to make the same mistake twice.</br>
                            
                            Show me show me what it is mine</br>
                            before lose you I will get satisfied</br>
                            I have to destroy our time</br>
                            if I want to say goodbye</br>
                            or if I want to save the night.</br>
                        </div>


                        <li class="ocean">05. Ocean</li>


                        <li class="figure1">06. A Shapeless Figure #1</li>

                        <div class="figure1box">
                            I take all the blame</br>
                            it was always my fault</br>
                            if I am not dressed</br>
                            like a princess</br>
                            But what should I get?</br>
                            what should I get?</br>
                            
                            You are raining like a waterfall</br>
                            and I drown in your eyes</br>
                            You shine</br>
                            and I drown while you cry.</br>
                            
                            I do not remember when</br>
                            we passed the deadline</br>
                            I have not seen the sunlight</br> 
                            in years.</br>
                            
                            I have not seen your face</br>
                            today has been an year</br>
                            your face</br>
                            my faith</br>
                            my disgrace.</br>
                        </div>


                        <li class="piano">07. Shoot the Piano Player</li>

                        <div class="pianobox">
                            Shoot the piano player</br>
                            leave all your worries behind</br>
                            sometimes to go forward</br>
                            you need to go back first</br>
                            
                            Do believe in stereotypes</br>
                            but do not believe in destiny</br>
                            I am not destiny</br> 
                            I am a coincidence</br>
                            one out of a milion.</br>
                            
                            I am not a cause</br>
                            I am a consequence</br>
                            like photos</br>
                            like friendships</br>
                            things</br>
                            become valuable</br>
                            with the time</br>
                        </div>


                        <li class="figure5">08. A Shapeless Figure #5</li>

                        <div class="figure5box">
                            Oh No! Oh God!</br>
                            It happened again</br>
                            I stumble and fall</br>
                            I know It happened again.</br>

                            We need to go</br>
                            The ground is crumbling underneath</br>
                            our feet this love</br>
                            this love does not let us the time</br>
                            to breathe.</br>

                            Sew me up</br>
                            Keep track</br>
                            of the time</br>
                            of the years</br>
                            of the people</br>
                            who surround me.</br>

                            My Glossophobia will win</br>
                            I will never be able to spell it out</br>
                            I know what I mean</br> 
                            but...</br>
                            oh...</br>
                            oh...</br>

                            Wave your way goodbye</br>
                            my shoes are walking away from me</br>
                            And now that my glasses fall over</br>
                            and now that finally I can see.</br>
                        </div>


                        <li class="distance">09. Your Distance is a Road to Run</li>

                        <div class="distancebox">
                            This shot</br>
                            was the greatest one</br>
                            I stole</br>
                            a picture of you</br>
                            while you were</br> 
                            staring into space</br>
                            so much grace.</br>

                            And I know</br>
                            that is hard to keep up</br>
                            with the reality</br>
                            and I know that</br>
                            all of this</br>
                            it is just</br>
                            self defence.</br>

                            You shrug</br> 
                            and I smile</br>
                            you frown</br>
                            and I laugh</br>
                            your distance</br>
                            is a road</br>
                            to run.</br>

                            It is hard</br>
                            to fill up all this space</br>
                            so much grace.</br>
                        </div>


                        <li class="coincidence">10. A Coincidence</li>

                        <div class="coincidencebox">
                            Time</br>
                            I need time</br>
                            to find</br>
                            my way.</br>

                            Dear isolation</br>
                            you are the key</br>
                            to success</br>
                            the road you take</br>
                            it is not the one you choose.</br>

                            You have just passed my by</br>
                            but why</br>
                            should I smile</br>
                            you have never been so far</br>
                            I have never been so close</br>
                            to the point.</br>
                        </div>
                        
                    </ul>
                        
                </div>
                
                    <h4>THINGS_LEFT_AROUND_IN_THE_HOUSE</h4>

                <a href="#backhome">
                        <div class="righta"></div></a>

            </div>
            
        </div>
        <!--- footer --->

                <footer>
                    <span>Let's keep in touch</span>
                        <span><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pages/category/Musician-Band/Kastazwa-2585911911635350/"><img src="images/socialmedia.png" style="height:30px"></a></span>
                                    <span class="acca">email:kastazwa@outlook.it</span>
                                        <a href="impressumjoie.html"><span class="acca">Impressum</span></a>
                                            <span class="acca">&copy Kastazwa 2020</span>
                                                
                                                
                </footer>

                <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                    <script>
                        AOS.init();
                    </script>
        </body>

</html>