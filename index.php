<html>
    <head>
        <title>Javascript Form</title>
    </head>
    
    <body style="background-color: black; color:#FFF;">
        <h1> Student Record</h1>
        <table id="student_table">
        </table>

        <script>
            <!-- Get TABLE ELEMENT-->
            const studentTable = document
                .getElementById("student_table");

            <!-- CREATE ROW -->
            const row1 =  studentTable.insertRow();

            <!-- CREATE 2 COLUMNS (CELL) -->
            const row1col1 = row1.insertCell();
            const row1col2 = row1.insertCell();

            row1col1.innerHTML = "Last Name";
            row1col2.innerHTML = "First Name";  

            const row2 =  studentTable.insertRow();
            const row2col1 = row2.insertCell();
            const row2col2 = row2.insertCell();

            const inputLastName = document.createElement ("input");
            inputLastName.type="text";
            inputLastName.placeholder="Insert Last Name";

            row2col1.append(inputLastName);

            const inputFirstName = document.createElement ("input");
            inputFirstName.type="text";
            inputFirstName.placeholder="Insert First Name";

            row2col2.append(inputFirstName);
        </script>
    </body>
</html>