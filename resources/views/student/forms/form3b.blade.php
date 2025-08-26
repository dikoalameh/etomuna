@section('title', 'Form 3(B)')
<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <form action="" method="POST" class="block">
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">FORM 3(B)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 max-lg:mt-6 max-md:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    REVIEW OF RESUBMITTED STUDY PROTOCOL FORM</h1>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="px-3 py-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">STUDY PROTOCOL INFORMATION</h2>
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <div class="grid grid-cols-[max-content_1fr] max-sm:grid-cols-1 gap-x-20 gap-y-3 max-w-full">
                        <div class="font-bold">MCUERB Code:</div>
                        <div class="max-sm:mb-2">2025-S1-001</div>

                        <div class="font-bold">Date of Initial Submission:</div>
                        <div class="max-sm:mb-2">8/26/2025</div>

                        <div class="font-bold">Study Protocol Title:</div>
                        <div class="max-sm:mb-2">Brain Injury: Prevention and Treatment of Chronic Brain Injury</div>

                        <div class="font-bold">Resubmitted Protocol Submission Date:</div>
                        <div class="max-sm:mb-2">8/26/2025</div>

                        <div class="font-bold">Principal Investigator (PI):</div>
                        <div class="max-sm:mb-2">John Doe</div>

                        <div class="font-bold">Telephone:</div>
                        <div class="max-sm:mb-2">+ 63 X XXXX56</div>

                        <div class="font-bold">Initial Review Date:</div>
                        <div class="max-sm:mb-2">8/26/2025</div>

                        <div class="font-bold">Last Review Date:</div>
                        <div class="max-sm:mb-2">8/26/2025</div>
                    </div>
                    <div
                        class="py-2 flex flex-col md:flex-row justify-between items-start md:space-x-5 space-y-4 md:space-y-0">
                        <div class="flex flex-col w-full">
                            <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                                TOTAL PARTICIPANTS
                            </label>
                            <input type="text" name="investigator_institution"
                                class="block rounded border border-darkgray mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                                required>
                        </div>
                    </div>
                    <label class="max-sm:py-1 font-semibold flex items-start space-x-2 max-sm:text-sm/6">
                        <span>
                            REVIEW
                        </span>
                    </label>
                    <div class="flex mt-3 space-x-1 gap-x-2">
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="study_involvement" data-group="1">
                            <span>2nd Review</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="study_involvement" data-group="1">
                            <span>3rd Review</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="px-3 py-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">TO BE FILLED UP BY P.I.</h2>
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <div>
                        <label>
                            <span class="font-semibold">
                                RECOMMENDATION FROM LAST REVIEW
                            </span><br>
                        </label>
                        <textarea name="participants_vulnerability" id=""
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Indicate of the study protocol contains the specified assessment point
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_inclusion" data-group="2">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_inclusion" data-group="2">
                                <span>N/A</span>
                            </label>
                        </div>
                        <textarea name="explanation_inclusion" id=""
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </main>
</x-student-layout>