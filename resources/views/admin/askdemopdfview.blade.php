            <h3 align="center">Call Backs List</h3>
            <table width="100%" style="border-collapse:collapse; border: 0px;">
                <tr>
                  <th style= "border: 1px solid;padding:12px" width="20%">Name</th>
                  <th style= "border: 1px solid;padding:12px" width="20%">Contact</th>
                  <th style= "border: 1px solid;padding:12px" width="20%">E-mail</th>
                  <th style= "border: 1px solid;padding:12px" width="20%">Course</th>
                  <th style= "border: 1px solid;padding:12px" width="20%">DOB</th>
               
                </tr>
                @if(!empty($demopdfs))
                  @foreach($demopdfs as $demopdf)
                    <tr>
                        <td style= "border: 1px solid;padding:12px" width="20%">{{ucfirst($demopdf['name'])}}</td>
                        <td style= "border: 1px solid;padding:12px" width="20%">{{$demopdf['mobile']}}</td>
                        <td style= "border: 1px solid;padding:12px" width="20%">{{$demopdf['email']}}</td>
                        <td style= "border: 1px solid;padding:12px" width="20%">{{$demopdf['courses']}}</td>
                        <td style= "border: 1px solid;padding:12px" width="20%">{{$demopdf['dob']}}</td>
                    </tr>
                  @endforeach
                  @else
                  <tr>No Data Found.</tr>
                @endif
             </table>