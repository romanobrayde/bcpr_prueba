<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="text-right">
                    <a href="{{ route('products.create') }}" role="button" class="btn btn-success btn-xs pull-right">
                        <b>+ </b>Crear producto
                    </a>
                </div>

                <div class="table-responsive text-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td style="vertical-align: middle;">{{ $product->name }}</td>
                                <td style="vertical-align: middle;">{{ $product->price }}</td>
                                <td>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Editar</a>
                                    <button type="button" onclick="confirmDelete('{{ $product->id }}')" class="btn btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    function confirmDelete(id){
        alertify.confirm("¿Seguro que quieres eliminar este producto?", function(e){
            if(e) {
                let form =document.createElement('form')
                form.method = 'POST'
                form.action = `/products/${id}`
                form.innerHTML = '@csrf @method("DELETE")'
                document.body.appendChild(form)
                form.submit()
            }else{
                return false
            }
        })
    }
</script>