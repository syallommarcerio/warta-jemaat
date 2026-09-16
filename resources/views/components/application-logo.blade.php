<a href="{{ url('/') }}" {{ $attributes->merge(['class' => 'inline-flex items-center gap-3']) }}>

    <img
        src="{{ asset('images/logo.gkmi.png') }}"
        alt="GKMI Winong"
        class="h-10 w-10 object-contain"
    >

    <div class="leading-tight">
        <div class="text-lg font-bold text-primary">
            GKMI Winong
        </div>

        <div class="text-xs text-gray-500">
            Warta Jemaat
        </div>
    </div>

</a>