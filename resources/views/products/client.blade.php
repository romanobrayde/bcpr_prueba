<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <section class="section-products">
                    <div class="container">
				        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div id="product-1" class="single-product">
                                        <div class="part-1">
                                            <img src="https://www.svgrepo.com/show/147333/opossum-mammal-animal-silhouette.svg" alt="">
                                        </div>
                                        <div class="part-2">
                                            <h3 class="product-title">{{ $product->name }}</h3>
                                            <h4 class="product-price">{{ $product->price }}</h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
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