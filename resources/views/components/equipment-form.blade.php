<div class="container mx-auto mt-5 p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-bold mb-4">เพิ่ม/ลด รายการอุปกรณ์</h2>

    <form action="{{ route('equipment.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">ชื่ออุปกรณ์:</label>
            <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-200" name="name" id="name" required>
        </div>

        <div class="mb-4">
            <label for="category_id" class="block text-sm font-medium text-gray-700">หมวดหมู่:</label>
            <select class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-200" name="category_id" id="category_id" required>
                <option value="">เลือกหมวดหมู่</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700">ราคา:</label>
            <input type="number" step="0.01" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-200" name="price" id="price" required>
        </div>

        <div class="flex w-full justify-center">
            <x-primary-button class="ms-3">
            บันทึกข้อมูล
            </x-primary-button>
        </div>
    </form>
</div>



