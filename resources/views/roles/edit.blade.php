{{-- @extends('layouts.app')
@section('content') --}}
<x-app-layout>
    <div class="p-10">
        <div class="container mx-auto">
            <div class="rounded-lg bg-white p-10 shadow-lg">
                <div class="mb-4 flex">
                    <div>
                        <h2>Edit Role</h2>
                    </div>
                    <div>
                        <a class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
                            href="{{ route('roles.index') }}"> Back</a>
                    </div>
                </div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {!! Form::model($role, ['method' => 'PATCH', 'route' => ['roles.update', $role->id]]) !!}
                <div class="mb-5 flex">
                    <label for="Name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Name
                    </label>
                    {!! Form::text('name', null, [
                        'placeholder' => 'Name',
                        'class' =>
                            'w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md',
                    ]) !!}
                </div>

                <div>
                    <strong>Permission:</strong>
                    <br>
                    @foreach ($permission as $value)
                        <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                            {{ $value->name }}</label>
                        <br />
                    @endforeach

                    <div>
                        <button type="submit"
                            class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">Submit</button>
                    </div>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</x-app-layout>
{{-- @endsection --}}
