@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-semibold mb-6">Tambah Data OPD</h1>
    <form action="/data-opd" method="POST" class="max-w-xl bg-gray-800 p-6 rounded-xl">
        @csrf
        <div class="mb-4">
            <label class="block mb-1">Nama OPD</label>
            <input type="text" name="nama_opd" class="w-full p-2 rounded bg-gray-700 border border-gray-600" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Status</label>
            <select name="status" class="w-full p-2 rounded bg-gray-700 border border-gray-600" required>
                <option value="Aktif">Aktif</option>
                <option value="Perlu Perhatian">Perlu Perhatian</option>
                <option value="Kritis">Kritis</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Terakhir Update</label>
            <input type="date" name="terakhir_update" class="w-full p-2 rounded bg-gray-700 border border-gray-600"
                required>
        </div>
        <button type="submit"
            class="bg-yellow-500 hover:bg-yellow-600 text-black font-semibold px-4 py-2 rounded">Simpan</button>
    </form>
@endsection
