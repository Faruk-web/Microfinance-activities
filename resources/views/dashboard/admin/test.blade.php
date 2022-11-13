
 @extends('admin_main.admin_master')
  @section('admin_contant')
  <div class="row row-sm">
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header pb-0">
                  <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">Registrate Table</h4>
                    <!-- <button type="button" class="btn btn-sm btn-success-gradient" data-toggle="modal" data-target="#createModal">Add New</button> -->
                  </div>
                </div>
                <div class="card-body">
                  <input type="text" wire:model="searchkey" class="form-control form-control-lg mb-3" placeholder="Search with name, Email">
                  <div class="table-responsive">
                    <table class="table table-bordered text-md-nowrap table-vcenter">
                      <thead>
                        <tr class="text-center">
                        <th>ক্রমিক</th>
                        <th>আবেদন আইডি</th>
                        <th>আবেদনকারীর নাম</th>
                        <th>মোবাইল</th>
                        <th>কেন্দ্রের নাম</th>
                        <th>যে বাবদ প্রদান</th>
                        <th>তারিখ</th>
                        <th> সময়</th>
                        <th>ধরণ</th>
                        <th>কন্ট্রোল</th>
                        <th>ডাউনলোড</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($application_data as $data)
                        <tr>
                          <td style="width: auto;">{{$data->id}}</td>
                          <td>{{$data->applicant_number}}</td>
                          <td>{{$data->name_bn}}</td>
                          <td>{{$data->mobile}}</td>
                          <td>{{$data->centerName}}</td>
                          <td>{{$data->occupation}}</td>
                          <td>{{$data->created_at }}</td>
                          <td>{{$data->year}}</td>

                          <td>
                            @if($data->status == 'Approved')
                            <a  href="{{ route('Deactive',$data->id) }}"
                                class="btn btn-success" title="Product Active Now">Approved </a>
                            @else

                            <a href="{{ route('Active',$data->id) }}"
                                class="btn btn-danger" title="Product Active Now">Proccessing </a>
                            @endif 

                            </td>
                          <!-- <td>
                            <select class="form-control" id="changeStatus" wire:model="status" wire:change.lazy="changeStatus(1886)">
                            <option value="" selected>Choice...</option>
                              @if($data->status == 1)
                              <option value="Approved"><a  href="{{ route('Deactive',$data->id) }}"
                                class="btn btn-success" title="Product Active Now">Approved </a></option>
                                @elseif($data->status == 1)
                                <option value="Rejected"><a href="{{ route('Active',$data->id) }}"
                                class="btn btn-danger" title="Product Active Now">Rejected </a></option>
                                @endif 
                              <option value="Certified">Certified</option>
                              <option value="Cancelled">Cancelled</option>
                              
                            </select> Registered
                          </td> -->
                          <td>
                            <!-- <button data-toggle="modal" data-target="#updateModal" class="btn btn-sm btn-block btn-info-gradient" wire:click="edit(1886)">
                              <i class="las la-pen"></i>
                            </button> -->
                            <a class="btn btn-danger" href="{{route('admin.delete',$data->id)}}">Rejected</a>
                            <!-- <button wire:click="delete(1886)" class="btn btn-block btn-sm btn-danger-gradient">
                              <i class="las la-trash"></i>
                            </button> -->
                          </td>
                          <td class="std-download-btn">
                            <a target="_blank" href="studentpdf/1886" class="btn btn-sm btn-dark-gradient btn-block">PDF</a>
                            <a target="_blank" href="#" class="btn btn-sm btn-success-gradient btn-block">Certificate</a>
                          </td>
                        </tr>  
                        @endforeach                  
                      </tbody>
                    </table>
                    <br>
                    <div>
                      <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
                        <div class="flex justify-between flex-1 sm:hidden">
                          <span>
                            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md"> Previous </span>
                          </span>
                          <span>
                            <button wire:click="nextPage" wire:loading.attr="disabled" dusk="nextPage.before" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"> Next; </button>
                          </span>
                        </div>
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                          <div>
                            <p class="text-sm text-gray-700 leading-5">
                              <span>Showing</span>
                              <span class="font-medium">1</span>
                              <span>to</span>
                              <span class="font-medium">10</span>
                              <span>of</span>
                              <span class="font-medium">50</span>
                              <span>results</span>
                            </p>
                          </div>
                          <div>
                            <span class="relative z-0 inline-flex shadow-sm">
                              <span>
                                <span aria-disabled="true" aria-label="Previous">
                                  <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-l-md leading-5" aria-hidden="true">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                      <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                  </span>
                                </span>
                              </span>
                              <span wire:key="paginator-page1">
                                <span aria-current="page">
                                  <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5">1</span>
                                </span>
                              </span>
                              <span wire:key="paginator-page2">
                                <button wire:click="gotoPage(2)" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 2"> 2 </button>
                              </span>
                              <span wire:key="paginator-page3">
                                <button wire:click="gotoPage(3)" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 3"> 3 </button>
                              </span>
                              <span wire:key="paginator-page4">
                                <button wire:click="gotoPage(4)" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 4"> 4 </button>
                              </span>
                              <span wire:key="paginator-page5">
                                <button wire:click="gotoPage(5)" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 5"> 5 </button>
                              </span>
                              <span wire:key="paginator-page6">
                                <button wire:click="gotoPage(6)" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 6"> 6 </button>
                              </span>
                              <span wire:key="paginator-page7">
                                <button wire:click="gotoPage(7)" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 7"> 7 </button>
                              </span>
                              <span wire:key="paginator-page8">
                                <button wire:click="gotoPage(8)" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 8"> 8 </button>
                              </span>
                              <span wire:key="paginator-page9">
                                <button wire:click="gotoPage(9)" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 9"> 9 </button>
                              </span>
                              <span wire:key="paginator-page10">
                                <button wire:click="gotoPage(10)" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 10"> 10 </button>
                              </span>
                              <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">...</span>
                              </span>
                              <span wire:key="paginator-page159">
                                <button wire:click="gotoPage(159)" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 159"> 159 </button>
                              </span>
                              <span wire:key="paginator-page160">
                                <button wire:click="gotoPage(160)" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 160"> 160 </button>
                              </span>
                              <span>
                                <button wire:click="nextPage" dusk="nextPage.after" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Next;">
                                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                  </svg>
                                </button>
                              </span>
                            </span>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
                <!-- bd -->
              </div>
              <!-- bd -->
            </div>
          </div>
@endsection