<x-app-layout>

    <div class="container">
        <div class="wrapper p-4 p-lg-5">
            <div class="content-area row g-3 g-lg-5">
                <div class="col-12 col-lg-4 col-xl-3">
                    <section id="sidebar">
                        <!-- Sidebar Cart -->
                        <div class="sidebar-hs sidebar-container mb-3 mb-lg-4">
                            <div class="section-title">
                                <img src="{{asset('images/user-searchicon.png')}}"> <span class="section-title-text ms-2">Search Player</span>
                            </div>
                            <div class="search-player p-4">
                                <input type="text" placeholder="Search Player" class="w-100">
                                <a href="#" class="d-block w-100 input-submit hs-btn btn_lg text-center mt-3">
                                    Search
                                </a>
                            </div>
                        </div>
                        <x-highscores-filter/>
                    </section>
                </div>
                <div class="col-12 col-lg-8 col-xl-9">
                    <section id="hiscores">
                        <div class="section-header row">
                            <h2 id="hiscores-header">
                                <img src="{{asset('images/hiscores-icon.png')}}" />Overall Highscores
                            </h2>
                        </div>
                        <div class="hiscores-container">
                            <div class="hiscores-table table-responsive-md">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="hiscores-rank rank" scope="col" style="width:10%;">Rank</th>
                                        <th class="hiscores-player" scope="col" style="width:50%;">Player Name</th>
                                        <th class="hiscores-level" scope="col" style="width:20%;">Level</th>
                                        <th class="hiscores-exp" scope="col" style="width:20%;">Experience</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="rank" scope="row">1</th>
                                        <td class="hiscores-username"><a href="#">Baby Jesus</a></a></td>
                                        <td class="hiscores-level">99</td>
                                        <td class="hiscores-exp">20,000,000</td>

                                    <tr>
                                        <td class="rank" scope="row">2</th>
                                        <td class="hiscores-username"><a href="#">Baby Jesus</a></td>
                                        <td class="hiscores-level">98</td>
                                        <td class="hiscores-exp">12,135,468</td>
                                    </tr>
                                    <tr>
                                        <td class="rank" scope="row">3</th>
                                        <td class="hiscores-username"><a href="#">Baby Jesus</a></td>
                                        <td class="hiscores-level">98</td>
                                        <td class="hiscores-exp">12,013,468</td>
                                    </tr>
                                    <tr>
                                        <td class="rank" scope="row">4</th>
                                        <td class="hiscores-username"><a href="#">Baby Jesus</a></td>
                                        <td class="hiscores-level">98</td>
                                        <td class="hiscores-exp">12,013,468</td>
                                    </tr>
                                    <tr>
                                        <td class="rank" scope="row">5</th>
                                        <td class="hiscores-username"><a href="#">Baby Jesus</a></td>
                                        <td class="hiscores-level">98</td>
                                        <td class="hiscores-exp">12,013,468</td>
                                    </tr>
                                    <tr>
                                        <td class="rank" scope="row">6</th>
                                        <td class="hiscores-username"><a href="#">Baby Jesus</a></td>
                                        <td class="hiscores-level">98</td>
                                        <td class="hiscores-exp">12,013,468</td>
                                    </tr>
                                    <tr>
                                        <td class="rank" scope="row">7</th>
                                        <td class="hiscores-username"><a href="#">Baby Jesus</a></td>
                                        <td class="hiscores-level">98</td>
                                        <td class="hiscores-exp">12,013,468</td>
                                    </tr>
                                    <tr>
                                        <td class="rank" scope="row">8</th>
                                        <td class="hiscores-username"><a href="#">Baby Jesus</a></td>
                                        <td class="hiscores-level">98</td>
                                        <td class="hiscores-exp">12,013,468</td>
                                    </tr>
                                    <tr>
                                        <td class="rank" scope="row">9</th>
                                        <td class="hiscores-username"><a href="#">Baby Jesus</a></td>
                                        <td class="hiscores-level">98</td>
                                        <td class="hiscores-exp">12,013,468</td>
                                    </tr>
                                    <tr>
                                        <td class="rank" scope="row">10</th>
                                        <td class="hiscores-username"><a href="#">Baby Jesus</a></td>
                                        <td class="hiscores-level">98</td>
                                        <td class="hiscores-exp">12,013,468</td>
                                    </tr>
                                    <tr>
                                        <td class="rank" scope="row">11</th>
                                        <td class="hiscores-username"><a href="#">Baby Jesus</a></td>
                                        <td class="hiscores-level">98</td>
                                        <td class="hiscores-exp">12,013,468</td>
                                    </tr>
                                    <tr>
                                        <td class="rank" scope="row">12</th>
                                        <td class="hiscores-username"><a href="#">Baby Jesus</a></td>
                                        <td class="hiscores-level">98</td>
                                        <td class="hiscores-exp">12,013,468</td>
                                    </tr>
                                    <tr>
                                        <td class="rank" scope="row">13</th>
                                        <td class="hiscores-username"><a href="#">Baby Jesus</a></td>
                                        <td class="hiscores-level">98</td>
                                        <td class="hiscores-exp">12,013,468</td>
                                    </tr>
                                    <tr>
                                        <td class="rank" scope="row">14</th>
                                        <td class="hiscores-username"><a href="#">Baby Jesus</a></td>
                                        <td class="hiscores-level">98</td>
                                        <td class="hiscores-exp">12,013,468</td>
                                    </tr>
                                    <tr>
                                        <td class="rank" scope="row">15</th>
                                        <td class="hiscores-username"><a href="#">Baby Jesus</a></td>
                                        <td class="hiscores-level">98</td>
                                        <td class="hiscores-exp">12,013,468</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="pagination">
                                <a href="#"><div class="hpgnum nav">&#171;</div></a>
                                <a href="#"><div class="hpgnum nav">&#8249;</div></a>
                                <a href="#"><div class="hpgnum active">1</div></a>
                                <a href="#"><div class="hpgnum">2</div></a>
                                <a href="#"><div class="hpgnum">3</div></a>
                                <a href="#"><div class="hpgnum nav">&#8250;</div></a>
                                <a href="#"><div class="hpgnum nav">&#187;</div></a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
