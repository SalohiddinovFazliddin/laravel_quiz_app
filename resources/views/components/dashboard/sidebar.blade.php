<aside class="bg-white w-64 min-h-screen flex flex-col shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in fixed md:static z-30" id="sidebar">
    <div class="p-4 border-b flex items-center justify-between">
        <h2 class="text-2xl font-bold text-gray-800">Quiz App</h2>
        <div>
            <button class="md:hidden text-gray-600" onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')">
                <i class="fas fa-close text-xl"></i>
            </button>
        </div>
    </div>
    <nav class="flex-grow p-4">
        <a href="{{ route('dashboard') }}" class="block p-3 mb-2 text-gray-800 {{ Route::is('dashboard.home') ? 'bg-gray-100' : 'hover:bg-gray-100' }} rounded-lg">
            <i class="fas fa-home mr-2"></i> Dashboard
        </a>
        <a href="{{ route('quizzes') }}" class="block p-3 mb-2 text-gray-600 {{ Route::is('dashboard.quizzes') ? 'bg-gray-100' : 'hover:bg-gray-100' }} rounded-lg">
            <i class="fas fa-book mr-2"></i> My Quizzes
        </a>
        <a href="{{ route('create-quiz') }}" class="block p-3 mb-2 text-gray-600 {{ Route::is('dashboard.create-quiz') ? 'bg-gray-100' : 'hover:bg-gray-100' }} rounded-lg">
            <i class="fas fa-plus mr-2"></i> Create Quiz
        </a>
        <a href="{{ route('statistics') }}" class="block p-3 mb-2 text-gray-600 {{ Route::is('dashboard.statistics') ? 'bg-gray-100' : 'hover:bg-gray-100' }} rounded-lg">
            <i class="fas fa-chart-bar mr-2"></i> Statistics
        </a>
    </nav>
</aside>
