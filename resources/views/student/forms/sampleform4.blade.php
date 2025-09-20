@section('title', 'MCUERB FORM 3(B) Review of Resubmitted Study Protocol')
<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <form action="" method="POST" enctype="multipart/form-data" class="block space-y-6">
            @csrf

            <!-- Header -->
            <div class="mt-3 p-1 max-w-4xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">MCUERB FORM 3(B)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    Review of Resubmitted Study Protocol Form
                </h1>
            </div>

            <!-- Study Information -->
              <div class="mt-6 p-4 max-w-4xl w-full bg-lightgray rounded mx-auto shadow-md">
    <div class="overflow-x-auto">
        <table class="w-full border-collapse">
            <tbody>
                <!-- Row 1: MCUERB Code + Date of Initial Submission -->
                <tr class="border-b border-gray-300">
                    <td class="font-bold px-2 py-2 w-1/2">MCUERB Code:</td>
                    <td class="px-2 py-2 w-1/2">
                        <input type="text" name="mcuerb_code" class="w-full rounded border border-gray-300 p-2" placeholder="Enter MCUERB code" />
                    </td>
                    <td class="font-bold px-2 py-2 w-1/2">Date of Initial Submission:</td>
                    <td class="px-2 py-2 w-1/2">
                        <input type="date" name="initial_submission_date" class="rounded border border-gray-300 p-2" />
                    </td>
                </tr>

                <!-- Row 2: Study Protocol Title -->
                <tr class="border-b border-gray-300">
                    <td class="font-bold px-2 py-2" colspan="1">Study Protocol Title:</td>
                    <td class="px-2 py-2" colspan="3">
                        <input type="text" name="study_protocol_title" class="w-full rounded border border-gray-300 p-2" placeholder="Enter study protocol title" />
                    </td>
                </tr>

                <!-- Row 3: Resubmitted Protocol Submission Date + Review Stage -->
                <tr class="border-b border-gray-300">
                    <td class="font-bold px-2 py-2 w-1/2">Resubmitted Protocol Submission Date:</td>
                    <td class="px-2 py-2 w-1/2">
                        <input type="date" name="resubmitted_submission_date" class="rounded border border-gray-300 p-2" />
                    </td>
                    <td class="font-bold px-2 py-2 w-1/2">Total Participants:</td>
                    <td class="px-2 py-2 w-1/2 flex items-center space-x-">
                        <input type="number" name="total_participants" class="w-20 rounded border border-gray-300 p-2" placeholder="0" />
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="review_stage_2" class="rounded" />
                            <span>2nd Review</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="review_stage_3" class="rounded" />
                            <span>3rd Review</span>
                        </label>
                    </td>
                </tr>

                <!-- Row 4: Principal Investigator + Tel -->
                <tr class="border-b border-gray-300">
                    <td class="font-bold px-2 py-2 w-1/2">Principal Investigator: &lt;Title, Name, Surname&gt;</td>
                    <td class="px-2 py-2 w-1/2">
                        <input type="text" name="principal_investigator" class="w-full rounded border border-gray-300 p-2" placeholder="Enter PI name" />
                    </td>
                    <td class="font-bold px-2 py-2 w-1/2">Tel.:</td>
                    <td class="px-2 py-2 w-1/2">
                        <input type="text" name="pi_tel" class="w-full rounded border border-gray-300 p-2" placeholder="Enter telephone number" />
                    </td>
                </tr>

                <!-- Row 5: Initial Review Date + Last Review Date -->
                <tr class="border-b border-gray-300">
                    <td class="font-bold px-2 py-2 w-1/2">Initial Review Date:</td>
                    <td class="px-2 py-2 w-1/2">
                        <input type="date" name="initial_review_date" class="rounded border border-gray-300 p-2" />
                    </td>
                    <td class="font-bold px-2 py-2 w-1/2">Last Review Date:</td>
                    <td class="px-2 py-2 w-1/2">
                        <input type="date" name="last_review_date" class="rounded border border-gray-300 p-2" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

                  <!-- Recommendations and Assessment Section -->

