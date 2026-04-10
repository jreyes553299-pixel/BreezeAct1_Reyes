<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Book a Room') }}
        </h2>
    </x-slot>

    <div class="pt-10 pb-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            <div class="p-6 text-gray-900 dark:text-gray-100 font-bold text-4xl">
                    {{ __("Room Details") }}
            </div>

            <div class="p-6 py-1 text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ route('BookRoom.store') }}" class="space-y-6">
                    @csrf 
                    <div class="guest-info">
                        <x-input-label for="guest_name" value="Guest Name" />
                        <x-text-input id="guest_name" name="guest_name" class="block mt-1 w-full" required placeholder="Enter guest name"/>
                        <x-input-error :messages="$errors->get('guest_name')" class="mt-2" />
                    </div>

                    <div class="guest-email">
                        <x-input-label for="guest_email" value="Guest Email" />
                        <x-text-input id="guest_email" name="guest_email" class="block mt-1 w-full" required placeholder="Enter guest email"/>
                        <x-input-error :messages="$errors->get('guest_email')" class="mt-2" />
                    </div>

                    <div class="room-type">
                        <x-input-label for="room_type" value="Room Type" />
                        <select
                            id="room_type"
                            name="room_type"
                            class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            required
                        >
                            <option value="" disabled selected>Select room type</option>
                            <option value="single">Single</option>
                            <option value="double">Double</option>
                            <option value="suite">Suite</option>
                        </select>
                        <x-input-error :messages="$errors->get('room_type')" class="mt-2" />
                    </div>

                    <div class="check-in-date">
                        <x-input-label for="check_in_date" value="Check-in Date" />
                        <x-text-input id="check_in_date" name="check_in_date" type="date" class="block mt-1 w-full" required />
                        <x-input-error :messages="$errors->get('check_in_date')" class="mt-2" />
                    </div>

                    <div class="check-out-date">
                        <x-input-label for="check_out_date" value="Check-Out Date" />
                        <x-text-input id="check_out_date" name="check_out_date" type="date" class="block mt-1 w-full" required />
                        <x-input-error :messages="$errors->get('check_out_date')" class="mt-2" />
                    </div>

                    <div class="flex justify-end py-5">
                        <x-primary-button>
                            Submit
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>