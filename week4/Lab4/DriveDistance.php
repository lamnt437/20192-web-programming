<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <font size=4 color="blue"> Welcome to the Distance Calculator </font>
        <br>
        <div>
            <form action="CheckDistance.php" method="get">
                <select name="destination[]" size=5 multiple>
                    <option value="Boston"> Boston </option>
                    <option value="Dallas"> Dallas </option>
                    <option value="Las Vegas"> Las Vegas </option>
                    <option value="Miami"> Miami </option>
                    <option value="Nashville"> Nashville </option>
                    <option value="Pittsburgh"> Pittsburgh </option>
                    <option value="San Francisco"> San Francisco </option>
                    <option value="Toronto"> Toronto </option>
                    <option value="Washington, DC"> Washington, DC </option>
                </select>
                <br>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </form>
        </div>
    </body>
</html>