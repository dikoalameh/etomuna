@section('title', 'Classification of Accounts')
<x-superadmin-layout>
    <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
        <button id="closeModalBtn" class="absolute top-2 right-2 text-gray hover:text-black text-xl">&times;</button>
        <!-- Modal layout -->
        <div
            class="bg-white rounded-md mt-6 max-sm:mx-2 px-6 py-4 border-4 border-gray max-w-lg w-full max-h-[80vh] overflow-y-auto relative max-sm:max-h-[75vh] max-sm:overflow-y-auto max-sm:relative">
            <h2 class="mb-6 font-semibold text-2xl max-sm:text-[18px]">Classification of Accounts</h2>
            <!-- Form -->
            <form method="POST" action="" id="modalForm">
                <!-- User ID -->
                <div class="mt-2">
                    <div class="grid gap-x-20 gap-y-3 max-w-full">
                        <div class="font-semibold max-sm:text-sm">Principal Investigator:</div>
                        <div class="max-sm:mb-2 max-sm:text-sm">John Doe</div>

                        <div class="font-semibold max-sm:text-sm">Co-Investigators:</div>
                        <div class="max-sm:mb-2 max-sm:text-sm">John Doe, Alfreds Futterkiste</div>
                            
                        <div class="font-semibold max-sm:text-sm">Research Title:</div>
                        <div class="max-sm:mb-2 max-sm:text-sm">Brain Injury: Prevention and Treatment of Chronic Brain
                            Injury</div>

                        <div class="font-semibold max-sm:text-sm">Endorsement Letter:</div>
                        <div class="max-sm:mb-2 max-sm:text-sm">
                            <a href="#">
                                <button type="button" class="border-2 px-[10px] py-[5px] hover:bg-gray">View</button>
                            </a>
                        </div>
                        <div class="font-semibold max-sm:text-sm">Classification of Accounts:</div>
                        <div class="max-sm:mb-2 max-sm:text-sm">
                            <x-combobox-classify-accounts id="reviewClassification" name="reviewClassification" class="max-sm:text-sm" />
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <x-primary-button class="mt-4 max-sm:text-sm">
                        Submit
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
    <!-- Main Content -->
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            ACCOUNTS CLASSIFICATION
        </h2>
        <br>

        <table id="myTable" class="min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-[18px]/7 max-lg:text-[16px]">
                <tr class="header-table">
                    <th class="w-[25.00%]">P.I. Name</th>
                    <th class="w-[25.00%]">Research Title</th>
                    <th class="w-[25.00%]">Classification of Account</th>
                    <th class="w-[25.00%]">Date Classified</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-[17px]/6 max-lg:text-[15px]">
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Foods for Health: Personalized Food and Nutritional Metabolic Profiling to Improve Health</td>
                    <td>
                        <button type="button"
                            class="openModalBtn border-2 px-[10px] py-[5px] hover:bg-gray">View</button>
                    </td>
                    <td>7/2/2025<br>13:12:30</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-superadmin-layout>
<script>
    document.addEventListener("click", function (e) {
        if (e.target.classList.contains("openModalBtn")) {
            document.getElementById("modalOverlay").classList.remove("hidden");
            document.getElementById("modalOverlay").classList.add("flex");
        }
    });

    document.getElementById("closeModalBtn").addEventListener("click", () => {
        document.getElementById("modalOverlay").classList.add("hidden");
        document.getElementById("modalOverlay").classList.remove("flex");
    });

    document.getElementById("modalOverlay").addEventListener("click", (e) => {
        if (e.target.id === "modalOverlay") {
            document.getElementById("modalOverlay").classList.add("hidden");
            document.getElementById("modalOverlay").classList.remove("flex");
        }
    });
</script>