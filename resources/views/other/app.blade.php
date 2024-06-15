@extends('main.index')

@section('content-app')
    <div class="background-layer"></div>
    <div class="blur-background container mt-5 mb-5">
        <div class="dropdown text-end">
            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-language"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" style="background-color: #f2f2f2; max-height: 150px; overflow-y: auto;">
                <li>
                    <a class="dropdown-item" href="locale/en">
                        <img src="{{ asset('img/english-flag.png') }}" class="flag-image"> @lang('locale.english')
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="locale/in">
                        <img src="{{ asset('img/indonesia-flag.png') }}" class="flag-image"> @lang('locale.indonesia')
                    </a>
                    <a class="dropdown-item" href="locale/kr">
                        <img src="{{ asset('img/korea-flag.jpg') }}" class="flag-image"> @lang('locale.korea')
                    </a>
                    <a class="dropdown-item" href="locale/jp">
                        <img src="{{ asset('img/japan-flag.png') }}" class="flag-image"> @lang('locale.japan')
                    </a>
                    <a class="dropdown-item" href="locale/cn">
                        <img src="{{ asset('img/china-flag.png') }}" class="flag-image"> @lang('locale.china')
                    </a>
                </li>
            </ul>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-md-6 offset-md-3">
                <img src="{{ asset('img/unnamed.jpg') }}" alt="Profile Image" class="profile-img">
                <h1 class="text-center mb-4"><strong>@arvandhaa</strong></h1>
                <h4 class="text-center mb-3"></h4>
                <p class="text-center">@lang('locale.follow_contact')</p>

                <!-- Filter Button -->
                @include('other.filter.filter')

                <!-- Konten Sosmed -->
                @include('other.list.sosmed')

                <!-- Konten Donation -->
                @include('other.list.donation')

                <!-- Konten Email -->
                @include('other.list.email')
            </div>
        </div>
        <!-- Footer -->
        @include('other.footer')
    </div>
    <!-- Footer -->
    @include('other.backtotop')
@endsection
