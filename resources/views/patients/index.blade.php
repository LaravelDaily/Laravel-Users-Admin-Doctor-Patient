<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Patients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="overflow-hidden overflow-x-auto mb-4 min-w-full align-middle sm:rounded-md">
                        <table class="min-w-full border divide-y divide-gray-200">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Name</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Birth date</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Declared address</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Home address</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Phone no</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Gender</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Personal code</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Social number</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Last visit time</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Last visit reason</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Description</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                            @foreach($patients as $patient)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                        {{ $patient->name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                        {{ $patient->patent_birth_date }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                        {{ $patient->patient_declared_address }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                        {{ $patient->patient_home_address }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                        {{ $patient->patient_phone_no }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                        {{ $patient->patient_gender }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                        {{ $patient->patient_personal_code }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                        {{ $patient->patient_social_number }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                        {{ $patient->patient_last_visit_time }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                        {{ $patient->patient_last_visit_reason }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                        {{ Str::words($patient->patient_description, 3) }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $patients->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
