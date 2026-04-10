<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bookings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session('status'))
                        <div class="mb-4 rounded-md bg-green-100 px-4 py-3 text-green-800 dark:bg-green-900/30 dark:text-green-300">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-900/50">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">Guest Name</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">Guest Email</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">Room Type</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">Check-in</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">Check-out</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse ($bookings as $booking)
                                    <tr>
                                        <td class="px-4 py-3">{{ $booking->guest_name }}</td>
                                        <td class="px-4 py-3">{{ $booking->guest_email }}</td>
                                        <td class="px-4 py-3 capitalize">{{ $booking->room_type }}</td>
                                        <td class="px-4 py-3">{{ \Illuminate\Support\Carbon::parse($booking->check_in_date)->format('M d, Y') }}</td>
                                        <td class="px-4 py-3">{{ \Illuminate\Support\Carbon::parse($booking->check_out_date)->format('M d, Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-4 py-6 text-center text-sm text-gray-500 dark:text-gray-400">
                                            No bookings found yet.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>