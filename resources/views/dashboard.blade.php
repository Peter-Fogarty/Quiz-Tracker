<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Summary Stats') }}
        </h2>
    </x-slot>
    <div class="w-50% align-center py-12 flex flex-row">
        <div class="flex flex-1 flex-row w-50% place-items-center">
            <div class="w-50% flex-1 flex flex-row px-4 bg-transparent sm:rounded-lg">
                <x-core.dashboard-card title="Quizzes" :value=$numberOfQuizzes />

            </div>
            <div class="w-50% flex-1 flex flex-row px-4 bg-transparent sm:rounded-lg">
                <x-core.dashboard-card title="Wins" :value=$numberOfWins />

            </div>
            <div class="w-50% flex-1 flex flex-row px-4 bg-transparent sm:rounded-lg">
                <x-core.dashboard-card title="Seconds" :value=$numberOfSeconds />

            </div>
            <div class="w-50% flex-1 flex flex-row px-4 bg-transparent sm:rounded-lg">
                <x-core.dashboard-card title="Thirds" :value=$numberOfThirds />

            </div>
            <div class="w-50% flex-1 flex flex-row px-4 bg-transparent sm:rounded-lg">
                <x-core.dashboard-card title="Average Place" :value=$average />

            </div>
            <div class="w-50% flex-1 flex flex-row px-4 bg-transparent sm:rounded-lg">
                <x-core.dashboard-card title="Average Score" :value=$averageScore />

            </div>
        </div>
    </div>
</x-app-layout>
