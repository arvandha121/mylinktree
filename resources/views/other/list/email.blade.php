<ul id="email-content" class="list-group">
    <h4 class="text-center mt-4 mb-2"><strong style="text-transform: uppercase;">@lang('locale.email')</strong></h4>
    @foreach ($email as $name3 => $data3)
        <li class="list-group-item">
            <a href="{{ $data3['url'] }}" target="_blank" class="btn btn-warning custom-btn">
                <i class="{{ $data3['icon'] }}"></i> {{ $name3 }}
            </a>
        </li>
    @endforeach
</ul>
