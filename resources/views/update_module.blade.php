@extends('components/Ulayout')
@section('content')
<style>
</style>
<div style="background: #fff; width: 40%; border-radius: 20px; margin-top:10%; margin-left:30%;">
    <div style="justify-content: space-between; display: flex; padding: 10px;">
        <h1 style="font-weight: 500; font-size: x-large; color: #545454;">UPDATE DEPARTMENT</h1>
    </div>

    <form class="" action="{{ route('module.update', $module->module_code) }}" method="POST" style="padding: 20px;">
        @csrf
        @method('PUT')
        <div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="module_name" value="{{$module->module_code}}" readonly>
          @error('faculty_code')
          <p class="text-red-5000 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="module_name" value="{{$module->module_name}}">
          @error('name')
          <p class="text-red-5000 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="form-check">
            <div class="flex justify-center">
                <div class="mb-3 xl:w-96">
                    <select class="form-select appearance-none block w-full px-3 py-1.5 mb-6 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="lecturer" style="margin-bottom: 25px;">
                        <?php $lecturer =DB::table('lecturer')->select('lecturer_id', 'name') ->get();?>
                        @unless (count($lecturer) == 0)
                            @foreach ($lecturer as $lecturer)
                            <option value="{{$lecturer->lecturer_id}}">{{$lecturer->name}}</option>
                            @endforeach
                        @else
                            <option>No Lecturers available</option>
                        @endunless
                    </select>
                </div>
            </div>
        </div>
        <div class="form-check mb-6">
            <div class="flex justify-center">
                <div class="mb-3 xl:w-96">
                    <select class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="exam">
                        <option selected>Assessment method</option>
                        <option value="Examination">Examination</option>
                        <option value="Assignment">Assignment</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class=" w-full px-6 py-3.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" style="background: #0184CC">UPDATE</button>
      </form>
</div>
@endsection