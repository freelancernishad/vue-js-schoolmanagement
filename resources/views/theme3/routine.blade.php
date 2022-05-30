@extends(sitedetails()[0]->theme.'.layout')

@section('container')

		
 
    <!-- Main Start -->
    <main class="container-fluid">
        <div class="row">
            <!-- Left Main -->
            <div class="col-lg-12 my-3" style="margin: 50px 0;">
<div class="container">
    <h3 id="ContentPlaceHolder1_lblTitle"
    style="font-size: 25px;text-align: center;margin-bottom: 15px;color: black;"> {{ date('Y') }} সালের ক্লাস রুটিন </h3>

				<div class="row">



               
                    @if($countall>0)
                    
                  
					<div class="col-md-12 mt-5">
						<table class="table " border="0">
							<thead class="thead-dark">
                      
								<tr>
									<th width="10%" scope="col">ক্রমিক নং.</th>
									<th scope="col">শ্রেণী</th>
								
									<th width="20%" class="" scope="col">ডাউনলোড</th>
								</tr>
							</thead>
							<tbody>
							
@php
    $serial = 1;
@endphp
                                @foreach ($rows as $list)
                                    
                                
                                    <tr>
                                        <td scope="col"> {{ $serial }}
                                        </td>
                                        <td scope="col">{{ $list->class }}
                                        </td> 
                                        
                                       
                                        </td>
                                        <td scope="col">
                                         
                                            
                                            <a href='{{ url("routines/$list->class/$list->year/download") }}' id="update_routine" class="btn btn-info">ডাউনলোড রুটিন</a>
                                        </td>
                                    </tr>


                                    @php
                                        $serial++
                                    @endphp
                                    @endforeach


					
							
							</tbody>
						</table>
				
					</div><!-- col-md-12 -->

                @endif {{-- countall --}}


				</div> <!-- row -->
            </div>


        </div>
        
        

        </div>
        </main>
        <!-- Main End -->
        
@endsection