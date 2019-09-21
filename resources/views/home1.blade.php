@include('include.header')
<section>
    <div class="container">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-md-12" id="ppp">
                <div class="alert alert-success">
                  <center><p id="pp"></p></center>
                </div>
              </div>
            </div>
        
          <center>
           <input type="button" id="cha" class="btn btn-primary" value="Character">
           <input type="button" id="fil" class="btn btn-primary" value="Films"></center>
            <div  id="form1">
              <h4>People/Character Details</h4><br>
            <div class="form-group">
               <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
              <label for="email">Name:</label>
              <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
             <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
              <label for="email">Phone:</label>
              <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
            </div>
            <button type="submit" class="btn btn-primary" id="butsave">Save Data</button>
          </div>
          <div>
          <br>
          <table class="table table-hover" id="table1">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                </tr>
              </thead>
              <tbody id="form_details1">
              </tbody>
            </table>
            </div>
            <div  id="form2">
              <h4>Films Details</h4><br>
            <div class="form-group">
              <input type="hidden" name="_token" id="csrf1" value="{{Session::token()}}">
              <label for="email">Name:</label>
              <input type="text" class="form-control" id="f_name" placeholder="Enter name" name="name">
            </div>
             <div class="form-group">
              <label for="email">Detail:</label>
              <input type="text" class="form-control" id="f_details" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
              <label for="email">Release Date:</label>
              <input type="text" class="form-control" id="f_release_date" placeholder="Enter phone" name="phone">
            </div>
            <button type="submit" class="btn btn-primary" id="butsave1">Save Data</button>
            </div>
            <table class="table table-hover" id="table2">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Detail</th>
                  <th>Release Date</th>
                </tr>
              </thead>
              <tbody id="form_details2">
              </tbody>
            </table>
          </div>
          <div class="col-sm-3"></div>
        </div>
    </div>
</section>

@include('include.footer')


