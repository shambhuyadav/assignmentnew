<script type="text/javascript">
 $(document).ready(function(){
  $("#cha").click(function(){
    $("#form1").show();
    $("#form2").hide();
    $("#table1").hide();   
    $("#table2").hide();
    $("#people_showdata").hide();
    $("#people").show();
    $("#butsave").show();
    $("#ppp").hide();

  });

  $("#fil").click(function(){
    $("#form2").show();
    $("#form1").hide();
    $("#table2").hide();
    $("#table1").hide();    
    $("#films_showdata").hide();
    $("#films").show();
    $("#butsave1").show();
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

   $("#butsave").click(function(){    
    $("#people").hide();
    $("#butsave").hide();
    $("#c").hide();
    $("#people_showdata").show();
  });
    $("#butsave1").click(function(){
    $("#films").hide();
    $("#butsave1").hide();
    $("#c").hide();
    $("#films_showdata").show();
  });
});
</script>
<script>
$(document).ready(function() {
    $('#butsave').on('click', function() {


              var inputRequest = {
              _token: $("#csrf").val(),
              data: responseCharters                 
              };

              // console.log(inputRequest);
              //   $("#butsave").attr("disabled", "disabled");
              $.ajax({
              url: "/store",
              type: "POST",
              dataType:'json',
              data: inputRequest,
              cache: false,
              success: function(data){

              if(data.statusCode == 200)
              {
                // fetchRecords();
             
                  // var dataResult = JSON.parse(data);
                  // console.log(dataResult);
                //   var chr = {
                // 'name':data.results[i].name,
                // 'height':data.results[i].height,
                // 'skin_color':data.results[i].skin_color,
                // 'birth_year' :data.results[i].birth_year, 
                // 'gender' :data.results[i].gender
                // }
                $("#ppp").show();
                $("#dd").html(data.info);
                for (var i = 0; i <=10; i++) {
                  $("#people_showdata1").append("<tr><td>"+inputRequest.data[i].name+"</td><td>"+inputRequest.data[i].height+"</td><td>"+inputRequest.data[i].skin_color+"</td><td>"+inputRequest.data[i].birth_year+"</td><td>"+inputRequest.data[i].gender+"</td></tr>");
                }
              
                // var ss = $('tbody tr').length
                
                  
              }
              },
              error: function(e) {
                console.log(e)
                //alert("THERE WAS AN ERROR. TRY AGAIN PLEASE!");
              },
              complete: function(e) {
                console.log(e)
                //alert("THERE WAS AN complete. TRY AGAIN PLEASE!");
              },
              });

      // // var rowCount = $('#people tr').length;
      // for(var rowCount=1;rowCount<=10;rowCount++){
      // var name = $("#name"+rowCount+"").html();
      // var height = $("#height"+rowCount+"").html();
      // var skin_color = $("#skin_color"+rowCount+"").html();
      // var birth_year = $("#birth_year"+rowCount+"").html();
      // var gender = $("#gender"+rowCount+"").html();
  
      // }
  });

});
</script>
<script>
$(document).ready(function() {
    $('#butsave1').on('click', function() {


              var inputRequest = {
              _token: $("#csrf1").val(),
              data: responseCharters                 
              };

              // console.log(inputRequest);
              //   $("#butsave").attr("disabled", "disabled");
              $.ajax({
              url: "/store1",
              type: "POST",
              dataType:'json',
              data: inputRequest,
              cache: false,
              success: function(data){

              if(data.statusCode == 200)
              {
                // fetchRecords();
             
                  // var dataResult = JSON.parse(data);
                  console.log(inputRequest);
                //   var chr = {
                // 'name':data.results[i].name,
                // 'height':data.results[i].height,
                // 'skin_color':data.results[i].skin_color,
                // 'birth_year' :data.results[i].birth_year, 
                // 'gender' :data.results[i].gender
                // }
                $("#ppp").show();
                $("#dd").html(data.info);
                for (var i = 0; i <=10; i++) {
                  $("#films_showdata1").append("<tr><td>"+inputRequest.data[i].title+"</td><td>"+inputRequest.data[i].episode_id+"</td><td>"+inputRequest.data[i].director+"</td><td>"+inputRequest.data[i].producer+"</td><td>"+inputRequest.data[i].release_date+"</td></tr>");
                }
              
                // var ss = $('tbody tr').length
                
                  
              }
              },
              error: function(e) {
                console.log(e)
                //alert("THERE WAS AN ERROR. TRY AGAIN PLEASE!");
              },
              complete: function(e) {
                console.log(e)
                //alert("THERE WAS AN complete. TRY AGAIN PLEASE!");
              },
              });

      // // var rowCount = $('#people tr').length;
      // for(var rowCount=1;rowCount<=10;rowCount++){
      // var name = $("#name"+rowCount+"").html();
      // var height = $("#height"+rowCount+"").html();
      // var skin_color = $("#skin_color"+rowCount+"").html();
      // var birth_year = $("#birth_year"+rowCount+"").html();
      // var gender = $("#gender"+rowCount+"").html();
  
      // }
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
                 var height = response['data'][i].height;
                 var skin_color = response['data'][i].skin_color;
                 var birth_year = response['data'][i].birth_year;
                 var gender = response['data'][i].gender;

                 var tr_str = "<tr>" +
                     "<td align='center'>" + (i+1) + "</td>" +
                     "<td align='center'>" + name + "</td>" +
                     "<td align='center'>" + height + "</td>" +
                     "<td align='center'>" + skin_color + "</td>" +
                     "<td align='center'>" + birth_year + "</td>" +
                     "<td align='center'>" + gender + "</td>" +
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
                 var title = response['data'][i].title;
                 var episode_id = response['data'][i].episode_id;
                 var director = response['data'][i].director;
                 var producer = response['data'][i].producer;
                 var release_date = response['data'][i].release_date;

                 var tr_str = "<tr>" +
                     "<td align='center'>" + (i+1) + "</td>" +
                     "<td align='center'>" + title + "</td>" +
                     "<td align='center'>" + episode_id + "</td>" +
                     "<td align='center'>" + director + "</td>" +
                     "<td align='center'>" + producer + "</td>" +
                     "<td align='center'>" + release_date + "</td>" +
                 "</tr>";

                 $("#list1 tbody").append(tr_str);
               }
             }else{
                var tr_str = "<tr>" +
                    "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";

                $("#list1 tbody").html(tr_str);
             }

           }
         });
     }