<div class="mt-6 p-4 max-w-5xl w-full bg-lightgray rounded mx-auto shadow-md">
    <table class="w-full border border-gray-300 border-collapse text-sm">
        <thead>
            <tr class="bg-gray-100">
                <th class="border-r border-gray-300 px-2 py-2 text-center font-bold w-1/3">
                    To be filled out by the Primary Investigator (PI)
                </th>
                <th colspan="3" class="px-2 py-2 text-center font-bold border-b border-gray-400">
                    To be filled out by the Primary Reviewer
                </th>
            </tr>
            <tr class="bg-gray-50">
                <th class="border-r border-gray-300 px-2 py-2">Recommendations from last review</th>
                <th class="border-r border-gray-300 px-2 py-2 w-1/6">
                    Indicate if the study protocol contains the specified assessment point
                </th>
                <th class="border-r border-gray-300 px-2 py-2 w-1/6">Page & paragraph where it is found</th>
                <th class="px-2 py-2 w-1/3">Were the recommendations met (Yes/No)? Explain</th>
            </tr>
        </thead>
        <tbody>
            <!-- Big Textarea for Recommendations (single box) -->
            <tr class="align-top">
                <td rowspan="5" class="border-r border-gray-300 px-2 py-2">
                    <textarea rows="20" class="w-full h-full rounded border border-gray-300 p-2 resize-y"></textarea>
                </td>

                <!-- Two text box (YES and N/A) -->
                <td rowspan="5" class="border-r border-gray-300 px-2 py-2 text-center align-top">
                    <div class="flex flex-col space-y-2">
                        <div>
                            <label class="block text-left font-medium">YES</label>
                            <textarea name="assessment_yes"
                                      rows="8"
                                      class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                        </div>
                        <div>
                            <label class="block text-left font-medium">N/A</label>
                            <textarea name="assessment_na"
                                      rows="8"
                                      class="w-full rounded border border-gray-300 p-2 resize-y"></textarea>
                        </div>
                    </div>
                </td>

                <!-- Row 1 inputs -->
                <td class="border-r border-gray-300 px-2 py-2">
                    <input type="text" class="w-full rounded border border-gray-300 p-1" />
                </td>
                <td class="px-2 py-2">
                    <label class="block mb-1"><input type="radio" name="met_1" value="yes" class="mr-1"> Yes</label>
                    <label class="block mb-1"><input type="radio" name="met_1" value="no" class="mr-1"> No</label>
                    <textarea rows="2" class="w-full rounded border border-gray-300 p-1 resize-y"></textarea>
                </td>
            </tr>

            <!-- Row 2 -->
            <tr>
                <td class="border-r border-gray-300 px-2 py-2">
                    <input type="text" class="w-full rounded border border-gray-300 p-1" />
                </td>
                <td class="px-2 py-2">
                    <label class="block mb-1"><input type="radio" name="met_2" value="yes" class="mr-1"> Yes</label>
                    <label class="block mb-1"><input type="radio" name="met_2" value="no" class="mr-1"> No</label>
                    <textarea rows="2" class="w-full rounded border border-gray-300 p-1 resize-y"></textarea>
                </td>
            </tr>

            <!-- Row 3 -->
            <tr>
                <td class="border-r border-gray-300 px-2 py-2">
                    <input type="text" class="w-full rounded border border-gray-300 p-1" />
                </td>
                <td class="px-2 py-2">
                    <label class="block mb-1"><input type="radio" name="met_3" value="yes" class="mr-1"> Yes</label>
                    <label class="block mb-1"><input type="radio" name="met_3" value="no" class="mr-1"> No</label>
                    <textarea rows="2" class="w-full rounded border border-gray-300 p-1 resize-y"></textarea>
                </td>
            </tr>

            <!-- Row 4 -->
            <tr>
                <td class="border-r border-gray-300 px-2 py-2">
                    <input type="text" class="w-full rounded border border-gray-300 p-1" />
                </td>
                <td class="px-2 py-2">
                    <label class="block mb-1"><input type="radio" name="met_4" value="yes" class="mr-1"> Yes</label>
                    <label class="block mb-1"><input type="radio" name="met_4" value="no" class="mr-1"> No</label>
                    <textarea rows="2" class="w-full rounded border border-gray-300 p-1 resize-y"></textarea>
                </td>
            </tr>

            <!-- Row 5 -->
            <tr>
                <td class="border-r border-gray-300 px-2 py-2">
                    <input type="text" class="w-full rounded border border-gray-300 p-1" />
                </td>
                <td class="px-2 py-2">
                    <label class="block mb-1"><input type="radio" name="met_5" value="yes" class="mr-1"> Yes</label>
                    <label class="block mb-1"><input type="radio" name="met_5" value="no" class="mr-1"> No</label>
                    <textarea rows="2" class="w-full rounded border border-gray-300 p-1 resize-y"></textarea>
                </td>
            </tr>
        </tbody>
    </table>
</div>



