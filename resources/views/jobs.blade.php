<x-layout>
    <x-slot name="heading">
        (boring!!!!!)Job listings
    </x-slot>
    <h1>Hellos! from job pages!!</h1>

    <ul>

        @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id']}}">
                <strong>{{ $job['title'] }}:</strong><a href="/jobs/{{ $job['id']}}" class="text-blue-500 hover:"> Pays {{ $job['salary'] }} per year.
                </a>
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>