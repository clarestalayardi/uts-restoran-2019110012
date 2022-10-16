@extends('layout.app')

@section('content')
<section class="probootstrap-section-bg overlay" style="background-image: url(../images/about/ABOUT.jpeg);" data-stellar-background-ratio="0.5" data-section="specialties">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center probootstrap-animate">

                {{-- judul utama halaman --}}
                <div class="probootstrap-heading">
                    <h2 class="primary-heading">Discover</h2>
                    <h3 class="secondary-heading">Our Menu</h3>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="probootstrap-cell-retro">
                <div class="half">
                    @for ($i = 0; $i < 3; $i++)

                    {{-- menu 1 --}}
                    <div class="probootstrap-cell probootstrap-animate {{ $i % 1 !== 0 ? 'reverse' : '' }}" data-animate-effect="fadeIn">
                            <div class="image" style="background-image: url({{ $menus[$i]['image'] }});"></div>
                            <div class="text text-center">
                                <h3>{{ $menus[$i]['title'] }}</h3>
                                <p>Kombinasi antara mie pedas, panas dan milkshare orange siap menemani hari - harimu</p>
                                <p class="price">Rp 19.500</p>
                            </div>
                        </div>
                    @endfor
                    <!-- <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(../images/menu/2.jpg);"></div>
                        <div class="text text-center">
                            <h3>PAKET KENYANG</h3>
                            <p>Balutan telur goreng disertai toping sosis dan sambal mampu mengenyangkan perutmu dengan si manis thai tea</p>
                            <p class="price">$19.99</p>
                        </div>
                    </div>
                    <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(../images/menu/3.jpg);"></div>
                        <div class="text text-center">
                            <h3>PAKET ROTI MANIS</h3>
                            <p>Roti dengan dua toping berbeda siap mewarnai kegiatanmu. Piihan toping yang beragam bisa disesuaikan dengan seleramu</p>
                            <p class="price">$20.99</p>
                        </div>
                    </div> -->

                </div>
                <div class="half">
                    {{-- menu 2 --}}
                    <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(../images/menu/4.jpg);"></div>
                        <div class="text text-center">
                            <h3>PAKET MORNING</h3>
                            <p>Balutan telor goreng dan roti toast disertai toping keju siap menyambut hari barumu pada hari ini</p>
                            <p class="price">Rp 23.000</p>
                        </div>
                    </div>

                    {{-- menu 3 --}}
                    <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(../images/menu/5.jpg);"></div>
                        <div class="text text-center">
                            <h3>PAKET SI MANIS</h3>
                            <p>Warnai hari - harimu dengan si manis dengan pilihan variant es krim yang beragam dan toping - toping menarik lainnya</p>
                            <p class="price">Rp 14.500</p>
                        </div>
                    </div>

                    {{-- menu 4 --}}
                    <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(../images/menu/6.jpg);"></div>
                        <div class="text text-center">
                            <h3>PAKET SI PASTEL</h3>
                            <p>Cocok untuk kamu pecinta si manis dan buah - buahan. Campuran buah didalamnya siap mewarnai hari - harimu</p>
                            <p class="price">Rp 15.000</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
