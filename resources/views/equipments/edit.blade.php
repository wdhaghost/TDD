@extends('layouts.app')

@section('title', 'NWS - Modifier Étudiant')

@section('content')
    <div class="container mx-auto mt-5">
        <h2 class="text-2xl font-semibold mb-4">Modifier Étudiant</h2>

        <form action="{{ route('equipments.update', $equipment->id) }}" method="post" class="w-full max-w-sm">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nom:</label>
                <input type="text" name="name" id="name" class="form-input mt-1 block w-full" value="{{ old('name', $equipment->name) }}" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <input type="text" name="description" id="description" class="form-input mt-1 block w-full" value="{{ old('description', $equipment->description) }}" required>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="quantity" class="block text-gray-700">Quantité:</label>
                <input type="number" name="quantity" id="quantity" class="form-input mt-1 block w-full" value="{{ old('quantity', $equipment->quantity) }}" required>
                @error('mail')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

           
        
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Mettre à jour Étudiant</button>
        </form>
    </div>
@endsection
