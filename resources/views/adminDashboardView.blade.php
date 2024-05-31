@extends('layout.layout')
@section('main_content')
    @php
        use App\Models\Coffee;
        use App\Models\Cafe;
        use Illuminate\Support\Facades\Session;

        $cafeId = Session::get('cafeId');
        $cafe = Cafe::find($cafeId);
        $cafeName = $cafe->cafeName;

        $coffees = Coffee::where('cafeId', $cafeId)->get();
    @endphp

    {{-- Navigation Bar --}}
    <header class="navbar" id="navbarAdmin">
        <div class="container">
            <div class="title-list">
                <h3 class="titleAdmin"> {{ $cafeName }} Admin</h3>
            </div>
            <nav class="nav-listAdmin">
                <ul>
                    <li><a class="btn btn-primary" href="/addNewCoffee?cafeId={{ $cafeId }}" id="navButtonAdmin">Tambah
                            Menu Kopi</a><br>
                    </li>
                    <li><a class="btn btn-primary mx-2" href="/" id="navButtonAdmin">Ke Halaman Beranda</a><br></li>
                    <li>
                        <form id="logout-form" method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="btn btn-danger" id="logOutButton">Log Out</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="adminDashboardMainContainer">
            <table class="d-flex justify-content-center table" id="adminTable">
                <tbody>
                    <tr>
                        <th colspan="5" id="tableTitle">Daftar Menu</th>
                    </tr>
                    <tr>
                        <th scope="col">Foto Menu</th>
                        <th scope="col">Nama Menu</th>
                        <th scope="col">Deskripsi Menu</th>
                        <th scope="col">Harga Menu</th>
                        <th scope="col">Tombol Aksi</th>
                    </tr>
                    @if (count($coffees) == 0)
                        <p style="margin-top: 150px">Tidak Ada Menu</p>
                    @endif
                    @foreach ($coffees as $coffee)
                        <tr style="vertical-align: middle;">
                            <td><img src="{{ $coffee->coffeePhoto }}" style="max-width: 100px"></td>
                            <td>{{ $coffee->coffeeName }}</td>
                            <td class="w-25">{{ $coffee->coffeeDescription }}</td>
                            <td>{{ $coffee->coffeePrice }}</td>

                            <td style="width: 300px;">
                                <a href="{{ route('coffee.edit', $coffee->id) }}" class="btn btn-success">Ubah</a>

                                <form action="{{ route('coffee.destroy', $coffee->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this coffee?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>

        </div>

    </div>
@endsection
