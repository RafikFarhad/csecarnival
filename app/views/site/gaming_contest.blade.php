@extends('carnival')

@section('content')


    <body>

    <!--
    =============================================
      top navigation bar
    =============================================
    -->

    @include('site_includes.topbar')
            <!-- top navigation bar FINISH-->

    <!--
    =============================================
        main navigation bar
    =============================================
    -->

    @include('site_includes.navbar')
            <!-- end of /#navigation -->
    <!-- header begin -->
    <!-- header begin -->
    <header class="page-head" style="background-image: url('{{asset('carnival_assets/img/gc_banner.jpg')}}');">
        <div class="header-wrapper" >
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Events</a></li>
                            <li class="active">Gaming Contest</li>
                        </ol>

                    </div>
                </div>
            </div> --> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <section class="main-content">
        <div class="container">
            <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Fifa 15 and NFS (Most Wanted)</h2>
                        <ol>
                            <li>
                                <h3>Registration</h3>
                                <p>
                                    <ol>
                                    <li>Anyone can participate</li>
                                    <li>Only individual registration. Team is not allowed.</li>
                                    </ol>
                                </p>
                            </li>
                            <li>
                                <h3>Registration Fees</h3>
                                <p><b>Fifa 14: Registration Fee 400.00 BDT per participant</b></p>
                                <p><b>NFS (Most Wanted): Registration Fee 400.00 BDT per participant</b></p>
                                <p><b>CS (Counter Strike): Registration Fee 1500.00 BDT per Team</b></p>
                            </li>
                            <li>
                                <h3>Rules for the Fifa 15</h3>
                                    <ol>
                                        <li>All the participants have to read and understand the rules.</li>
                                        <li>Play Type: One VS ONE.</li>
                                        <li>Players can bring their own gaming gadgets. No gadgets will be provided by the organizer.</li>
                                        <li>All matches will be online, unless the game is a keyboard vs gamepad player game.</li>
                                        <li>The matches will be played by knocked out system.</li>
                                        <li>Each player will get 5 minutes to set up personal gadgets with referee’s notification.</li>
                                        <li>If the player is found to be delaying the match for non-technical reasons, the referee may declare the match forfeit.</li>
                                        <li>The team’s and player’s ability can’t be modified. If anyone modifies his team or players ability he/she will be disqualified.</li>
                                        <li>If any player closes the victory or defeat screen without the replay being saved by a referee that may result in a default loss.</li>
                                        <li>Player changes and strategy changes can only be made before starting a match and whenever the ball is out for a throw-in or goal kick and in half-time. The changes should be made before throwing-in or goal kicking. The changes can also be made on player’s mutual understanding.</li>
                                        <li>If a match ends as a draw there will be no extra time. And Penalty shootout will decide the result.</li>
                                        <li>Matches will be played in a neutral venue. No player will get the home advantage in a match.</li>
                                        <li>Organizing committee holds the right to change the rules at any time and their decision is final.</li>
                                        <li>Game Settings: 
                                            <ol>
                                                <li>Team: International or club.</li>
                                                <li>Match length: (5+5)=10 minutes  </li>
                                                <li>Final Match Length: (6+6)=12 minutes</li>
                                                <li>Difficulty Level: Legendary </li>
                                                <li>Handball: Off </li>
                                                <li>Defending: Tactical defending</li>
                                            </ol>
                                        </li>
                                        <li>If the game disconnection is deemed to be unintentional by the referee, the game will be restarted. If any or both player does not agree to a match restart, that or both player will be disqualified.</li>
                                        <li>Unfair Play: 1. Use of any cheat program, 2. Intentional disconnection, 3. Use of any settings exceeding standard and permitted settings and 4. If the match is disrupted due to unnecessary.</li>
                                        <li>Upon discovery of any player committing any violation regarded as unfair play, that player will be disqualified from the tournament. </li>
                                        <li>During the course of any match, the operations staff and/or referee may determine other actions to be unfair play at any time.</li>
                                        <li>Chatting, the player may be given a warning or lose by defaults at the referee’s sole discretions.</li>
                                        <li>A participant has to report at the venue with respect to the schedule time table. No participant shall be allowed to participate if he/she does not report to the organizing authority within their reporting time.</li>
                                        <li>A participant shall be reported about exact time of their match when they report.</li>
                                        <li>If a participant is found missing before the round, then the opponent shall be awarded a walkover to the next round.</li>
                                        <li>Gamer must switched off their cell phones, smart watches, tab or any other electronics devices.</li>
                                        <li>Food and drinks are not allowed except for chewing gums or breathe fresheners. </li>
                                        
                                    </ol>
                                    <p><b>AGAIN A REFEREE”S DECISION HAS TO BE ACCEPTED BY THE PARTICIPANTS AND NO ARGUMENT WILL BE ACCEPTABLE.</b></p>
                            </li>
                            <li>
                                <h3>Rules for the NFS (Most Wanted)</h3>
                                <ol>
                                    <li>All the participants have to read and understand the rules.</li>
                                    <li>Play Type: One VS ONE.</li>
                                    <li>Players can bring their own gaming gadgets. No gadgets will be provided by the organizer.</li>
                                    <li>The matches will be played by knocked out system.</li>
                                    <li>Each player will get 5 minutes to set up personal gadgets with referee’s notification.</li>
                                    <li>If the player is found to be delaying the match for non-technical reasons, the referee may declare the match forfeit.</li>
                                    <li>Game Type: Circuit</li>
                                    <li>Host and Client will be decided by coin toss.</li>
                                    <li>At the end of each match, players must maintain the final screens and receive confirmation from a referee.</li>
                                    <li>Winning a race: The winner of a race is the first player to complete 5 laps of the circuit course and cross the finish line.</li>
                                    <li>The use of Porches Carrera GT and BMW M3 are not allowed.</li>
                                    <li>Only Visual Upgrade is allowed.</li>
                                    <li>Part, Performance (Pro, Super Pro and Ultimate) allowed, Junkman not allowed.</li>
                                    <li>Personal save files are not allowed.</li>
                                    <li>Cars may be tuned before racing each course.</li>
                                    <li>Game Setting: Courses- Diamond, Dunwich Bay, Heritage Heights, Bay Bridge, East Park.</li>
                                    <li>Each courses may be modified by the organizer. Players will be informed of any such changes before the game.</li>
                                    <li>Race Mode: Circuit, Laps: 5, N20: Off, Collision Detection: Off, Performance Matching: Off.</li>
                                    <li>If the game disconnection is deemed to be unintentional by the referee, the game will be restarted. If any or both player does not agree to a match restart, that or both player will be disqualified.</li>
                                    <li>Unfair Play: 1. Use of any cheat program, 2. Intentional disconnection, 3. Use of any settings exceeding standard and permitted settings and 4. If the match is disrupted due to unnecessary.</li>
                                    <li>Upon discovery of any player committing any violation regarded as unfair play, that player will be disqualified from the tournament. </li>
                                    <li>During the course of any match, the operations staff and/or referee may determine other actions to be unfair play at any time.</li>
                                    <li>Chatting, the player may be given a warning or lose by defaults at the referee’s sole discretions.</li>
                                    <li>A participant has to report at the venue with respect to the schedule time table. No participant shall be allowed to participate if he/she does not report to the organizing authority within their reporting time.</li>
                                    <li>A participant shall be reported about exact time of their match when they report.</li>
                                    <li>If a participant is found missing before the round, then the opponent shall be awarded a walkover to the next round.</li>
                                    <li>Gamer must switched off their cell phones, smart watches, tab or any other electronics devices.</li>
                                    <li>Food and drinks are not allowed except for chewing gums or breathe fresheners. </li>
                                </ol>
                                <p><b>AGAIN A REFEREE”S DECISION HAS TO BE ACCEPTED BY THE PARTICIPANTS AND NO ARGUMENT WILL BE ACCEPTABLE.</b></p>
                            </li>

                            <li>
                                <h3>Rules for the CS (Counter Strike)</h3>
                                <ol>
                                    <li>All the participants have to read and understand the rules.</li>
                                    <li>Play Type: FIVE VS FIVE.</li>
                                    <li>Players can bring their own gaming gadgets. No gadgets will be provided by the organizer.</li>
                                    <li>The matches will be played by knocked out system.</li>
                                    <li>Each player will get 5 minutes to set up personal gadgets with referee’s notification.</li>
                                    <li>If the player is found to be delaying the match for non-technical reasons, the referee may declare the match forfeit.</li>
                                    <li>If any player closes the victory or defeat screen without the replay being saved by a referee that may result in a default loss.</li>
                                    <li>Maps: de_nuke, de_inferno, de_cbble, de_train, de_dust2. Maps will be choose by coin toss. Winning team will be choose first map, second map will be choose by losing team and last map will be choose by winning team.</li>
                                    <li>Game Settings:
                                        <ol>
                                            <li>Team Decision: Coin Toss, winner pick who they start as.</li>
                                            <li>Rounds Per Map: 11 </li>
                                            <li>Final Match Rounds: 15</li>
                                            <li>Team Change: Round 5</li>
                                            <li>Time Per Round: 1.45</li>
                                            <li>Gameplay: Single Elimination</li>
                                            <li>Number of Round: 3</li>
                                        </ol>
                                    </li>
                                    <li>If the game disconnection is deemed to be unintentional by the referee, the game will be restarted. If any or both player does not agree to a match restart, that or both player will be disqualified.</li>
                                    <li>Unfair Play: 1. Use of any cheat program, 2. Intentional disconnection, 3. Use of any settings exceeding standard and permitted settings and 4. If the match is disrupted due to unnecessary.</li>
                                    <li>Upon discovery of any player committing any violation regarded as unfair play, that player will be disqualified from the tournament.</li>
                                    <li>During the course of any match, the operations staff and/or referee may determine other actions to be unfair play at any time.</li>
                                    <li>Chatting, the player may be given a warning or lose by defaults at the referee’s sole discretions.</li>
                                    <li>A participant has to report at the venue with respect to the schedule time table. No participant shall be allowed to participate if he/she does not report to the organizing authority within their reporting time.</li>
                                    <li>A participant shall be reported about exact time of their match when they report.</li>
                                    <li>If a participant is found missing before the round, then the opponent shall be awarded a walkover to the next round.</li>
                                    <li>Gamer must switched off their cell phones, smart watches, tab or any other electronics devices.</li>
                                    <li>Food and drinks are not allowed except for chewing gums or breathe fresheners.</li>

                                </ol>
                            </li>

                        </ol>
                    </div>
                </div>
            </section>

            <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Important Dates</h2>

                        <table class="text-center table table-bordered " >
                            <tr>
                                <th>Date</th>
                                <th>Description</th>
                            </tr>

                            <tr>
                                <td>Wii be published soon</td>
                                {{-- <td>21 September 2015</td> --}}
                                <td>Registration Start</td> 
                            </tr>
                            <tr>
                                <td>Wii be published soon</td>
                                {{-- <td><strike>31 October 2015</strike></br>15 November 2015</td> --}}
                                <td>Registration Close</td> 
                            </tr>
                            <tr>
                                <td>Wii be published soon</td>
                                {{-- <td><strike>5 November 2015</strike></br>15 November 2015</td> --}}
                                <td>Payment Deadline</td> 
                            </tr>
                            <tr>
                                <td>Wii be published soon</td>
                                {{-- <td>27-28 November 2015</td> --}}
                                <td>Competition</td> 
                            </tr>

                        </table>
                    </div>
                </div>
            </section>
            
            {{-- <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Question and Discussion</h2>
                            <a target="_blank" href="https://www.facebook.com/events/936823389745448/">Please Visit Facebook Event Page</a>
                    </div>
                </div>
            </section> --}}

            {{-- <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Payment</h2>
                        Please send your payment as Bank Draft/Pay Order to</br>
                        Account Name: <b>CSE Event, Dept. of CSE, SUST</b></br>
                        Account No: <b>34053918</b></br>
                        <b>Sonali Bank Ltd, SUST Branch, Sylhet<b/>
                    </div>
                </div>
            </section> --}}

            <section class="quick-registration-link" align=center>
            <a href="{{route('reg.gc')}}" class="btn btn-black">Register Now</a>
            </section>
        </div>
    </section>

    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop