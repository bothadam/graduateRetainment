<html>
    <head>
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/add.css">
    </head>
    </body>
        <div class="menu">
            <ul>
                 <li><a href="landing.php">Home</a></li>
                 <li><a class="active" href="add.php">Add students</a></li>
                 <li><a href="view.php">View Records</a></li>
            </ul>
        </div>

        <div class="add">
            <form action="createNewRecord.php" >
                <h1>Name</h1>
                <input type="text" name="name">
                <h1>Surname</h1>
                <input type="text" name="surname" text="Username here">

                
                <h1>Date Of Birth</h1>
                <fieldset>
                <select name="dobDay" style="width:59px; height: 45px; "value="1">
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                 <option value="6">6</option>
                 <option value="7">7</option>
                 <option value="8">8</option>
                 <option value="9">9</option>
                 <option value="10">10</option>
                 <option value="11">11</option>
                 <option value="12">12</option>
                 <option value="13">13</option>
                 <option value="14">14</option>
                 <option value="15">15</option>
                 <option value="16">16</option>
                 <option value="17">17</option>
                 <option value="18">18</option>
                 <option value="19">19</option>
                 <option value="20">20</option>
                 <option value="21">21</option>
                 <option value="22">22</option>
                 <option value="23">23</option>
                 <option value="24">24</option>
                 <option value="25">25</option>
                 <option value="26">26</option>
                 <option value="27">27</option>
                 <option value="28">28</option>
                 <option value="29">29</option>
                 <option value="30">30</option>
                 <option value="31">31</option>
                </select>
                <select name="dobMonth" value="Month" style="height: 45px; width: 80px">
                 <option value="Jan">Jan</option>
                 <option value="Feb">Feb</option>
                 <option value="Mar">Mar</option>
                 <option value="Apr">Apr</option>
                 <option value="May">May</option>
                 <option value="Jun">Jun</option>
                 <option value="Jul">Jul</option>
                 <option value="Aug">Aug</option>
                 <option value="Sept">Sept</option>
                 <option value="Oct">Oct</option>
                 <option value="Nov">Nov</option>
                 <option value="Dec">Dec</option>
                </select>
                <input type="text" style="background-color: white; border: solid black 1px; width: 78px; height:48px; padding-left: : 5;padding-right: : 5;text-align: center;" maxlength="4" minlength="4" name="dobYear" value="2001">
            </fieldset>
                <h1>Class of</h1>
                <input type="text" style="background-color: white; border: solid black 1px; width: 100px; height:45px; padding-left: : 5;padding-right: : 5;text-align: center; margin-bottom:50px" maxlength="4" minlength="4" name="classOf">
                <br>
                <input type="submit" text="submit">
                <input type="reset" text="clear">
            </form>
        </div>
    </body>
</html>