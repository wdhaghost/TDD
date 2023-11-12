@extends('layouts.app')

@section('title', 'NWS - Modifier Étudiant')

@section('content')
    <div class="container mx-auto mt-5">
        <h2 class="text-2xl font-semibold mb-4">Modifier Étudiant</h2>

        <form action="{{ route('students.update', $student->id) }}" method="post" class="w-full max-w-sm">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="lastname" class="block text-gray-700">Nom:</label>
                <input type="text" name="lastname" id="lastname" class="form-input mt-1 block w-full" value="{{ old('lastname', $student->lastname) }}" required>
                @error('lastname')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="firstname" class="block text-gray-700">Prénom:</label>
                <input type="text" name="firstname" id="firstname" class="form-input mt-1 block w-full" value="{{ old('firstname', $student->firstname) }}" required>
                @error('firstname')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="mail" class="block text-gray-700">Email:</label>
                <input type="email" name="mail" id="mail" class="form-input mt-1 block w-full" value="{{ old('mail', $student->mail) }}" required>
                @error('mail')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="study" class="block text-gray-700">Niveau d'Études (1-5):</label>
                <select name="study" id="study" class="form-select mt-1 block w-full">
                    <option value="1" {{ old('study', $student->study) == 1 ? 'selected' : '' }}>Année 1</option>
                    <option value="2" {{ old('study', $student->study) == 2 ? 'selected' : '' }}>Année 2 - dev</option>
                    <option value="3" {{ old('study', $student->study) == 3 ? 'selected' : '' }}>Année 2 - CD</option>
                    <option value="4" {{ old('study', $student->study) == 4 ? 'selected' : '' }}>Année 2 - MD</option>
                    <option value="6" {{ old('study', $student->study) == 6 ? 'selected' : '' }}>Année 2 - CG</option>
                    <option value="7" {{ old('study', $student->study) == 7 ? 'selected' : '' }}>Année 3 - dev</option>
                    <option value="8" {{ old('study', $student->study) == 8 ? 'selected' : '' }}>Année 3 - CD</option>
                    <option value="9" {{ old('study', $student->study) == 9 ? 'selected' : '' }}>Année 3 - MD</option>
                    <option value="10" {{ old('study', $student->study) == 10 ? 'selected' : '' }}>Année 3 - CG</option>
                </select>
                @error('study')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Mettre à jour Étudiant</button>
        </form>
    </div>
@endsection
