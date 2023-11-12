@extends('layouts.app')

@section('title', 'NWS - Créer un Étudiant')

@section('content')
    <div class="container mx-auto mt-5">
        <h2 class="text-2xl font-semibold mb-4">Créer un Nouvel Étudiant</h2>

        <form action="{{ route('students.store') }}" method="post" class="w-full max-w-sm">
            @csrf

            <div class="mb-4">
                <label for="lastname" class="block text-gray-700">Nom:</label>
                <input type="text" name="lastname" id="lastname" class="form-input mt-1 block w-full" value="{{ old('lastname') }}" required>
                @error('lastname')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="firstname" class="block text-gray-700">Prénom:</label>
                <input type="text" name="firstname" id="firstname" class="form-input mt-1 block w-full" value="{{ old('firstname') }}" required>
                @error('firstname')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="mail" class="block text-gray-700">Email:</label>
                <input type="email" name="mail" id="mail" class="form-input mt-1 block w-full" value="{{ old('mail') }}" required>
                @error('mail')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="study" class="block text-gray-700">Niveau d'Études (1-5):</label>
                <select name="study" id="study" class="form-select mt-1 block w-full">
                    <option value="1">Année 1</option>
                    <option value="2">Année 2 - dev</option>
                    <option value="3">Année 2 - CD</option>
                    <option value="4">Année 2 - MD</option>
                    <option value="6">Année 2 - CG</option>
                    <option value="7">Année 3 - dev</option>
                    <option value="8">Année 3 - CD</option>
                    <option value="9">Année 3 - MD</option>
                    <option value="10">Année 3 - CG</option>
                </select>
                @error('study')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Créer Étudiant</button>
        </form>
    </div>
@endsection
