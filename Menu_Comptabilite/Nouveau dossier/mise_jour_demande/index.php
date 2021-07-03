<html>  
    <head>  
        <!--<title>Update Multiple Mysql Data using Checkbox with Ajax in PHP</title>-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
          
    </head>  
    <body>  
        <div class="container">  
            <br />
   <div class="table-responsive">  
    <h3 align="center"></h3><br />
    <form method="post" id="update_form">
                    <div align="left">
                        <input type="submit" ="multiple_update" id="multiple_update" class="btn btn-info" value="Multiple Update" />
                    </div>
                    <br />
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th width="5%"></th>
                                <th width="20%">ID</th>
                                <th width="30%">Type_Depense</th>
                                <th width="15%">Etat</th>
                                <!--<th width="20%">date_creation </th>-->
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </form>
   </div>  
  </div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    
    function fetch_data()
    {
        $.ajax({
            url:"../Gestion/Menu_chef_hierarchie/mise_jour_demande/select.php",
            method:"POST",
            dataType:"json",
            success:function(data)
            {
                var html = '';
                for(var count = 0; count < data.length; count++)
                {
                    html += '<tr>';
                    html += '<td><input type="checkbox" id="'+data[count].id+'" data-Type_Depense="'+data[count].Type_Depense+'" data-Etat="'+data[count].Etat+'"  class="check_box"  /></td>';
                    html += '<td>'+data[count].Type_Depense+'</td>';
                    html += '<td>'+data[count].Etat+'</td>';
                }
                $('tbody').html(html);
            }
        });
    }

    fetch_data();

    $(document).on('click', '.check_box', function(){
        var html = '';
        if(this.checked)
        {
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-Type_Depense="'+$(this).data('Type_Depense')+'" data-Etat="'+$(this).data('Etat')+'"  class="check_box" checked /></td>';
            html += '<td><input type="text" name="Type_Depense[]" class="form-control" value="'+$(this).data("Type_Depense")+'" /></td>';
            html += '<td><input type="text" name="Etat[]" class="form-control" value="'+$(this).data("Etat")+'" /></td>';
        }
        else
       {
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-Type_Depense="'+$(this).data('Type_Depense')+'" data-Etat="'+$(this).data('Etat')+'"  class="check_box" /></td>';
            html += '<td>'+$(this).data('Type_Depense')+'</td>';
            html += '<td>'+$(this).data('Etat')+'</td>';          
        }
        $(this).closest('tr').html(html);
       
    });

    $('#update_form').on('submit', function(event){
        event.preventDefault();
        if($('.check_box:checked').length > 0)
        {
            $.ajax({
                url:"../Gestion/Menu_chef_hierarchie/mise_jour_demande/multiple_update.php",
                method:"POST",
                data:$(this).serialize(),
                success:function()
                {
                    alert('Data Updated');
                    fetch_data();
                }
            })
        }
    });

});  
</script>
