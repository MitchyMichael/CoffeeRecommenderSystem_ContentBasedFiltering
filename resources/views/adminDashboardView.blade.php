@extends('layout.layout')
@section('main_content')
    <div class="container">
        <div class="adminDashboardMainContainer">
            @php
                use App\Models\Coffee;
                use App\Models\Cafe;
                use Illuminate\Support\Facades\Session;

                $cafeId = Session::get('cafeId');
                $cafe = Cafe::find($cafeId);
                $cafeName = $cafe->cafeName;

                $coffees = Coffee::where('cafeId', $cafeId)->get();
            @endphp

            <h1>{{ $cafeName }} Admin</h1>
            <br>

            <div class="functionButtonAdminAdd">
                <a class="btn btn-primary" href="/addNewCoffee?cafeId={{ $cafeId }}">Tambah Menu Kopi</a><br>
                <a class="btn btn-primary mx-5" href="/">Ke Halaman Beranda</a><br>
                <form id="logout-form" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn btn-warning">Log out</button>
                </form>
            </div>
            <br>

            <table class="d-flex justify-content-center">
                <tbody>
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
