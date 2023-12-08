<x-layout>
    <x-card class="max-w-3xl mx-2 sm:mx-auto mt-4 sm:mt-24 px-2 py-4 sm:p-8">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Apply Now
            </h2>
            <p class="my-2 sm:my-4">Send application to {{ $listing->company }} </p>
        </header>
        <br>
        <form action="/listings/{{ $listing->id }}/contact" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid gap-4 auto-col-max sm:grid-cols-2">
                <div class="mb-1 sm:mb-6">
                    <label for="product" class="inline-block text-lg mb-2">What do you want apply for?</label>
                    <select class="border border-gray-200 rounded p-2 w-full" name="product" id="product">
                        <option>&mdash; select &mdash;</option>
                        @foreach ($listing->products as $product)
                            <option value="{{ $product->loan_name }}">{{ $product->loan_name }}</option>
                        @endforeach
                    </select>

                    @error('product')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-1 sm:mb-6">
                    <label for="loan_amount" class="inline-block text-lg mb-2">Preferred Loan Amount</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="loan_amount" />

                    @error('loan_amount')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid gap-4 auto-col-max sm:grid-cols-2">
                <div class="mb-1 sm:mb-6">
                    <label for="firstname" class="inline-block text-lg mb-2">First name</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="firstname" />

                    @error('firstname')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-1 sm:mb-6">
                    <label for="lastname" class="inline-block text-lg mb-2">Last name</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="lastname" />

                    @error('lastname')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid gap-4 auto-col-max sm:grid-cols-2">
                <div class="mb-1 sm:mb-6">
                    <label for="national_id" class="inline-block text-lg mb-2">National ID No.</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="national_id"
                        placeholder="Example: 0011223344556" />
                    @error('national_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-1 sm:mb-6">
                    <label for="phone_number" class="inline-block text-lg mb-2">Phone No.</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="phone_number"
                        placeholder="Example: 76123456" />
                    @error('phone_number')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid gap-4 auto-col-max sm:grid-cols-2">
                <div class="mb-1 sm:mb-6">
                    <label for="address" class="inline-block text-lg mb-2">Physical Address</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="address"
                        placeholder="Example: Mbuluzi, Mbabane" />
                    @error('address')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-1 sm:mb-6">
                    <label for="email" class="inline-block text-lg mb-2">Email Address</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid gap-4 auto-col-max sm:grid-cols-2">
                <div class="mb-1 sm:mb-6">
                    <label for="employer" class="inline-block text-lg mb-2">Employer</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="employer" />
                    @error('employer')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-1 sm:mb-6">
                    <label for="employer_contact" class="inline-block text-lg mb-2">Employer Contact</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="employer_contact" />
                    @error('employer_contact')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid gap-4 auto-col-max sm:grid-cols-2">
                <div class="mb-1 sm:mb-6">
                    <label for="designation" class="inline-block text-lg mb-2">Designation</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="designation"
                        placeholder="Example: Compliance officer" />
                    @error('designation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-1 sm:mb-6">
                    <label for="income_amount" class="inline-block text-lg mb-2">Income Amount</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="income_amount" />
                    @error('income_amount')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mb-1 sm:mb-6">
                <label for="notes" class="inline-block text-lg mb-2">
                    Additional Notes
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="notes" rows="5"
                    placeholder="Include extra notes about your feedback...">
                    </textarea>
                @error('notes')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-1 sm:mb-6">
                <button class="bg-secondary text-white rounded py-2 px-4 hover:bg-text_dark">
                    <i class="mr-3 fa-solid fa-paper-plane"></i>
                    Apply Now
                </button>

                <a href="/" class="text-black ml-4"> Go Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
