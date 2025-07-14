<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table-auto w-full border mt-4 text-left">
                        <thead>
                        <tr class="bg-gray-200">
                            <th class="border px-4 py-2">No</th>
                            <th class="border px-4 py-2">Nama</th>
                            <th class="border px-4 py-2">Alamat</th>
                            <th class="border px-4 py-2">Agama</th>
                            <th class="border px-4 py-2">Jenis Kelamin</th>
                            <th class="border px-4 py-2">Asal Sekolah</th>
                            <th class="border px-4 py-2">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($siswas as $siswa)
                            <tr>
                                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="border px-4 py-2">{{ $siswa->nama }}</td>
                                <td class="border px-4 py-2">{{ $siswa->alamat }}</td>
                                <td class="border px-4 py-2">{{ $siswa->agama }}</td>
                                <td class="border px-4 py-2">
                                    {{ $siswa->jenis_kelamin ? 'Laki-laki' : 'Perempuan' }}
                                </td>
                                <td class="border px-4 py-2">{{ $siswa->sekolah_asal}}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
                                    <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
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
