<html>
    <body>
        <form action="../control/operation.php" method="POST" >
        <table>
        <tr>
         <td>Enter the 1st number :</td> 
         <td><input type="number" name ="first"></td>
        </tr>
        <tr>
         <td>Enter the 2nd number : </td>
         <td><input type="number" name ="second"></td>
        </tr>
        <tr>
         <td>Select the opertors :</td>
        </tr>
        <tr>
         <td><input type="radio" name ="sum" value="sum">+</td>
        </tr>
        <tr>
         <td><input type="radio" name ="mul" value="mul">*</td>
        </tr>
        <tr>
         <td><input type="radio" name ="sub" value="sub">-</td>
        </tr>
        <tr>
         <td><input type="radio" name ="div" value="div">/</td>
        </tr>
        
</table>
        <input type="reset" name ="reset" value="reset"></td>
        <input type="submit" name ="submit" value="submit"></td>
</form>
</body>
    </html>