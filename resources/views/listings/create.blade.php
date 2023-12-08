<x-layout>
    <x-card class="max-w-4xl mx-3 sm:mx-auto mt-6 sm:mt-24 p-2 sm:p-8">
        <header class="text-center sm:text-left">
            <h2 class="text-lg sm:text-3xl font-bold capitalize">
                Get listed on the Marketplace
            </h2>
            <p class="text-sm sm:text-lg my-3 sm:my-6">Tell us about your Business</p>
        </header>

        <form action="/listings" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid gap-4 auto-col-max sm:grid-cols-2">
                <div class="mb-2 sm:mb-6">
                    <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                    <input value="{{ old('company') }}" type="text" class="border border-gray-200 rounded p-2 w-full"
                        name="company" />

                    @error('company')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-2 sm:mb-6">
                    <label for="category" class="inline-block text-lg mb-2">Business Category</label>
                    <select class="border border-gray-200 rounded p-2 w-full" name="category" id="category">
                        <option value="">&mdash; select &mdash;</option>
                        <option value="Insurance">Insurance</option>
                        <option value="Sacco">SACCO</option>
                        <option value="Micro-lender">Micro-lender</option>
                        <option value="Bank">Bank</option>
                        <option value="Credit Provider">Credit Provider</option>
                    </select>

                    @error('category')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid gap-4 auto-col-max sm:grid-cols-2">
                <div class="mb-2 sm:mb-6">
                    <label for="email" class="inline-block text-lg mb-2">Email Address</label>
                    <input value="{{ old('email') }}" type="email" class="border border-gray-200 rounded p-2 w-full"
                        name="email" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-2 sm:mb-6">
                    <label for="telephone" class="inline-block text-lg mb-2">Telephone No.</label>
                    <input value="{{ old('telephone') }}" type="text"
                        class="border border-gray-200 rounded p-2 w-full" name="telephone" />
                    @error('telephone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid gap-4 auto-col-max sm:grid-cols-2">
                <div class="mb-2 sm:mb-6">
                    <label for="mobile" class="inline-block text-lg mb-2">Mobile No.</label>
                    <input value="{{ old('mobile') }}" type="text" class="border border-gray-200 rounded p-2 w-full"
                        name="mobile" />
                    @error('mobile')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-2 sm:mb-6">
                    <label for="location" class="inline-block text-lg mb-2">Physical Address</label>
                    <input value="{{ old('location') }}" type="text"
                        class="border border-gray-200 rounded p-2 w-full" name="location"
                        placeholder="Example: Mbabane, Eswatini" />
                    @error('location')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Company Logo
                </label>
                <input type="file" name="logo" id="logo"
                    class="sm:p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                <img id="preview" src="#" alt="your image" class="border border-gray-200 rounded mt-3"
                    style="display:none; width: 120px;" />

                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-2 sm:mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Company Website (optional)
                </label>
                <input value="{{ old('website') }}" type="text" class="border border-gray-200 rounded p-2 w-full"
                    name="website" placeholder="Example: www.website.com" />
                @error('website')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-2 sm:mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Describe your business
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="3" placeholder="Description">
                    {{ old('description') }}
                </textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-6 mb-2 sm:mb-6" id="fields">
                <label for="services" class="flex justify-between items-center text-lg mb-2">
                    Add Products
                    <button type="button"
                        class="mb-2 py-1 px-3 rounded bg-text_dark align-end text-white text-xs hover:translate-x-px"
                        id="add" name="add">
                        <i class="fa-solid fa-plus sm:mr-2"></i>
                        <span class="hidden sm:inline-block">Add another product</span>
                    </button>
                </label>
                <div class="flex-col flex sm:flex-row align-center gap-2 mb-2">

                    <select class="mb-4 border border-gray-200 rounded p-2 w-full xl:w-2/12 sm:w-2/12"
                        name="inputs[0][loan_type]" id="loan_type">
                        <option value="">&mdash; loan type &mdash;</option>
                        <option value="Short Term">Short Term</option>
                        <option value="Long Term">Long Term</option>
                    </select>
                    <input value="{{ old('loan_name') }}" type="text"
                        class="mb-4 border border-gray-200 rounded p-2 w-full xl:w-4/12 sm:w-8/12"
                        name="inputs[0][loan_name]" placeholder="e.g: Umtukulu Loan" />
                    <input value="{{ old('interest_rate') }}" type="text"
                        class="mb-4 border border-gray-200 rounded p-2 w-full xl:w-3/12 sm:w-2/12"
                        name="inputs[0][interest_rate]" placeholder="Interest Rate" />
                    <input value="{{ old('amount_range') }}" type="text"
                        class="mb-4 border border-gray-200 rounded p-2 w-full xl:w-3/12 sm:w-2/12"
                        name="inputs[0][amount_range]" placeholder="Amount Range" />
                </div>

            </div>

            <div class="mb-2 sm:mb-6">
                <button class="bg-secondary text-white rounded py-2 px-4 hover:bg-text_dark">
                    Get listed
                </button>

                <a href="{{ url()->previous() }}" class="text-black ml-4"> Go Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
<script>
    var i = 0;

    $('#add').click(function() {
        ++i
        $('#fields').append(
            `
            <div>
                <div class="flex-col flex sm:flex-row align-center gap-2 mb-2">
                    <select class="mb-4 border border-gray-200 rounded p-2 w-full xl:w-2/12 sm:w-2/12"
                        name="inputs[${i}][loan_type]" id="loan_type">
                        <option value="">&mdash; loan type &mdash;</option>
                        <option value="Short Term">Short Term</option>
                        <option value="Long Term">Long Term</option>
                    </select>
                    <input value="{{ old('loan_name') }}" type="text"
                        class="mb-4 border border-gray-200 rounded p-2 w-full xl:w-4/12 sm:w-8/12"
                        name="inputs[${i}][loan_name]" placeholder="e.g: Umtukulu Loan" />
                    <input value="{{ old('interest_rate') }}" type="text"
                        class="mb-4 border border-gray-200 rounded p-2 w-full xl:w-3/12 sm:w-2/12"
                        name="inputs[${i}][interest_rate]" placeholder="Interest Rate" />
                    <input value="{{ old('amount_range') }}" type="text"
                        class="mb-4 border border-gray-200 rounded p-2 w-full xl:w-3/12 sm:w-2/12"
                        name="inputs[${i}][amount_range]" placeholder="Amount Range" />
                </div>
                <button type="button"
                    class="mt-3 mb-2 py-1 px-3 rounded bg-secondary align-end text-white text-xs hover:translate-x-px"
                    id="remove" name="remove">
                    <i class="fa-solid fa-minus mr-2"></i>
                    Remove this row
                </button>
            </div>
            `
        )

        $(document).on('click', '#remove', function() {
            $(this).parent('div').remove()
        })
    })

    // logo = document.getElementById('logo')
    logo.onchange = evt => {
        preview = document.getElementById('preview');
        preview.style.display = 'block';
        const [file] = logo.files
        if (file) {
            preview.src = URL.createObjectURL(file)
        }
    }
</script>
