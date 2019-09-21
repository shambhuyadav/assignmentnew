<script type="text/javascript">
 $(document).ready(function(){
  $("#cha").click(function(){
    $("#form1").show();
    $("#form2").hide();
    $("#table1").hide();
    $("#ppp").hide();
    $("#table2").hide();
  });

  $("#fil").click(function(){
    $("#form2").show();
    $("#form1").hide();
    $("#table2").hide();
    $("#table1").hide();
    $("#ppp").hide();
  });

  $("#character").click(function(){
    $("#list").show();
    $("#list1").hide();
  });

  $("#film").click(function(){
    $("#list1").show();
    $("#list").hide();
  });
});
</script>
<script>
$(document).ready(function() {
    $('#butsave').on('click', function() {
      var name = $('#name').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
   
     
      if(name!="" && email!="" && phone!="" ){
        //   $("#butsave").attr("disabled", "disabled");
          $.ajax({
              url: "/",
              type: "POST",
              data: {
                  _token: $("#csrf").val(),
                  type: 1,
                  name: name,
                  email: email,
                  phone: phone
                 
              },
              cache: false,
              success: function(dataResult){
                  console.log(dataResult);
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                    // window.location = "/";
                    $("#pp").html("Data Insert <b>successfully!</b>");
                    $("#table1").show();
                    $("#form1").hide();
                    $("#form_details1").html("<tr><td>"+name+"</td><td>"+email+"</td><td>"+phone+"</td></tr>");
                    $("#ppp").show();	

                  }
                  else if(dataResult.statusCode==201){
                     alert("Error occured !");
                  }
                  
              }

          });
      }
      else{
          alert('Please fill all the field !');
      }
  });

});
</script>
<script>
$(document).ready(function() {
    $('#butsave1').on('click', function() {
      var f_name = $('#f_name').val();
      var f_details = $('#f_details').val();
      var f_release_date = $('#f_release_date').val();
   
     
      if(f_name!="" && f_details!="" && f_release_date!="" ){
        //   $("#butsave").attr("disabled", "disabled");
          $.ajax({
              url: "/sam",
              type: "POST",
              data: {
                  _token: $("#csrf1").val(),
                  type: 1,
                  f_name: f_name,
                  f_details: f_details,
                  f_release_date: f_release_date
                 
              },
              cache: false,
              success: function(dataResult){
                  console.log(dataResult);
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                    // window.location = "/";
                    $("#pp").html("Data Insert <b>successfully!</b>");
                    $("#table2").show();
                    $("#form2").hide();
                    $("#form_details2").html("<tr><td>"+f_name+"</td><td>"+f_details+"</td><td>"+f_release_date+"</td></tr>");
                    $("#ppp").show();

                  }
                  else if(dataResult.statusCode==201){
                     alert("Error occured !");
                  }
                  
              }
          });
      }
      else{
          alert('Please fill all the field !');
      }
  });
});
</script>
<script type="text/javascript">
  $('#character').click(function(){
   fetchRecords();
       });
    function fetchRecords(){
         $.ajax({
           url: 'getdata/',
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
             $('#list tbody').empty(); // Empty <tbody>
             if(response['data'] != null){
               len = response['data'].length;
             }

             if(len > 0){
               for(var i=0; i<len; i++){
                 // var id = response['data'][i].id;
                 var name = response['data'][i].name;
                 var email = response['data'][i].email;
                 var phone = response['data'][i].phone;

                 var tr_str = "<tr>" +
                     "<td align='center'>" + (i+1) + "</td>" +
                     "<td align='center'>" + name + "</td>" +
                     "<td align='center'>" + email + "</td>" +
                     "<td align='center'>" + phone + "</td>" +
                 "</tr>";

                 $("#list tbody").append(tr_str);
               }
             }else{
                var tr_str = "<tr>" +
                    "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

                $("#list tbody").append(tr_str);
             }

           }
         });
     }
</script>
<script type="text/javascript">
  $('#film').click(function(){
   fetchRecords1();
       });
    function fetchRecords1(){
         $.ajax({
           url: 'getdata1/',
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
             $('#list tbody').empty(); // Empty <tbody>
             if(response['data'] != null){
               len = response['data'].length;
             }

             if(len > 0){
               for(var i=0; i<len; i++){
                 // var id = response['data'][i].id;
                 var f_name = response['data'][i].f_name;
                 var f_details = response['data'][i].f_details;
                 var f_release_date = response['data'][i].f_release_date;

                 var tr_str = "<tr>" +
                     "<td align='center'>" + (i+1) + "</td>" +
                     "<td align='center'>" + f_name + "</td>" +
                     "<td align='center'>" + f_details + "</td>" +
                     "<td align='center'>" + f_release_date + "</td>" +
                 "</tr>";

                 $("#list1 tbody").append(tr_str);
               }
             }else{
                var tr_str = "<tr>" +
                    "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

                $("#list1 tbody").append(tr_str);
             }

           }
         });
     }
</script>
</body>
</html>