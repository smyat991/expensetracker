$(document).ready(function(){

     $('#searchlisttable').hide();

	$("#filterdate").on('change',function(){
		//alert('ok');
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            let filter_date= $('#filterdate').val();
            //console.log(expense_date);

        
        


        $.post('expense_filter',{filter_date:filter_date},function(response){
            //console.log(response);
            var html="";
                var i=0;
            html+=`
                <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      
                      <th>
                        Amount
                      </th>
                      <th>
                        Date
                      </th>
                      <th>
                        Note
                      </th>
                      <th>
                        Expense_Category_ID
                      </th>
                      <th class="align-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
            `;
            $.each(response,function(i,v){
                
                console.log(v);
                


                html+=`
                    <tr>
                    <th>${i++}</th>
                    <th>${v.date}</th>
                    <th>${v.amount}</th>
                    <th>${v.note}</th>
                    
                    <th>
                      <a href="" class="btn btn-warning btn-round">Edit</a>
                       
                    </th>
                  </tr> `

            });
            html+=`</tbody>`;

            $('#searchlisttable').html(html);
            $('#listtable').hide();
            $('#searchlisttable').show();



        });

      

        
     }) 
})