<form method="POST" action="{{ $action }}">
    @csrf

    <button type="submit" {{ $attributes }}>
        {{ $slot->isEmpty() ? __('Sign Out') : $slot }}
    </button>
</form>
