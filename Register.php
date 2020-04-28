<?php include_once ('Lib/Header.php');?>
  <p><strong>Welcome, Please Register </strong></p>
  <p> All fields are required</P>

   <form method = "POST" action = "processregister.php">
       <p>
         <label> First Name</label><br />
         <input types="text" name="first_name" placeholder="First Name" required />         
       </p>
       <p>
         <label> Last Name</label><br />
         <input types="text" name="last_name" placeholder="Last Name" required />         
       </p>

       <p>
         <label> Email</label><br />
         <input types="text" name="email" placeholder="Email" equired/>         
       </p>

       <p>
         <label> Password</label><br />
         <input types="password" name="password" placeholder="Password" required />         
       </p>
   

       <p>
         <label> Gender</label><br />
         <select name = "gender"> 
          <option> value="" seclect one</option>
            <option> Female</option>
            <option> Male </option>

         </select>         
       </p>
   
       <p>
         <label> Designation</label><br />
         <select name = "designation" required>
         <option> value= "" seclect one </option>
            <option> Lecturer[Lect.] </option>
            <option> Student </option>

         </select>         
       </p>

   
       <p>
         <label> Department</label><br />

         <input types="text" name="department" placeholder="Department" required />   
        
              
       </p>
       <p>
         <button type = "submit">Register</button>       
       </p>
   </form>
<?php include_once ('Lib/footer.php');?>