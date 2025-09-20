@section('title', 'MCUERB FORM 3(E) Amendments')
<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <form action="" method="POST" class="space-y-6">
            @csrf

            <!-- Header -->
            <div class="mt-3 p-3 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md space-y-1">
                <p class="text-right max-sm:text-xs">MCUERB FORM 3(E) Amendments</p>
                <h1 class="text-center font-bold text-2xl max-lg:text-lg max-sm:text-base underline mt-2">
                    AMENDMENTS FORM
                </h1>
            </div>

            <!-- Study Protocol Information Box -->
            <div class="mt-3 p-4 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md overflow-x-auto">
                <h2 class="font-bold mb-3 text-lg max-sm:text-base">STUDY PROTOCOL INFORMATION</h2>

                <table class="w-full border border-black border-collapse text-sm">
                    <tbody>
                        <!-- MCUERB Code -->
                        <tr>
                            <td class="border border-black font-bold p-2 w-1/4">
                                MCUERB Code <span class="italic">(To be provided by ERB)</span>
                            </td>
                            <td class="border border-black p-2" colspan="3">
                                <input type="text" name="mcuerb_code"
                                    class="w-full rounded border border-gray-300 p-1" />
                            </td>
                        </tr>

                        <!-- Study Protocol Title -->
                        <tr>
                            <td class="border border-black font-bold p-2">Study Protocol Title:</td>
                            <td class="border border-black p-2" colspan="3">
                                <input type="text" name="study_title"
                                    class="w-full rounded border border-gray-300 p-1" />
                            </td>
                        </tr>

                        <!-- Principal Investigator -->
                        <tr>
                            <td class="border border-black font-bold p-2">Principal Investigator (PI)</td>
                            <td class="border border-black p-2">
                                <input type="text" name="pi_name" placeholder="Title, Name, Surname"
                                    class="w-full rounded border border-gray-300 p-1" />
                            </td>
                            <td class="border border-black font-bold text-center p-2">Contact Information</td>
                            <td class="border border-black p-0">
                                <div class="grid grid-rows-2">
                                    <div class="flex">
                                        <div class="border-r border-black w-1/3 font-bold p-2">Mobile Numbers</div>
                                        <div class="flex-1 p-2">
                                            <input type="text" name="pi_mobile" placeholder="input mob number"
                                                class="w-full rounded border border-gray-300 p-1" />
                                        </div>
                                    </div>
                                    <div class="flex border-t border-black">
                                        <div class="border-r border-black w-1/3 font-bold p-2">Email Address</div>
                                        <div class="flex-1 p-2">
                                            <input type="email" name="pi_email" placeholder="email address input"
                                                class="w-full rounded border border-gray-300 p-1" />
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- Co-Investigator(s) -->
                        <tr>
                            <td class="border border-black font-bold p-2">Co-Investigator(s)</td>
                            <td class="border border-black p-2" colspan="3">
                                <input type="text" name="co_investigators" placeholder="Title, Name, Surname"
                                    class="w-full rounded border border-gray-300 p-1" />
                            </td>
                        </tr>

                        <!-- Institution -->
                        <tr>
                            <td class="border border-black font-bold p-2">Institution</td>
                            <td class="border border-black p-2" colspan="3">
                                <input type="text" name="institution"
                                    class="w-full rounded border border-gray-300 p-1" />
                            </td>
                        </tr>

                        <!-- Address of Institution -->
                        <tr>
                            <td class="border border-black font-bold p-2">Address of Institution</td>
                            <td class="border border-black p-2" colspan="3">
                                <input type="text" name="institution_address"
                                    class="w-full rounded border border-gray-300 p-1" />
                            </td>
                        </tr>

                        <!-- College/Department -->
                        <tr>
                            <td class="border border-black font-bold p-2">College/Department</td>
                            <td class="border border-black p-2" colspan="3">
                                <input type="text" name="college_department"
                                    class="w-full rounded border border-gray-300 p-1" />
                            </td>
                        </tr>

                        <!-- Submission Date -->
                        <tr>
                            <td class="border border-black font-bold p-2">Study Protocol Submission Date</td>
                            <td class="border border-black p-2" colspan="3">
                                <input type="date" name="submission_date"
                                    class="w-full rounded border border-gray-300 p-1" />
                            </td>
                        </tr>

                        <!-- Approval Date -->
                        <tr>
                            <td class="border border-black font-bold p-2">Study Protocol Approval Date</td>
                            <td class="border border-black p-2" colspan="3">
                                <input type="date" name="approval_date"
                                    class="w-full rounded border border-gray-300 p-1" />
                            </td>
                        </tr>

                        <!-- Version Number -->
                        <tr>
                            <td class="border border-black font-bold p-2">Version Number</td>
                            <td class="border border-black p-2" colspan="3">
                                <input type="text" name="version_number"
                                    class="w-full rounded border border-gray-300 p-1" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Signatures Box -->
            <div class="mt-3 p-4 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md space-y-4">
                <div class="grid grid-cols-[250px_1fr] gap-x-4 gap-y-3">
                    <div class="font-bold">Signature over Printed Name of Principal Investigator:</div>
                    <input type="text" name="pi_signature" class="w-full rounded border border-gray-300 p-2" />

                    <div class="font-bold">Date:</div>
                    <input type="date" name="pi_signature_date" class="w-full rounded border border-gray-300 p-2" />

                    <div class="font-bold">PRIMARY REVIEWER:</div>
                    <input type="text" name="primary_reviewer" class="w-full rounded border border-gray-300 p-2" />

                    <div class="font-bold">Date:</div>
                    <input type="date" name="primary_reviewer_date" class="w-full rounded border border-gray-300 p-2" />

                    <div class="font-bold">Signature:</div>
                    <input type="text" name="reviewer_signature" class="w-full rounded border border-gray-300 p-2" />

                    <div class="font-bold">Name:</div>
                    <input type="text" name="reviewer_name" class="w-full rounded border border-gray-300 p-2" />
                </div>
            </div>

            <!-- Procedure / Provisions Table -->
            <div class="mt-3 p-4 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md overflow-x-auto">
                <h2 class="font-bold mb-2 text-lg max-sm:text-base">Procedure/Provisions to be Amended</h2>
                <table class="w-full border border-gray-300 border-collapse text-sm">
                    <thead>
                        <tr class="bg-gray-200 text-center">
                            <th class="border border-gray-300 p-2">Procedure/Provisions to be amended</th>
                            <th class="border border-gray-300 p-2">Original Procedure/Provision</th>
                            <th class="border border-gray-300 p-2">Proposed Amendment/s</th>
                            <th class="border border-gray-300 p-2">Justification</th>
                            <th class="border border-gray-300 p-2">Remarks (Primary Reviewer)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                            <td class="border border-gray-300 p-2 align-top">
                                <textarea rows="4"
                                    class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </main>
</x-student-layout>