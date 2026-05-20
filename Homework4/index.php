<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework4</title>
</head>
<style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 40px; }
        h1 { color: #17366d; border-bottom: 3px solid #17366d; display: inline-block; margin-bottom: 30px; }
        
       
        .form-container {
            background-color: #a52a2a; /* Reddish Brown */
            color: white;
            padding: 40px;
            width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        .form-container h2 { margin: 0; font-size: 28px; }
        .form-container h3 { margin: 10px 0 30px; font-weight: normal; }

        .registration-form { text-align: left; width: 90%; margin: 0 auto; }
        .form-group { display: flex; margin-bottom: 10px; align-items: center; }
        .form-group label { width: 150px; font-weight: bold; }
        .form-group input, .form-group select { flex: 1; padding: 5px; border: none; }

        .radio-group { flex: 1; display: flex; gap: 10px; }
        .radio-group input { flex: none; }


        .btn-row { margin-top: 20px; display: flex; gap: 10px; }
        .btn { padding: 5px 15px; cursor: pointer; border: 1px solid #ccc; background: #eee; }
        
        .motto { margin-top: 20px; font-size: 14px; font-style: italic; }
    </style>
<body>
    <!-- <h1>លំហាត់អនុវត្តន៍</h1> -->

    <div class="form-container">
        <h2>SOME UNIVERSITY</h2>
        <h3>Student Registration Form</h3>

        <form class="registration-form">
            <?php
          
            $fields = [
                "Name" => "text",
                "DOB" => "date",
                "Email" => "email",
                "Address" => "text",
                "Mobile Number" => "text"
            ];

            foreach ($fields as $label => $type) {
                echo "<div class='form-group'>";
                echo "<label>$label:</label>";
                echo "<input type='$type' name='".strtolower(str_replace(' ', '_', $label))."'>";
                echo "</div>";
                
                // Manually insert the special fields like "Sex" and "School" in the middle
                if ($label == "DOB") {
                    echo "<div class='form-group'><label>Sex:</label><div class='radio-group'>
                            <input type='radio' name='sex' value='male'> Male 
                            <input type='radio' name='sex' value='female'> Female
                          </div></div>";
                }
            }
            ?>

            <div class="form-group">
                <label>School:</label>
                <select name="school">
                    <option>Select..</option>
                    <option>Royal University of Phnom Penh</option>
                    <option>National University of Cambodia</option>
                    <option>University of Cambodia</option>
                </select>
            </div>

            <div class="btn-row">
                <input type="reset" class="btn" value="Reset">
                <input type="submit" class="btn" value="Submit">
            </div>
        </form>

        <div class="motto">some university motto n' stuff.</div>
    </div>
</body>
</html>