<x-app-layout>
    <div class="container narrow">
        <div class="wrapper p-4 p-lg-5">
            <div class="content-area">
                <div class="section-header mb-2 mb-lg-4 gap-3">
                    <h2 class="mb-0 text-bg-danger d-flex align-items-center justify-content-center text-center">
                        Error 404
                    </h2>
                </div>

                <div class="error-divide"></div>

                <h1 style="line-height:1.3em;">After a long journey, it appears you've found the abyss.<br>
                    Perhaps you found the wrong location...</h1>

                <h1 style="margin-top:50px;">Perhaps not...</h1>

                <a href="{{ url()->previous() }}">Go Back</a> or <a href="/">Go Home</a>

            </div>
        </div>
    </div>
</x-app-layout>
