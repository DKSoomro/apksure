<div class="row">
    <div class="col-md-12 grid-margin stretch-card formcss">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Info</h4>
          <form class="forms-sample" method="post" action="<?= base_url(); ?>/admin/editinfo " >
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name"  required class="form-control" placeholder="<?=empty(session('username'))?'':session('username');?>"> 
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" id="email" name="email"  required class="form-control" placeholder="<?=empty(session('email'))?'':session('email');?>"> 
            </div>
            <div class="form-phone">
              <label for="getinput">Phone</label>
              <input type="number" id="phone" name="phone"  required class="form-control" placeholder="Phone"> 
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" id="address" name="address"  required class="form-control" placeholder="Address"> 
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success mr-2">Update Info</button>  
              </div> 
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-12 grid-margin stretch-card formcss gridinput3">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Password</h4>
          <form class="forms-sample" method="post" action="<?= base_url(); ?>/admin/editpass " >
            <div class="form-group">
              <label for="curpass">Current Password</label>
              <input type="text" id="curpass" name="Password"  required class="form-control" placeholder="Current Password"> 
            </div>
            <div class="form-group">
              <label for="newpass">New Password</label>
              <input type="text" id="newpass" name="Password"  required class="form-control" placeholder="Current Password"> 
            </div>
            <div class="form-group">
              <label for="cnpass">Confirm Password</label>
              <input type="text" id="cnpass" name="Password"  required class="form-control" placeholder="Current Password"> 
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success mr-2">Update Password</button>  
             </div> 
          </form>
        </div>
      </div>
    </div>
</div>
