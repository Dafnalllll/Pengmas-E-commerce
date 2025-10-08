<div class="mx-auto max-w-3xl -mt-6 mb-10 relative z-20">
    <!-- boundary wrapper: mencegah elemen lain mendekat -->
    <div>
        <div class="flex justify-center">
            <div class="rounded-lg bg-[#A52A2A] px-4 py-2 flex flex-wrap justify-center items-center gap-4 text-sm text-gray-100 text-center">
                <span class="text-gray-100 font-semibold">Views</span>

                <span class="text-gray-300">•</span>

                <div class="flex items-center gap-2 text-gray-200">
                    <span class="text-gray-300">Today:</span>
                    <span class="font-medium text-white">{{ $today ?? 4 }}</span>
                </div>

                <span class="text-gray-300">•</span>

                <div class="flex items-center gap-2 text-gray-200">
                    <span class="text-gray-300">Week:</span>
                    <span class="font-medium text-white">{{ $week ?? 47 }}</span>
                </div>

                <span class="text-gray-300">•</span>

                <div class="flex items-center gap-2 text-gray-200">
                    <span class="text-gray-300">Month:</span>
                    <span class="font-medium text-white">{{ $month ?? 190 }}</span>
                </div>

                <span class="text-gray-300">•</span>

                <div class="text-gray-100 font-semibold">
                    Total: {{ number_format($total ?? 1292) }}
                </div>
            </div>
        </div>
    </div>
</div>
