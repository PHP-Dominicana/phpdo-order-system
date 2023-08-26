<x-main-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <form action="/orders" method="post" >
                    {{ csrf_field() }}
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" />
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea name="description">{{ old('description') }}</textarea>
                    </div>
                    <div>
                        <label>Price</label>
                        <input type="text" name="price" value="{{ old('price') }}" />
                    </div>
                    <div>
                        <label>Quantity</label>
                        <input type="number" name="quantity" value="{{ old('quantity') }}" />
                    </div>
                    <div>
                        <button type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main-layout>
