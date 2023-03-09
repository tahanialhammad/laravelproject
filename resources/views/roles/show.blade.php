{{-- @extends('layouts.app')
@section('content') --}}
<x-app-layout>
    <!-- component -->

    <div class="p-10">
        <div class="container mx-auto">
            <div class="rounded-lg bg-white p-10 shadow-lg">
                <div class="mb-4 flex">
                    <div>
                        <h2> Show Role</h2>
                    </div>
                    <div>
                        <a class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
                            href="{{ route('roles.index') }}"> Back</a>
                    </div>
                </div>

                <div class="mr-4">
                    <strong>Name :</strong>
                    {{ $role->name }}
                </div>

                <div class="flex">
                    <strong class="mr-4">Permissions:</strong>
                    @if (!empty($rolePermissions))
                        @foreach ($rolePermissions as $v)
                            <span class="mr-4">{{ $v->name }},</span>
                        @endforeach
                    @endif

                </div>
                </form>
            </div>
        </div>
    </div>
    </x-app-layout>
    {{-- @endsection --}}
