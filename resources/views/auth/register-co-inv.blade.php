<x-guest-layout>
    <form method="POST" action="" id="studentForm">
        @csrf
        <h2 class="mb-4 font-medium uppercase text-xl max-sm:text-base text-primary">Registration Form</h2>
        <!-- Name -->
        <div id="co-wrapper">
            <x-input-label for="Co_Investigators" :value="__('Co-Investigator/s (type N/A if none)')" />
            <x-text-input id="Co_Investigators" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]"
                type="text" name="Co_Investigators" :value="old('Co_Investigators')" required autocomplete="Co_Investigators"
                placeholder="e.g. (John Doe, Carlos González)" />
            <x-input-error :messages="$errors->get('Co_Investigators')" class="mt-2" />
        </div>

        <!-- Research Title -->
        <div class="mt-2">
            <x-input-label for="pi_title" :value="__('Research Title')" />
            <x-text-input id="pi_title" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]" type="text"
                name="pi_title" :value="old('pi_title')" required autocomplete="pi_title"
                placeholder="Research Title" />
            <x-input-error :messages="$errors->get('pi_title')" class="mt-2" />
        </div>

        <!-- Attach Endorsement Letter File -->
        <div class="mt-2">
            <x-input-label for="attachments" :value="__('Endorsement Letter')" />
            <x-text-input id="endorsement"
                class="block mt-1 w-full rounded-md p-1 hover:bg-transparent text-[14px] max-sm:text-[13px] h-[35px]"
                type="file" name="endorsement[]" multiple />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm max-sm:text-[13px] text-primary hover:text-secondary duration-200 rounded-md focus:outline-none"
                href="{{ route('login') }}">
                {{ __('Back to Login') }}
            </a>
            <!-- button type="button" ginamit ko para madirect sya into 1st part khit nakarequired(pag submit button ginamit, di madidirect si user sa 2nd part since naka required sya) -->
            <a href="{{ url('/register') }}">
                <button type="button" class="ms-2 bg-secondary hover:bg-primary text-primary hover:text-secondary max-sm:text-sm px-4 py-2 rounded-lg uppercase tracking-widest">
                    Back
                </button>
            </a>
            <x-primary-button class="ms-2 max-sm:text-sm">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>