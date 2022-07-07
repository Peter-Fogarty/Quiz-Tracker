<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold leading-tight text-gray-800 md:ml-12 ">
            {{ __('Player Stats') }}
        </h2>

    </x-slot>
    <div class="flex flex-col w-4/5 mt-8">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="w-4/5 overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-blue-300 ">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-blue-900 sm:pl-6">
                                    Name</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-blue-900">
                                    Appearances</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-blue-900">
                                    Best Finish</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-blue-900">
                                    Average Score</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-blue-900">
                                    Average Position</th>
                            </tr>
                        </thead>
                        <tbody class="rounded-lg">
                            @forelse ($results as $result)
                                @if ($loop->even)
                                    <tr class="my-3 bg-blue-100">
                                    @else
                                    <tr class="my-3 bg-transparent">
                                @endif

                                <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                    {{ $result->name }}</td>
                                <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                    {{ $result->appearances }}</td>
                                <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                    {{ $result->best }}</td>
                                <td class="px-3 py-4 text-sm text-gray-700 whitespace-nowrap">
                                    {{ $result->score }}</td>
                                <td></td>

                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
