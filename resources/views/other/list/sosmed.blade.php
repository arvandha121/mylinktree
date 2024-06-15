<ul id="sosmed-content" class="list-group">
    <h4 class="text-center mt-4 mb-2"><strong style="text-transform: uppercase;">@lang('locale.sosmed')</strong></h4>
    @foreach ($sosmed as $name => $data)
        <li class="list-group-item">
            <a href="{{ $data['url'] }}" target="_blank" class="btn btn-primary custom-btn">
                <i class="{{ $data['icon'] }}"></i> {{ $name }}
            </a>
        </li>
    @endforeach
</ul>
