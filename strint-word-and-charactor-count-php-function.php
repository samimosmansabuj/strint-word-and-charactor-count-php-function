<?php  
    echo "<pre/>";
    print_r($_POST);

    // echo str_word_count($_POST['given_text']);
    // echo strlen($_POST['given_text']);

    if (isset($_POST['btn'])){
    function word_character_count($data){
        $given_text=$data['given_text'];
        $rdata=array();

        $rdata['number_of_word']= str_word_count ($given_text);
        $rdata['number_of_character']= strlen ($given_text);
        return $rdata;
    }
        $adata=word_character_count($_POST);
        // echo $adata['number_of_word']."<br/>";
        // echo $adata['number_of_character'];
    }

?>

<form action="#" method="post">
    <table>
        <tr>
            <td>Enter your string</td>
            <td><textarea name="given_text" cols="21" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Total Number of Word</td>
            <td><input type="number" value="<?php echo $adata['number_of_word']; ?>"></td>
        </tr>
        <tr>
            <td>Total Number of Character</td>
            <td><input type="number" value="<?php echo $adata['number_of_character']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>