<?php
if($_GET){
    if(isset($_GET['month'])){
        insert();
    }elseif(isset($_GET['year'])){
        select();
    }
}

function select()
{
    echo "The select function is called.";
}

function insert()
{
    echo "The insert function is called.";
}
