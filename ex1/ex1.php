<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <?php 

 /* Je construis mon tableau */
            $utilisateur = [
                'prenom'        =>'thomas',
                'nom'           => 'hubert',
                'Adresse'       =>'4 rue de la soierie',
                'Code postal'   =>'69008',
                'Ville'         =>'Lyon',
                'E-mail'        =>'huhulive.fr',
                'Téléphone'     =>'0688418713',
                'DDN'           =>"19/02/1991",
            ];
            
    ?>

   <!--  Je prépare son affichage sous forme de liste -->

        <table>
            <?php
                foreach($utilisateur as $util=>$u){?>
               
                    <tr>
                        <td><?php echo $util. ': ' .$u. '<br>'; ?></td>  
                    </tr>
                
                <?php } ?>
        </table>


</body>
</html>
