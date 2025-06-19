@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-semibold mb-6">Dashboard Command Center</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-gray-700 p-6 rounded-xl shadow-lg">
            <h2 class="text-xl font-bold mb-2">Total OPD</h2>
            <p class="text-4xl">32</p>
        </div>

        <div class="bg-gray-700 p-6 rounded-xl shadow-lg">
            <h2 class="text-xl font-bold mb-2">Laporan Hari Ini</h2>
            <p class="text-4xl">7</p>
        </div>

        <div class="bg-gray-700 p-6 rounded-xl shadow-lg">
            <h2 class="text-xl font-bold mb-2">Status Kritis</h2>
            <p class="text-4xl text-red-400">2</p>
        </div>
    </div>
@endsection
