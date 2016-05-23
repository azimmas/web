<script type="text/javascript">
  function validate() {
        b=true;
          if( document.myForm.firstname.value == "" ) {
              document.myForm.firstname.style.border="1px solid red";
              b=false;
          }
          if( document.myForm.lastname.value == "" ) {
              document.myForm.lastname.style.border="1px solid red";
            b=false;
          }
          if( document.myForm.login.value == "" ) {
              document.myForm.login.style.border="1px solid red";
            b=false;
          }
          if( document.myForm.email.value == "" ) {
              document.myForm.email.style.border="1px solid red";
            b=false;
          }
          if( document.myForm.password.value == "" ) {
              document.myForm.password.style.border="1px solid red";
            b=false;
          }
          return b;
        }
</script>
<article>
<div class="registration">
  <form name="myForm" onsubmit="return(validate())" action="regBackEnd.php" method="POST">
  <table style="background-color:#B0E0E6;">
    <tr>
      <td>
        First Name:
      </td>
      <td>
        <input onclick='document.myForm.firstname.style.border="0px"' type="text" name="firstname">
      </td>
    </tr>
    <tr>
      <td>
        Last Name:
      </td>
      <td>
        <input onclick='document.myForm.lastname.style.border="0px"' type="text" name="lastname">
      </td>
    </tr>
    <tr>
      <td>
        Email:
      </td>
      <td>
       <input onclick='document.myForm.email.style.border="0px"' type="text" name="email">
      </td>
    </tr>
     <tr>
      <td>
       Login:
      </td>
      <td>
       <input onclick='document.myForm.login.style.border="0px"' type="text" name="login">
      </td>
    </tr>
    <tr>
      <td>
       Password:
      </td>
      <td>
       <input onclick='document.myForm.password.style.border="0px"' type="password" name="password">
      </td>
    </tr>
    <td>
        <input type="submit" value="Sign In">
      </td>
  </table>
</form>
</div>
</article>
