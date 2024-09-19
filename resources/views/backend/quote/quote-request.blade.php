<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quote Request List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto py-8 px-8">
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-200">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">Name</th>
                                    <th class="py-3 px-6 text-left">Email</th>
                                    <th class="py-3 px-6 text-left">Phone</th>
                                    <th class="py-3 px-6 text-left">Zip</th>
                                    <th class="py-3 px-6 text-left">Message</th>
                                    <th class="py-3 px-6 text-center">Requested at</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                @foreach ($quotes as $quote)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $quote->name }}</td>
                                        <td class="py-3 px-6 text-left">{{ $quote->email }}</td>
                                        <td class="py-3 px-6 text-left">{{ $quote->phone }}</td>
                                        <td class="py-3 px-6 text-left">{{ $quote->zip }}</td>
                                        <td class="py-3 px-6 text-left">{{ $quote->message }}</td>
                                        <td class="py-3 px-6 text-center">
                                            {{ $quote->created_at->format('Y-m-d H:i:s') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination Links -->
                    <div class="mt-4">
                        {{ $quotes->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
