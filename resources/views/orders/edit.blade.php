<x-main-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <form action="/orders/{{ $order->id }}" method="post" >
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $order->name }}" />
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea name="description">{{ $order->description }}</textarea>
                    </div>
                    <div>
                        <label>Price</label>
                        <input type="text" name="price" value="{{ $order->price }}" />
                    </div>
                    <div>
                        <label>Quantity</label>
                        <input type="number" name="quantity" value="{{ $order->quantity }}" />
                    </div>
                    <div>
                        <label for="status">Order Status</label>
                        <select id="status" name="status">
                            <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                            <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main-layout>
