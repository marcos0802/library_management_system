<div class="right_col" role="main">

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Widthdraw Books</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Settings 1</a>
                    <a class="dropdown-item" href="#">Settings 2</a>
                  </div>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>

          </div>
          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">

                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th>#ID</th>
                        <th>Book ID </th>
                        <th>Title </th>
                        <th>Student ID</th>
                        <th>Names</th>
                        <th>Issued Date</th>
                        <th>Returned Date</th>
                        <th>Registred by</th>
                        <th>Actions</th>

                      </tr>
                    </thead>
                  <tbody>
                    <?php

                         $books = DB::getInstance()->query('SELECT * FROM library_widthdraw');
                         if (!$books ->count()) {
                         }else {

                            foreach($books->results() as $book){

                          }
                        }
                        ?>
              </tbody>
                  </table>
                </div>
              </div>
           </div>
        </div>
       </div>
      </div>
     </div>
    </div>
