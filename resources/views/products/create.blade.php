<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nuevo registro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('products.store') }}" class="text-right">
                    @csrf
                    <div class="row justify-content-md-center text-left">
                        <div class="col-md-7">
                            <label class="form-label">Nombre</label>
                            <input name="name" type="text" class="form-input">
                        </div>
                        <div class="col-md-7">
                            <label class="form-label">Precio</label>
                            <input name="price" type="number" class="form-input" step="0.01" min="0.01">
                        </div>
                    </div>
                        
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{ route('products.index') }}" class="btn btn-danger">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>