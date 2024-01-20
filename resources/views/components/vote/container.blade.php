<div class="container">
    <div class="wrapper p-4 p-lg-5">
        <div id="notice-bg" class="mb-3 mb-lg-5">
            <div id="notice-bar">
                <p><span class="accent"><img src="{{asset('images/notice-icon.png')}}" />Why should I vote?</span> By voting for us on these toplists, you help us grow our community. <a href="#">Learn how to redeem your rewards!</a></p>
            </div>
        </div>
        <div class="content-area">
            <section>
                <div class="section-header d-flex flex-column justify-content-center align-items-stretch flex-md-row justify-content-md-between align-items-md-center mb-2 mb-lg-4 gap-3">
                    <h2 id="store-header" class="mb-0 d-flex justify-content-center justify-content-md-start align-items-center">
                        <img src="{{asset('images/vote-icon.png')}}" />Vote for Edgeville
                    </h2>
                    <a href="#" class="redeem_btn py-3 px-4 h-auto">
                        <img src="{{asset('images/help.png')}}" class="me-2">
                        Claim Rewards
                    </a>
                </div>
                <!--news post 1-->
                <div class="store-container p-3 p-lg-4">
                    <div class="row g-3 g-lg-4">
                        {{$slot}}
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
