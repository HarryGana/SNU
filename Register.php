<?php session_start();
  include_once ('Lib/header.php'); ?> 
  <p><strong>Welcome, Please Register </strong></p>
  <p> All fields are required</P>

   <form method = "POST" action = "processregister.php">
    <p>

      <?php
        if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
          echo "<span> styles= 'color:red'" . $_SESSION['message'] . "</span>";
        }
      ?>
      <?php
        if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
          echo "<span style= 'color:red'>" . $_SESSION['error'] . "</span>";
        }
      ?>

    </p>
       <p>
         <label> First Name</label><br />
         <input type="text" name="first_name" placeholder="First Name"  />         
       </p>
       <p>
         <label> Last Name</label><br />
         <input type="text" name="last_name" placeholder="Last Name"  />         
       </p>

       <p>
         <label> Email</label><br />
         <input type="text" name="email" placeholder="Email"  />         
       </p>

       <p>
         <label> Password</label><br />
         <input type="password" name="password" placeholder="Password" />         
       </p>
   

       <p>
         <label> Gender</label><br />
         <select name = "gender"> 
             <option value="">  seclect one</option>
             <option> Female</option>
             <option> Male </option>
        </select>         
       </p>
       
       <p>
         <label> Designation</label><br />
         <select name = "designation" >
             <option value= "">  seclect one </option>
             <option> Staff[Academic] </option>
             <option> Staff[Non-Academic] </option>
             <option> Student </option>
         </select>         
       </p>

   
       <p>
         <label> Department</label><br />
         <input types="text" name="department" placeholder="Department"  />       
       </p>
       <p>
         <button type = "submit">Register</button>       
       </p>
   </form>
<?php include_once ('Lib/footer.php');?>