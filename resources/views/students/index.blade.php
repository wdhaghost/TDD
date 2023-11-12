@extends('layouts.app')

@section('title', 'NWS - Liste des Étudiants')

@section('content')
    <div class="container mx-auto mt-5">
        <h2 class="text-2xl font-semibold mb-4">Liste des Étudiants</h2>
        <a href="{{ route('students.create') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-2 rounded shadow">Ajouter un Étudiant</a>    
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Succès!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Prénom</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Niveau d'Études</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $student->lastname }}</td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $student->firstname }}</td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $student->mail }}</td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $student->study }}</td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <a href="{{ route('students.show', $student->id) }}" class="text-indigo-600 hover:text-indigo-900">Voir</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="text-blue-600 hover:text-blue-900 ml-2">Modifier</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
