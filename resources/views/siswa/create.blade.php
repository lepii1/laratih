<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('siswa.store') }}" method="POST">
                        @csrf
                        <label>Nama:</label><br>
                        <input type="text" name="nama" required>
                        <br>
                        <label>Alamat:</label><br>
                        <textarea name="alamat" required></textarea>
                        <br>
                        <label>Agama:</label><br>
                        <input type="text" name="agama" required>
                        <br>
                        <label>Jenis Kelamin:</label><br>
                        <select name="jenis_kelamin" required>
                            <option value="1">Laki-laki</option>
                            <option value="0">Perempuan</option>
                        </select>
                        <br>
                        <label>Asal Sekolah:</label><br>
                        <input type="text" name="sekolah_asal" required>
                        <br>
                        <button type="submit" >Simpan</button>
                        <a href="{{ route('siswa.index') }}">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
