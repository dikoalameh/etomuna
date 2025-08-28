@section('title', 'Approved Accounts')
<x-erb-layout>
    <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
        <button id="closeModalBtn" class="absolute top-2 right-2 text-gray hover:text-black text-xl">&times;</button>
        <!-- Modal layout -->
        <div class="bg-white rounded-md mt-6 max-sm:mx-2 px-6 py-4 border-4 border-gray max-w-lg w-full">
            <!-- Form -->
            <form method="POST" action="" id="modalForm">
                <div class="mt-2">
                    <div class="grid gap-x-20 gap-y-3 max-w-full">
                        <div class="font-semibold max-sm:text-sm">Principal Investigator:</div>
                        <div class="max-sm:mb-2 max-sm:text-sm">John Doe</div>

                        <div class="font-semibold max-sm:text-sm">Co-Investigators:</div>
                        <div class="max-sm:mb-2 max-sm:text-sm">Brain Injury: Prevention and Treatment of Chronic Brain
                            Injury</div>

                        <div class="font-semibold max-sm:text-sm">Endorsement Letter:</div>
                        <div class="max-sm:mb-2 max-sm:text-sm">endorsement_letter.pdf</div>
                    </div>
                </div>

                <!-- Upload Files -->
                <div class="mt-2">
                    <!-- ComboBox -->
                    <x-input-label for="category" :value="__('Choose Category')" />
                    <select id="category" onchange="showCheckboxes()" class="h-[30px] py-0 text-base max-sm:text-sm">
                        <option value="" selected disabled>--Choose--</option>
                        <option value="resubmission">Resubmission</option>
                        <option value="amendments">Amendments</option>
                        <option value="initial">Initial Review</option>
                    </select>

                    <br>

                    <!-- Container for checkboxes -->
                    <div id="checkboxContainer" class="mt-2 grid grid-cols-3 gap-4"></div>
                    <div>
                        <button type="submit"
                            class="py-2 px-6 my-5 max-sm:my-2 max-sm:py-2 max-sm:px-5 max-sm:text-[15px] tracking-widest rounded text-primary bg-secondary hover:bg-primary hover:text-secondary duration-200">
                            SUBMIT
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Main Content -->
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            APPROVED ACCOUNTS
        </h2>
        <br>

        <table id="myTable" class="min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <thead class="bg-primary text-white text-[18px]/7 max-lg:text-[16px]">
                <tr class="header-table">
                    <th class="w-[33.33%]">P.I. Name</th>
                    <th class="w-[33.33%]">Date Registered</th>
                    <th class="w-[33.33%]">Date Approved</th>
                </tr>
            </thead>
            <tbody class="text-[17px]/6 max-lg:text-[15px]">
                <!-- RENATE MESSNER UNG MEH MODAL FORMS -->
                <tr>
                    <td>Renate Messner</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td class="cursor-pointer openModalBtn">
                        Pending
                    </td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>4/16/2025<br>22:57:53</td>
                </tr>
                <tr>
                    <td>John Steel</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>Carlos González</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>4/15/2025<br>21:37:23</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-erb-layout>
<script>
    const data = {
        resubmission: ["Form 3(A)", "Form 3(B)"],
        initial: ["Form 2(B)", "Form 2(E)", "Form 2(J)"],
        amendments: ["Form 3(D)", "Form 3(E)"]
    };

    function showCheckboxes() {
        const category = document.getElementById("category").value;
        const container = document.getElementById("checkboxContainer");
        container.innerHTML = "";

        if (category && data[category]) {
            data[category].forEach(item => {
                const label = document.createElement("label");
                label.className = "flex items-center space-x-2 text-base max-sm:text-sm";

                const checkbox = document.createElement("input");
                checkbox.type = "checkbox";
                checkbox.value = item.toLowerCase();
                checkbox.className = "h-4 w-4";

                const span = document.createElement("span");
                span.textContent = item;

                label.appendChild(checkbox);
                label.appendChild(span);

                container.appendChild(label);
            });
        }
    }

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