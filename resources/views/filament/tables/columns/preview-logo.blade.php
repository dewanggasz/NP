@php
    use Illuminate\Support\Facades\Storage;
    $client = $getState()->logo_path ?? null;
@endphp

@if ($client)
    <div class="flex items-center gap-2 py-5">
        <img src="{{ Storage::url($client) }}" class="w-20 rounded-md" />
    </div>
@endif
