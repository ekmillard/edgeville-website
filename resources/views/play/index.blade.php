<x-app-layout>
    <div class="container narrow">
        <div class="wrapper p-4 p-lg-5">
            <div class="content-area">
                <div class="section-header mb-2 mb-lg-4 gap-3">
                    <h2 id="store-header" class="mb-0 d-flex align-items-center justify-content-center text-center">
                        Start Playing Edgeville
                    </h2>
                </div>
                <!--news post 1-->
                <div class="store-container p-3 p-lg-4">
                    <div class="row row-cols-1 row-cols-md-3 g-3 g-lg-4 align-items-center">

                        <div class="col">
                            <div class="vote-item p-3 p-lg-4">
                                <h4 class="mb-1 text-center text-white text-uppercase">Launcher Client</h4>
                                <p class="mb-2 mb-lg-3 text-muted">100kb | .launcher file</p>
                                <img src="{{asset('images/download-launcher.png')}}" class="game-download__icon" lazy>
                                <a href="" file class="d-block w-100 vote-btn btn_lg mt-2 mt-lg-3">Download</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="vote-item p-3 pt-5 p-lg-4 py-lg-5 position-relative">
                                <div class="badge position-absolute top-0 mt-3 d-block success-notice start-0 end-0">Recommended</div>
                                <h4 class="mb-1 text-center text-white text-uppercase">EXE Client</h4>
                                <p class="mb-2 mb-lg-3 text-muted">100kb | .exe file</p>
                                <img src="{{asset('images/download-exe.png')}}" class="game-download__icon" lazy>

                                <a href="" file class="d-block w-100 vote-btn btn_lg mt-2 mt-lg-3">Download</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="vote-item p-3 p-lg-4">
                                <h4 class="mb-1 text-center text-white text-uppercase">JAR Client</h4>
                                <p class="mb-2 mb-lg-3 text-muted">100kb | .jar file</p>
                                <img src="{{asset('images/download-jar.png')}}" class="game-download__icon" lazy>
                                <a href="" file class="d-block w-100 vote-btn btn_lg mt-2 mt-lg-3">Download</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div id="notice-bg" class="mt-3 mt-lg-5">
                <div id="notice-bar">
                    <p><span class="accent"><img src="{{asset('images/notice-icon.png')}}" />Why should I vote?</span> By voting for us on these toplists, you help us grow our community. <a href="#">Learn how to redeem your rewards!</a></p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
