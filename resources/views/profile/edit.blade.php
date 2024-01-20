<x-app-layout>
    <x-profile.container>
        <div class="col-12 col-lg-8">
            <!-- Profile Information Box Component -->
            <x-profile.information-box :user="auth()->user()"/>

            <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 mb-3 mb-lg-4">
                <!-- User Stat Components -->
                <x-profile.user-stat-box title="Rank" value="Owner"/>
                <x-profile.user-stat-box title="Total Votes" :value="$totalVotes"/>
                <x-profile.user-stat-box title="Total Spent" value="$360"/>
            </div>

            <!-- Purchase History Component -->
            <x-profile.purchase-history :purchases="1"/>
        </div>

        <!-- Profile Details Sidebar Component -->
        <x-profile.details-sidebar/>
    </x-profile.container>

    <!-- Modals -->
    <x-profile.edit-email-modal/>
    <x-profile.edit-password-modal/>

</x-app-layout>