<!-- Structured Issues Section -->
<div class="mt-6 p-4 max-w-5xl w-full bg-lightgray rounded mx-auto shadow-md">
  <table class="w-full border border-gray-300 border-collapse text-sm text-left">
    <thead>
      <tr class="bg-gray-100">
        <th class="border border-gray-300 px-2 py-2 w-1/4 font-bold text-left">Issues</th>
        <th class="border border-gray-300 px-2 py-2 w-1/4 font-bold text-left">Investigator’s Response</th>
        <th class="border border-gray-300 px-2 py-2 w-1/4 font-bold text-left">Reviewer’s Comment</th>
      </tr>
    </thead>
    <tbody>
      <!-- 1 -->
      <tr class="bg-gray-50">
        <td colspan="3" class="border border-gray-300 px-2 py-2 font-semibold">
          1. Address protocol-related issues:
        </td>
      </tr>
      <tr>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          1.1 <input type="text" name="issue_1_1" class="w-full border rounded p-1 mt-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_1_1_investigator" class="w-full border rounded p-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_1_1_reviewer" class="w-full border rounded p-1" />
        </td>
      </tr>
      <tr>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          1.2 <input type="text" name="issue_1_2" class="w-full border rounded p-1 mt-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_1_2_investigator" class="w-full border rounded p-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_1_2_reviewer" class="w-full border rounded p-1" />
        </td>
      </tr>

      <!-- 2 -->
      <tr class="bg-gray-50">
        <td colspan="3" class="border border-gray-300 px-2 py-2 font-semibold">
          2. Address ethical-related issues:
        </td>
      </tr>
      <tr>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          2.1 <input type="text" name="issue_2_1" class="w-full border rounded p-1 mt-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_2_1_investigator" class="w-full border rounded p-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_2_1_reviewer" class="w-full border rounded p-1" />
        </td>
      </tr>
      <tr>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          2.2 <input type="text" name="issue_2_2" class="w-full border rounded p-1 mt-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_2_2_investigator" class="w-full border rounded p-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_2_2_reviewer" class="w-full border rounded p-1" />
        </td>
      </tr>

      <!-- 3 -->
      <tr class="bg-gray-50">
        <td colspan="3" class="border border-gray-300 px-2 py-2 font-semibold">
          3. Address informed consent-related issues:
        </td>
      </tr>
      <tr>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          3.1 <input type="text" name="issue_3_1" class="w-full border rounded p-1 mt-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_3_1_investigator" class="w-full border rounded p-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_3_1_reviewer" class="w-full border rounded p-1" />
        </td>
      </tr>
      <tr>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          3.2 <input type="text" name="issue_3_2" class="w-full border rounded p-1 mt-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_3_2_investigator" class="w-full border rounded p-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_3_2_reviewer" class="w-full border rounded p-1" />
        </td>
      </tr>

      <!-- 4 -->
      <tr class="bg-gray-50">
        <td colspan="3" class="border border-gray-300 px-2 py-2 font-semibold">
          4. Changes that were not part of the initial review:
        </td>
      </tr>
      <tr>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          4.1 <input type="text" name="issue_4_1" class="w-full border rounded p-1 mt-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_4_1_investigator" class="w-full border rounded p-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_4_1_reviewer" class="w-full border rounded p-1" />
        </td>
      </tr>
      <tr>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          4.2 <input type="text" name="issue_4_2" class="w-full border rounded p-1 mt-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_4_2_investigator" class="w-full border rounded p-1" />
        </td>
        <td class="border border-gray-300 px-2 py-2 align-middle">
          <input type="text" name="issue_4_2_reviewer" class="w-full border rounded p-1" />
        </td>
      </tr>
    </tbody>
  </table>
</div>

            <!-- PI Signature -->
            <div class="mt-3 p-4 max-w-4xl w-full bg-lightgray rounded mx-auto shadow-md">
                <label class="block font-bold mb-2" for="pi_signature">PI Signature:</label>
                <input type="text" id="pi_signature" name="pi_signature" class="w-full rounded border border-gray-300 p-3" placeholder="Name / Signature" />
            </div>

            <!-- Recommendation Section -->