</script>
<script type="text/javascript">

  var responseCharters = [];

  $('#cha').on('click', function (e) {
        e.preventDefault(); // Want to stay on the page, not go through normal form  
        // Might be easier to make this a NON submit button - then we can use the rest below and not have to js submit()
        // Grab any extra info via data.
        var item_type = $(this).data('item-type');
        var name = $(this).val();
        responseCharters =[];
        $.ajax({
            url: "https://swapi.co/api/people/",
            type: "GET",
            data: {
                item_type: item_type,
                name: name
            },
            success: function (data) {
             
              var count = 0;
              for (var i in Object.keys(data.results)) {
                if (data.results[Object.keys(data.results)[i]].hasOwnProperty('name')) {
                  count++;

                var chr = {
                'name':data.results[i].name,
                'height':data.results[i].height,
                'skin_color':data.results[i].skin_color,
                'birth_year' :data.results[i].birth_year, 
                'gender' :data.results[i].gender
                }

                  // $('.hidedata').remove();
                 
                  $("#people1").append("<tr class='hidedata'><td id='name"+count+"'>"+chr.name+"</td><td id='height"+count+"'>"+chr.height+"</td><td id='skin_color"+count+"'>"+chr.skin_color+"</td><td id='birth_year"+count+"'>"+chr.birth_year+"</td><td id='gender"+count+"'>"+chr.gender+"</td></tr>");
                   responseCharters.push(chr);
                   // if ($('people1 tr').length == 0) {
                   //   alert("y");
                   // }
                   // else{
                   //   alert("Error occured !");
                   //  }

                }
              }
                
                // console.log("Count", count);
            },
            error: function () {
                swal("Error", "Unable to bring up the dialog.", "error");
            }
        });
    });
</script>
<script type="text/javascript">

  var responseCharters = [];

  $('#fil').on('click', function (e) {
        e.preventDefault(); // Want to stay on the page, not go through normal form  
        // Might be easier to make this a NON submit button - then we can use the rest below and not have to js submit()
        // Grab any extra info via data.
        var item_type = $(this).data('item-type');
        var name = $(this).val();
        responseCharters =[];
        $.ajax({
            url: "https://swapi.co/api/films/",
            type: "GET",
            data: {
                item_type: item_type,
                name: name
            },
            success: function (data) {
             
              var count = 0;
              for (var i in Object.keys(data.results)) {
                if (data.results[Object.keys(data.results)[i]].hasOwnProperty('title')) {
                  count++;

                var fil = {
                'title':data.results[i].title,
                'episode_id':data.results[i].episode_id,
                'director':data.results[i].director,
                'producer':data.results[i].producer,
                'release_date':data.results[i].release_date,

                }

                  // $('.hidedata').remove();
                 
                  $("#films1").append("<tr class='hidedata'><td id='name"+count+"'>"+fil.title+"</td><td id='height"+count+"'>"+fil.episode_id+"</td><td id='skin_color"+count+"'>"+fil.director+"</td><td id='birth_year"+count+"'>"+fil.producer+"</td><td id='gender"+count+"'>"+fil.release_date+"</td></tr>");
                   responseCharters.push(fil);
                   // if ($('people1 tr').length == 0) {
                   //   alert("y");
                   // }
                   // else{
                   //   alert("Error occured !");
                   //  }

                }
              }
                
                // console.log("Count", count);
            },
            error: function () {
                swal("Error", "Unable to bring up the dialog.", "error");
            }
        });
    });
</script>
</body>
</html>