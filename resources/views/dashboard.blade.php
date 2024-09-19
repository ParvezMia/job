<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto py-8">
                        <canvas id="visitorChart" width="400" height="200"></canvas>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



                </div>
            </div>
        </div>
    </div>

    <script>
        var ctx = document.getElementById('visitorChart').getContext('2d');
        var visitorChart = new Chart(ctx, {
            type: 'line', // You can change the chart type (bar, pie, etc.)
            data: {
                labels: {!! json_encode($visitors->pluck('date')) !!}, // X-axis (dates)
                datasets: [{
                    label: 'Number of Visitors',
                    data: {!! json_encode($visitors->pluck('count')) !!}, // Y-axis (visitor counts)
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    fill: false,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-app-layout>
