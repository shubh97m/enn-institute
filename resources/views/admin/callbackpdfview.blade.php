            <h3 align="center">Call Backs List</h3>
            <table width="100%" style="border-collapse:collapse; border: 0px;">
                <tr>
                  <th style= "border: 1px solid;padding:12px" width="20%">Name</th>
                  <th style= "border: 1px solid;padding:12px" width="20%">Contact</th>
                  <th style= "border: 1px solid;padding:12px" width="20%">E-mail</th>
                  <th style= "border: 1px solid;padding:12px" width="20%">Course</th>
                  <th style= "border: 1px solid;padding:12px" width="20%">Message</th>
               
                </tr>
                @if(!empty($callbacks))
                  @foreach($callbacks as $callback)
                    <tr>
                        <td style= "border: 1px solid;padding:12px" width="20%">{{ucfirst($callback['name'])}}</td>
                        <td style= "border: 1px solid;padding:12px" width="20%">{{$callback['mobile']}}</td>
                        <td style= "border: 1px solid;padding:12px" width="20%">{{$callback['email']}}</td>
                        <td style= "border: 1px solid;padding:12px" width="20%">{{$callback['courses']}}</td>
                        <td style= "border: 1px solid;padding:12px" width="20%">{{$callback['message']}}</td>
                    </tr>
                  @endforeach
                  @else
                  <tr>No Data Found.</tr>
                @endif
             </table>