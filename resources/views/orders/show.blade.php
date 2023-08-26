<x-main-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order number') }}: {{ $order->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $order->name }}" disabled />
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea name="description" disabled>{{ $order->description }}</textarea>
                    </div>
                    <div>
                        <label>Price</label>
                        <input type="text" name="price" value="{{ $order->price }}" disabled />
                    </div>
                    <div>
                        <label>Quantity</label>
                        <input type="number" name="quantity" value="{{ $order->quantity }}" disabled />
                    </div>
                    <div>
                        <label>Order Total</label>
                        <input type="number" name="quantity" value="{{ $order->price * $order->quantity }}" disabled />
                    </div>
                    <div>
                        <label>Order Status</label>
                        <input type="text" name="quantity" value="{{ $order->status }}" disabled />
                    </div>
                    <div>
                        <label>Order Date</label>
                        <input type="text" name="quantity" value="{{ $order->created_at }}" disabled />
                    </div>
                    <div>
                        <label>Order Updated</label>
                        <input type="text" name="quantity" value="{{ $order->updated_at }}" disabled />
                    </div>
                    <div>
                        <a href="/orders/{{ $order->id }}/edit">Edit</a>
                        <form action="/orders/{{ $order->id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit">Delete</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</x-main-layout>
