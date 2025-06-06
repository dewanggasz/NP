@php
    use Illuminate\Support\Facades\Storage;

    $video = $getState()->hero_video_path ?? null;
    $image = $getState()->hero_image_path ?? null;
    $videoName = $getState()->hero_video_name ?? null;
    $imageName = $getState()->hero_image_name ?? null;
    $client = $getState()->logo_path ?? null;
@endphp

@if ($image)
    <div class="flex items-center gap-2 py-5">
        <img src="{{ Storage::url($image) }}" class="w-20 rounded-md" />
        <span class="text-sm text-black-700">{{ $imageName }}</span>
    </div>
@elseif ($video)
    <div class="flex items-center gap-2 py-5">
        <video class="w-20 rounded" controls>
            <source src="{{ Storage::url($video) }}" type="video/mp4">
        </video>
        <span class="text-sm text-black-700">{{ $videoName }}</span>
    </div>
@else
    <span class="text-gray-500">Belum ada file</span>
@endif

@if ($client)
    <div class="flex items-center gap-2 py-5">
        <img src="{{ Storage::url($client) }}" class="w-20 rounded-md" />
    </div>
@endif
