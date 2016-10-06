<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Unique BookStore</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h1> Unique BookStore </h1>
        <section id ="main">
        
        <h1> Add Book </h1>
        <form action = "." method ="post">
            <input type ="hidden" name="action" value="add" />
            <table>
                <tr>           
                    <td>
                <lable> Title: </lable>
            </td>
            <td> 
                <select name ="isbn">

        <?php
        foreach($book as $isbn =>$book):
            $price = number_format($book['price'],2);
            $title = $book['title'];
            $book = $title . '($'.$price .')';
            ?>
                    <option value ="<?php echo $isbn; ?>">
                        <?php echo $book; ?>
                    </option>
                    
       <?php endforeach; ?>
                </select>
            </td>
            </tr>
            
            <tr>
                <td>
                    <lable>Quantity: </lable>
                </td>
                <td>
                    <select name ="bookquantity">
                        <?php
                        for($i =1; $i<=10; $i++) : ?>
                        <option value ="<?php echo "        $i";?>">
                            <?php echo $i; ?>
                        </option>
                        <?php endfor;?>
                    </select><br>
                    
                </td>
            </tr>
            <tr>
                <td>
                    <input style="color:blue " type="submit" value =" Add Book" />
                </td>
            </tr>
                    
            </table>
        </form> 
        <p><a> href= ".$action =show_cart>View Cart </a></p>
        </section>
    </body>
</html>       