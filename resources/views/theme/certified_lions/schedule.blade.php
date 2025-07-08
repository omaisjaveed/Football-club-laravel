@extends('theme.certified_lions.website')

@section('content')

<section class="inner-schedule">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=schedule-header>
                    <div class="score-header">
                        <ul>
                            <li> <a href="#"> Schedule </a> </li>
                            <li> <a href="#"> Scores </a> </li>
                            <li> <a href="#"> Standings </a> </li>
                            <li> <a href="#"> Leaders </a> </li>
                            <li> <a href="#"> Stars </a> </li>
                            <li> <a href="#"> Players </a> </li>
                            <li> <a href="#"> Playoffs </a> </li>
                        </ul>
                    </div>

                    <div class="banner-badging">
                        <div class="banner-1">
                            <img src="{{ asset('public/theme/certified_lions/images/team-match-logo-1.png') }}" alt="">
                        </div>
                        <div class="banner-2">
                            <p>Oklahoma City, OK</p>
                            <h1>Certified Lions FC</h1>
                            <p>2024-2025 | Midwest/West</p>
                        </div>
                    </div>
                    <div class="down-rating">
                        <div class="rating-drop-flex">
                            <div class="rate-the-flex-1">
                                <ul>
                                    <li> <a href="#">Player Stats</a> </li>
                                    <li> <a href="#">Team Stats</a> </li>
                                    <li> <a href="#">League Stats</a> </li>
                                    <li> <a href="#">Roster</a> </li>
                                    <li> <a href="#">Schedule</a> </li>
                                    <li> <a href="#">Scores</a> </li>
                                </ul>
                            </div>

                            <div class="rate-the-flex-2">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown button
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="down-rate-head-next">
                            <h2>Stats</h2>
                        </div>
                        <div class="class-check-out">
                            <p>No games have been recorded for this team. Check out the instead.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection