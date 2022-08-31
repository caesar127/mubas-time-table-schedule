@extends('components/layout')
@section('content')
<style>
</style>
<div style="background: #fff; height: 500px; width: 100%; border-radius: 20px; margin:20px;">
    <div style="justify-content: space-between; display: flex; padding: 10px;">
        <h1 style="font-weight: 500; font-size: x-large; color: #545454;">Lecturers</h1>
        <button type="button" class="inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="background: #0184CC">
            New Lecturer
        </button>
    </div>
    
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered relative pointer-events-none" style="width: 25%">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
          <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
              New Lecturer
            </h5>
            <button type="button"
              class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
              data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body relative p-4">
            <form class="" action="/lecturer/create" method="POST">
              @csrf
              <div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="name" placeholder="Name">
                @error('name')
                <p class="text-red-5000 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="email" placeholder="Email">
                @error('email')
                <p class="text-red-5000 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>
              <button type="submit" class=" w-full px-6 py-3.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" style="background: #0184CC">ADD</button>
            </form>
          </div>
        </div>
      </div>
    </div>



    <div style="padding: 10px ; padding-bottom: 0px;">
      <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full text-center">
                <thead class=" bg-gray-50">
                  <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Lecturer ID</th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Name</th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Email</th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Action</th>
                  </tr>
                </thead class="">
                <tbody>
                  @unless (count($lecturer) == 0)
                  @foreach ($lecturer as $lecturers)
                    <tr class="bg-white border-b">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$lecturers->lecturer_id}}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$lecturers->name}}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$lecturers->email}}</td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <div class="flex justify-center">
                          <div>
                            <div class="dropdown relative">
                              <a class="dropdown-toggle font-medium text-xs leading-tight uppercase rounded transition duration-150 ease-in-out flex items-center" href="#" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 h-7 w-7" viewBox="0 0 60 60">
                                  <path d="M25 3C21.699219 3 19 5.699219 19 9C19 12.300781 21.699219 15 25 15C28.300781 15 31 12.300781 31 9C31 5.699219 28.300781 3 25 3 Z M 25 5C27.222656 5 29 6.777344 29 9C29 11.222656 27.222656 13 25 13C22.777344 13 21 11.222656 21 9C21 6.777344 22.777344 5 25 5 Z M 25 19C21.699219 19 19 21.699219 19 25C19 28.300781 21.699219 31 25 31C28.300781 31 31 28.300781 31 25C31 21.699219 28.300781 19 25 19 Z M 25 21C27.222656 21 29 22.777344 29 25C29 27.222656 27.222656 29 25 29C22.777344 29 21 27.222656 21 25C21 22.777344 22.777344 21 25 21 Z M 25 35C21.699219 35 19 37.699219 19 41C19 44.300781 21.699219 47 25 47C28.300781 47 31 44.300781 31 41C31 37.699219 28.300781 35 25 35 Z M 25 37C27.222656 37 29 38.777344 29 41C29 43.222656 27.222656 45 25 45C22.777344 45 21 43.222656 21 41C21 38.777344 22.777344 37 25 37Z" fill="#0184CC" />
                                </svg>
                              </a>
                              <ul class=" dropdown-menu min-w-max absolute bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton2">
                                <li>
                                  <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 " href="#">View</a >
                                </li>
                                <li>
                                  <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 " href="#">Update</a >
                                </li>
                                <li>
                                  <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 " href="#">Delete</a >
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                  @else
                    <p>No listings found</p>
                  
                  @endunless
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="p-4 pt-0">
      {{$lecturer->links()}}
    </div>
</div>
@endsection