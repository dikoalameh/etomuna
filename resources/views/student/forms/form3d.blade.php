@section('title', 'Form 3(D)')
<x-student-layout>
    <main class="xl:ml-[335px] max-xl:ml-auto p-4">
        <form action="" method="POST" class="block">
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">FORM 3(D)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 max-lg:mt-6 max-md:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    APPLICATION FOR REVIEW OF AMENDMENT</h1>
            </div>
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <div class="grid grid-cols-[max-content_1fr] max-sm:grid-cols-1 gap-x-20 gap-y-3 max-w-full">
                        <div class="font-bold">Original MCUERB Code:</div>
                        <div class="max-sm:mb-2">2025-S1-001</div>

                        <div class="font-bold">Original Approval Date:</div>
                        <div class="max-sm:mb-2">8/26/2025</div>

                        <div class="font-bold">Original Research Title:</div>
                        <div class="max-sm:mb-2">Brain Injury: Prevention and Treatment of Chronic Brain Injury</div>

                        <div class="font-bold">Amended Project Title (if applicable):</div>
                        <div class="max-sm:mb-2">N/A</div>

                        <div class="font-bold">Original Principal Investigator (PI):</div>
                        <div class="max-sm:mb-2">John Doe</div>

                        <div class="font-bold">Institution:</div>
                        <div class="max-sm:mb-2">CAS</div>

                        <div class="font-bold">Email:</div>
                        <div class="max-sm:mb-2">user123@gmail.com</div>

                        <div class="font-bold">Date Submitted:</div>
                        <div class="max-sm:mb-2">8/26/2025</div>
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="p-3 max-sm:text-sm/6">
                    <b>Simple, non-substantial <u>amendments</u></b> which do not alter or bring any additional ethical
                    considerations should be recorded but do not require ethical review. Check the boxes if any of the
                    following apply to your application:
                </p>
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <div>
                        <label>
                            <input type="checkbox" id="toggleCheckBox" class="check max-sm:w-[14px] max-sm:h-[14px]">
                            <span>
                                Addition or removal of researchers (if yes, add details below)
                            </span>
                            <textarea name="add_remove" id="textBox" class="mt-1 w-full resize-none max-sm:text-sm"
                                disabled></textarea>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="checkbox" id="toggleCheckBox" class="check max-sm:w-[14px] max-sm:h-[14px]">
                            <span>
                                Addition of a new rsearch method (if yes, add the details below).
                            </span>
                            <textarea name="add_methods" id="textBox" class="mt-1 w-full resize-none max-sm:text-sm"
                                disabled></textarea>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="checkbox" id="toggleCheckBox" class="check max-sm:w-[14px] max-sm:h-[14px]">
                            <span>
                                Ask for additional data from your existing participants (if yes, add details below).
                            </span>
                            <textarea name="additional_data" id="textBox" class="mt-1 w-full resize-none max-sm:text-sm"
                                disabled></textarea>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="checkbox" id="toggleCheckBox" class="check max-sm:w-[14px] max-sm:h-[14px]">
                            <span>
                                Remove a group of participants or a research method from the project, and have not yet
                                commenced that part of the project (if yes, add details below).
                            </span>
                            <textarea name="remove_participants" id="textBox"
                                class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="checkbox" id="toggleCheckBox" class="check max-sm:w-[14px] max-sm:h-[14px]">
                            <span>
                                Minor changes to study documents such as spelling and grammar, correcting errors, or
                                updates to contact details to reflect changes in the research team (if yes, briefly
                                summarize below and attach copies).
                            </span>
                            <textarea name="minor_changes" id="textBox" class="mt-1 w-full resize-none max-sm:text-sm"
                                disabled></textarea>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="checkbox" id="toggleCheckBox" class="check max-sm:w-[14px] max-sm:h-[14px]">
                            <span>
                                Apply for an extension to your current ethical approval (if yes, add details below).
                            </span>
                            <textarea name="extension" id="textBox" class="mt-1 w-full resize-none max-sm:text-sm"
                                disabled></textarea>
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </main>
</x-student-layout>