<style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
}
-->
</style>
<page backcolor="#FEFEFE" backimg="./res/bas_page.png" backimgx="center" backimgy="bottom" backimgw="100%" backtop="0" backbottom="30mm" footer="date;heure;page" style="font-size: 12pt">
    <bookmark title="Lettre" level="0" ></bookmark>
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 14px">
        <tr>
            <td style="width: 25%;">
                <img style="width: 100%;" src="../img/FSCF-Yonne RVB.png" alt="Logo"><br>
            </td>
            <td style="width:50%;"></td>
            <td style="width: 14%;">
                FACTURE N°:<br>
                DATE :
            </td>
            <td style="width:14%; "> 
                N°F000TEST
                05/01/2017
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Client :</td>
            <td style="width:36%">M. Albert Dupont</td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Adresse :</td>
            <td style="width:36%">
                Résidence perdue<br>
                1, rue sans nom<br>
                00 000 - Pas de Ville<br>
            </td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
        </tr>
    </table>
    <br>
    <br>
    <table cellspacing="0" style="width: 100%; text-align: left;font-size: 10pt">
        <tr>
            <td style="width:50%;"></td>
            
        </tr>
    </table>
    <br>
    <i>
        Compte client : 00C4520100A<br>
        Référence du Dossier : 71326<br>
    </i>
    <br>
    
    
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 12%">Produit</th>
            <th style="width: 52%">Désignation</th>
            <th style="width: 13%">Prix Unitaire</th>
            <th style="width: 10%">Quantité</th>
            <th style="width: 13%">Prix Net</th>
        </tr>
    </table>
<?php
    $nb = rand(5, 11);
    $produits = array();
    $total = 0;
    for ($k=0; $k<$nb; $k++) {
        $num = rand(100000, 999999);
        $nom = "le produit n°".rand(1, 100);
        $qua = rand(1, 20);
        $prix = rand(100, 9999)/100.;
        $total+= $prix*$qua;
        $produits[] = array($num, $nom, $qua, $prix, rand(0, $qua));
?>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #F7F7F7; text-align: center; font-size: 10pt;">
        <tr>
            <td style="width: 12%; text-align: left"><?php echo $num; ?></td>
            <td style="width: 52%; text-align: left"><?php echo $nom; ?></td>
            <td style="width: 13%; text-align: right"><?php echo number_format($prix, 2, ',', ' '); ?> &euro;</td>
            <td style="width: 10%"><?php echo $qua; ?></td>
            <td style="width: 13%; text-align: right;"><?php echo number_format($prix*$qua, 2, ',', ' '); ?> &euro;</td>
        </tr>
    </table>
<?php
    }
?>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 87%; text-align: right;">Total HT : </th>
            <th style="width: 13%; text-align: right;"><?php echo number_format($total, 2, ',', ' '); ?> &euro;</th>
        </tr>
    </table>
    <br>
    Facture en euros. Tva non applicable <br>
    Conditions de paiement : paiement comptant <br>
    Facture réglée le 05/01/2017 <br>
    <nobreak>
        <br>
        Merci pour votre inscription <br>
        <br>
        <br>
        <br>
        <br>

        <table cellspacing="0" style="width: 100%; text-align: center;">
            <tr>
                <td style="width:100%; ">
                    Fédération Sportive et Culturelle de France - Comité Départemental de l'Yonne <br> 
                    16 bd de la marne, BP11 - 89000 Auxerre<br>
                    Tel : 33 (0) 3 86 72 11 27 - Email : Animation@fscf-yonne.fr<br>
                    Association Loi 1901 enregistrée sous le N° W 891 000 720 à la préfecture d'Auxerre<br>
                    N°SIRET : 784 714 255 00055<br> 
                    Catégorie juridique : 9220 - Association déclarée
                </td>
            </tr>
        </table>
    </nobreak>
</page>