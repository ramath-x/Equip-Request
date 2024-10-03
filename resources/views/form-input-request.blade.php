<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('เบิกอุปกรณ์') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <x-equipment-form :categories="$categories" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-5 p-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold mb-4">กรอกฟอร์มเพื่อส่งรายละเอียดอุปกรณ์ที่ต้องการ</h2>

        <form action="{{ route('equipment-requests.store') }}" method="POST">
            @csrf
            <input type="hidden" name="employee_id" value="{{ auth()->user()->id }}">
            <!-- เรียกใช้ component equipment-form -->
            <x-equipment-form :categories="$categories" />
            
            <button type="submit" class="mt-4 py-2 bg-green-600 text-white font-semibold rounded-md">บันทึก</button>
        </form>
    </div>
@endsection
