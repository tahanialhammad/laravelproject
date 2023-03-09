{{-- @extends('layouts.app')
@section('content') --}}
<x-app-layout>
    <div class="p-10">
        <div class="container mx-auto">
            <div class="rounded-lg bg-white p-10 shadow-lg">

                <div class="m-3 flex flex-wrap">
                    <div class="mb-5">
                        <h2>Show User</h2>
                    </div>

                    <div class="mb-5">
                        <a class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
                            href="{{ route('users.index') }}"> Back</a>
                    </div>
                </div>

                <div class="my-4">
                    <strong>Name:</strong>
                    {{ $user->name }}
                </div>

                <div class="my-4">
                    <strong>Email:</strong>
                    {{ $user->email }}
                </div>

                <div class="my-4">
                    <strong>Roles:</strong>
                    @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $v)
                            <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
{{-- @endsection --}}
