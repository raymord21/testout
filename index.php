
        <!DOCTYPE html>
    <html>
        <body>

            <?php
            $servername = "localhost";
            $username = "reymord";
            $password = "dtycts16";
            $dbname = "test";

// Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT title, author, publisher, year, ISBN, price, quantity FROM final";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Information" . ' ' . $row["title"]  . ' '. $row["author"]  . ' '. $row["publisher"] . ' '. $row["year"] . ' '. $row["ISBN"] . $row["price"]. ' '. $row["quantity"]."<br>";
                } 
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
            ?>  

        </body>
    </html>

