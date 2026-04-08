<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Book Room') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("This is the Book Room page.") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="" class="space-y-6">
                    @csrf 
                    <div class="guest-info">
                        <x-input-label for="guest_name" value="Guest Name" />
                        <x-text-input id="guest_name" name="guest_name" class="block mt-1 w-full" required placeholder="Enter guest name"/>
                    </div>

                    <div class="guest-email">
                        <x-input-label for="guest_email" value="Guest Email" />
                        <x-text-input id="guest_email" name="guest_email" class="block mt-1 w-full" required placeholder="Enter guest email"/>
                    </div>

                    <div class="room-type">
                        <x-input-label for="room_type" value="Room Type" />
                        <form-select name="room_type" label="Room Type" :options="['single', 'double', 'suite']" />
                    </div>

                    <div class="check-in-date">
                        <x-input-label for="check_in_date" value="Check-in Date" />
                        <x-text-input id="check_in_date" name="check_in_date" type="date" class="block mt-1 w-full" required />
                    </div>

                    <x-primary-button class="mt-4">
                        Submit
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>