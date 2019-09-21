@include('include.header')
<section>
    <div class="container">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-md-12" id="ppp">
                <div class="alert alert-success">
                  <center><p id="dd"></p></center>
                </div>
              </div>
            </div>
            <h4 id="data"></h4>
          <center>
           <input type="button" id="cha" class="btn btn-primary" value="Character">
           <input type="button" id="fil" class="btn btn-primary" value="Films"></center>
            <div  id="form1">
              <h4 id="c">People/Character Details</h4><br>
           <div><br>
            <table class="table table-hover" id="people">
              <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
                  <tr>
                    <th>Name</th>
                    <th>height</th>
                    <th>skin_color</th>
                    <th>birth_year</th>
                    <th>gender</th>
                  </tr>
                <tbody id="people1">
                </tbody>
              </table>
              <table class="table table-hover" id="people_showdata">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>height</th>
                    <th>skin_color</th>
                    <th>birth_year</th>
                    <th>gender</th>
                  </tr>
                </thead>
                <tbody id="people_showdata1">
                </tbody>
              </table>
            </div>
            <button type="submit" class="btn btn-primary" id="butsave">Save Data</button>
          </div>
            <div  id="form2">
              <h4>Films Details</h4><br>
           <table class="table table-hover" id="films">
              <input type="hidden" name="_token" id="csrf1" value="{{Session::token()}}">
                  <tr>
                    <th>Title</th>
                    <th>Episode_id</th>
                    <th>Director</th>
                    <th>Producer</th>
                    <th>Release_date</th>
                  </tr>
                <tbody id="films1">
                </tbody>
              </table>
              <table class="table table-hover" id="films_showdata">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Episode_id</th>
                    <th>Director</th>
                    <th>Producer</th>
                    <th>Release_date</th>
                  </tr>
                </thead>
                <tbody id="films_showdata1">
                </tbody>
              </table>
            <button type="submit" class="btn btn-primary" id="butsave1">Save Data</button>
            </div>
          </div>
          <div class="col-sm-3"></div>
        </div>
    </div>
</section>

@include('include.footer')


