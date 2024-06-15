<ul id="donation-content" class="list-group">
    <h4 class="text-center mt-4 mb-2"><strong style="text-transform: uppercase;">@lang('locale.donation')</strong></h4>
    @foreach ($donate as $name2 => $data2)
        <li class="list-group-item">
            <a href="{{ $data2['url'] }}" target="_blank" class="btn btn-danger custom-btn">
                <i class="{{ $data2['icon'] }}"></i> {{ $name2 }}
            </a>
        </li>
    @endforeach
</ul>
