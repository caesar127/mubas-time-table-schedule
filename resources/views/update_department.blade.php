@extends('components/layout')
@section('content')
<style>
</style>
<div style="background: #fff; width: 40%; border-radius: 20px; margin-top:50px; margin-left:30%;">
    <div style="justify-content: space-between; display: flex; padding: 10px;">
        <h1 style="font-weight: 500; font-size: x-large; color: #545454;">UPDATE DEPARTMENT</h1>
    </div>

    <form class="" method="POST" style="padding: 20px;">
        @csrf
        <div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail2" placeholder="Department Code" name="department_code" value="{{$department->department_code}}" readonly>
        </div>
        <div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail2" placeholder="Department Name" name="name">
        </div>
        <div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail2" placeholder="Duration" name="duration">
        </div>
        <div class="form-check mb-6">
          <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
              <select class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="faculty">
                  <option selected>Faculty</option>
                  <?php $faculty =DB::table('faculty')->select('faculty_code', 'name') ->get();?>
                  @unless (count($faculty) == 0)
                    @foreach ($faculty as $faculty)
                      <option value="{{$faculty->faculty_code}}">{{$faculty->name}}</option>
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