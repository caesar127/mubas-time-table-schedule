@extends('components/Ulayout')
@section('content')
<style>
</style>
<div style="background: #fff; width: 40%; border-radius: 20px; margin-top:10%; margin-left:30%;">
    <div style="justify-content: space-between; display: flex; padding: 10px;">
        <h1 style="font-weight: 500; font-size: x-large; color: #545454;">UPDATE DEPARTMENT</h1>
    </div>

    <form class="" action="{{route('departmentsmodule.update', $department_module->code)}}" method="POST" style="padding: 20px;">
        @csrf
        @method('PUT')
        <div class="form-check mb-6">
            <div class="flex justify-center">
              <div class="mb-3 xl:w-96">
                <select class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="department">
                    <option value="{{$department_module->department}}" selected>{{$department_module->department}}</option>
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
          <div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="year" value="{{$department_module->year}}">
              @error('module_name')
              <p class="text-red-5000 text-xs mt-1">{{$message}}</p>
              @enderror
          </div>
          <div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="semester" value="{{$department_module->semester}}">
              @error('module_name')
              <p class="text-red-5000 text-xs mt-1">{{$message}}</p>
              @enderror
          </div>
          <div class="form-check mb-6">
            <div class="flex justify-center">
              <div class="mb-3 xl:w-96">
                <select class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="module">
                    <option value="{{$department_module->module}}" selected>{{$department_module->module}}</option>
                    <?php $module =DB::table('module')->select('module_code', 'module_name') ->get();;?>
                    @unless (count($module) == 0)
                      @foreach ($module as $modules)
                        <option value="{{$modules->module_code}}">{{$modules->module_name}}</option>
                      @endforeach
                    @else
                      <option>No modules available</option>
                    @endunless
                </select>
              </div>
            </div>
          </div>
        <button type="submit" class=" w-full px-6 py-3.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" style="background: #0184CC">UPDATE</button>
      </form>
</div>
@endsection