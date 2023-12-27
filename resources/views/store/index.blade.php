<x-app-layout>
    <div class="container">
        <div class="wrapper p-4 p-lg-5">
            <div id="notice-bg" class="mb-3 mb-lg-5">
                <div id="notice-bar">
                    <p><span class="accent"><img src="{{asset('images/notice-icon.png')}}" />Wanting to donate RSGP?</span> Make a request in our <b>#rsgp-donations</b> discord channel.</p>
                </div>
            </div>
            <div class="content-area row g-3 g-lg-5">
                <div class="col-12 col-lg-4 col-xl-3">
                    <section id="sidebar">

                        <!-- Sidebar Cart -->
                        <div class="sidebar-cart sidebar-container mb-3 mb-lg-4">
                            <div class="section-title">
                                <img src="{{asset('images/cart.png')}}"> <span class="section-title-text">Your Cart</span>
                            </div>
                            <div class="p-4">
                                <table class="cart p-0 m-0 w-100">
                                    <tr class="cart-item py-2">
                                        <td class="cart-item-qty" width="50px"><span class="qty-bg">2</span></td>
                                        <td class="cart-item-title" colspan="3">White Partyhat</td>
                                        <td class="cart-item-price" colspan="1">$100</td>
                                        <td class="remove" width="20px"><a href="#" class="d-flex justify-content-end"><img src="{{asset('images/remove-item.png')}}" /></a></td>
                                    </tr>
                                    <tr class="cart-item py-2">
                                        <td class="cart-item-qty" width="50px"><span class="qty-bg">2</span></td>
                                        <td class="cart-item-title" colspan="3">White Partyhat</td>
                                        <td class="cart-item-price" colspan="1">$100</td>
                                        <td class="remove" width="20px"><a href="#" class="d-flex justify-content-end"><img src="{{asset('images/remove-item.png')}}" /></a></td>
                                    </tr>
                                </table>
                                <div class="cart-total my-2 my-lg-3">
                                    <span class="total-label">TOTAL: </span><span class="total-cost">$300</span>
                                </div>
                                <a href="#"><div class="store-checkout btn_lg text-center">Checkout</div></a>
                            </div>
                        </div>
                        <!-- Categories -->
                        <div class="sidebar-cart sidebar-container">
                            <div class="section-title">
                                <img src="{{asset('images/categories.png')}}"> <span class="section-title-text">Categories</span>
                            </div>
                            <div class="p-4">
                                <ul>
                                    <li class="store-categories__item py-2 px-3 rounded-3 mb-2">
                                        <a href="#" class="d-flex flex-row justify-content-start align-items-center gap-3">
                                            <div class="store-categories__item--icon">
                                                <img src="{{asset('images/items/whitephat.png')}}">
                                            </div>
                                            <p class="mb-0">Category Name</p>
                                        </a>
                                    </li>
                                    <li class="store-categories__item active py-2 px-3 rounded-3 mb-2">
                                        <a href="#" class="d-flex flex-row justify-content-start align-items-center gap-3">
                                            <div class="store-categories__item--icon">
                                                <img src="{{asset('images/items/whitephat.png')}}">
                                            </div>
                                            <p class="mb-0">Category Name</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-12 col-lg-8 col-xl-9 pe-4">
                    <section id="store">
                        <div class="section-header d-flex flex-column justify-content-center align-items-stretch flex-md-row justify-content-md-between align-items-md-center mb-2 mb-lg-4 gap-3">
                            <h2 id="store-header" class="mb-0 d-flex justify-content-center justify-content-md-start align-items-center">
                                <img src="{{asset('images/store-icon.png')}}" />Edgeville Store
                            </h2>
                            <a href="#" class="redeem_btn py-3 px-4 h-auto"><img src="{{asset('images/help.png')}}" class="me-2">How to Redeem</a>
                        </div>
                        <div class="store-container p-3 p-lg-4">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-3 g-3 g-lg-4">
                                <div class="col">
                                    <div class="store-item p-3 p-lg-4">
                                        <div class="item-img"><img src="{{asset('images/items/whitephat.png')}}"></div>
                                        <div class="item-label">White Partyhat</div>
                                        <div class="item-price">$50</div>
                                        <div class="item-qty w-100 d-flex justify-content-between align-items-center py-1 px-1 px-md-3 mt-2 mt-lg-3">
                                            <div class=" d-flex justify-content-start align-items-center w-50">
                                                <input class="qty-num" type="number" value="1">
                                                <div class="qty-arrow d-flex flex-column justify-content-center w-25">
                                                    <a class="increase-btn"><img class="increase" src="{{asset('images/increase.png')}}"></a>
                                                    <a class="decrease-btn"><img class="decrease" src="{{asset('images/decrease.png')}}"></a>
                                                </div>
                                            </div>

                                            <a href="#" class="add-to-cart py-2 px-3 rounded-2 ms-auto">
                                                <img src="{{asset('images/add-cart.png')}}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="store-item p-3 p-lg-4">
                                        <div class="item-img"><img src="{{asset('images/items/whitephat.png')}}"></div>
                                        <div class="item-label">White Partyhat</div>
                                        <div class="item-price">$50</div>
                                        <div class="item-qty w-100 d-flex justify-content-between align-items-center py-1 px-1 px-md-3 mt-2 mt-lg-3">
                                            <div class=" d-flex justify-content-start align-items-center w-50">
                                                <input class="qty-num" type="number" value="1">
                                                <div class="qty-arrow d-flex flex-column justify-content-center w-25">
                                                    <a class="increase-btn"><img class="increase" src="{{asset('images/increase.png')}}"></a>
                                                    <a class="decrease-btn"><img class="decrease" src="{{asset('images/decrease.png')}}"></a>
                                                </div>
                                            </div>

                                            <a href="#" class="add-to-cart py-2 px-3 rounded-2 ms-auto">
                                                <img src="{{asset('images/add-cart.png')}}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
