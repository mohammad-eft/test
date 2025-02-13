


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
    .mmd > div , .chazm{
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
    .a{
        padding: 8px 12px; 
        border-radius: 999999px;
        background: rgb(34,193,195);
        background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
        margin: 10px;
    }
</style>
<div style="display: flex; flex-direction: row; justify-content: space-around; align-items: center; background-color: yellow; margin-top: 20px;">
    <div class="chazm">آیدی</div>
    <div class="chazm">نام</div>
    <div class="chazm">نام خانوادگی</div>
    <div class="chazm">سن</div>
    <div class="chazm">دکمه ها</div>
</div>
<?php
foreach($data as $value){
    ?>
    <div class="mmd">
        <div><?= $value['id'] ?></div>
        <div><?= $value['name'] ?></div>
        <div><?= $value['family'] ?></div>
        <div><?= $value['age'] ?></div>
        <div>
            <a href="http://localhost/router_MVC/view/user/deleteUser/<?= $value['id'] ?>" class="a">delete</a>
            <a href="http://localhost/router_MVC/view/user/editUserForm/<?= $value['id'] ?>" class="a">edit</a>
        </div>
    </div>
    <?php
}