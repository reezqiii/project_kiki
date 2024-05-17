<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <title>Product</title>
</head>
<body>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
       
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center" >
                    id
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    nama produk
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    deskripsi
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    harga
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nama as $index => $item)
                <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td scope="row" class="px-6 py-4">{{ $index + 1 }}</td>
                    <td class="px-6 py-4">{{ $item }}</td>
                    <td class="px-6 py-4 text-justify">{{ $desc[$index] }}</td>
                    <td class="px-6 py-4 text-center">{{ $harga[$index] }}</td>
                    <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div>
    <h1 class="text-center font-bold text-xl mt-5">Input Produk</h1>
  </div>
  <form class="max-w-xs mx-auto " method="POST" action="{{ route('produk.simpan') }}">
    @csrf
<form class="max-w-sm mx-auto">
  <div class="mb-5">
    <label for="nama" class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
    <input type="nama" id="nama" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
  </div>
  <div class="mb-5">
    <label for="Deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Produk</label>
    <textarea type="deskripsi" id="deskripsi" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"></textarea>
  </div>
  <div class="mb-5">
    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
    <input type="number" id="harga" class=" form-control shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-ublue-500 dark:focus:border-blue-500 dark:shadow-sm-light" nama="harga" required />
  </div>
  <button type="submit" class="text-white mb-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
</form>
</div>
</body>
</html>
<!-- resources/views/list_produk.blade.php -->