


<div class="row">
  <div class="col-3"></div>
  <div class="col-6">
     <div class="card">
       <div class="card-body">
        <!-- <img src="public/background.jpg" alt="" id="image"> -->
         <form action="cal.php" method="post">
           <div class="form-group">
              <label for="">First Number:</label>
             <input type="text" name="number1" class="form-control">
           </div>
           <div class="form-group">
              <label for="">Select Operator:</label>
               <select name="" id="" class="form-control">
                 <option value="option">None</option>
                 <option value="option">Add</option>
                 <option value="option">Minus</option>
                 <option value="option">Multiply</option>
                 <option value="option">Divide</option>
               </select>
           </div>
           <div class="form-group">
              <label for="">Second Number:</label>
             <input type="text" name="number2" class="form-control">
           </div>
           <div class="form-group">
             <button type="submit" name="btn" class="btn btn-success">Calculate</button>
           </div>
           <footer>
              <label for="" name="input">The result is: </label>
           </footer>
         </form>
       </div>
     </div>
  </div>
  <div class="col-3"></div>
</div>



