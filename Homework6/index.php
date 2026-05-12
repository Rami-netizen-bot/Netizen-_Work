<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework6</title>
</head>
<style>
        body { font-family: sans-serif; margin: 40px; }
        h1 { color: #17366d; border-bottom: 2px solid #17366d; display: inline-block; }
        .container { display: flex; gap: 40px; padding: 20px; border: 1px solid #ddd; width: fit-content; }
        .input-form { border-right: 1px solid #eee; padding-right: 40px; }
        input[type="number"] { display: block; margin-bottom: 10px; padding: 5px; width: 200px; }
        .result-section { font-weight: bold; font-size: 18px; line-height: 2; }
        .result-val { text-decoration: underline; color: #17366d; margin-left: 10px; }
    </style>
<body>
    <div class="container">
        <div class="input-form">
           <h3>Calculate Average Score</h3>
           <form method="POST">
            Input Score: <input type="number" name="score[]">
            Input Score2: <input type="number" name="score2[]">
            Input Score3: <input type="number" name="score3[]">
            Input Score4: <input type="number" name="score4[]">
            Input Score5: <input type="number" name="score5[]">
            <button type="submit" name="calculate">Submit</button>
           </form>
        </div>
        <?php 
        if (isset($_POST['calculate'])) {
            $scores = [
                (float)$_POST['score'][0],
                (float)$_POST['score2'][0],
                (float)$_POST['score3'][0],
                (float)$_POST['score4'][0],
                (float)$_POST['score5'][0]
            ];

            $average = array_sum($scores) / count($scores);
            if ($average >= 90) {
                $grade = 'A';
            } elseif ($average >= 80) {
                $grade = 'B';
            } elseif ($average >= 70) {
                $grade = 'C';
            } elseif ($average >= 60) {
                $grade = 'D';
            } else {
                $grade = 'F';
            }
        
        ?>
        <div class="result-section">
            <br><br>
            <div class="">Your Average Score is: <span class="result-val"><?php echo $average; ?></span></div>
            <div class="">Your Grade is: <span class="result-val"><?php echo $grade; ?></span></div>
        </div>
    <?php } ?>
    </div>
</body>
</html>
