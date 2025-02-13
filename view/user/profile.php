<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <style>
    .mmd{
        display: flex; 
        flex-direction: row; 
        justify-content: space-around; 
        align-items: center; 
        background-color: yellow; 
        margin-top: 20px;
        background: rgb(238,174,202);
    background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    }
    .mmd > div{
        width: 200px; 
        padding: 20px 20px;
        margin: 10px 0; 
        height: 20px; 
        text-align: center;
        color: white;
        border-radius: 99999px;
        letter-spacing: 5px;
        background: rgb(63,94,251);
        background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
</style>
</head>
<body>
    <?php
        foreach($data as $value){
            ?>
            <div class="mmd">
                <div><?= $value['id'] ?></div>
                <div><?= $value['name'] ?></div>
                <div><?= $value['family'] ?></div>
                <div><?= $value['age'] ?></div>
            </div>
            <?php
        }
    ?>
</body>
</html>