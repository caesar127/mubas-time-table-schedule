@extends('components/Ulayout')
@section('content')
<style>
</style>
<div style="background: #fff; width: 40%; border-radius: 20px; margin-top:10%; margin-left:30%;">
    <div style="justify-content: space-between; display: flex; padding: 10px;">
        <h1 style="font-weight: 500; font-size: x-large; color: #545454;">UPDATE DEPARTMENT</h1>
    </div>

    <form class="" action="{{ route('classes.update', $classes->class_code) }}" method="POST" style="padding: 20px;">
        @csrf
        @method('PUT')
        <div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="class_code" value="{{$classes->class_code}}" readonly>
            @error('class_code')
            <p class="text-red-5000 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="name" value="{{$classes->name}}">
            @error('name')
            <p class="text-red-5000 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="form-check mb-6">
            <div class="flex justify-center">
                <div class="mb-3 xl:w-96">
                    <select class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="department">
                        <option  value="{{$classes->department}}" selected>{{$classes->department}}</option>
                        <?php $department =DB::table('department')->select('department_code', 'name') ->get();;?>
                        @unless (count($department) == 0)
                            @foreach ($department as $departments)
                            <option value="{{$departments->department_code}}">{{$departments->name}}</option>
                            @endforeach
                        @else
                            <option>No departments available</option>
                        @endunless
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="students" value="{{$classes->students}}">
            @error('students')
            <p class="text-red-5000 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mb-6" hidden><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="status" value="Active">
            @error('status')
            <p class="text-red-5000 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class=" w-full px-6 py-3.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" style="background: #0184CC">ADD</button>
    </form>
</div>
@endsection