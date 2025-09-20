@section('title', 'MCUERB FORM 3(B) Review of Resubmitted Study Protocol')
<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <form action="" method="POST" class="block space-y-6">
            @csrf
            <!-- Header -->
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">MCUERB FORM 3(B)</p>
                <h1
                    class="text-center mt-100 max-2xl:mt-6 max-lg:mt-6 max-md:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    REVIEW OF RESUBMITTED STUDY PROTOCOL
                </h1>

            </div>

            <!-- Study Protocol Information -->
            <div class="mt-3 p-4 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md space-y-4">
                <h2 class="font-bold text-lg max-2xl:text-base max-sm:text-sm">STUDY PROTOCOL INFORMATION</h2>
                <div
                    class="grid grid-cols-[max-content_1fr] max-sm:grid-cols-1 gap-x-20 gap-y-3 max-w-full text-base max-sm:text-sm">
                    <div class="font-bold">MCUERB Code:</div>
                    <input type="text" name="mcuerb_code" class="w-full rounded border border-gray-300 p-1"
                        placeholder="Enter MCUERB Code" />

                    <div class="font-bold">Date of Initial Submission:</div>
                    <input type="date" name="initial_submission_date"
                        class="w-full rounded border border-gray-300 p-1" />

                    <div class="font-bold">Study Protocol Title:</div>
                    <input type="text" name="study_protocol_title" class="w-full rounded border border-gray-300 p-1"
                        placeholder="Enter Study Protocol Title" />

                    <div class="font-bold">Resubmitted Protocol Submission Date:</div>
                    <input type="date" name="resubmission_date" class="w-full rounded border border-gray-300 p-1" />

                    <div class="font-bold">Total Participants:</div>
                    <input type="number" name="total_participants" min="0"
                        class="w-full rounded border border-gray-300 p-1" />

                    <div class="font-bold">Review Number:</div>
                    <div class="flex flex-wrap gap-6 max-sm:flex-col max-sm:gap-4">
                        <label class="flex items-center space-x-2 max-sm:text-sm">
                            <input type="radio" name="review_number" value="2nd" class="w-4 h-4" />
                            <span>2nd Review</span>
                        </label>
                        <label class="flex items-center space-x-2 max-sm:text-sm">
                            <input type="radio" name="review_number" value="3rd" class="w-4 h-4" />
                            <span>3rd Review</span>
                        </label>
                    </div>

                    <div class="font-bold">Principal Investigator:</div>
                    <input type="text" name="principal_investigator" class="w-full rounded border border-gray-300 p-1"
                        placeholder="Title, Name, Surname" />

                    <div class="font-bold">Tel.:</div>
                    <input type="tel" name="pi_tel" class="w-full rounded border border-gray-300 p-1"
                        placeholder="Contact Number" />

                    <div class="font-bold">Initial Review Date:</div>
                    <input type="date" name="initial_review_date" class="w-full rounded border border-gray-300 p-1" />

                    <div class="font-bold">Last Review Date:</div>
                    <input type="date" name="last_review_date" class="w-full rounded border border-gray-300 p-1" />
                </div>
            </div>

            <!-- Recommendations from last review -->
            <div class="mt-3 p-4 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md space-y-4">
                <h2 class="font-bold text-lg max-2xl:text-base max-sm:text-sm mb-2">Recommendations from Last Review
                </h2>
                <p class="mb-2 max-sm:text-sm">
                    Indicate if the study protocol contains the specified assessment point. Provide your notes below.
                </p>

                <!-- 1. Address protocol-related issues -->
                <div class="space-y-2">
                    <label class="font-semibold">1. Address protocol-related issues</label>
                    <div class="pl-4">
                        <label class="block mb-1">1.1</label>
                        <input type="text" name="recommendation_1_1" class="w-full rounded border border-gray-300 p-1"
                            placeholder="Enter details here" />
                    </div>
                    <div class="pl-4">
                        <label class="block mb-1">1.2</label>
                        <input type="text" name="recommendation_1_2" class="w-full rounded border border-gray-300 p-1"
                            placeholder="Enter details here" />
                    </div>
                </div>

                <!-- 2. Address ethical-related issues -->
                <div class="space-y-2">
                    <label class="font-semibold">2. Address ethical-related issues</label>
                    <div class="pl-4">
                        <label class="block mb-1">2.1</label>
                        <input type="text" name="recommendation_2_1" class="w-full rounded border border-gray-300 p-1"
                            placeholder="Enter details here" />
                    </div>
                    <div class="pl-4">
                        <label class="block mb-1">2.2</label>
                        <input type="text" name="recommendation_2_2" class="w-full rounded border border-gray-300 p-1"
                            placeholder="Enter details here" />
                    </div>
                </div>

                <!-- 3. Address informed consent-related issues -->
                <div class="space-y-2">
                    <label class="font-semibold">3. Address informed consent-related issues</label>
                    <div class="pl-4">
                        <label class="block mb-1">3.1</label>
                        <input type="text" name="recommendation_3_1" class="w-full rounded border border-gray-300 p-1"
                            placeholder="Enter details here" />
                    </div>
                    <div class="pl-4">
                        <label class="block mb-1">3.2</label>
                        <input type="text" name="recommendation_3_2" class="w-full rounded border border-gray-300 p-1"
                            placeholder="Enter details here" />
                    </div>
                </div>

                <!-- 4. Changes that were not part of the initial review -->
                <div class="space-y-2">
                    <label class="font-semibold">4. Changes that were not part of the initial review</label>
                    <div class="pl-4">
                        <label class="block mb-1">4.1</label>
                        <input type="text" name="recommendation_4_1" class="w-full rounded border border-gray-300 p-1"
                            placeholder="Enter details here" />
                    </div>
                    <div class="pl-4">
                        <label class="block mb-1">4.2</label>
                        <input type="text" name="recommendation_4_2" class="w-full rounded border border-gray-300 p-1"
                            placeholder="Enter details here" />
                    </div>
                </div>
            </div>

            <!-- PI Signature -->
            <div
                class="mt-3 p-4 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md flex flex-col max-sm:space-y-2">
                <label class="font-bold mb-2 max-sm:text-sm">PI Signature:</label>
                <input type="text" name="pi_signature" class="w-full max-w-md rounded border border-gray-300 p-2"
                    placeholder="Signature" />
            </div>

            <!-- Recommendation of Primary Reviewer -->
            <div class="mt-3 p-4 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md space-y-4">
                <h2 class="font-bold text-lg max-2xl:text-base max-sm:text-sm">RECOMMENDATION OF PRIMARY REVIEWER</h2>
                <div class="flex flex-wrap gap-6 max-sm:flex-col max-sm:gap-3">
                    <label class="flex items-center space-x-2 max-sm:text-sm">
                        <input type="radio" name="primary_reviewer_recommendation" value="APPROVE" class="w-4 h-4" />
                        <span>APPROVE</span>
                    </label>
                    <label class="flex items-center space-x-2 max-sm:text-sm">
                        <input type="radio" name="primary_reviewer_recommendation" value="MINOR MODIFICATION"
                            class="w-4 h-4" />
                        <span>MINOR MODIFICATION</span>
                    </label>
                    <label class="flex items-center space-x-2 max-sm:text-sm">
                        <input type="radio" name="primary_reviewer_recommendation" value="MAJOR MODIFICATION"
                            class="w-4 h-4" />
                        <span>MAJOR MODIFICATION</span>
                    </label>
                    <label class="flex items-center space-x-2 max-sm:text-sm">
                        <input type="radio" name="primary_reviewer_recommendation" value="DISAPPROVE" class="w-4 h-4" />
                        <span>DISAPPROVE</span>
                    </label>
                    <label class="flex items-center space-x-2 max-sm:text-sm">
                        <input type="radio" name="primary_reviewer_recommendation"
                            value="PENDING, IF MAJOR CLARIFICATIONS ARE REQUIRED BEFORE A DECISION CAN BE MADE"
                            class="w-4 h-4" />
                        <span>PENDING, IF MAJOR CLARIFICATIONS ARE REQUIRED BEFORE A DECISION CAN BE MADE</span>
                    </label>
                </div>

                <label class="block font-bold mt-4 max-sm:text-sm" for="justification">JUSTIFICATION FOR RECOMMENDED
                    ACTION:</label>
                <textarea id="justification" name="justification" rows="4"
                    class="w-full rounded border border-gray-300 p-2 resize-y max-sm:text-sm"
                    placeholder="Enter justification here..."></textarea>

                <label class="block font-bold mt-4 max-sm:text-sm" for="summary_recommendations">SUMMARY OF
                    RECOMMENDATIONS:</label>
                <ol id="summary_recommendations" name="summary_recommendations"
                    class="list-decimal list-inside space-y-1 max-sm:text-sm">
                    <li>
                        <input type="text" name="summary_recommendation_1"
                            class="w-full rounded border border-gray-300 p-1" placeholder="Recommendation 1" />
                    </li>
                    <li>
                        <input type="text" name="summary_recommendation_2"
                            class="w-full rounded border border-gray-300 p-1" placeholder="Recommendation 2" />
                    </li>
                    <li>
                        <input type="text" name="summary_recommendation_3"
                            class="w-full rounded border border-gray-300 p-1" placeholder="Recommendation 3" />
                    </li>
                    <li>
                        <input type="text" name="summary_recommendation_4"
                            class="w-full rounded border border-gray-300 p-1" placeholder="Recommendation 4" />
                    </li>
                    <li>
                        <input type="text" name="summary_recommendation_5"
                            class="w-full rounded border border-gray-300 p-1" placeholder="Recommendation 5" />
                    </li>
                </ol>
            </div>


            <!-- Researcher and Adviser Signatures -->
            <div class="mt-3 p-4 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md space-y-4 max-sm:text-sm">
                <div>
                    <label class="font-semibold block mb-1">Signature of Researcher</label>
                    <input type="text" name="researcher_signature" class="w-full rounded border border-gray-300 p-2"
                        placeholder="Signature" />
                    <label class="block mt-1">Date</label>
                    <input type="date" name="researcher_signature_date"
                        class="w-full rounded border border-gray-300 p-2" />
                </div>
                <div>
                    <label class="font-semibold block mb-1">Noted by the Thesis Adviser</label>
                    <input type="text" name="thesis_adviser" class="w-full rounded border border-gray-300 p-2"
                        placeholder="Name and Signature" />
                </div>
                <div>
                    <label class="font-semibold block mb-1">Approved by the Research Coordinator</label>
                    <input type="text" name="research_coordinator" class="w-full rounded border border-gray-300 p-2"
                        placeholder="Name and Signature" />
                </div>
            </div>

            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 flex items-center justify-center space-x-2">
                    <button type="button"
                        class="bg-primary text-secondary hover:bg-secondary hover:text-primary duration-200 tracking-widest p-4 max-sm:p-3 rounded max-sm:text-sm">SAVE</button>
                    <a href="">
                        <button type="submit"
                            class="bg-secondary text-primary hover:bg-primary hover:text-secondary duration-200 tracking-widest p-4 max-sm:p-3 rounded max-sm:text-sm">EXPORT
                            TO PDF
                        </button>
                    </a>
                </div>
            </div>
        </form>
    </main>
</x-student-layout>