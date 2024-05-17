<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('products.update', $product->id) }}" class="text-right">
                    @csrf
                    @method('PUT')

                    <div class="row justify-content-md-center text-left">
                        <div class="col-md-7">
                            <label class="form-label">Nombre</label>
                            <input class="form-input" name="name" id="name" value="{{ old('name', $product->name) }}" type="text">
                        </div>
                        <div class="col-md-7">
                            <label class="form-label">Precio</label>
                            <input class="form-input" name="price" id="price" value="{{ old('price', $product->price) }}" type="number" step="0.01" min="0.01">
                        </div>
                    </div>
                        
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <a href="{{ route('products.index') }}" class="btn btn-danger">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
