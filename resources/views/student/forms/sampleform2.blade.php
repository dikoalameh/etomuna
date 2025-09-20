@section('title', 'MCUERB FORM 3(D) Application for Review of Amendment')
<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <form action="" method="POST" enctype="multipart/form-data" class="block space-y-6">
            @csrf

            <!-- Header -->
            <div class="mt-3 p-1 max-w-4xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">MCUERB FORM 3(D)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    APPLICATION FOR REVIEW OF AMENDMENT
                </h1>
            </div>

            <!-- Original Project Information -->
            <div class="mt-3 p-4 max-w-4xl w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="overflow-x-auto">
                    <table class="table-auto border-collapse border border-black w-full text-sm bg-white">
                        <tbody>
                            <!-- Row 1: MCUERB CODE + Approval date -->
                            <tr>
                                <td class="border border-black p-2 w-1/4">ORIG MCUERB CODE:</td>
                                <td class="border border-black p-2 w-1/4">
                                    <input type="text" class="w-full border border-gray-400 p-1"
                                        placeholder="Enter MCUERB CODE">
                                </td>
                                <td class="border border-black p-2 w-1/4">ORIG approval date</td>
                                <td class="border border-black p-2 w-1/4">
                                    <input type="date" class="w-full border border-gray-400 p-1">
                                </td>
                            </tr>

                            <!-- Row 2: ORIG research title -->
                            <tr>
                                <td class="border border-black p-2">ORIG research title</td>
                                <td colspan="3" class="border border-black p-2">
                                    <input type="text" class="w-full border border-gray-400 p-1"
                                        placeholder="Input title">
                                </td>
                            </tr>

                            <!-- Row 3: Amended Project Title -->
                            <tr>
                                <td class="border border-black p-2">Amended Project Title (if applicable):</td>
                                <td colspan="3" class="border border-black p-2">
                                    <input type="text" class="w-full border border-gray-400 p-1">
                                </td>
                            </tr>

                            <!-- Row 4: PI -->
                            <tr>
                                <td class="border border-black p-2">Original Primary Investigator (PI):</td>
                                <td colspan="3" class="border border-black p-2">
                                    <input type="text" class="w-full border border-gray-400 p-1">
                                </td>
                            </tr>

                            <!-- Row 5: Institution -->
                            <tr>
                                <td class="border border-black p-2">Institution:</td>
                                <td colspan="3" class="border border-black p-2">
                                    <input type="text" class="w-full border border-gray-400 p-1">
                                </td>
                            </tr>

                            <!-- Row 6: Email -->
                            <tr>
                                <td class="border border-black p-2">Email:</td>
                                <td colspan="3" class="border border-black p-2">
                                    <input type="email" class="w-full border border-gray-400 p-1">
                                </td>
                            </tr>

                            <!-- Row 7: Date Submitted -->
                            <tr>
                                <td class="border border-black p-2">Date submitted:</td>
                                <td colspan="3" class="border border-black p-2">
                                    <input type="date" class="w-full border border-gray-400 p-1">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Amendment Checkboxes -->
            <div class="mt-3 p-4 max-w-4xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="text-lg mb-2"><b>Simple, Non-Substantial Amendments </b> which do not alter or bring any
                    additional ethical considerations should be recorded but do not require ethical review. Check the
                    boxes if any of the following apply to your application: </h2>
                <p class="mb-2 text-1xs">Check the boxes if any of the following apply:</p>

                <div class="overflow-x-auto">
                    <table class="w-full border-collapse text-sm">
                        <tbody>
                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3 align-top w-4/5">
                                    <strong>Addition or removal of researchers</strong> (if yes, add details below)
                                    <textarea name="details_add_remove_researchers" rows="2"
                                        class="w-full mt-2 rounded border border-gray-300 p-2"
                                        placeholder="Provide details if applicable"></textarea>
                                </td>
                                <td class="px-4 py-3 align-top w-1/5 text-center">
                                    <input type="checkbox" name="amendment_add_remove_researchers" class="w-4 h-4" />
                                </td>
                            </tr>

                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3 align-top">
                                    <strong>Addition or removal of research sites or settings</strong> (if yes, add
                                    details below)
                                    <div class="text-1xs text-gray-600 mt-1">Note - ensure you have obtained risk
                                        assessments and permission to access sites, if required.</div>
                                    <textarea name="details_add_remove_sites" rows="2"
                                        class="w-full mt-2 rounded border border-gray-300 p-2"
                                        placeholder="Provide details if applicable"></textarea>
                                </td>
                                <td class="px-4 py-3 align-top text-center">
                                    <input type="checkbox" name="amendment_add_remove_sites" class="w-4 h-4" />
                                </td>
                            </tr>

                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3 align-top">
                                    <strong>Addition of new participant group</strong> (if yes, add details below)
                                    <textarea name="details_new_participant_group" rows="2"
                                        class="w-full mt-2 rounded border border-gray-300 p-2"
                                        placeholder="Provide details if applicable"></textarea>
                                </td>
                                <td class="px-4 py-3 align-top text-center">
                                    <input type="checkbox" name="amendment_new_participant_group" class="w-4 h-4" />
                                </td>
                            </tr>

                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3 align-top">
                                    <strong>Addition of a new research method</strong> (if yes, add details below)
                                    <textarea name="details_new_method" rows="2"
                                        class="w-full mt-2 rounded border border-gray-300 p-2"
                                        placeholder="Provide details if applicable"></textarea>
                                </td>
                                <td class="px-4 py-3 align-top text-center">
                                    <input type="checkbox" name="amendment_new_method" class="w-4 h-4" />
                                </td>
                            </tr>

                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3 align-top">
                                    <strong>Ask for additional data from your existing participants</strong> (if yes,
                                    add details below)
                                    <textarea name="details_additional_data" rows="2"
                                        class="w-full mt-2 rounded border border-gray-300 p-2"
                                        placeholder="Provide details if applicable"></textarea>
                                </td>
                                <td class="px-4 py-3 align-top text-center">
                                    <input type="checkbox" name="amendment_additional_data" class="w-4 h-4" />
                                </td>
                            </tr>

                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3 align-top">
                                    <strong>Remove a group of participants or a research method from the project, and
                                        have not yet commenced that part of the project </strong> (if yes, add details
                                    below)
                                    <textarea name="details_remove_group_method" rows="2"
                                        class="w-full mt-2 rounded border border-gray-300 p-2"
                                        placeholder="Provide details if applicable"></textarea>
                                </td>
                                <td class="px-4 py-3 align-top text-center">
                                    <input type="checkbox" name="amendment_remove_group_method" class="w-4 h-4" />
                                </td>
                            </tr>

                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3 align-top">
                                    <strong>Minor changes to study documents such as spelling and grammar, correcting
                                        errors, or updates to contact details to reflect changes in the research
                                        team</strong> (if yes, briefly summarize below and attach copies)
                                    <textarea name="details_minor_doc_changes" rows="2"
                                        class="w-full mt-2 rounded border border-gray-300 p-2"
                                        placeholder="Provide brief summary if applicable"></textarea>
                                </td>
                                <td class="px-4 py-3 align-top text-center">
                                    <input type="checkbox" name="amendment_minor_doc_changes" class="w-4 h-4" />
                                </td>
                            </tr>

                            <tr>
                                <td class="px-4 py-3 align-top">
                                    <strong>Apply for an extension to your current ethical approval</strong> (if yes,
                                    add details below)
                                    <textarea name="details_extension" rows="2"
                                        class="w-full mt-2 rounded border border-gray-300 p-2"
                                        placeholder="Provide details if applicable"></textarea>
                                </td>
                                <td class="px-4 py-3 align-top text-center">
                                    <input type="checkbox" name="amendment_extension" class="w-4 h-4" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Confirmation Statements -->
            <div class="mt-3 p-4 max-w-4xl w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="text-sm mb-3">
                    <p>If you have checked any of these then review the following statements.</p>
                    <ul class="list-disc pl-6">
                        <li>These are the only changes requested</li>
                        <li>These changes do not alter or add to the ethical considerations as described in the original
                            application</li>
                    </ul>
                </div>

                <label class="flex items-center space-x-2">
                    <input type="checkbox" name="confirmation_all_changes" class="w-4 h-4" />
                    <span class="text-sm font-medium">If these all apply, check the box. Otherwise, use the FULL
                        AMENDMENT APPLICATION.</span>
                </label>
            </div>

            <!-- Document Checklist -->
            <div class="mt-3 p-4 max-w-4xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="font-bold text-lg mb-2">Ethical Amendment (Simple) – Document Checklist</h2>

                <p class="text-sm mb-2">
                    Please ensure that you have included copies of any of the documents listed below, if those documents
                    are part of the project paperwork and have been amended, even if only slightly.
                </p>
                <p class="text-sm mb-2">
                    For online research you may include relevant screenshots or excerpts of text instead of forms.
                </p>
                <p class="text-sm mb-4"><b>
                        If all relevant documents are not included, your amendment application will be returned without
                        review.
                    </b></p>

                <div class="overflow-x-auto">
                    <table class="w-full border-collapse text-sm">
                        <tbody>
                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3 w-3/4">Ethical Amendment Application Form (Simple)</td>

                                </td>
                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3">Amended advertisements (Online/paper)</td>


                                </td>
                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3">Amended letters to Parents/Guardians/Children</td>


                                </td>
                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3">Amended Participant Information Sheet</td>


                                </td>
                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3">Amended Participant Consent Form</td>


                                </td>
                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3">Amended Participant Debriefing Form</td>


                                </td>
                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3">Amended external permissions: forms / emails / NHS approvals (in
                                    full)</td>


                                </td>
                            </tr>

                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3">Please list below any other documents that are included with this
                                    application:</td>

                            </tr>
                            <tr>
                                <td colspan="2" class="px-4 py-3">
                                    <textarea name="other_documents" rows="3"
                                        class="w-full rounded border border-gray-300 p-2"
                                        placeholder="List other documents if any"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-3 text-lg text-gray-600">
                    Under <b>no circumstances </b> should this form, or supplementary documents, contain identifiable
                    information about your participants i.e. completed consent forms.
                </div>
            </div>

            <!-- Signatures -->
            <div class="mt-3 p-4 max-w-4xl w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse text-sm">
                        <tbody>
                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3 w-1/3">Applicant PI’s Signature:</td>
                                <td class="px-4 py-3 w-1/3">
                                    <input type="text" name="applicant_pi_signature"
                                        class="w-full rounded border border-gray-300 p-2"
                                        placeholder="Name / Signature" />
                                </td>
                                <td class="px-4 py-3 w-1/6">Date:</td>
                                <td class="px-4 py-3 w-1/6">
                                    <input type="date" name="applicant_pi_date"
                                        class="w-full rounded border border-gray-300 p-2" />
                                </td>
                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3">Noted by Thesis Adviser:</td>
                                <td class="px-4 py-3">
                                    <input type="text" name="thesis_adviser_signature"
                                        class="w-full rounded border border-gray-300 p-2"
                                        placeholder="Name / Signature" />
                                </td>
                                <td class="px-4 py-3">Date:</td>
                                <td class="px-4 py-3">
                                    <input type="date" name="thesis_adviser_date"
                                        class="w-full rounded border border-gray-300 p-2" />
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3">Approved by Research Coordinator:</td>
                                <td class="px-4 py-3">
                                    <input type="text" name="research_coordinator_signature"
                                        class="w-full rounded border border-gray-300 p-2"
                                        placeholder="Name / Signature" />
                                </td>
                                <td class="px-4 py-3">Date:</td>
                                <td class="px-4 py-3">
                                    <input type="date" name="research_coordinator_date"
                                        class="w-full rounded border border-gray-300 p-2" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Buttons -->
            <div class="mt-3 p-1 max-w-4xl w-full bg-lightgray rounded mx-auto shadow-md">
                <div
                    class="p-3 flex items-center justify-center space-x-2 max-sm:flex-col max-sm:space-x-0 max-sm:space-y-2">
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