<div class="mt-3 p-4 max-w-4xl w-full bg-lightgray rounded mx-auto shadow-md">
    <table class="w-full border-collapse">
        <tr>
            <!-- Column 1: Recommendation radio buttons -->
            <td class="px-4 py-2 w-1/2 align-top">
                <h2 class="font-bold mb-2">RECOMMENDATION OF PRIMARY REVIEWER:</h2>
                <div class="flex flex-col space-y-2">
                    <label class="inline-flex items-center space-x-2">
                        <input type="radio" name="primary_reviewer_recommendation" value="approve" class="w-4 h-4" />
                        <span>APPROVE</span>
                    </label>
                    <label class="inline-flex items-center space-x-2">
                        <input type="radio" name="primary_reviewer_recommendation" value="minor_modification" class="w-4 h-4" />
                        <span>MINOR MODIFICATION</span>
                    </label>
                    <label class="inline-flex items-center space-x-2">
                        <input type="radio" name="primary_reviewer_recommendation" value="major_modification" class="w-4 h-4" />
                        <span>MAJOR MODIFICATION</span>
                    </label>
                    <label class="inline-flex items-center space-x-2">
                        <input type="radio" name="primary_reviewer_recommendation" value="disapprove" class="w-4 h-4" />
                        <span>DISAPPROVE</span>
                    </label>
                    <label class="inline-flex items-center space-x-2">
                        <input type="radio" name="primary_reviewer_recommendation" value="pending" class="w-4 h-4" />
                        <span>PENDING, IF MAJOR CLARIFICATIONS ARE REQUIRED BEFORE A DECISION CAN BE MADE</span>
                    </label>
                </div>
            </td>

            <!-- Column 2: Justification textarea -->
            <td class="px-4 py-2 w-1/2 align-top">
                <label class="block font-bold mb-2" for="justification_action">JUSTIFICATION FOR RECOMMENDED ACTION:</label>
                <textarea id="justification_action" name="justification_action" rows="10" class="w-full rounded border border-gray-300 p-3" placeholder="Provide justification here..."></textarea>
            </td>
        </tr>
    </table>
</div>
            <!-- Summary of Recommendations -->
            <div class="mt-3 p-4 max-w-4xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="font-bold text-lg mb-2">SUMMARY OF RECOMMENDATIONS:</h2>
                @for ($i = 1; $i <= 5; $i++)
                    <input type="text" name="summary_recommendation_{{ $i }}" class="w-full rounded border border-gray-300 p-3 mb-2" placeholder="Recommendation {{ $i }}" />
                @endfor
            </div>

            <!-- Signatures -->
            <div class="mt-3 p-4 max-w-4xl w-full bg-lightgray rounded mx-auto shadow-md">
                <table class="w-full border-collapse text-sm">
                    <tbody>
                        <tr class="border-b border-gray-300">
                            <td class="px-4 py-3 w-1/3">ERB CHAIR Signature:</td>
                            <td class="px-4 py-3 w-1/3">
                                <input type="text" name="erb_chair_signature" class="w-full rounded border border-gray-300 p-3" placeholder="Name / Signature" />
                            </td>
                            <td class="px-4 py-3 w-1/6">Date:</td>
                            <td class="px-4 py-3 w-1/6">
                                <input type="date" name="erb_chair_date" class="w-full rounded border border-gray-300 p-3" />
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300">
                            <td class="px-4 py-3">Signature of Researcher:</td>
                            <td class="px-4 py-3">
                                <input type="text" name="researcher_signature" class="w-full rounded border border-gray-300 p-3" placeholder="Name / Signature" />
                            </td>
                            <td class="px-4 py-3">Date:</td>
                            <td class="px-4 py-3">
                                <input type="date" name="researcher_date" class="w-full rounded border border-gray-300 p-3" />
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">Noted by the Thesis Adviser:</td>
                            <td class="px-4 py-3">
                                <input type="text" name="thesis_adviser_signature" class="w-full rounded border border-gray-300 p-3" placeholder="Name / Signature" />
                            </td>
                            <td class="px-4 py-3">Date:</td>
                            <td class="px-4 py-3">
                                <input type="date" name="thesis_adviser_date" class="w-full rounded border border-gray-300 p-3" />
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">Approved by the Research Coordinator:</td>
                            <td class="px-4 py-3">
                                <input type="text" name="research_coordinator_signature" class="w-full rounded border border-gray-300 p-3" placeholder="Name / Signature" />
                            </td>
                            <td class="px-4 py-3">Date:</td>
                            <td class="px-4 py-3">
                                <input type="date" name="research_coordinator_date" class="w-full rounded border border-gray-300 p-3" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Buttons -->
            <div class="mt-3 p-1 max-w-4xl w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 flex items-center justify-center space-x-2 max-sm:flex-col max-sm:space-x-0 max-sm:space-y-2">
                    <button type="submit" name="action" value="save"
                        class="bg-primary text-secondary hover:bg-secondary hover:text-primary duration-200 tracking-widest p-4 max-sm:p-3 rounded max-sm:text-sm w-full max-w-xs">
                        SAVE
                    </button>
                    <button type="submit" name="action" value="export_pdf"
                        class="bg-secondary text-primary hover:bg-primary hover:text-secondary duration-200 tracking-widest p-4 max-sm:p-3 rounded max-sm:text-sm w-full max-w-xs">
                        EXPORT TO PDF
                    </button>
                </div>
            </div>
        </form>
    </main>
</x-student-layout>
