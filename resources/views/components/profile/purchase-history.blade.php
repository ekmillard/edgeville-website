@props(['purchases'])

<section id="purchase-history">
    <div class="content-box sidebar-container mb-3 mb-lg-4">
        <div
            class="section-title d-flex flex-row justify-content-between align-items-center px-4 pt-3 pb-2">
            <div class="d-flex flex-row justify-content-start align-items-center gap-2">
                <img src="{{asset('images/purchase-history.png')}}">
                <span class="section-title-text">Purchase History</span>
            </div>
            <div class="d-flex flex-row align-items-center gap-2">
                <p class="mb-0 badge bg-dark">Total Orders: 2</p>
            </div>
        </div>
        <div class="p-4">
            <div class="table-style-1 table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" style="width:10%;">Order ID</th>
                        <th scope="col" style="width:20%;">Date</th>
                        <th scope="col" style="width:50%;">Item name</th>
                        <th scope="col" style="width:20%;">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="text-white">
                        <td scope="row">1</td>
                        <td>12/20/2023</td>
                        <td>Sythe of Vitur</td>
                        <td>$350 USD</td>
                    </tr>
                    <tr class="text-white">
                        <td scope="row">2</td>
                        <td>12/20/2023</td>
                        <td>$5 Bonds</td>
                        <td>$10 USD</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="pagination justify-content-center float-none">
                <a href="#">
                    <div class="hpgnum nav">&#171;</div>
                </a>
                <a href="#">
                    <div class="hpgnum nav">&#8249;</div>
                </a>
                <a href="#">
                    <div class="hpgnum active">1</div>
                </a>
                <a href="#">
                    <div class="hpgnum">2</div>
                </a>
                <a href="#">
                    <div class="hpgnum">3</div>
                </a>
                <a href="#">
                    <div class="hpgnum nav">&#8250;</div>
                </a>
                <a href="#">
                    <div class="hpgnum nav">&#187;</div>
                </a>
            </div>
        </div>
    </div>
</section>
