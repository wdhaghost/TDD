@extends('layouts.app')

@section('title', 'Accueil - Normandie Web School')

@section('content')
    <div class="container mx-auto mt-5">
        <h1 class="text-3xl font-semibold mb-4">Bienvenue à la Normandie Web School</h1>
        <p class="text-lg mb-4">Inventaire NWS</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Étudiants</h2>
                <ul>
                    <li><a href="{{ route('students.index') }}" class="text-blue-600 hover:text-blue-900">Liste des Étudiants</a></li>
                    <li>  <a href="{{ route('students.create') }}" class="text-blue-600 hover:text-blue-900">Ajouter du matériel</a>    </li>
                </ul>
                
            </div>
            <div class="flex flex-col bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Matériels</h2>
                <ul>
                    <li><a href="{{ route('equipments.index') }}" class="text-blue-600 hover:text-blue-900">Liste de matériel</a></li>
                </ul>
                 <a href="{{ route('equipments.create') }}" class="text-blue-600 hover:text-blue-900">Ajouter du matériel</a>   
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Prêts</h2>
               
            </div>
        </div>

        
    </div>
@endsection
