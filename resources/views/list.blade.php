@include('include.header')
<section>
    <div class="container">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
          <center>
           <input type="button" id="character" class="btn btn-primary" value="Character">
           <input type="button" id="film" class="btn btn-primary" value="Films">
          </center>
          <div>
          <br>
          <table class="table table-hover" id="list">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>height</th>
                <th>skin_color</th>
                <th>birth_year</th>
                <th>gender</th>
              </tr>
            </thead>
            <tbody >
            </tbody>
          </table>
          <table class="table table-hover" id="list1">
            <thead>
              <tr>
               <th>Id</th> 
               <th>Title</th>
               <th>Episode_id</th>
               <th>Director</th>
               <th>Producer</th>
               <th>Release_date</th>
              </tr>
            </thead>
            <tbody >
            </tbody>
          </table>
            </div>
          </div>
          <div class="col-sm-3"></div>
        </div>
    </div>
</section>

@include('include.footer')


