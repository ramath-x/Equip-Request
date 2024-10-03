<form method="POST" action="{{ route('equipment.request.store') }}" class="space-y-6">
    @csrf

    <!-- หมวดหมู่ 1: เมาส์ -->
    <div class="mb-6">
        <label for="mouse" class="block text-sm font-medium text-gray-700">เลือกเมาส์</label>
        <select id="mouse" name="equipment[mouse]" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="">-- กรุณาเลือก --</option>
            @foreach ($categories['mouse'] as $mouse)
                @if ($categories['status_mouse'] == true)
                <option value="{{ $mouse->id }}">{{ $mouse->name }} - ฿{{ $mouse->price }}</option>
                @else
                <option value="{{ $mouse->equipment->id }}">{{ $mouse->equipment->name }} - ฿{{ $mouse->equipment->price }}</option> 
                @endif


            @endforeach
        </select>
        @error('equipment.mouse')
            <span class="text-sm text-red-600">{{ $message }}</span>
        @enderror
    </div>

    <!-- หมวดหมู่ 2: คีย์บอร์ด -->
    <div class="mb-6">
        <label for="keyboard" class="block text-sm font-medium text-gray-700">เลือกคีย์บอร์ด</label>
        <select id="keyboard" name="equipment[keyboard]" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="">-- กรุณาเลือก --</option>
            @foreach ($categories['keyboard'] as $keyboard)
                <option value="{{ $keyboard->id }}">{{ $keyboard->name }} - ฿{{ $keyboard->price }}</option>
            @endforeach
        </select>
        @error('equipment.keyboard')
            <span class="text-sm text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <!-- หมวดหมู่ 3: จอมอนิเตอร์ -->
    <div class="mb-6">
        <label class="block text-sm font-medium text-gray-700">เลือกจอมอนิเตอร์</label>
        <div class="mt-1 grid grid-cols-1 gap-4 sm:grid-cols-2">
            @foreach ($categories['monitor'] as $monitor)
                <div class="flex items-center">
                    <input id="monitor-{{ $monitor->id }}" name="equipment[monitor][]" value="{{ $monitor->id }}" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    <label for="monitor-{{ $monitor->id }}" class="ml-2 text-sm text-gray-700">{{ $monitor->name }} - ฿{{ $monitor->price }}</label>
                </div>
            @endforeach
        </div>
        @error('equipment.monitor')
            <span class="text-sm text-red-600">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex justify-end">
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            ส่งคำขออุปกรณ์
        </button>
    </div>
</form>

