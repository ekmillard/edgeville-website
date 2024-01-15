<div class="col-12 col-lg-4 col-xl-6">
    <section id="sidebar">
        <div class="content-box sidebar-container">
            <div class="section-title">
                <span class="section-title-text">{{$title}}</span>
            </div>
            <div class="sidebar-body">
                <div class="discord-widget">
                    <div id="members-count"></div>
                    <div class="scroll-placeholder"></div>
                    <div class="discord-list">
                        {{$slot}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
