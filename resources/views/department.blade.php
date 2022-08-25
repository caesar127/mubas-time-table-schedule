@extends('components/layout')
@section('content')
<style>
</style>
<div style="background: #fff; height: 450px; width: 100%; border-radius: 20px; margin-top:50px;">
    <div style="justify-content: space-between; display: flex; padding: 10px;">
        <h1 style="font-weight: 500; font-size: x-large; color: #545454;">Departments</h1>
        <button type="button" class="inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="background: #0184CC">
          New Department
        </button>
    </div>
    
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered relative pointer-events-none" style="width: 25%">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
          <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
              New Department
            </h5>
            <button type="button"
              class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
              data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body relative p-4">
            <form class="" method="POST">
              <div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail2" placeholder="Department Code">
              </div>
              <div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail2" placeholder="Department Name">
              </div>
              <div class="form-group mb-6">
                <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail2" placeholder="Faculty">
              </div>
              <div class="form-group mb-6">
                <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail2" placeholder="No of Modules">
              </div>
              <button type="submit" class=" w-full px-6 py-3.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" style="background: #0184CC">ADD</button>
            </form>
          </div>
        </div>
      </div>
    </div>



    <div style="padding: 10px">
      <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full text-center">
                <thead class=" bg-gray-50">
                  <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Code</th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Name</th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Faculty</th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Duration</th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">No of Modules</th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Action</th>
                  </tr>
                </thead class="">
                <tbody>
                  <tr class="bg-white border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      Mark
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      Otto
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @mdo
                    </td>
                  </tr class="bg-white border-b">
                  <tr class="bg-white border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      Jacob
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      Thornton
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @fat
                    </td>
                  </tr>
                  <tr class="bg-white border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                    <td colspan="2" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                      Larry the Bird
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @twitter
                    </td>
                  </tr>
                  <tr class="bg-white border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                    <td colspan="2" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                      Larry the Bird
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @twitter
                    </td>
                  </tr>
                  <tr class="bg-white border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                    <td colspan="2" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                      Larry the Bird
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @twitter
                    </td><td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @twitter
                    </td><td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      <div class="flex justify-center">
                        <div>
                          <div class="dropdown relative">
                            <a class=" dropdown-toggle px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap" href="#" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" >
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
                              </svg>
                            </a>
                            <ul class=" dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton2">
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
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection