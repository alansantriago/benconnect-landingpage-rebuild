@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-semibold mb-6">Login Admin</h1>
    <form action="/admin-dashboard" method="POST" class="max-w-md mx-auto bg-gray-800 p-6 rounded-xl">
        @csrf
        <label class="block mb-4">
            <span class="block text-sm">Email</span>
            <input type="email" name="email" class="w-full p-2 rounded bg-gray-700 border border-gray-600" required>
        </label>
        <label class="block mb-4">
            <span class="block text-sm">Password</span>
            <input type="password" name="password" class="w-full p-2 rounded bg-gray-700 border border-gray-600" required>
        </label>
        <button type="submit"
            class="bg-yellow-500 hover:bg-yellow-600 text-black font-semibold px-4 py-2 rounded">Login</button>
    </form>
@endsection
