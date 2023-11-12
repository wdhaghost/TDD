<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div>
                    <a href="{{route('home')}}" class="text-lg font-semibold text-slate-900">NWS</a>
                </div>
                <div>
                    <a href="{{ route('students.index') }}" class="text-slate-900 hover:text-slate-700">Etudiants</a>
                </div>
                <div>
                    <a href="{{ route('equipments.index') }}" class="text-slate-900 hover:text-slate-700">Matériels</a>
                </div>
    
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-white shadow">
        <div class="container mx-auto px-4 py-4">
            <div class="text-center text-gray-500">
                &copy; {{ date('Y') }} Mon site. Tous droits réservés.
            </div>
        </div>
    </footer>
</body>
</html>
