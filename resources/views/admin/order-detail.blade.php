@extends('layout.app')

@section('title', 'Detail Pesanan')

@section('content')
<div class="container mx-auto mt-10">
    <a href="{{ route('admin.dashboard') }}">
        <i class="bi bi-arrow-left p-2 px-3 w-23"></i>
    </a>
    <h1 class="text-3xl font-bold mb-6 text-blue-600 text-center">Detail Pesanan {{ $order->id }}</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <p class="mb-2"><strong>Nama:</strong> {{ $order->user->name }}</p>
        <p class="mb-2"><strong>Mata Pelajaran:</strong> {{ $order->mapel }}</p>
        <p class="mb-2"><strong>Deskripsi Tugas:</strong> {{ $order->deskripsi_tugas }}</p>
        <p class="mb-2"><strong>Deadline:</strong> {{ date('d M Y H:i', strtotime($order->deadline)) }}</p>
        <p class="mb-2"><strong>Jumlah Halaman:</strong> {{ $order->jumlah_halaman }}</p>
        <p class="mb-2"><strong>Metode Pembayaran:</strong> {{ $order->payment_method }}</p>
        <p class="mb-2"><strong>Status:</strong> 
            <span class="px-3 py-1 rounded-full text-white {{ $order->status == 'pending' ? 'bg-yellow-500' : ($order->status == 'paid' ? 'bg-green-500' : 'bg-gray-500') }}">
                {{ ucfirst($order->status) }}
            </span>
        </p>

        @if($order->task_images)
        <p><strong>Gambar Tugas:</strong></p>
        <img src="{{ asset('storage/'.$order->task_images) }}" class="w-64 mt-4">
        @endif

        <div class="mt-6">
            <form method="POST" action="{{ route('admin.updateOrderStatus', $order->id) }}">
                @csrf
                @method('PATCH')
                <select name="status" class="border p-2 rounded">
                    <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="paid" {{ $order->status == 'paid' ? 'selected' : '' }}>Paid</option>
                    <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                </select>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Update Status</button>
            </form>
        </div>
    </div>
</div>
@endsection
