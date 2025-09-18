@section('title', 'Pending Accounts')
<x-erb-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            APPROVED ACCOUNTS
        </h2>
        <br>

        <table id="myTable" class="min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base">
                <tr class="header-table">
                    <th class="w-[20.00%]">P.I. Name</th>
                    <th class="w-[20.00%]">Department</th>
                    <th class="w-[20.00%]">Research Title</th>
                    <th class="w-[20.00%]">Registration Date</th>
                    <th class="w-[20.00%]">Status</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-[17px]/6 max-lg:text-[15px]">
                <tr>
                    <td>
                        <input type="checkbox">
                        <span>John Doe</span>
                    </td>
                    <td>IT</td>
                    <td>Brain Injury: Prevention and Treatment of Chronic Brain Injury</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td><button type="button" class="border-2 p-[5px] hover:bg-gray">Approve</button></td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox">
                        <span>Alfreds Futterkiste</span>
                    </td>
                    <td>IT</td>
                    <td>Foods for Health: Personalized Food and Nutritional Metabolic Profiling to Improve
                        Health
                    </td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>Approved</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-erb-layout>