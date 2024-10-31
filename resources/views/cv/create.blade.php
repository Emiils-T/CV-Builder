<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new CV</h2>
            <form action="{{route('cv.store')}}" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="firstName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                            Name</label>
                        <input type="text" name="firstName" id="firstName"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="Enter your name" required="">
                    </div>
                    <div class="w-full">
                        <label for="surname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Surname</label>
                        <input type="text" name="surname" id="surname"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="Enter your surname" required="">
                    </div>
                    <div class="w-full">
                        <label for="email"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="text" name="email" id="email"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="Enter your email" required="">
                    </div>
                    <div class="w-full">
                        <label for="phoneNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                            Number</label>
                        <input type="number" name="phoneNumber" id="phoneNumber"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="Enter your phone number" required="">
                    </div>
                    <div class="w-full">
                        <label for="dateOfBirth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Birth</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input id="dateOfBirth" datepicker datepicker-autohide name="dateOfBirth" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>
                    </div>
                    <div class="w-full">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="text" name="address" id="address"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="Enter your Address" required="">
                    </div>

                    <div>
                        <label for="education" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Education</label>
                        <select id="education" name="education"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="" disabled selected hidden>Select you highest education level</option>
                            <option value="Professional">Professional</option>
                            <option value="Masters">Masters</option>
                            <option value="Bachelors">Bachelors</option>
                            <option value="High school">High school</option>
                            <option value="Elementary">Elementary</option>
                        </select>
                    </div>

                    <div class="flex gap-4">
                        <button type="button" onclick="addLanguagePair()"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Add Language
                        </button>
                    </div>

                    <div class="sm:col-span-2" id="languages-container">
                        <template id="language-pair-template">
                            <div class="language-pair mb-4 border p-4 rounded-lg">
                                <div class="flex justify-between mb-2">
                                    <h3 class="text-lg font-semibold">Language Details</h3>
                                    <button type="button" onclick="removeLanguagePair(this)"
                                            class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Language</label>
                                        <select name="languages[]"
                                                onchange="handleLanguageChange(this)"
                                                class="language-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value="" disabled selected hidden>Select language</option>
                                            @foreach($languages as $code => $language)
                                                <option value="{{ $code }}">{{ $language }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div>
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Language level</label>
                                        <select name="language_levels[]" disabled
                                                class="level-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value="" disabled selected>Select level</option>
                                            @foreach($languageLevels as $code => $level)
                                                <option value="{{ $code }}">{{ $level }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                    <div class="flex gap-4">
                        <button
                            type="button"
                            id="addExperienceSubform"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Add Experience
                        </button>
                    </div>

                    <div id="experienceSubformsContainer" class="sm:col-span-2">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="skills" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Skills</label>
                        <textarea id="skills" name="skills" rows="8"
                                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                  placeholder="Enter your skill"></textarea>
                    </div>
                </div>
                <button type="submit"
                        class="inline-flex bg-blue-700 items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Submit CV
                </button>
            </form>
        </div>
    </section>

    <template id="experienceTemplate">
        <div class="subform bg-gray-50 rounded-lg mt-6 p-6 border border-gray-200 shadow-sm">
            <div class="flex justify-between items-center mb-4">
                <h4 class="text-lg font-medium text-gray-900">Experience #<span class="subform-number"></span></h4>
                <button
                    type="button"
                    class="remove-subform inline-flex items-center p-1.5 border border-transparent rounded-full text-red-600 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Employer</label>
                    <input
                        type="text"
                        name="experience[INDEX][employer]"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    >
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Job Title</label>
                    <input
                        type="text"
                        name="experience[INDEX][job_title]"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    >
                </div>
                <div class="grid gap-4">
                    <div class="col-span-2">
                        <label class=" w-full block text-sm font-medium text-gray-700">City</label>
                        <input
                            type="text"
                            name="experience[INDEX][city]"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        >
                    </div>

                    <div class="col-span-2">
                        <label class=" w-full block text-sm font-medium text-gray-700">Country</label>
                        <input
                            type="text"
                            name="experience[INDEX][country]"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        >
                    </div>
                    <div class="w-full">
                        <label class=" w-full block text-sm font-medium text-gray-700">Start Date</label>
                        <input
                            type="date"
                            name="experience[INDEX][start_date]"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        >
                    </div>
                    <div class="w-full">
                        <label class=" w-full block text-sm font-medium text-gray-700">End Date</label>
                        <input
                            type="date"
                            name="experience[INDEX][end_date]"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        >
                    </div>
                    <div class="col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea
                            name="experience[INDEX][description]"
                            rows="4"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        ></textarea>
                    </div>
                </div>


            </div>
        </div>
    </template>

    <script>
        //language select
        let pairCounter = 0;

        function addLanguagePair() {
            const container = document.getElementById('languages-container');
            const template = document.getElementById('language-pair-template');
            const clone = template.content.cloneNode(true);

            // Update the clone's selects with unique identifiers
            const languageSelect = clone.querySelector('.language-select');
            const levelSelect = clone.querySelector('.level-select');

            pairCounter++;
            languageSelect.id = `language-${pairCounter}`;
            levelSelect.id = `level-${pairCounter}`;

            container.appendChild(clone);
        }

        function removeLanguagePair(button) {
            button.closest('.language-pair').remove();
        }

        function handleLanguageChange(languageSelect) {
            const parentDiv = languageSelect.closest('.language-pair');
            const levelSelect = parentDiv.querySelector('.level-select');

            if (languageSelect.value) {
                levelSelect.disabled = false;
                levelSelect.selectedIndex = 0;
            } else {
                levelSelect.disabled = true;
                levelSelect.selectedIndex = 0;
            }
        }

        // Add initial language pair on page load
        document.addEventListener('DOMContentLoaded', function() {
            addLanguagePair();
        });
        // experience
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('experienceSubformsContainer');
            const addButton = document.getElementById('addExperienceSubform');
            const template = document.getElementById('experienceTemplate');
            let subformCount = 0;

            // Add subform with animation
            addButton.addEventListener('click', function() {
                subformCount++;

                // Clone the template
                const subform = template.content.cloneNode(true);
                const subformDiv = subform.querySelector('.subform');

                // Add initial state for animation
                subformDiv.classList.add('opacity-0', 'transform', 'scale-95');

                // Update the subform number
                subform.querySelector('.subform-number').textContent = subformCount;

                // Update input names with correct index for all form elements
                subform.querySelectorAll('input, textarea, select').forEach(element => {
                    element.name = element.name.replace('INDEX', subformCount - 1);
                });

                // Add remove button functionality
                const removeButton = subform.querySelector('.remove-subform');
                removeButton.addEventListener('click', function() {
                    const subformToRemove = this.closest('.subform');

                    // Animate removal
                    subformToRemove.classList.add('transform', 'scale-95', 'opacity-0');
                    setTimeout(() => {
                        subformToRemove.remove();
                        updateSubformNumbers();
                    }, 150);
                });

                // Add the new subform to the container
                container.appendChild(subform);

                // Trigger animation
                requestAnimationFrame(() => {
                    subformDiv.classList.remove('opacity-0', 'scale-95');
                    subformDiv.classList.add('transition', 'ease-out', 'duration-200');
                });
            });

            function updateSubformNumbers() {
                document.querySelectorAll('.subform').forEach((subform, index) => {
                    subform.querySelector('.subform-number').textContent = index + 1;

                    // Update input names for all form elements
                    subform.querySelectorAll('input, textarea, select').forEach(element => {
                        element.name = element.name.replace(/subforms\[\d+\]/, `subforms[${index}]`);
                    });
                });
            }
        });
    </script>
</x-app-layout>
