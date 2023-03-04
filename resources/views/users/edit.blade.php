@extends('layouts.app')
@section('content')

    <!-- component -->
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">

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


            <div class="m-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <h2>Edit New User</h2>
                    </div>
                </div>

                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <a class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
                            href="{{ route('users.index') }}"> Back</a>
                    </div>
                </div>
            </div>

            {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>

            <div class="-mx-3 flex flex-wrap">

                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="Name" class="mb-3 block text-base font-medium text-[#07074D]">
                            Name
                        </label>
                        {!! Form::text('name', null, [
                            'placeholder' => 'Name',
                            'class' =>
                                'w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md',
                        ]) !!}
                    </div>
                </div>

                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                            Email
                        </label>
                        {!! Form::text('email', null, [
                            'placeholder' => 'Email',
                            'class' =>
                                'w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md',
                        ]) !!}
                    </div>
                </div>
            </div>

            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="password" class="mb-3 block text-base font-medium text-[#07074D]">
                            Password
                        </label>
                        {!! Form::password('password', [
                            'placeholder' => 'Password',
                            'class' =>
                                'w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md',
                        ]) !!}
                    </div>
                </div>

                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="confirm-password" class="mb-3 block text-base font-medium text-[#07074D]">
                            Confirm Password
                        </label>
                        {!! Form::password('confirm-password', [
                            'placeholder' => 'Confirm Password',
                            'class' =>
                                'w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md',
                        ]) !!}
                    </div>
                </div>
            </div>

            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label for="confirm-password" class="mb-3 block text-base font-medium text-[#07074D]">
                        Roles
                    </label>
                    {!! Form::select('roles[]', $roles, $userRole, [
                        'class' =>
                            'w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md',
                        'multiple',
                    ]) !!}
                </div>
            </div>

            <div>
                <button
                    class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Submit
                </button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    <p class="text-center text-primary"><small>Tutorial by LaravelTuts.com</small></p>
@endsection
