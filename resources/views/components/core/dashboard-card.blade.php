<div
    class="flex flex-col justify-around w-40 h-40 p-2 m-2 text-blue-700 bg-gray-200 border-2 border-gray-300 rounded shadow-lg">
    <div class="mx-auto my-auto mt-4 text-2xl font-bold text-center">{{ $title }}</div>
    @if (!isset($link))
        <div class="mx-auto my-auto mb-2 text-3xl font-semibold text-black">{{ $value }}</div>
    @else
        <a class="mx-auto my-auto mb-2 text-3xl font-semibold text-black no-underline underline-offset-4 hover:underline decoration-4 decoration-blue-700"
            href={{ route($link, ['when' => $linkDate]) }}>{{ $value }}</a>
    @endif
</div>
